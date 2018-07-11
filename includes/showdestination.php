<style>
	.related{ margin-top:1px}
	.trips{}
</style>

<link rel="stylesheet" type="text/css" href="css/detail.css"/>

<?php //include("includes/breadcrumb.php"); ?>
<? $url=$_GET['url'];
$dest=$groups->getByAlias($url); $destGet=$conn->fetchArray($dest);
?>
<div class="contentHdr">
<h2><?php echo $destGet['name']; ?></h2></div>
<div class="content">
	
    <div class="">
    	<p style="margin:0px 0 10px 0;"><img src="<?=CMS_GROUPS_DIR.$destGet['image'];?>" width="718" height="250" /></p>
		<?php
			echo $destGet['contents'];
		?>
	</div>
    
    <div class="contentHdr" style="margin-top:30px"><h2><?php echo $destGet['name']; ?></h2></div>
    
    <div id="bodydetail">
  
    	<div id="trip-box">
        	<div id="trip-box-in">
        		<? $dname=$destGet['name']; ?>
				<? $ac=mysql_query("select distinct activity from groups where linkType='Trip' and destination='$dname' order by weight");
				while($actGet=mysql_fetch_assoc($ac))
				{
					$a=$groups->getByActivityName($actGet['activity']); $aget=$conn->fetchArray($a);
					?>
                	<div class="trip-box">
							<h4>
								<a title="" href="activitydestination/<?=$aget['urlname'];?>/<?=$destGet['urlname'];?>.html">
									<img src="<?=CMS_GROUPS_DIR.$aget['image'];?>" width="220" height="120" style="border-radius:4px;" />
									<?=$aget['name'];?>
								</a>
							</h4>
							<p class="enq" style="margin-bottom:8px"><?=substr(strip_tags($aget['shortcontents']), 0, 210);?>...</p>
                            
                            <div style="margin-top:4px;">
                            	
                                <a class="enquiry" href="activitydestination/<?=$aget['urlname'];?>/<?=$destGet['urlname'];?>.html">View Details</a>
                            </div>
                            
						</div>
                <? }?>
                <div style="clear:both"></div>
                
        	</div>
        </div>
    
	</div>

</div>
