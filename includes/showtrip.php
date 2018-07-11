<style>
	.related{ margin-top:1px}
	.trips{}
</style>

<link rel="stylesheet" type="text/css" href="css/detail.css"/>

<div class="contentHdr">
<h2><?php echo $pageName; ?></h2>
</div>

<? $trip=$groups->getById($pageId); $tripGet=$conn->fetchArray($trip);?>

<div class="content">
	
    <div class="">
    	<p style="margin:7px 9px 0 0; float:left">
        	<a href="<?=CMS_GROUPS_DIR.$tripGet['image'];?>" target="_blank">
        		<img src="<?=CMS_GROUPS_DIR.$tripGet['image'];?>" width="716" height="390" />
        	</a>
      	</p>
		<p><?php echo $tripGet['contents'];?></p>
        <div style="clear:both"></div>
        
		<? if(!empty($tripGet['itineraryy']))
		{?>
        	<p style="font-weight:bold; margin:8px 0; font-size:14px">Trip Itinerary</p>
            <?=$tripGet['itinerary'];?>
		<? }?>
    	
        
    </div>
    
    <div class="contentHdr" style="margin-top:30px"><h2>Related Products</h2></div>
    
    <div id="bodydetail">
  
    	<div id="trip-box">
        	<div id="trip-box-in">
        		<? $act=$tripGet['activity']; ?>
				<? $t=mysql_query("select * from groups where linkType='Product' and activity='$act' order by weight");
				while($tGet=mysql_fetch_assoc($t))
				{?>
                
                	<div class="trip-box">
							<h4>
								<a title="" href="<?=$tGet['urlname'];?>">
									<img src="<?=CMS_GROUPS_DIR.$tGet['image'];?>" width="220" height="150" style="border-radius:4px;" />
									<?=$tGet['name'];?>
								</a>
							</h4>
							<p><b>Product Code:</b> <?=$tGet['code'];?></p>
                            <p><b>Product Price:</b> <?=$tGet['price'];?></p>
							<p class="enq"><?=substr(strip_tags($tGet['shortcontents']), 0, 100);?>...</p>
                            
                            <div style="margin-top:4px;">
                            	<a class="view" href="<?=$tGet['urlname'];?>">View Detail</a>
                                <a class="enquiry" href="order-<?=$tGet['urlname'];?>">Order Now</a>
                            </div>
                            
						</div>
                <? }?>
                <div style="clear:both"></div>
                
        	</div>
        </div>
    
	</div>

</div>
