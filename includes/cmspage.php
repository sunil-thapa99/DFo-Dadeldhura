<?
$pageResult = $groups->getById($pageId);
$pageRow = $conn->fetchArray($pageResult);

$pageParentId = $pageRow['parentId'];
$pageDate = $pageRow['onDate'];
$pageContents = $pageRow['contents'];
$pageContentsEn = $pageRow['contentsen'];

if ($pageLinkType == "Normal Group") {
 include ("includes/showsubgroups.php");
} else if ($pageLinkType == "Contents Page") {
 include ("includes/showcontentpage.php");
} else if ($pageLinkType == "Gallery") {
 include ("includes/showgallery.php");
} else if ($pageLinkType == "Video Gallery") {
 include ("includes/showvideogallery.php");
} else if ($pageLinkType == "List") {
 include ("includes/showlistpage.php");
} elseif ($pageLinkType == "GallerySub") {
	include ("includes/showgallerysingle.php");
} elseif ($pageLinkType == "ListSub") {
	include ("includes/showlistsingle.php");
}
?>