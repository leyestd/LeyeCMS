<?php
/* @var $this InnovationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Innovations',
);

$this->menu=array(
	array('label'=>'Create Innovation', 'url'=>array('create')),
	array('label'=>'Manage Innovation', 'url'=>array('admin')),
        array('label'=>'Manage InnovationType', 'url'=>array('/admin/innovationType')),
);
?>

<h1>Innovations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
