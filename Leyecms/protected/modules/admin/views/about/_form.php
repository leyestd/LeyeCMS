<?php
/* @var $this AboutController */
/* @var $model About */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'about-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <div class="row">      

            <?php echo $form->labelEx($model, 'contractData'); ?><br />

            <?php
            $this->widget('application.extensions.tinymce.ETinyMce', array(
                'model' => $model,
                'attribute' => 'content',
                'editorTemplate' => 'full',
                'htmlOptions' => array('rows' => 6, 'cols' => 50, 'class' => 'tinymce'),
            ));
            ?>

            <?php echo $form->error($model, 'contractData'); ?>

    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

        <?php $this->endWidget(); ?>

</div><!-- form -->