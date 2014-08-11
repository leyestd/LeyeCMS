<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipment', 'url'=>array('index')),
	array('label'=>'Create Equipment', 'url'=>array('create')),
	array('label'=>'View Equipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
);
?>

<h1>Update Equipment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>