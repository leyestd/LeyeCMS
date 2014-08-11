<?php $i=0;?>	
<?php foreach($models as $p):?>

      <?php if($i++ % 4 == 0) {?>
           <div class="row-fluid">
		<div class="span12">
			<ul class="thumbnails">
      <?php }?>                   
				<li class="span3">                                    
					<div class="thumbnail">
						<img alt="300x200" src="<?php echo Yii::app()->request->baseUrl.$p->thumbnail;?>">
						<div class="caption">
							<h4>
								<?php echo $p->name;?>
							</h4>
                                                        
                                          <p class="text-right">
								<a href="#myModal<?php echo $p->id;?>" role="button" class="btn btn-small" data-toggle="modal">大图</a>
							</p>
						</div>
					</div>
                                    
                                        <!-- Modal -->
                                        <div id="myModal<?php echo $p->id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 id="myModalLabel">描述</h4>
                                                </div>
                                                <div class="modal-body">
                                                        <img src="<?php echo Yii::app()->request->baseUrl.$p->imagepath;?>">
                                                        <hr>
                                                        <h4><?php echo $p->content;?></h4>
                                                </div>
                                                <div class="modal-footer">
                                                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
                                                </div>
                                        </div>
				</li>
        <?php if($i % 4 == 0) {?>                     
			</ul>
		</div>
	</div>
       <?php }?> 

<?php endforeach?>

<?php
    if($i % 4 != 0 ) {
 ?>
			</ul>
		</div>
	</div>
<?php } ?>

        <div class="row-fluid">
		<div class="span9 offset3">
                        <?php $this->widget('CLinkPager', array(
                                'header'=>'',
                                'pages' => $pages,
                        ));
                        ?>
		</div>
	</div>
            
