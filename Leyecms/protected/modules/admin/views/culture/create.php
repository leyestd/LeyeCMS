<?php
/* @var $this CultureController */
/* @var $model Culture */

$this->breadcrumbs=array(
	'Cultures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Culture', 'url'=>array('index')),
	array('label'=>'Manage Culture', 'url'=>array('admin')),
);
?>

<h1>Create Culture</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>