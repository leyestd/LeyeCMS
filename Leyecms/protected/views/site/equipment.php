
<!-- render _leftnav -->
<?php $this->renderpartial('_leftnav');?>

		<div class="span9">
			<div class="tabbable" id="tabs-787530">
				<ul class="nav nav-tabs">
                                     <?php
                                     $first=true;   
                                     foreach($model as $m) {                                                                        
                                     ?>       
                                        <li <?php if($first) {echo 'class="active"';$first=false;}?>>
						<a href="#panel-<?php echo $m->id;?>" data-toggle="tab"><?php echo $m->name;?></a>
					</li>
                                      <?php
                                        }
                                      ?>
				</ul>
				<div class="tab-content">
                                     <?php
                                        $first=true; 
                                        foreach($model as $m) {
                                     ?> 
					<div class="tab-pane  <?php if($first) {echo 'active';$first=false;}?>" id="panel-<?php echo $m->id;?>">
                                            <?php echo $m->content;?>
					</div>
                                        <?php } ?>
				</div>
			</div>
		</div>
	</div>

