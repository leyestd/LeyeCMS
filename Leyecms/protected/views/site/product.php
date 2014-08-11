	<div id='typelink' class="row-fluid">
		<div class="span12">
                    <strong>分类浏览:</strong>
                    <?php foreach ($type as $t) {?>
                        <?php echo CHtml::link($t->type, array("/site/product",'tid'=>$t->id));?>
                    <?php
                    }?>
		</div>
	</div>

<?php if($models==null){ ?>
    	<div class="row-fluid">
		<div class="span12">
                    <h4 class="text-center">暂无相关信息！</h4>
		</div>
	</div>
<?php
}
else {
    $this->renderpartial('_detail',
         array('models'=>$models,
         'pages' => $pages));
}
?>
