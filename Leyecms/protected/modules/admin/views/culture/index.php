<?php
/* @var $this CultureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cultures',
);

$this->menu=array(
	array('label'=>'Create Culture', 'url'=>array('create')),
	array('label'=>'Manage Culture', 'url'=>array('admin')),
);
?>

<h1>Cultures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
