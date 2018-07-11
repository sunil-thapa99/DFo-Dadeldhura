<?php 
if($action==1)
{
	//$action = $_GET['action'];
	//$action = str_replace(".","", $page);
	//echo $page;
	include("includes/".$page.".php");			
}				
else if($action==0)
{
	if (!empty($query)) {
		$pageRow = $groups->getByURLName($query);
		if ($pageRow) {
			$pageId = $pageRow['id']; //echo $pageId;
			$pageName = $pageRow['name'];
			$pageUrlName = $pageRow['urlname'];
			$pageType = $pageRow['type'];
			$pageParentId = $pageRow['parentId'];
			$pageShortContents = $pageRow['shortcontents'];
			$pageContents = $pageRow['contents'];
			$pageLinkType = $pageRow['linkType'];
			$pageWeight = $pageRow['weight'];
			$pageDate = $pageRow['onDate'];
			$pageImage = $pageRow['image'];
			$pageFeatured = $pageRow['featured'];
			$pageCode = $pageRow['code'];
			$pagePrice = $pageRow['price'];
			$pagePageTitle = $pageRow['pageTitle'];
			$pagePageKeyword = $pageRow['pageKeyword'];
			$pageDisplay = $pageRow['display'];
		
			if ($pageLinkType == "Link") {
				header("Location: " . $pageRow['contents']);
				exit();
			}
			elseif ($pageLinkType == "File") {
				header("Location: " . CMS_FILES_DIR . $pageRow['contents']);
				exit();
			}		
		}
	}
	include('includes/'.$page);
	//echo $page; die();
}
