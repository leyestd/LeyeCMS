<?php
/* @var $this AttachmentController */
/* @var $model Attachment */

$this->breadcrumbs=array(
	'Attachments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attachment', 'url'=>array('index')),
	array('label'=>'Manage Attachment', 'url'=>array('admin')),
);
?>

<h1>Create Attachment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>