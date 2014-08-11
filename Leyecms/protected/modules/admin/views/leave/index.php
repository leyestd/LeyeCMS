<?php
/* @var $this LeaveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leaves',
);

$this->menu=array(
	array('label'=>'Create Leave', 'url'=>array('create')),
	array('label'=>'Manage Leave', 'url'=>array('admin')),
);
?>

<h1>Leaves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
