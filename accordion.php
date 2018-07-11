<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="js/ddaccordion.js">

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>


<script type="text/javascript">


ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='plus.gif' class='statusicon' />", "<img src='minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})


</script>


<style type="text/css">

.glossymenu{
margin: 5px 0;
padding: 0;
width: 170px; /*width of menu*/
border: 1px solid #9A9A9A;
border-bottom-width: 0;
}

.glossymenu a.menuitem{
background: black url(glossyback.gif) repeat-x bottom left;
font: bold 14px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: white;
display: block;
position: relative; /*To help in the anchoring of the ".statusicon" icon image*/
width: auto;
padding: 4px 0;
padding-left: 10px;
text-decoration: none;
}


.glossymenu a.menuitem:visited, .glossymenu .menuitem:active{
color: white;
}

.glossymenu a.menuitem .statusicon{ /*CSS for icon image that gets dynamically added to headers*/
position: absolute;
top: 5px;
right: 5px;
border: none;
}

.glossymenu a.menuitem:hover{
background-image: url(glossyback2.gif);
}

.glossymenu div.submenu{ /*DIV that contains each sub menu*/
background: white;
}

.glossymenu div.submenu ul{ /*UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
}

.glossymenu div.submenu ul li{
border-bottom: 1px solid blue;
}

.glossymenu div.submenu ul li a{
display: block;
font: normal 13px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: black;
text-decoration: none;
padding: 2px 0;
padding-left: 10px;
}

.glossymenu div.submenu ul li a:hover{
background: #DFDCCB;
colorz: white;
}

</style>

</head>

<body>

<div class="glossymenu">
<a class="menuitem" href="http://www.dynamicdrive.com/">Dynamic Drive</a>
<a class="menuitem submenuheader" href="http://www.dynamicdrive.com/style/" >CSS Examples</a>
<div class="submenu">
	<ul>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C1/">Horizontal CSS Menus</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C2/">Vertical CSS Menus</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C4/">Image CSS</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C6/">Form CSS</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C5/">DIVs and containers</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C7/">Links & Buttons</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C8/">Other</a></li>
	<li><a href="http://www.dynamicdrive.com/style/csslibrary/all/">Browse All</a></li>
	</ul>
</div>
<a class="menuitem" href="http://www.javascriptkit.com/jsref/">JavaScript Reference</a>
<a class="menuitem" href="http://www.javascriptkit.com/domref/">DOM Reference</a>
<a class="menuitem submenuheader" href="http://www.cssdrive.com">CSS Drive</a>
<div class="submenu">
	<ul>
	<li><a href="http://www.cssdrive.com">CSS Gallery</a></li>
	<li><a href="http://www.cssdrive.com/index.php/menudesigns/">Menu Gallery</a></li>
	<li><a href="http://www.cssdrive.com/index.php/news/">Web Design News</a></li>
	<li><a href="http://www.cssdrive.com/index.php/examples/">CSS Examples</a></li>
	<li><a href="http://www.cssdrive.com/index.php/main/csscompressor/">CSS Compressor</a></li>
	<li><a href="http://www.dynamicdrive.com/forums/forumdisplay.php?f=6">CSS Forums</a></li>
	</ul>
	<img src="http://i27.tinypic.com/sy7295.gif" style="margin: 10px 5px" />
</div>
<a class="menuitem" href="http://www.codingforums.com/" style="border-bottom-width: 0">Coding Forums</a>		
</div>

<p>Assuming the current page is named "current.htm", the below links when navigated to expands a particular header on that page:</p>
<p>
- <a href="current.htm?submenuheader=0">Expand 1st header within "submenuheader" header group</a><br />
</p>

<p>Helpful links: </p>
<p>
- <a href="http://www.dynamicdrive.com/dynamicindex17/ddaccordion_suppliment.htm">Adding arbitrary links hat expand/ collapse the contents</a><br />
- <a href="http://www.dynamicdrive.com/dynamicindex17/ddaccordion_suppliment2.htm">Taking advantage of the oninit() and onopenclose() event handlers</a><br />
</p>

</body>
</html>