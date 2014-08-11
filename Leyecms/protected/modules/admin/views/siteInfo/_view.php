<?php
/* @var $this SiteInfoController */
/* @var $data SiteInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sitename')); ?>:</b>
	<?php echo CHtml::encode($data->sitename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminemail')); ?>:</b>
	<?php echo CHtml::encode($data->adminemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('websiterecords')); ?>:</b>
	<?php echo CHtml::encode($data->websiterecords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Copyright')); ?>:</b>
	<?php echo CHtml::encode($data->Copyright); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keyword')); ?>:</b>
	<?php echo CHtml::encode($data->Keyword); ?>
	<br />
 
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programversion')); ?>:</b>
	<?php echo CHtml::encode($data->programversion); ?>
	<br />

</div>