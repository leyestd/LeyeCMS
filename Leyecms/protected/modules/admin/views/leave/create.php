<?php
/* @var $this LeaveController */
/* @var $model Leave */

$this->breadcrumbs=array(
	'Leaves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Leave', 'url'=>array('index')),
	array('label'=>'Manage Leave', 'url'=>array('admin')),
);
?>

<h1>Create Leave</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>