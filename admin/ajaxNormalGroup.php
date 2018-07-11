<div>
	<div style="float:left; width:49%;">
    	<p>Summary(Nepali)</p>
		<textarea style="padding:5px" name="shortcontents" rows="10" cols="44"><?=$groupRow['shortcontents'];?></textarea>
	</div>
    <div style="float:right; width:49%">
		<p>Summary(English)</p>
		<textarea style="padding:5px" name="shortcontentsen" rows="10" cols="43"><?=$groupRow['shortcontentsen'];?></textarea>
	</div>
    <div style="clear:both"></div>
</div>
	
<div>
	<div style="">
		<p><b>Details(Nepali)</b></p>
        <textarea id="contents" name="contents"><?=$groupRow['contents'];?></textarea>
	</div>
    <div style="">
		<p><b>Details(Elglish)</b></p>
        <textarea id="contentsen" name="contentsen"><?=$groupRow['contentsen'];?></textarea>
	</div>
    <div style="clear:both"></div>
</div>
<script type="text/javascript">

	//CKEDITOR.basepath = "/ckeditor/";
	CKEDITOR.replace('shortcontents', { toolbar: 'basic' });
	CKEDITOR.replace('shortcontentsen', { toolbar: 'basic' });
	CKEDITOR.replace( 'contents');
	CKEDITOR.replace( 'contentsen' );
	//var editor_data = CKEDITOR.instances.shortcontents.getData();
</script>