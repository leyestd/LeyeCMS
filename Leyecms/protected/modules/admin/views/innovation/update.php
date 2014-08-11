<?php
/* @var $this InnovationController */
/* @var $model Innovation */

$this->breadcrumbs=array(
	'Innovations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Innovation', 'url'=>array('index')),
	array('label'=>'Create Innovation', 'url'=>array('create')),
	array('label'=>'View Innovation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Innovation', 'url'=>array('admin')),
);
?>

<h1>Update Innovation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>