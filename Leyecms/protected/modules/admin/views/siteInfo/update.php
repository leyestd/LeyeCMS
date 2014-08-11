<?php
/* @var $this SiteInfoController */
/* @var $model SiteInfo */

$this->breadcrumbs=array(
	'Site Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteInfo', 'url'=>array('index')),
	array('label'=>'Create SiteInfo', 'url'=>array('create')),
	array('label'=>'View SiteInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteInfo', 'url'=>array('admin')),
);
?>

<h1>Update SiteInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>