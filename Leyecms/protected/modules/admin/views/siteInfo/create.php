<?php
/* @var $this SiteInfoController */
/* @var $model SiteInfo */

$this->breadcrumbs=array(
	'Site Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteInfo', 'url'=>array('index')),
	array('label'=>'Manage SiteInfo', 'url'=>array('admin')),
);
?>

<h1>Create SiteInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>