<?php if(isset($models)) {
     $i=0;
     $ij=0;
     foreach ($models as $p) {
?>         
      <?php if($i++ % 4 == 0) {?>
           <div class="row-fluid">
		<div class="span12">
			<ul class="thumbnails">
      <?php }?>                   
				<li class="span3">
					<div class="thumbnail">
						<img alt="300x200" src="<?php echo Yii::app()->request->baseUrl.$p['thumbnail'];?>">
						<div class="caption">
							<h4>
								<?php echo $p['name'];?>
							</h4>
                                                        
                                          <p>
								<a href="#myModal<?php echo $ij;?>" role="button" class="btn" data-toggle="modal">大图</a>
							</p>
						</div>
					</div>
                                    
                                        <!-- Modal -->
                                        <div id="myModal<?php echo $ij;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 id="myModalLabel">描述</h4>
                                                </div>
                                                <div class="modal-body">
                                                        <img src="<?php echo Yii::app()->request->baseUrl.$p['imagepath'];?>">
                                                        <hr>
                                                        <h4><?php echo $p['content'];?></h4>
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

     <?php 
           $ij++;
     } ?>

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
            



<?php
 
}else {
?>
       	<div class="row-fluid">
		<div class="span12">
                    <h4 class="text-center"><?php echo $info;?></h4>
		</div>
	</div>

<?php }?>
