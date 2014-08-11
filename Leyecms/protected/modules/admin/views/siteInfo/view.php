<?php
/* @var $this SiteInfoController */
/* @var $model SiteInfo */

$this->breadcrumbs=array(
	'Site Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteInfo', 'url'=>array('index')),
	array('label'=>'Create SiteInfo', 'url'=>array('create')),
	array('label'=>'Update SiteInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteInfo', 'url'=>array('admin')),
);
?>

<h1>View SiteInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sitename',
		'website',
		'adminemail',
		'websiterecords',
		'Copyright',
		'Keyword',
		'description',
		'mobile',
		'fax',
		'programversion',
	),
)); ?>
