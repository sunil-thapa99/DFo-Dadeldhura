<script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.min.js"></script>
<style type="text/css">

div.hideClass {
display: none;

}
div.anyClass {
display: block;
}
</style> 


<div class="anyClass" id="ca">

	<ul>
    	
        <? $celebrity=$groups->getByActivityWithLimit("Rihnology (Rhinoplasty)", 100);
		while($celebrityGet=$conn->fetchArray($celebrity))
		{?>

            <li>
            
                <div class="upcomingCtnr_block">
                    <a href="<?=$celebrityGet['urlname'];?>"><img src="<?=CMS_GROUPS_DIR.$celebrityGet['image'];?>" width="173" height="130" alt="" /></a>
                    <p class="text5"><strong><?=$celebrityGet['name'];?></strong><br />
                    <?=substr(strip_tags($celebrityGet['shortcontents']), 0, 85);?></p>
                    <a href="<?=$celebrityGet['urlname'];?>" class="more">[ detail ]</a>
                </div>
            
            </li>     		
 		<? }?>
    
    </ul>

</div>




<script type="text/javascript">
function change(id)
{
document.getElementById(id).style.visibility='visible';
} 
function changeh(id)
{
document.getElementById(id).style.visibility='hidden';
} 

changeh('ca');
$(function() {
$(".anyClass").jCarouselLite({
   auto: 3000,
    speed: 1300,
 visible: 2,
scroll: 1,
circular: true


});
change('ca');
});

</script>    