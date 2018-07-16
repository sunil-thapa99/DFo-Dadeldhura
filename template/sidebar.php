<div id="sidebar-left" class="sidebar cf">
	<div id="widgets-wrap-sidebar-left">
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
                <? echo $newsGet['name'];

                  // echo $newsGet['id'];
                  // echo $newsGet['name'] . '<br>';
                ?>
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
    <div id="text-4" class="widget-sidebar frontier-widget widget_text">
    <h4 class="widget-title">
        <? if($lan=='en') echo 'Downloads'; else echo 'डाउनलोड्स';?>
      </h4>
      <div class="textwidget">
      <ul>
        <?php
        // $download=$groups->getByParentIdWithLimit(PUBLICATION,3);
        while($downloadGet=$conn->fetchArray($download)){?>
          <li>
            <a href="<?=CMS_FILES_DIR.$downloadGet['contents']?>" target="_blank">
              <? if($lan=='en') echo $downloadGet['nameen']; else echo $downloadGet['name'];?>
            </a>
          </li>
        <? }?>
        </ul>
        <?php $linkUrl=$groups->getByIdResult(PUBLICATION);?>
      <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$linkUrl['urlname'];?>">see more...</a>
      </div>
    </div>
	</div>
</div>
<div class="dynamic">