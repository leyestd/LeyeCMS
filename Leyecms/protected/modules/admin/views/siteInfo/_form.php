<?php
/* @var $this SiteInfoController */
/* @var $model SiteInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sitename'); ?>
		<?php echo $form->textField($model,'sitename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sitename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminemail'); ?>
		<?php echo $form->textField($model,'adminemail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'adminemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'websiterecords'); ?>
		<?php echo $form->textField($model,'websiterecords',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'websiterecords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Copyright'); ?>
		<?php echo $form->textField($model,'Copyright',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Copyright'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keyword'); ?>
		<?php echo $form->textField($model,'Keyword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programversion'); ?>
		<?php echo $form->textField($model,'programversion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'programversion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->