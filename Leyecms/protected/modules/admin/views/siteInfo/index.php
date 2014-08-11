<?php
/* @var $this SiteInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'站点信息',
);

$this->menu=array(
	array('label'=>'Create SiteInfo', 'url'=>array('create')),
	array('label'=>'Manage SiteInfo', 'url'=>array('admin')),
);
?>

<h1>Site Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
