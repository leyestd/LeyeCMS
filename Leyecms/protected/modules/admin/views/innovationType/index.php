<?php
/* @var $this InnovationTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Innovation Types',
);

$this->menu=array(
	array('label'=>'Create InnovationType', 'url'=>array('create')),
	array('label'=>'Manage InnovationType', 'url'=>array('admin')),
);
?>

<h1>Innovation Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
