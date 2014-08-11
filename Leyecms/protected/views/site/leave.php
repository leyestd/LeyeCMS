


<!-- leave -->
<?php foreach($models as $m):?>
<hr>
<div class="row-fluid">
		<div class="span3">
			<blockquote>
                                <h3><?php echo CHtml::encode($m->name);?></h3>
				<small><cite><?php echo $m->createtime;?></cite></small>
			</blockquote>
		</div>
		<div class="span9">	
                        
                            <h4><?php echo CHtml::encode($m->content);?></h4>	
                        
			<blockquote>
                            
                            <h4><?php echo CHtml::encode($m->comment);?></h4>
                            
                            <small><cite>管理员</cite></small>
			</blockquote>
		</div>
	</div>

<?php endforeach?>
 
<!-- 翻页-->
        <div class="row-fluid">
		<div class="span9 offset3">
                        <?php $this->widget('CLinkPager', array(
                                'header'=>'',
                                'pages' => $pages,
                        ));
                        ?>
		</div>
	</div>
        
	<hr>
        <!-- comment -->
	<div class="row-fluid">
		<div class="span2">
                    <?php
                        if($message=='t') {
                    ?>
                    	<div class="alert alert-info">
				 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <h4>
					恭喜!
                                   </h4>您的留言已成功，请等待管理员审核.
			</div>
                    
                    <?php
                    } else {
                    ?>
			<div class="alert">
				 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <h4>
					注意!
                                   </h4>只有经过管理员审核的留言才会显示.
			</div>
                    <?php } ?>
		</div>
		<div class="span10">
			<?php
                                    $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'leave-form',
                                    'enableAjaxValidation' => false,
                                     'htmlOptions'=>array('class'=>'form-horizontal'),
                        ));
                        ?>
				<div class="control-group">
                                        <?php echo $form->labelEx($leavemodel,'name',array('class'=>'control-label')); ?>
					<div class="controls">
						<?php echo $form->textField($leavemodel,'name'); ?>
                                                <?php echo $form->error($leavemodel,'name',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
				<div class="control-group">
					 <?php echo $form->labelEx($leavemodel,'email',array('class'=>'control-label')); ?>
					<div class="controls">
						<?php echo $form->textField($leavemodel,'email'); ?>
                                                <?php echo $form->error($leavemodel,'email',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($leavemodel,'tel',array('class'=>'control-label')); ?>
					<div class="controls">
                                                <?php echo $form->textField($leavemodel,'tel'); ?>
                                                <?php echo $form->error($leavemodel,'tel',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
				<div class="control-group">
                                        <?php echo $form->labelEx($leavemodel,'content',array('class'=>'control-label')); ?>
					<div class="controls">						
                                                <?php echo $form->textArea($leavemodel,'content',array('rows'=>6, 'class'=>'span5')); ?>
                                                <?php echo $form->error($leavemodel,'content',array('class'=>'help-inline','style'=>'color:red')); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						 <?php echo CHtml::submitButton('提交',array('class'=>'btn')); ?>
					</div>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>

