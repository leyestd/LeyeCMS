
	<!-- Carousel -->
	<div id="one" class="row-fluid">
		<div class="span12">
						<img alt="" src="<?php echo Yii::app()->request->baseUrl.$advertisement[0]->imagepath;?>">
		</div>
	</div>
		

	


<!-- render _leftnav -->
<?php $this->renderpartial('_leftnav');?>
<?php
	$title=array(
			"资源与环境",
			"产品与工艺"
		);
?>

		<div class="span9">
			<div class="tabbable" id="tabs-787530">
				<ul class="nav nav-tabs">
                                     <?php  
                                     for($i=0;$i<2;$i++) {                                                                       
                                     ?>       
                                        <li <?php if($i==0) {echo 'class="active"';}?>>
						<a href="#panel-<?php echo $i;?>" data-toggle="tab"><?php echo $title[$i];?></a>
					</li>
                                      <?php
                                        }
                                      ?>
				</ul>
				<div class="tab-content">
                                     <?php
                                        for($i=0;$i<2;$i++) {
							$detail=($i==0?$innovation:$product);
								
                                     ?> 
					<div class="tab-pane <?php if($i==0) {echo 'active';}?>" id="panel-<?php echo $i;?>">							
							
							<ul class="thumbnails">
                            				<?php 
									$p=0;
                                			foreach($detail as $r) {
                            					?>                                
								<li class="span4">                                    
									<div class="thumbnail">
										<img alt="300x200" src="<?php echo Yii::app()->request->baseUrl.$r->thumbnail;?>">
										<div class="caption">
											<h4>
												<?php echo $r->name;?>
											</h4>
                                                        
                                         					 <p class="text-right">
												<a href="#myModal<?php echo $r->id.$i;?>" role="button" class="btn btn-small" data-toggle="modal">大图</a>
												<?php if($p==2) { ?>
													<?php echo CHtml::link('更多', array(($i==0?"/site/innovation":"/site/product")),array('class'=>"btn btn-small"));?>
												<?php } ?>
											</p>
										</div>
									</div>
                                    
                                        			<!-- Modal -->
                                        			<div id="myModal<?php echo $r->id.$i;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                		<div class="modal-header">
                                                       		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        		<h4 id="myModalLabel">描述</h4>
                                               			 </div>
                                               			 <div class="modal-body">
                                                        		<img src="<?php echo Yii::app()->request->baseUrl.$r->imagepath;?>">
                                                       		 <hr>
                                                       		 <h4><?php echo $r->content;?></h4>
                                                		</div>
                                                		<div class="modal-footer">
                                                       		 <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
                                                		</div>
                                        			</div>
								</li>
                             				<?php 
									$p++;
								} ?>
							</ul>
					</div>
                                   <?php } ?>
				</div>
			</div>
		</div>

	</div>
