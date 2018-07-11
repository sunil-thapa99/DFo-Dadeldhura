<?php
function Pagination($content, $type, $limit=10, $alias_name)
{
	global $pagename;
	
	if($type == "content")
	{
		if(!isset($_GET['page'])){
		 $curpage = 1;
		}
		else {
		 $curpage = $_GET['page'];
		}
		
		$arr = explode('<div style="page-break-after: always; "><span style="DISPLAY:none">&nbsp;</span></div>', $content);
	
 		$pages = count($arr);
	}
	else
	{		
		// global $limit;
		
		$rsord = mysql_query($content);
		
		if($rsord)
		{
		 $cntorder = mysql_num_rows($rsord);
		}
			
		if (!isset($limit))
			$limit = 10;	// no of records to be displayed in each page
		// echo $limit; die();
		
		$count = $cntorder;
		
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
  	
		if ((!isset($_GET['page'])) || ($page == "1"))
		{
		 $start = 0;
		 $curpage = 1;
		}
		else
		{ 
		 $start = ($_GET['page']-1) * $limit;
		 $curpage = $_GET['page'];
		}
	}

	 
	$pageList  = "<div style='text-align:center' id='paging'>";
  
	$pageList .= "<div style='padding-bottom:5px;'>Results $pages : You are at page $curpage of $pages</div>";
  if (($curpage-1) > 0){
   $pageList .= "<a href='".$alias_name.'/'."page/".($curpage-1)."' title='Previous Page' class='paging'>&laquo; Prev</a>&nbsp;";
  }
	
	for($i=1; $i<=$pages; $i++)
	{
		if($curpage == $i)
			$pageList .= ' <span class="selected">'. $i . ' </span>';
		else
			$pageList .= ' <a href="'.$alias_name.'/'.'page/'. $i .'" class="paging">'. $i . '</a> ';
	}
	
  if (($curpage+1) <= $pages){
   $pageList .= "<a href='".$alias_name.'/'."page/".($curpage+1)."' title='Next Page' class='paging'>&nbsp;Next &raquo;</a>";
  }
  $pageList .= "</div>\n";
	
	if($type == "content")
	{
		echo $arr[($curpage - 1)];
		if($pages > 1)
	  	echo $pageList;
	}
	else
	{
		return $start . " -- " . $pageList . " -- " . $count;
	}
}
//paging ends

?>