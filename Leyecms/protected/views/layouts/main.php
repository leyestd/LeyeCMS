<?php 
    $site=  SiteInfo::model()->find();
?>
    
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <title>昆山佳腾光电塑胶有限公司</title>
  <meta name="keywords" content="<?php echo $site->Keyword;?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?php echo $site->sitename;?>"/>
  <meta name="author" content="<?php echo $site->adminemail;?>"/>


	
  <link href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/favicon.gif">

</head>

<body>

<!-- logo -->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span8">
			<img style="padding-bottom:15px;" src="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/logo.gif">
		</div>
		<div class="span4">
                    <?php echo CHtml::beginForm(array('site/search'), 'get',array('class'=>'form-search form-inline')); ?>
				<input name='key' class="input-medium search-query" type="text">
                                <input type="submit" class="btn" value="Search"/>
		    </form>
		</div>
	</div>
 
	<!-- nav-->
	<div class="row-fluid">
		<div class="span12">
			<ul id="navtop" class="nav nav-pills">
				<li>
                                        <?php echo CHtml::link('首页', array("/site/index"));?>
				</li>
				<li>
					  <?php echo CHtml::link('产品', array("/site/product"));?>
				</li>
				<li>
                                         <?php echo CHtml::link('资源', array("/site/innovation"));?>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">更多..<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
                                                        <?php echo CHtml::link('联系我们', array("/site/contact"));?>
						</li>
                                                <li>
                                                        <?php echo CHtml::link('访客留言', array("/site/leave"));?>
                                                </li>
						<li class="divider">
						</li>
						<li>   <?php 
                                                        if(Yii::app()->user->isGuest) {
                                                       ?>
                                                            <?php echo CHtml::link('登录', array("/site/login"));?>
                                                        <?php
                                                        }else {
                                                        ?>
                                                            <?php echo CHtml::link('登出', array("/site/logout"));?>
                                                        <?php                                                 
                                                        }
                                                        ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

        <?php echo $content;?>
        
<!-- footer -->
        <hr>
	<div class="row-fluid">
	<div class="span2">
			<img src="<?php echo Yii::app()->request->baseUrl.'/upload/attachment/13867716355405.gif';?>">
	</div>
        <div id="footer" class="span10">
            <p class="text-center"><?php echo $site->Copyright;?><br/>
		地址:江苏省昆山市张浦镇江丰路168号 电话:+86-512-5745 1658<br/>  	
        	</p>
    	</div>
	</div>

</div>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>js/bootstrap.min.js"></script>
</body>
</html>
