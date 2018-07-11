<style>
	.related{ margin-top:1px}
	.trips{}
</style>

<link rel="stylesheet" type="text/css" href="css/detail.css"/>

<?php //include("includes/breadcrumb.php"); ?>
<? $url=$_GET['url'];
$region=$groups->getByAlias($url); $regionGet=$conn->fetchArray($region);
?>
<div class="contentHdr">
<h2><?php echo $regionGet['name']; ?></h2></div>
<div class="content">
	
    <div class="">
    	<p style="margin:0px 0 10px 0;"><img src="<?=CMS_GROUPS_DIR.$regionGet['image'];?>" width="718" height="250" /></p>
		<?php
			echo $regionGet['contents'];
		?>
	</div>
    
    <div class="contentHdr" style="margin-top:30px"><h2><?php echo $regionGet['name']; ?></h2></div>
    
    <div id="bodydetail">
  
    	<div id="trip-box">
        	<div id="trip-box-in">
        		<? $rname=$regionGet['name']; ?>
				<? $ac=mysql_query("select distinct activity from groups where linkType='Trip' and region='$rname' order by weight");
				while($actGet=mysql_fetch_assoc($ac))
				{
					$a=$groups->getByActivityName($actGet['activity']); $aget=$conn->fetchArray($a);
					?>
                	<div class="trip-box">
							<h4>
								<a title="" href="activityregion/<?=$aget['urlname'];?>/<?=$regionGet['urlname'];?>.html">
									<img src="<?=CMS_GROUPS_DIR.$aget['image'];?>" width="220" height="120" style="border-radius:4px;" />
									<?=$aget['name'];?>
								</a>
							</h4>
							<p class="enq" style="margin-bottom:8px"><?=substr(strip_tags($aget['shortcontents']), 0, 210);?>...</p>
                            
                            <div style="margin-top:4px;">
                            	
                                <a class="enquiry" href="activityregion/<?=$aget['urlname'];?>/<?=$regionGet['urlname'];?>.html">View Details</a>
                            </div>
                            
						</div>
                <? }?>
                <div style="clear:both"></div>
                
        	</div>
        </div>
    
	</div>

</div>
