<?php
/* @var $this AboutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Abouts',
);

$this->menu=array(
	array('label'=>'Create About', 'url'=>array('create')),
	array('label'=>'Manage About', 'url'=>array('admin')),
);
?>

<h1>Abouts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
