<style>
	.related{ margin-top:1px}
	.trips{}
</style>

<link rel="stylesheet" type="text/css" href="css/detail.css"/>

<?php //include("includes/breadcrumb.php"); ?>
<?
//echo $_GET['act'];
$act=$groups->getByAlias($_GET['act']); $actGet=$conn->fetchArray($act);
$dest=$groups->getByAlias($_GET['dest']); $destGet=$conn->fetchArray($dest);?>

<div class="contentHdr">
<h2><?php echo $actGet['name']; ?></h2></div>
<div class="content">
	
    <div class="">
		<?php
			echo $actGet['contents'];
		?>
	</div>
    
    <div class="contentHdr" style="margin-top:30px"><h2><?php echo $actGet['name']; ?></h2></div>
    
    <div id="bodydetail">
  
    	<div id="trip-box">
        	<div id="trip-box-in">
        		<? $activity=$actGet['name']; $dest=$destGet['name']; ?>
				<? $tri="select * from groups where activity='$activity' and destination='$dest' order by weight"; $trip=mysql_query($tri);
				while($tripsGet=mysql_fetch_assoc($trip))
				{?>
                	<div class="trip-box">
							<h4>
								<a title="" href="">
									<img src="<?=CMS_GROUPS_DIR.$tripsGet['image'];?>" width="220" height="120" style="border-radius:4px;">
									<?=$tripsGet['name'];?> (<span><?=$tripsGet['days'];?></span>)
								</a>
							</h4>
                            <p><b>High Altitude:</b> <?=$tripsGet['altitude'];?></p>
                            <p><b>Region:</b> <?=$tripsGet['region'];?></p>
                            <p><b>Group Size:</b> <?=$tripsGet['size'];?></p>
                            <p><b>Package Cost:</b> <?=$tripsGet['price'];?></p>
							<p class="enq"><?=substr(strip_tags($tripsGet['shortcontents']), 0, 100);?>...</p>
                            
                            <div style="margin-top:4px;">
                            	<a class="view" href="<?=$tripsGet['urlname'];?>">View Details</a>
                                <a class="enquiry" href="booking/<?=$tripsGet['urlname'];?>.html">Enqiury</a>
                            </div>
                            
						</div>
                <? }?>
                <div style="clear:both"></div>
                
        	</div>
        </div>
    
	</div>

</div>
