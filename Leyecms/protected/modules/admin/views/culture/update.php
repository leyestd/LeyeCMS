<?php
/* @var $this CultureController */
/* @var $model Culture */

$this->breadcrumbs=array(
	'Cultures'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Culture', 'url'=>array('index')),
	array('label'=>'Create Culture', 'url'=>array('create')),
	array('label'=>'View Culture', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Culture', 'url'=>array('admin')),
);
?>

<h1>Update Culture <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>