<?php
/* @var $this InnovationController */
/* @var $model Innovation */

$this->breadcrumbs=array(
	'Innovations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Innovation', 'url'=>array('index')),
	array('label'=>'Manage Innovation', 'url'=>array('admin')),
);
?>

<h1>Create Innovation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>