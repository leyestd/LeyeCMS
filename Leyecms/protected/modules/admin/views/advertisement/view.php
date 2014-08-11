<?php
/* @var $this AdvertisementController */
/* @var $model Advertisement */

$this->breadcrumbs=array(
	'Advertisements'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Advertisement', 'url'=>array('index')),
	array('label'=>'Create Advertisement', 'url'=>array('create')),
	array('label'=>'Update Advertisement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Advertisement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advertisement', 'url'=>array('admin')),
);
?>

<h1>View Advertisement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'imagepath',
		'content',
	),
)); ?>
<div style="padding: 18px;">
    <p><img style="width: 300px;" src="<?php echo Yii::app()->request->baseUrl.$model->imagepath; ?>" alt="" /></p>
</div>