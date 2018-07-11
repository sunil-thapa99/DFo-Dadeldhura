<style>
	.download{width:650px;}
	.download ul{ margin:0;}
	.download ul li{ list-style:none;}
</style>	
<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php echo $pageName; ?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
		<?php
		$pagename = "index.php?id=". $pageId ."&";
		include("includes/pagination.php");
		echo Pagination($pageContents, "content");?>
		<br /><br>
		<?
		$sub=$groups->getByParentId($pageId);
		if($conn->numRows($sub)>0)
		{
			$submenu=$conn->fetchArray($sub);
			if($submenu['linkType']=='File'){
				echo '<p style="font-weight: bold;">#Attachments</p>';
				echo '<div class="download"><ul>';
				$down=$groups->getByParentId($pageId);
				while($downRow=$conn->fetchArray($down))
				{?>
					<li>
		            	<div style="float: left;width: 500px;"><?=$downRow['name'];?></div>
		            	<div style="float:right;">
		                	<a href="<?=CMS_FILES_DIR.$downRow['contents'];?>"><img src="images/pdf.png" width="30" /></a>
		             	</div>
		            	<div style="clear:both"></div>
					</li>
				<? }
				echo '</ul></div>';
			}
			else if($submenu['linkType']=='Link'){
				echo '<p style="font-weight: bold;">#Links</p>';
				echo '<div class="download"><ul>';
				$down=$groups->getByParentId($pageId);
				while($downRow=$conn->fetchArray($down))
				{?>
					<li>
		            	<div style="float: left;width: 500px;">
		            		<a href="<?=$downRow['contents'];?>" target="_blank"><?=$downRow['name'];?></a>
		            	</div>
					</li>
				<? }
				echo '</ul></div>';
			}
		}
		?>
	</div>
</article>