<?php //include("includes/breadcrumb.php"); ?>

<div class="contentHdr">
	<h2>Our Product Catalogues</h2>
</div>

<div class="content">
	<?php $sql=$groups->getById(275); $cat= $conn->fetchArray($sql); echo $cat['contents'];?>
	<div style="clear:both; margin-bottom:10px;"></div>
	<div>
		<? 
		$sql1=$groups->getByParentId(275);
		while($cat1=$conn->fetchArray($sql1))
		{?>
			<div class="" style=" margin:5px 0; font-size:14px;">
            	<div style="float:left; width:50%;margin:13px 9px"><?=$cat1['name'];?></div>
                <div style="float:left; width:150px;">
                	<div style=" float:left; margin:13px 9px"><a href="<?=CMS_FILES_DIR.$cat1['contents'];?>" target="_blank" title="<?=$cat1['name'];?>">Download...</a></div>
                    <div style=" float:left">
                    	<a href="<?=CMS_FILES_DIR.$cat1['contents'];?>" target="_blank">
                    		<img title="<?=$cat1['name'];?>" src="images/dl.png" width="40" height="38">
                        </a>
                 	</div>
                    <div style="clear:both"></div>
              	</div>
                <div style="clear:both"></div>
            </div>
		<? }?>
 	</div>
</div>