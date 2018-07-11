<link rel="stylesheet" href="css/jqvideobox.css" type="text/css" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jqvideobox.js"></script>
<?php include("includes/breadcrumb.php"); ?>

<h2><?php echo $pageName; ?></h2>
<?php
$i = 0;
$pagename = $pageUrlName."/";
$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id DESC";

$newsql = $sql;

$limit = PAGING_LIMIT;

include("includes/pagination.php");
$return = Pagination($sql, "");


$arr = explode(" -- ", $return);

$start = $arr[0];
$pagelist = $arr[1];
$count = $arr[2];

$newsql .= " LIMIT $start, $limit";

$result = mysql_query($newsql);

while($row = $conn -> fetchArray($result))
{
	$i++;
	?>
	<div class="gall-main" style="float:left; width:134px; text-align:center; margin:0 5px 5px 0;<?php if($i%5==0) echo ' margin-right:0px;'; ?>">
		<!-- gall main starts -->
		<a href="<?php echo $row['contents']; ?>" class="vidbox"><img src="<?php echo getYouTubeImage($row['contents'], "small"); ?>" width="129" height="107" alt="<?php echo $row['title']; ?>"></a> 
		 <div class="CB"></div>
    <p><?php echo $row['pageName']; ?></p>
	</div>  
	<?php
	if($i%5 == 0)
		echo '<div class="CB"></div>';
}
?>
<br clear="all">
<?php
if($count > $limit)
	echo $pagelist;
?>
<script> 
jQuery(document).ready(function(){
	jQuery(".vidbox").jqvideobox();
});
</script>