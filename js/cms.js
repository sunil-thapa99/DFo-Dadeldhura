function GetXmlHttpObject()
{
	var xmlHttp=null;
	
	try
	{
	// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

function addImage()
{
	newDiv = document.createElement("div");
	
	str = "<div style='width:100px; float: left;'>Image : </div><div style='float:left;'>";
	str += "<input type='file' name='galimage[]' class='file' /></div><br style='clear: both;'>";
	str += "<div style='width:100px; float: left;'>Caption : </div>";
	str += "<div style='float:left;'><input type='text' name='imageCaption[]' class='text' /></div>";
	str += "<hr style='clear: both;'>";

	newDiv.innerHTML = str;

	document.getElementById('uploadImageHolder').appendChild(newDiv);
}
						
function addListFile()
{
	newDiv = document.createElement("div");
	
	str = "<div style='width:100px; float: left;'>File : </div><div style='float:left;'>";
	str += "<input type='file' name='listFile[]' class='file' /></div><br style='clear: both;'>";
	str += "<div style='width:100px; float: left;'>Caption : </div>";
	str += "<div style='float:left;'><input type='text' name='listCaption[]' class='text' /></div>";
	str += "<hr style='clear: both;'>";

	newDiv.innerHTML = str;

	document.getElementById('uploadFileHolder').appendChild(newDiv);
}

function addVideo()
{
	newDiv = document.createElement("div");
	
	str = "<div style=''>Link : </div>";
	str += "<div style='float:left; padding-bottom:5px;'><textarea name='videoUrl[]' rows='4' cols='100'></textarea></div>";
	str += "<hr style='clear: both;'>";

	newDiv.innerHTML = str;

	document.getElementById('uploadVideoHolder').appendChild(newDiv);
}

function changeType(box)
{
	location.href = "cms.php?groupType=" + box.value;
}

function changePackageContentType(sbox)
{
	cDiv = document.getElementById('packageContentDiv');
	gDiv = document.getElementById('packageGalleryDiv');
	cDiv.style.display = 'none';
	gDiv.style.display = 'none';

	if(sbox.value == "Content")
	{
		cDiv.style.display = 'block';
		//getAndPut("ajaxPackageContentPanel.php", myDiv);
		//document.getElementById('packageContentDiv').innerHTML = 'Create your content';
	}
	else if(sbox.value == "Gallery")
	{
		gDiv.style.display = 'block';
		//getAndPut("ajaxPackageGalleryPanel.php", myDiv);
		//document.getElementById('packageGalleryDiv').innerHTML = 'Create your gallery';
	}
}

function getAndPut(url, intoDiv)
{
	xmlHttp = GetXmlHttpObject();
	
	xmlHttp.onreadystatechange=function()
	{
		if (xmlHttp.readyState==4)
		{ 
			intoDiv.innerHTML = xmlHttp.responseText;
			CKEDITOR.replace('shortcontents', { toolbar: 'basic' });
			CKEDITOR.replace('shortcontentsen', { toolbar: 'basic' });
			CKEDITOR.replace( 'contents');
			CKEDITOR.replace( 'contentsen' );
		}
	};
	xmlHttp.open("GET",url,true);

	xmlHttp.send(null);
}

function getAndPutList(url, intoDiv)
{
	xmlHttp = GetXmlHttpObject();
	
	xmlHttp.onreadystatechange=function()
	{
		if (xmlHttp.readyState==4)
		{ 
			intoDiv.innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'shortcontents');
			CKEDITOR.replace( 'listDescription' );
		}
	};
	xmlHttp.open("GET",url,true);

	xmlHttp.send(null);
}

function changeLinkType(sbox)
{

	document.getElementById('directLink').disabled = true;

	document.getElementById('uploadFile').disabled = true;

	document.getElementById('directLink').style.display = 'none';

	document.getElementById('uploadFile').style.display = 'none';

	document.getElementById('fckEditor').style.display = 'none';

	document.getElementById('galleryDiv').style.display = 'none';

	document.getElementById('listDiv').style.display = 'none';
	
	document.getElementById('normalGroupDiv').style.display = 'none';	
	
	document.getElementById('videoGalleryDiv').style.display = 'none';
	
	document.getElementById('pageDetails').style.display = 'none';

	document.getElementById('contentsLabel').innerHTML = '';
	document.getElementById('contentsLabel').style.display = 'none';
	
	document.getElementById('displaytype').style.display = 'none';
	document.getElementById('featured').style.display = 'none';
	//document.getElementById('ImageLabel').style.display = 'none';
	//document.getElementById('grpImage').style.display= 'none';

	if(sbox.value == "Link")
	{
		myDiv = document.getElementById('directLink');

		myDiv.disabled = false;

		myDiv.style.display = 'block';

		document.getElementById('contentsLabel').innerHTML = 'Page name / URL';
		document.getElementById('contentsLabel').style.display = 'block';
	}
	else if(sbox.value == "Normal Group")
	{
		document.getElementById('pageDetails').style.display = 'block';
		
		myDiv = document.getElementById('fckEditor');
		myDiv.style.display = 'block';
		
		document.getElementById('displaytype').style.display = 'block';

		getAndPut("ajaxNormalGroup.php", myDiv);
		document.getElementById('contentsLabel').innerHTML = 'Put your contents';
		document.getElementById('contentsLabel').style.display = 'block';
		
		//document.getElementById('ImageLabel').style.display = 'block';
		//document.getElementById('grpImage').style.display= 'block';		
	}

	else if(sbox.value == "File")
	{
		myDiv = document.getElementById('uploadFile');
		myDiv.disabled = false;
		myDiv.style.display = 'block';

		document.getElementById('contentsLabel').innerHTML = 'Upload a file';
		document.getElementById('contentsLabel').style.display = 'block';
	}
	else if(sbox.value == "Contents Page")
	{
		document.getElementById('pageDetails').style.display = 'block';
		
		myDiv = document.getElementById('fckEditor');
		myDiv.style.display = 'block';
		
		document.getElementById('featured').style.display = 'block';

		getAndPut("ajaxContentsPanel.php", myDiv);
		document.getElementById('contentsLabel').innerHTML = 'Put your contents';
		document.getElementById('contentsLabel').style.display = 'block';
		
		//document.getElementById('ImageLabel').style.display = 'block';
		//document.getElementById('grpImage').style.display= 'block';
	}
	else if(sbox.value == "Gallery")
	{
		document.getElementById('pageDetails').style.display = 'block';
		
		myDiv = document.getElementById('galleryDiv');

		myDiv.style.display = 'block';

		getAndPut("ajaxGalleryPanel.php", myDiv);

		//document.getElementById('contentsLabel').innerHTML = 'Create your gallery';
	}
	else if(sbox.value == "List")
	{
		document.getElementById('pageDetails').style.display = 'block';
		
		myDiv = document.getElementById('listDiv');

		myDiv.style.display = 'block';

		getAndPutList("ajaxListingPanel.php", myDiv);

		//document.getElementById('contentsLabel').innerHTML = 'Create your gallery';
	}
	else if(sbox.value == "Video Gallery")
	{
		document.getElementById('pageDetails').style.display = 'block';
		
		myDiv = document.getElementById('videoGalleryDiv');

		myDiv.style.display = 'block';

		getAndPut("ajaxVideoGalleryPanel.php", myDiv);

		//document.getElementById('contentsLabel').innerHTML = 'Create your gallery';
	}
}

function delete_confirmation(query)
{
	//alert("dismissed");
	if(confirm("Are you sure you want to delete?"))
	{
		location.href = query;	
	}
	return false;
}


function copySame(divId, value)
{
	xmlHttp = GetXmlHttpObject();
	
	xmlHttp.onreadystatechange=function()
	{
		if (xmlHttp.readyState==4)
		{ 
			document.getElementById(divId).value = xmlHttp.responseText;
		}
	};
	xmlHttp.open("GET",'formaturl.php?value='+ value,true);

	xmlHttp.send(null);
}

function checkUrlName(id, val, div)
{
	$.get('checkurlname.php', {id: id, value: val}, function(data){
		$("#" + div).html(data);
	})
}

function changeTypeProgram(box)
{
	location.href = "program.php?groupType=" + box.value;	
}