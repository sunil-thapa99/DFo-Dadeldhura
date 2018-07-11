<style>
	.related{ margin-top:1px}
	.trips{}
</style>

<link rel="stylesheet" type="text/css" href="css/detail.css"/>

<?php //include("includes/breadcrumb.php"); ?>
<? $url=$_GET['url'];
$act=$groups->getByAlias($url); $actGet=$conn->fetchArray($act);
?>
<div class="contentHdr">
<h2><?php echo $actGet['name']; ?></h2></div>
<div class="content">
	
    <div class="">
    	<p style="margin:0px 0 10px 0;"><img src="<?=CMS_GROUPS_DIR.$actGet['image'];?>" width="718" height="270" /></p>
		<?php
			echo $actGet['contents'];
		?>
	</div>
    
    <div class="contentHdr" style="margin-top:30px"><h2><?php echo $actGet['name']; ?></h2></div>
    
    <div id="bodydetail">
  
    	<div id="trip-box">
        	<div id="trip-box-in">
        		<? $activity=$actGet['name']; ?>
				<? $tri="select * from groups where activity='$activity' order by weight"; $trip=mysql_query($tri);
				while($tripsGet=mysql_fetch_assoc($trip))
				{?>
                	<div class="trip-box">
							<h4>
								<a title="" href="<?=$tripsGet['urlname'];?>">
									<img src="<?=CMS_GROUPS_DIR.$tripsGet['image'];?>" width="224" height="150" style="border-radius:4px;">
									<?=$tripsGet['name'];?>
								</a>
							</h4>
                            <p><b>Product Code:</b> <?=$tripsGet['code'];?></p>
                            <p><b>Product Price:</b> <?=$tripsGet['price'];?></p>
                            
							<p class="enq"><?=substr(strip_tags($tripsGet['shortcontents']), 0, 100);?>...</p>
                            
                            <div style="margin-top:4px;">
                            	<a class="view" href="<?=$tripsGet['urlname'];?>">View Detail</a>
                                <a class="enquiry" href="order-<?=$tripsGet['urlname'];?>">Order Now</a>
                            </div>
                            
						</div>
                <? }?>
                <div style="clear:both"></div>
                
        	</div>
        </div>
    
	</div>

</div>
