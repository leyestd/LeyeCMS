<?php
/* @var $this InnovationController */
/* @var $model Innovation */

$this->breadcrumbs=array(
	'Innovations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Innovation', 'url'=>array('index')),
	array('label'=>'Create Innovation', 'url'=>array('create')),
	array('label'=>'Update Innovation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Innovation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Innovation', 'url'=>array('admin')),
);
?>

<h1>View Innovation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'imagepath',
		'content',
                array(
                    'name'=>'type',
                    'value'=>$model->innovationType->type,
                )
	),
)); ?>
<div style="padding: 18px;">
    <p><img style="width: 300px;" src="<?php echo Yii::app()->request->baseUrl.$model->imagepath; ?>" alt="" /></p>
</div>