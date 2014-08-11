<!-- login -->

	<div class="row-fluid"  style="margin-bottom:300px;">
		<div class="span3">
		</div>
		<div class="span9">
			<h3>
				Login.
			</h3>
                        <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'login-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ),
                                'htmlOptions'=>array('class'=>'form-horizontal'),
                                )); ?>
				<div class="control-group">
                                        <?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>
                                        <div class="controls">
						<?php echo $form->textField($model,'username'); ?>
                                                <?php echo $form->error($model,'username',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
                                        
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
					<div class="controls">
						<?php echo $form->passwordField($model,'password'); ?>
                                                <?php echo $form->error($model,'password',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
                    
                    <?php if(CCaptcha::checkRequirements()): ?>
                                <div class="control-group">
					<?php echo $form->labelEx($model,'verifyCode',array('class'=>'control-label')); ?>
                                        
					<div class="controls">
						<?php echo $form->textField($model,'verifyCode'); ?>
                                                <?php $this->widget('CCaptcha',array('buttonLabel' => '看不清','clickableImage'=>true,'showRefreshButton'=>false)); ?>
                                                <?php echo $form->error($model,'verifyCode',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
                    <?php endif; ?>
                    
				<div class="control-group">
					<div class="controls">
						 <label class="checkbox">
                                                     <?php echo $form->checkBox($model,'rememberMe'); ?>记住我
                                                 </label> 
                                                 <?php echo $form->error($model,'rememberMe'); ?>
                                                 <?php echo CHtml::submitButton('登录',array('class'=>'btn')); ?>
					</div>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
