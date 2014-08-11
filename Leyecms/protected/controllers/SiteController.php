<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'width' => 75,
                'height' => 30,
                'minLength' => 4, //最短为4位
                'maxLength' => 6,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        
        $advertisement=  Advertisement::model()->findAll();
        
        $productcount=  Product::model()->count();
        $product=  Product::model()->findAll(
                array(
                    'limit'=>3,
                    'offset'=>  rand(0,$productcount-3)
                )                
         );        
        
        $innovationcount=  Innovation::model()->count();
        $innovation= Innovation::model()->findAll(
                array(
                    'limit'=>3,
                    'offset'=>  rand(0,$innovationcount-3)
                )                
         );  
        
        
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index',array(
            'advertisement'=>$advertisement,
            'product'=>$product,
            'innovation'=>$innovation,
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionContact() {
        $model = Contact::model()->findAll();
        $this->render('contact', array('model' => $model));
    }

    public function actionLeave() {
        $criteria = new CDbCriteria();
        $criteria->order = 'createtime desc';
        $criteria->condition='validate=1';
        $count = Leave::model()->count($criteria);
        $pages = new CPagination($count);
        // elements per page
        $pages->pageSize = 2;
        $pages->applyLimit($criteria);

        $models = Leave::model()->findAll($criteria);
        
        $Leavemodel=new Leave;
        $message='f';
        
        if(isset($_POST['Leave']))
	{
            $Leavemodel->attributes=$_POST['Leave'];
            $Leavemodel->createtime=date('Y-m-d H:i:s', time());
            //$Leavemodel->content='<h2>'.$Leavemodel->content."</h2>";
            if($Leavemodel->save()) {
                   $message='t';
                   $Leavemodel->content='';
            }

	}
        
        $this->render('leave', array(
            'models' => $models,
            'pages' => $pages,
            'leavemodel'=>$Leavemodel,
            'message'=>$message,
        ));
        
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(array('/admin'));
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    public function actionProduct($tid=0){
        $criteria = new CDbCriteria();
        $criteria->order = 'id desc';
        if($tid!==0) {
            $criteria->condition='typeid=:tid';
            $criteria->params=array(':tid'=>$tid);
        }
        $count = Product::model()->count($criteria);
        $pages = new CPagination($count);
        // elements per page
        $pages->pageSize = 8;
        $pages->applyLimit($criteria);
        
        $type=  ProductType::model()->findAll();
        $models = Product::model()->findAll($criteria);
        
         $this->render('product', array(
            'models' => $models,
             'type'=> $type,
            'pages' => $pages,
        ));
    }
    
    public function actionInnovation($tid=0) {
        $criteria = new CDbCriteria();
        $criteria->order = 'id desc';
        if($tid!==0) {
            $criteria->condition='typeid=:tid';
            $criteria->params=array(':tid'=>$tid);
        }
        $count = Innovation::model()->count($criteria);
        $pages = new CPagination($count);
        // elements per page
        $pages->pageSize = 8;
        $pages->applyLimit($criteria);

        $models = Innovation::model()->findAll($criteria);
        $type= InnovationType::model()->findAll();
        
         $this->render('innovation', array(
            'models' => $models,
            'type'=> $type,
            'pages' => $pages,
        ));
    }
    
    public function actionAbout() {
         $about=About::model()->find();
         $this->render('about', array(
            'models' => $about,
        ));
    }
    
    public function actionEquipment() {
        $model = Equipment::model()->findAll();
        $this->render('equipment', array('model' => $model));
    }
    
    public function actionSearch($key='') {
        
        if($key!=='') {
           $key="%".$key."%";
           $connection=Yii::app()->db;
           $sql='(select * from tbl_product WHERE name LIKE :key) UNION ALL (select * from tbl_innovation WHERE name LIKE :key)';
           $command=$connection->createCommand($sql);
           $command->bindParam(":key",$key,PDO::PARAM_STR);
           $rows=$command->query();
           
           $criteria=new CDbCriteria();
           $pages=new CPagination($rows->rowCount);
           $pages->pageSize=8;
           $pages->applyLimit($criteria);
           
           $result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit");
           $result->bindParam(":key",$key,PDO::PARAM_STR);
           $result->bindValue(':offset', $pages->currentPage*$pages->pageSize);
           $result->bindValue(':limit', $pages->pageSize);
           $models=$result->queryAll();    

           //exit;
           if($models==null) {
                $this->render('search',array('info'=>'没有为您找到相关信息！',                
           ));
           }else {        
                $this->render('search',array(
                    'models'=>$models,
                    'pages'=>$pages,
                ));
           }
        }else {
            $this->render('search',array(
                'info'=>'您的查询条件为空值，请重输！',                
           ));
        }

    }
}
