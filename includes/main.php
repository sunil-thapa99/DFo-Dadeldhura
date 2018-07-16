<style type="text/css">
  .slider-prev{background-image: url('images/slider-prev.png')}
  .slider-next{background-image: url('images/slider-next.png')
</style>
<div id="content" class="cf">
  <div id="slider" class="slider-content">
    <div id="basic-slider" style="height: 327.958px; max-width: 480px; position: relative;">  
      <ul class="bjqs" style="height: 327.958px; width: 100%; display: block;">
        <?php
        $slide=$groups->getByParentId(SLIDER);
        while($slideGet=$conn->fetchArray($slide)){?>
          <li class="bjqs-slide" style="">
            <img class="slider-element" src="<?=CMS_GROUPS_DIR.$slideGet['image'];?>" alt="">
            <p class="slider-element"><?=$slideGet['shortcontents'];?></p>  
            <p class="bjqs-descript"><?=$slideGet['shortcontents'];?></p>
          </li>
        <?php }?>
      </ul>
      <ul class="bjqs-controls v-centered">
        <li class="bjqs-prev">
          <a href="#" data-direction="previous" style="top: 43.5294%;"><span class="slider-prev"></span></a>
        </li>
        <li class="bjqs-next">
          <a href="#" data-direction="forward" style="top: 43.5294%;"><span class="slider-next"></span></a>
        </li>
      </ul>
    </div>
  </div>  
  <article id="post-77" class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf">
      <?php $welcome=$conn->fetchArray($groups->getById(WELCOME));?>
      <h1 class="entry-title"><? if($lan=='en') echo $welcome['nameen']; else echo $welcome['name'];?></h1>
    </header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf" style="text-align: justify;">
      <? if($lan=='en') echo $welcome['shortcontentsen']; else echo $welcome['shortcontents'];?>
      <br>
      <a href="<?=$welcome['urlname'];?>"><em><strong>Read More</strong></em></a>
      </p>
    </div>
    <footer class="entry-footer cf">
    </footer>
  </article>
  <div id="comment-area">
    <div id="comments">
    </div>
  </div>
</div>

<div id="sidebar-right" class="sidebar cf">
  <div id="widgets-wrap-sidebar-right">

<div id="text-2" class="widget-sidebar frontier-widget widget_text">
      <?php
        $officer=$groups->getById(OFFICER); $officer=$conn->fetchArray($officer);
        ?>
        <h4 class="widget-title"><? if($lan=='en') echo $officer['nameen']; else echo $officer['name']; ?></h4>
        <div class="textwidget" style="text-align: center;">
          <a href="<?=$officer['urlname']; ?>">
            <img src="<?=CMS_GROUPS_DIR.$officer['image'];?>" style="width:180px;height:170px;" />
          </a><br>
            <? if($lan=='en') echo $officer['shortcontentsen']; else echo $officer['shortcontents'];?>
        </div>
        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$officer['urlname']; ?>">read more...</a>
    </div>
    <div id="ewic-widget-2" class="widget-sidebar frontier-widget widget_ewic_sc_widget">

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
    </div>
  </div>