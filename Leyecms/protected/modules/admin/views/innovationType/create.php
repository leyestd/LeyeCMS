<?php
/* @var $this InnovationTypeController */
/* @var $model InnovationType */

$this->breadcrumbs=array(
	'Innovation Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InnovationType', 'url'=>array('index')),
	array('label'=>'Manage InnovationType', 'url'=>array('admin')),
);
?>

<h1>Create InnovationType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>