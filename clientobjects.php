<?php
session_start();
error_reporting(E_ERROR);
ini_set("register_globals", "off");
ini_set("upload_max_filesize", "20M");
ini_set("post_max_size", "40M");
ini_set("memory_limit", "80M");

require_once("data/conn.php");
require_once("data/users.php");
require_once("data/groups.php");
require_once("data/listingfiles.php");
require_once("data/testimonials.php");
require_once("data/feedbacks.php");
require_once("data/donate.php");
require_once("data/enewsletters.php");

//include for programs
require_once("data/program.php");
$program = new Program();

$conn 					= new Dbconn();		
$users	 				= new Users();
$groups					= new Groups();
$listingFiles		    = new ListingFiles();
$testimonials		    = new Testimonials();
$feedbacks			    = new Feedbacks();
$donate                 = new Donate();
$enewsletters			= new Enewsletters();

require_once("data/constants.php");
require_once("data/sqlinjection.php");
require_once("data/youtubeimagegrabber.php");


include("includes/feedbackprocess.php");
include("includes/testimonialprocess.php");
include("includes/enquiry.php");

///////////////////////////////////////////////

$query = "";
if (isset($_GET['query']))
	$query = $_GET['query'];
	//echo $query;
if (!empty($query)) {
	$pageRow = $groups->getByURLName($query);
	if ($pageRow) {
		
		$pageLinkType = $pageRow['linkType'];
		if ($pageLinkType == "Link") {
			header("Location: " . $pageRow['contents']);
			exit();
		}		
	}
}
else
	$query='';

include("menufunction.php");




///////////////IMAGE CALL IMAGER FUNCTION //////////////////////////////


function imager($source, $width, $height, $fix="")
{
	$str = 'data/imager.php?file=../' . CMS_GROUPS_DIR . $source . '&amp;mw=' . $width . '&amp;mh=' . $height;
	if(!empty($fix))
		$str .= '&amp;fix';		
	return $str;
}
?>