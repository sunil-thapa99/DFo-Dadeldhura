<style>
	.listTitle{}
	.listTitle a
	{
    	color: #FF0000;
    	font-family: tahoma;
    	font-size: 16px;
    	text-decoration: none;
	}
</style>

<div id="contentsPage" style="color:white; text-align:justify; font-family:Tahoma, Geneva, sans-serif; font-size:13px;">
<h1 style="text-align:left; margin-left:20px">Search Details</h1>

<?php
$keyword=$_POST['keyword'];
$keyword=explode(" ",$keyword);
$arrlen=count($kwords);
$tablenames=array('groups');
$arrtbllen=count($tablenames);
$nums=0;


if(!empty($keyword)){

foreach($keyword as $ex)
{
	foreach($tablenames as $tb)
	{
		$s = "select DISTINCT * from $tb where linkType='Product' and (`name` LIKE '$ex%' OR shortcontents LIKE '$ex%' OR contents like '$ex%')";
		$sql=mysql_query($s);
		$numRows= mysql_num_rows($sql);
		$nums+=$numRows;
		while($row=mysql_fetch_array($sql))
		{		
		?>
		<div style="padding:5px 0" class="listTitle"><br/>
    <?php
    if ($row['linkType'] == "Link")
		{
			echo "<a href='" . $row['contents'] . "' >";
		}
		else if ($row['linkType'] == "File")
		{
			echo "<a href='" . CMS_FILES_DIR . $row['contents'] . "' >";
		}
		else if ($row['linkType'] == "Activity")
		{
			
			echo "<a href='"."activity-".$row['urlname'].".html"."'>";
		}
		else if ($row['linkType'] == "Destination")
		{
			
			echo "<a href='"."destination-".$row['urlname'].".html"."'>";
		}  
		else if ($row['linkType'] == "Region")
		{
			
			echo "<a href='"."region-".$row['urlname'].".html"."'>";
		}  
		else
		{
			echo "<a href='".$row['urlname']."'>";
		}
		
		echo $row['name'] . "</a>";
    ?>
    </div>
    <?php if($row['linkType'] != "Link" || $row['linkType'] != "File"){ ?>
    <div id="news"> <? echo substr(strip_tags($row['shortcontents']), 0, 500); ?> </div>
    <?php } ?>
    
		<?php			
	 }		
	}
}
?>

<?php
if($nums<1)
{
	echo "<br/><br/><h3> No search result found!!!</h3>";
}
?>


<?php

}
else {
	echo "<h2> Please Enter the keyword for Searching !!</h2>";
}
?>
</div>