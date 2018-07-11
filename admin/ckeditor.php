<?php
include_once '../ckeditor/ckeditor.php';
include_once '../ckfinder/ckfinder.php';
 
$ckeditor = new CKEditor();
$ckeditor->basePath = '/ckeditor/';

$config['skin'] = 'v2';
$config['width'] = '100%';
$config['height'] = '250';

$config['toolbar'] = array(
	array('Source'),
	array('Copy','Paste','PasteFromWord'),
	array('Bold','Italic','Underline','Strike','-','Subscript','Superscript'),
	array('NumberedList','BulletedList','-','Outdent','Indent'),
	array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
	array('Link','Unlink','Anchor'),
	'/',
	array('Format','Font','FontSize'),
	array('Image','Flash','Table','HorizontalRule','PageBreak', 'ReadMore'),
	array('TextColor','BGColor'),
	array('Maximize', 'ShowBlocks')
);

	
$ckfinder = new CKFinder();
$ckfinder->BasePath = '/ckeditor/ckfinder/'; // Note: BasePath property in CKFinder class starts with capital letter
$ckfinder->SetupCKEditorObject($ckeditor);
?>