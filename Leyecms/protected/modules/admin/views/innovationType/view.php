<?php
/* @var $this InnovationTypeController */
/* @var $model InnovationType */

$this->breadcrumbs=array(
	'Innovation Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InnovationType', 'url'=>array('index')),
	array('label'=>'Create InnovationType', 'url'=>array('create')),
	array('label'=>'Update InnovationType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InnovationType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InnovationType', 'url'=>array('admin')),
);
?>

<h1>View InnovationType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
	),
)); ?>
