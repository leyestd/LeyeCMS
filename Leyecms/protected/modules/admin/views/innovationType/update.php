<?php
/* @var $this InnovationTypeController */
/* @var $model InnovationType */

$this->breadcrumbs=array(
	'Innovation Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InnovationType', 'url'=>array('index')),
	array('label'=>'Create InnovationType', 'url'=>array('create')),
	array('label'=>'View InnovationType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InnovationType', 'url'=>array('admin')),
);
?>

<h1>Update InnovationType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>