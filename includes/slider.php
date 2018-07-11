<!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="jquery/engine1//style.css" media="screen" />
    <script type="text/javascript" src="jquery/engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <?php
                $slide=$groups->getByParentId(SLIDER); $i=0;
                while($slideGet=$conn->fetchArray($slide))
                {?>
                    <li><img src="<?=CMS_GROUPS_DIR.$slideGet['image'];?>" alt="<?=$slideGet['name'];?>" id="wows1_<?=$i;?>"/></li>
                <? $i++; }?>
            </ul>
        </div>
        <?php /*?><div class="ws_bullets">
            <div>
                <?php
                $slide=$groups->getByParentId(SLIDER); $i=1;
                while($slideGet=$conn->fetchArray($slide))
                {?>
                    <a href="#" title="<?=$slideGet['name'];?>">
                        <img src="<?=CMS_GROUPS_DIR.$slideGet['image'];?>" style="width:100px; height:70px" alt="<?=$slideGet['name'];?>"/><?=$i;?>
                    </a>
                <? $i++; }?>
            </div>
        </div><?php */?>
        <span class="wsl"><a href="http://wowslider.com">Gallery CSS</a> by WOWSlider.com v4.5</span>
        <a href="#" class="ws_frame"></a>
        <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="jquery/engine1//wowslider.js"></script>
<script type="text/javascript" src="jquery/engine1//script.js"></script>
<!-- End WOWSlider.com BODY section -->