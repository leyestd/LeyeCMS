<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div><img src="<?php echo Yii::app()->request->baseUrl.'/assets/bootstrap/';?>img/logo.png"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'首页', 'url'=>array('/admin')),
				array('label'=>'设置', 'url'=>array('/admin/siteInfo')),			
                                array('label'=>'留言', 'url'=>array('/admin/leave')),
                                array('label'=>'用户', 'url'=>array('/admin/user')),
                                array('label'=>'菜单', 'url'=>array('/admin/menu')),
                                array('label'=>'产品', 'url'=>array('/admin/product')),
                                array('label'=>'创新', 'url'=>array('/admin/innovation')),
                                array('label'=>'设备', 'url'=>array('/admin/equipment')),
                                array('label'=>'关于', 'url'=>array('/admin/about')),
                                array('label'=>'文化', 'url'=>array('/admin/culture')),
                                array('label'=>'新闻', 'url'=>array('/admin/news')),
                                array('label'=>'链接', 'url'=>array('/admin/links')),
                                array('label'=>'广告', 'url'=>array('/admin/advertisement')),
                                array('label'=>'联系', 'url'=>array('/admin/contact')),
                                array('label'=>'附件', 'url'=>array('/admin/attachment')),				
                                array('label'=>'登出 ('.Yii::app()->user->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!Yii::app()->user->isGuest)
				
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
            <?php echo SiteInfo::model()->find()->Copyright;?> .<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
