<?php
/* @var $this CultureController */
/* @var $model Culture */

$this->breadcrumbs=array(
	'Cultures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Culture', 'url'=>array('index')),
	array('label'=>'Create Culture', 'url'=>array('create')),
	array('label'=>'Update Culture', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Culture', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Culture', 'url'=>array('admin')),
);
?>

<h1>View Culture #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
	),
)); ?>
