<style>
    .gall{float:left; margin-bottom:3px;margin-right:0px;line-height:75px;}
    .gall:nth-child(4n+4){ margin-right:0}
</style>

<?php //include("includes/breadcrumb.php"); ?>
<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title">Video Gallery</h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
        <div  class="cmsGalleryWrapper">
        <div>
            <?php 
            $video=$groups->getByParentId(VIDEO_GALLERY);
            while ($videoGet = $conn->fetchArray($video))
            {
            ++$i;
            ?>
            <div class="gall" style="margin-right: 12px; line-height: 30px">
                <iframe width="212" height="160" src="<?=$videoGet['contents']?>" frameborder="0" allowfullscreen=""></iframe>
                <p><?=$videoGet['name'];?></p>
            </div>
            <?php }?>
        </div>
        <?php
        if($count > $limit)
            echo $pagelist;
        ?>
        <div style="clear:both;"></div>
    </div>
</article>
</div>