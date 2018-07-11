<?php include("includes/breadcrumb.php"); ?>

<?php
	$listResult = $groups->getById($pageId);
	$listRow = $conn->fetchArray($listResult);
	
	$pageResult = $groups->getById($pageParentId);
	$pageRow = $conn->fetchArray($pageResult);
	
	?>
<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
		<div style="margin-bottom:5px;"> 
		  <!-- for navigation -->
		  <?
				$navNextResult = $groups->getNextResult($pageId);
				$navNextRow = $conn->fetchArray($navNextResult);

				$navPreviousResult = $groups->getPreviousResult($pageId);
				$navPreviousRow = $conn->fetchArray($navPreviousResult);
			?>
  			<div style="float: left;" > <a href="<?= $navPreviousRow['urlname']; ?>" class="paging">&laquo; Previous</a> </div>
  			<div style="float: right;"> <a href="<?php echo $navNextRow['urlname']; ?>" class="paging">Next &raquo;</a> </div>
  			<div style="clear:both"></div>
		</div>
		<div class="listRow">
  			<div class="listTitle">
  				<? if($lan=='en') echo $pageNameEn; else echo $pageName; ?>
  			</div>
  			<? if(file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image'])){?>
  				<div align="center" style="text-align:center; padding-top:10px;">
  					<img src="<?php echo imager($listRow['image'], 500, 500, ""); ?>" />
  					<div style="clear:both"></div>
  				</div>
  			<? }?>
  			<br />
  			<div>
    			<? if($lan=='en') echo $listRow['contentsen']; else echo $listRow['contents']; ?>
  			</div>
        <div style="margin-top: 10px;">
          <h3 style="text-decoration: underline;">#Attachments</h3>
          <ul>
            <?php $file=$listingFiles->getByListingId($pageId);
            while($fileGet=$conn->fetchArray($file)){?>
              <li>
                <a href="<?php echo CMS_LISTING_FILES_DIR.$fileGet['filename'];?>">
                  <?php echo $fileGet['filename'];?>
                </a>
              </li>
            <?php }?>
          </ul>
        </div>
		</div>
	</div>
</article>
</div>