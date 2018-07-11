<div id="sidebar-left" class="sidebar cf">
	<div id="widgets-wrap-sidebar-left">
		<div id="text-9" class="widget-sidebar frontier-widget widget_text">
	      <?php
	      $info_officer=$groups->getById(INFO_OFFICER); $info_officer=$conn->fetchArray($info_officer);
	      ?>
	      <h4 class="widget-title"><?php if($lan=='en') echo $info_officer['nameen']; else echo $info_officer['name'];?></h4>
	      <div class="textwidget" style="text-align: center;">
	        <a href="<?=$info_officer['urlname']; ?>">
	        <img src="<?=CMS_GROUPS_DIR.$info_officer['image'];?>" style="width:180px;height:170px;" />
	        </a><br>
	        <? if($lan=='en') echo $info_officer['shortcontentsen']; else echo $info_officer['shortcontents']; ?>
	        <br>
	        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$info_officer['urlname']; ?>">read more...</a>
	      </div>
	    </div>



<div id="notice_board_widget-2" class="widget-sidebar frontier-widget widget_notice_board_widget">
      <h4 class="widget-title">
        <? if($lan=='en') echo 'News'; else echo 'सूचना';?>
      </h4>
      <div class="msnb_notice scroll-up">
        <ul class="notice-list">
          <?php
          $news=$groups->getByParentId(NEWS);
          while($newsGet=$conn->fetchArray($news)){?>
            <li>
              <a href="<?=$newsGet['urlname'];?>">
                <? if($lan=='en') echo $newsGet['nameen']; else echo $newsGet['name']?>
              </a>
            </li>
          <?php }?>
        </ul>
      </div>
    </div> 

    <div id="text-6" class="widget-sidebar frontier-widget widget_text">
      <div class="textwidget">
        <a href="bills.php"><img src="images/Untitled.png"></a>
      </div>
    </div> 
	<div id="text-3" class="widget-sidebar frontier-widget widget_text">
      <h4 class="widget-title">
        <? if($lan=='en') echo 'Important Links'; else echo 'उपयोगी लिङ्क्स';?>
      </h4>
      <div class="textwidget">
        <ul>
        <?php
        $links=$groups->getByParentIdWithLimit(LINKS,3);
        while($linksGet=$conn->fetchArray($links)){?>
          <li>
            <a href="<?=$linksGet['contents'];?>" title="<? if($lan=='en') echo $linksGet['nameen']; 
            else echo $linksGet['name'];?>" target="_blank">
              <? if($lan=='en') echo $linksGet['nameen']; else echo $linksGet['name'];?>
            </a>
          </li>
        <?php }?>
        </ul>
        <?php $linkUrl=$groups->getByIdResult(LINKS);?>
        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$linkUrl['urlname'];?>">see more...</a>
      </div>
    </div>	
	</div>
</div>
<div class="dynamic">