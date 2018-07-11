<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}

function saveImages($xid, $files, $captionList)
{
 global $groups;
 
	for ($i=0; $i<count($files['galimage']['name']); $i++)
 {
  if(isset($files['galimage']['tmp_name'][$i]) && $files['galimage']['size'][$i] <= (1024*1024))
  {
   $ft = $files['galimage']['type'][$i];
   if($ft == "image/jpeg" || $ft == "image/jpg" || $ft == "image/pjpeg")
   {
    $ext = "jpg";
   }
   else if ($ft == "image/gif")
    $ext = "gif";
   else if ($ft == "image/png" || $ft == "image/x-png")
    $ext = "png";

   if ($ext == "jpg" || $ext == "gif" || $ext == "png")
   {
       $photoId = $groups->saveGallerySub("", $xid, $captionList[$i]);
			 $groups -> updateUrlName($photoId);
			 $groups -> updateImage($photoId, $photoId . "." . $ext);
  
       copy($files['galimage']['tmp_name'][$i], "../" . CMS_GROUPS_DIR . $photoId . "." . $ext);
   }
  }
 }
}

function saveListingImage($photoId)
{
	global $_FILES;
	
	if (isset($_FILES['listImage']['name']))
   	{
   	  if($_FILES['listImage']['size'] <= (1024*1024))
	  {
	   $ft = $_FILES['listImage']['type'];
	   if($ft == "image/jpeg" || $ft == "image/jpg" || $ft == "image/pjpeg")
	   {
	    $ext = "jpg";
	   }
	   else if ($ft == "image/gif")
	    $ext = "gif";
	   else if ($ft == "image/png" || $ft == "image/x-png")
	    $ext = "png";
	
	   if ($ext == "jpg" || $ext == "gif" || $ext == "png")
	   {	  
	   	 copy($_FILES['listImage']['tmp_name'], "../" . CMS_GROUPS_DIR. $photoId . "." . $ext);
	   	 return $ext;
	   }
	  }
  }
  return "";
}

function saveListFiles($listingId, $files, $captionList)
{
 global $listings;
 global $listingFiles;
 
 for ($i=0; $i<count($files['listFile']['name']); $i++)
 {
 	 if ($files['listFile']['size'][$i] > 0)
	 {
    $listingFiles->save($listingId, $captionList[$i], $files['listFile']['name'][$i]);
    copy($files['listFile']['tmp_name'][$i], "../" . CMS_LISTING_FILES_DIR . $files['listFile']['name'][$i]);
	 }
 }
}

function saveGroupImage($groupId)
{
	global $_FILES;
	
	if (isset($_FILES['groupImage']['name']))
  {
    if($_FILES['groupImage']['size'] <= (1024*1024))
	  {
	   $ft = $_FILES['groupImage']['type'];
	   if($ft == "image/jpeg" || $ft == "image/jpg" || $ft == "image/pjpeg")
	   {
	    $ext = "jpg";
	   }
	   else if ($ft == "image/gif")
	    $ext = "gif";
	   else if ($ft == "image/png" || $ft == "image/x-png")
	    $ext = "png";

	   if ($ext == "jpg" || $ext == "gif" || $ext == "png")
	   {	  
	   	 copy($_FILES['groupImage']['tmp_name'], "../" . CMS_GROUPS_DIR. $groupId . "." . $ext);
	   	 return $ext;
	   }
		}
	}
  return "";
}

if (isset($_POST['save']))
{
 $contents = "";
 $shortcontents = "";
 
 if ($_POST['linkType'] == "Link")
  $contents = $_POST['directLink'];
 else if ($_POST['linkType'] == "File")
  $contents = $_FILES['uploadFile']['name'];
 if ($_POST['linkType'] == "Contents Page")
 {
 	$shortcontents = $_POST['shortcontents'];
  $contents = $_POST['contents'];
 }
 if ($_POST['linkType'] == "Normal Group")
 {
 	$shortcontents = $_POST['shortcontents'];
  $contents = $_POST['contents'];
 }
  
 if (isset($_POST['id']))
 {
  //edit contents
   
  if ($_POST['linkType'] == "File")
  {
    if (isset($_FILES['uploadFile']['name']))
    {
			$groupResult = $groups->getById($_POST['id']);
			$groupRow = $conn->fetchArray($groupResult);
			$oldFilename = $groupRow['contents'];

			if(!empty($_FILES['uploadFile']['name']))
			{				
				if (file_exists("../" . CMS_FILES_DIR . $oldFilename))
				 unlink("../" . CMS_FILES_DIR . $oldFilename);
			
				copy($_FILES['uploadFile']['tmp_name'], "../" . CMS_FILES_DIR . $_FILES['uploadFile']['name']);
			}
			else
			{
				$contents = $oldFilename;
			}
		}
  }
  else if ($_POST['linkType'] == "Gallery")
  {
  	saveImages($_POST['id'], $_FILES, $_POST['imageCaption']);
	 	
		for ($i=0; $i < count($_POST['oldCaptionIds']); $i++)
		{
		 $groups->saveGallerySub($_POST['oldCaptionIds'][$i], "", $_POST['oldCaptions'][$i]);
		}
  }
  else if ($_POST['linkType'] == "List")
  {
	 if($groups -> isUnique($_POST['listId'], $_POST['listUrlTitle']) && !empty($_POST['listUrlTitle']))
	 { 
   if (isset($_POST['listId']))
   {
   	$groups->saveListSub($_POST['listId'], $_POST['listTitle'], $_POST['listUrlTitle'], $_POST['id'], $_POST['listShortDescription'], $_POST['listDescription'], $_POST['listMain'], $_POST['listWeight'], $_POST['listPageTitle'], $_POST['listPageKeyword']);
		
		$ext = saveListingImage($_POST['listId']);
		if (!empty($ext))
   		$groups->updateImage($_POST['listId'], $_POST['listId'] . "." . $ext);
		
		saveListFiles($_POST['listId'], $_FILES, $_POST['listCaption']);
   }
   else
   {
   	if (!empty($_POST['listTitle']))
   	{
   		$newListId = $groups->saveListSub("", $_POST['listTitle'], $_POST['listUrlTitle'], $_POST['id'], $_POST['listShortDescription'], $_POST['listDescription'], $_POST['listMain'], $_POST['listWeight'], $_POST['listPageTitle'], $_POST['listPageKeyword']);
			$ext = saveListingImage($newListId);
			if (!empty($ext))
   			$groups->updateImage($newListId, $newListId . "." . $ext);
			
			saveListFiles($newListId, $_FILES, $_POST['listCaption']);
   	}
   }
	 }
	 else
	 {
		 $err = "Alias Name already exists. Please provide unique Alias Name";
	 }
  }
	else if ($_POST['linkType'] == "Video Gallery")
  {
		for ($i=0; $i<count($_POST['videoUrl']); $i++)
		{
			if(!empty($_POST['videoUrl'][$i]))
			{
				$vid = $groups -> saveVideoSub("", $_POST['id'], $_POST['videoUrl'][$i]);
				$groups -> updateUrlName($vid);
			}
		}
		
		for ($i=0; $i < count($_POST['oldVideoIds']); $i++)
		{
			if(!empty($_POST['oldUrls'][$i]))
			 	$groups -> saveVideoSub($_POST['oldVideoIds'][$i], "", $_POST['oldUrls'][$i]);
		}
  }	
	
  if($groups -> isUnique($_POST['id'], $_POST['urlname']) && !empty($_POST['urlname']))
	{
		$groups->save($_POST['id'], $_POST['name'], $_POST['urlname'], "",  $_POST['parentId'], "", $shortcontents, $contents, $_POST['weight'], $_POST['pageTitle'], $_POST['pageKeyword'], $_POST['featured'], $_POST['display']);
		
		$groups -> saveImage($_POST['id']);
		
		$showId = false;
		
		if($_POST['linkType'] == "List" || $_POST['linkType'] == "Gallery" || $_POST['linkType'] == "Video Gallery")
			$showId = true;
		
		$url = 	"cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'];
		if($showId)
			$url .= "&id=". $_POST['id'];
		if(isset($_GET['page']))
			$url .= "&page=".$_GET['page'];
	
		header ("Location: " . $url ."&msg=Successfully updated!");
		exit();
	 }
 }
////////////////
// ADD NEW //// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
else //add new code goes here...
{
	if(empty($_POST['name']))
		$msg = "Please enter Name";
	elseif(empty($_POST['urlname']))
		$msg = "Please enter Alias Name";
	elseif(!$groups -> isUnique(0, $_POST['urlname']))
		$msg = "Alias Name already exists";
	elseif($_POST['linkType'] == "select")
		$msg = "Please selet Type";
	
 	if(empty($msg))
	{
		$newId = $groups->save("", $_POST['name'], $_POST['urlname'], $_GET['groupType'], $_POST['parentId'], $_POST['linkType'], $shortcontents, $contents, $_POST['weight'], $_POST['pageTitle'], $_POST['pageKeyword'], $_POST['featured'], $_POST['display']);
		
		$groups->saveImage($newId);
			
		if ($_POST['linkType'] == "File")
		{
			if (isset($_FILES['uploadFile']['name']))
			{
			 copy($_FILES['uploadFile']['tmp_name'], "../" . CMS_FILES_DIR . $_FILES['uploadFile']['name']);
			}
		}		
		else if ($_POST['linkType'] == "List")
		{
			$msg = "";
			if(empty($_POST['listTitle']))
				$msg = "Please enter Title";
			elseif(empty($_POST['listUrlTitle']))
				$msg = "Please enter Alias Title";
			elseif(!$groups -> isUnique(0, $_POST['listUrlTitle']))
				$msg = "Alias Title already exists";

			if (empty($msg))
			{
				$newListId = $groups->saveListSub("", $_POST['listTitle'], $_POST['listUrlTitle'], $newId, $_POST['listShortDescription'], $_POST['listDescription'], $_POST['listMain'], $_POST['listWeight'], $_POST['listPageTitle'], $_POST['listPageKeyword']);
				$ext = saveListingImage($newListId);
				if (!empty($ext))
					$groups->updateImage($newListId, $newListId ."." .$ext);
				
				saveListFiles($newListId, $_FILES, $_POST['listCaption']);
			}
		}
		else if ($_POST['linkType'] == "Gallery")
		{
			saveImages($newId, $_FILES, $_POST['imageCaption']);
			
			for ($i=0; $i < count($_POST['oldCaptionIds']); $i++)
			{
			 $groups->saveGallerySub($_POST['oldCaptionIds'][$i], "", $_POST['oldCaptions'][$i]);
			}
		}
		else if ($_POST['linkType'] == "Video Gallery")
		{
			for ($i=0; $i<count($_POST['videoUrl']); $i++)
			{
				if(!empty($_POST['videoUrl'][$i]))
					$groups -> saveVideoSub("", $newId, $_POST['videoUrl'][$i]);
			}			
		}
	
		if(empty($msg))
		{
			$url = 	"cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'];
			if($showId)
				$url .= "&id=". $_POST['id'];
			if(isset($_GET['page']))
				$url .= "&page=".$_GET['page'];
		
			header ("Location: " . $url ."&msg=Successfully saved!");
			exit();
		}
	}
}
 
 
 if ($_POST['linkType'] == "List")
 {
 	if (isset($_POST['id']))
 		$id = $_POST['id'];
 	else
 		$id = $newId;
	
	$url = "cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'];
	if($id > 0)
		$url .= "&id=$id";

 	header ("Location: ". $url ."&msg=" . $msg);
	exit();
 }
 else if ($_POST['linkType'] == "Gallery")
 {
 	if (isset($_POST['id']))
 		$id = $_POST['id'];
 	else
 		$id = $newId;
 	
	if($id > 0)
 	header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&id=$id&msg=" . $msg);
	else
	header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 }
 elseif($_POST['linkType'] == "Vidoe Gallery")
 {
 		if (isset($_POST['id']))
			$id = $_POST['id'];
		else
			$id = $newId;
		
		if($id > 0)
		header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&id=$id&msg=" . $msg);
		else
		header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 }
 else
 {
 	header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 }
 exit();
}
else if (isset($_GET['id']) && isset($_GET['delete']))
{
 //this will delete the group and all its belongings (image, files, etc)
 $groups->delete($_GET['id']);

 $msg = "Successfully deleted!";
 header ("Location: cms.php?groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 exit();
}
else if (isset($_GET['imageId']) && isset($_GET['deleteImage']))
{
 $groups->delete($_GET['imageId']);
 $msg = "Image deleted!";
 header ("Location: cms.php?id=". $_GET['id'] ."&groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 exit();
}
else if (isset($_GET['deleteListId']))
{
 $groups->delete($_GET['deleteListId']);
 $msg = "Listing deleted!";
 header ("Location: cms.php?id=". $_GET['id'] ."&groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 exit();
}
else if (isset($_GET['fileId']) && isset($_GET['deleteFile']))
{
 $listingFiles->delete($_GET['fileId']);
 $msg = "File deleted!";
 
 $url = "cms.php?id=". $_GET['id'] ."&parentId=". $_GET['parentId'] ."&groupType=". $_GET['groupType']."&listId=" . $_GET['listId'];
	if(isset($_GET['page']))
		$url .= "&page=".$_GET['page'];
		
 header ("Location: ". $url . "&msg=" . $msg);
 exit();
}
elseif(isset($_GET['listId']) && isset($_GET['deleteImage']))
{
	$result = $groups -> getById($_GET['listId']);
	$row = $conn -> fetchArray($result);
	
	$groups -> updateImage($row['id'], "");
	@unlink("../". CMS_GROUPS_DIR . $row['filename']);
	
	$msg = "Image deleted!";
	
	$url = "cms.php?id=". $_GET['id'] ."&parentId=". $_GET['parentId'] ."&groupType=". $_GET['groupType'] ."&listId=". $_GET['listId'];
	if(isset($_GET['page']))
		$url .= "&page=".$_GET['page'];

 	header ("Location: ". $url ."&msg=" . $msg);
	exit();
}
elseif(isset($_GET['id']) && isset($_GET['deleteImage']))
{
	$result = $groups -> getById($_GET['id']);
	$row = $conn -> fetchArray($result);
	
	$groups->updateImage($row['id'], "");
	@unlink("../". CMS_GROUPS_DIR . $row['image']);
	
	$msg = "Image deleted!";
	
	$url = "cms.php?id=". $_GET['id'] ."&parentId=". $_GET['parentId'] ."&groupType=". $_GET['groupType'];
	if(isset($_GET['page']))
		$url .= "&page=".$_GET['page'];
	
 	header ("Location: ". $url ."&msg=" . $msg);
	exit();
}
else if (isset($_GET['videoId']) && isset($_GET['deleteVideo']))
{
 $groups -> delete($_GET['videoId']);
 $msg = "Video deleted!";
 header ("Location: cms.php?id=". $_GET['id'] ."&groupType=". $_GET['groupType'] ."&parentId=". $_GET['parentId'] ."&msg=" . $msg);
 exit();
}
?>
