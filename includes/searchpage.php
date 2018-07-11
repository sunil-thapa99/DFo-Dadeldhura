<div class="title">Search Details</div>
<div class="content">
<ul>
<?php
$keyword=$_POST['keyword'];
$kwords=explode(" ",$keyword);
$arrlen=count($kwords);
$tablenames=array('groups');
$arrtbllen=count($tablenames);
$nums=0;


if(!empty($keyword)){

foreach($kwords as $ex)
{
	foreach($tablenames as $tb)
	{
		$sql=mysql_query("select DISTINCT *from $tb where contents like '%$ex%'");
		$numRows= mysql_num_rows($sql);
		$nums+=$numRows;
		while($row=mysql_fetch_array($sql))
		{
		
?>

 <li style="float:left; list-style:none;"> <a href="index.php?linkId=<? echo $row['id'];?>" style="color:#4B3B00;"><? echo $row['name'];?></a>                  
    </li> <br />
             
            <div id="news"> <? echo substr(strip_tags($row['contents']),0,100); ?> </div>
            <br />
            
		<?php
			
	 }	
		
	}
}
?>
<h2>
<?php
if($nums<1)
{
	echo " No search result found!!";
}
?>
</h2>

<?php

}
else {
	echo "<h2> Please Enter the keyword for Searching !!</h2>";
	
	}
  ?>
  
  </div>
</ul>
</ul>