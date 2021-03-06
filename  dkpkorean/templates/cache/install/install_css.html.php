<?php
if ($this->security()) {
echo 'form { 
	display: inline; 
	}
img { 
	vertical-align: middle; 
	border: 0px; 
	}

html {
	color: #536482;
	background: #FFFFFF;
	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-ie browsers */
	height: 100%;
	margin-bottom: 1px;
}

body {
	/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	color: #536482;
	background: #FFFFFF;
	font-size: 62.5%;	/* This sets the default font size to be equivalent to 10px */
	margin: 10px 15px;
}

/*h1 { 
	font-weight: bold; 
	color: #CECFEF; 
	font-size: 1em; 
	background-image: url(../templates/install/images/gradient3dblank.gif);
	white-space: nowrap;
	text-transform: uppercase;
	padding: 2px; 
	
	}
*/

/* Mainsite Structure */
#outer {
 text-align:left;
 width:750px;
 margin:auto;
 }

#hdr {
 height:95px;
 background:#ffffff;
 color: #333333;
 }

#bar {
 height:25px;
 background:#ffffff;
 color: #333333;
 }

#bodyblock {
 position:relative;
 background: #ffffff;
 color: #333333;
 width:750px;
 padding:10px;
 margin: auto;
 }

#l-col {
 float:left;
 background:#ffffff;
 color: #333333;
 width:165px;
 }

#cont {
 width:585px;
 background:#ffffff;
 color: #333333;
 text-align:left;
 }

#ftr {
 height:25px;
 background:#ffffff;
 color: #333333;
 margin:0;
 }
	
/* Rounded Corner Boxes */

.dialog {
 position:relative;
 margin:0px auto;
 min-width:8em;
 max-width:760px; /* based on image dimensions - not quite consistent with drip styles yet */
 color:#000000;
 z-index:1;
 margin-left:12px; /* default, width of left corner */
 margin-bottom:0.5em; /* spacing under dialog */
}

.dialog .content,
.dialog .t,
.dialog .b,
.dialog .b div {
 background:transparent url(../templates/install/images/dialog-800x1600_white.png) no-repeat top right;
 /*background-image:url(../templates/install/images/dialog2-blue.gif);*/
}

.dialog .content {
 position:relative;
 zoom:1;
 _overflow-y:hidden;
 padding:0px 20px 0px 0px;
}

.dialog .t {
 /* top+left vertical slice */
 position:absolute;
 left:0px;
 top:0px;
 width:12px; /* top slice width */
 margin-left:-12px;
 height:100%;
 _height:1600px; /* arbitrary long height, IE 6 */
 background-position:top left;
}

.dialog .b {
 /*bottom*/
 position:relative;
 width:100%;
 margin-top:-4px;
 background-position:bottom right;
}

.dialog .b,
.dialog .b div {
 height:30px; /* height of bottom cap/shade */
 font-size:1px;
}

.dialog .b div {
 position:relative;
 width:12px; /* bottom corner width */
 margin-left:-12px;
 background-position:bottom left;
}

.dialog .hd,
.dialog .bd,
.dialog .ft {
 position:relative;
}

.dialog .wrapper {
 /* extra content protector - preventing vertical overflow (past background) */
 position:static;
 max-height:1000px;
 overflow:auto; /* note that overflow:auto causes a rather annoying redraw "lag" in Firefox 2, and may degrade performance. Might be worth trying without if you aren\'t worried about height/overflow issues. */
}

.dialog h1,
.dialog p {
 margin:0px; /* margins will blow out backgrounds, leaving whitespace. */
 padding:0.5em 0px 0.5em 0px;
}

.dialog h1 {
	font-weight: bold; 
	color: #538ac5; 
	font-size: 1.3em; 
	white-space: nowrap;
	text-transform: uppercase;
	
}

	
/* Msgtext */

.msgtext {
	font-family: Verdana, Tahoma, Arial; 
	font-size: 1em; 
	color: #000000; 
	/*border-top: 1px; 
	border-right: 1px; 
	border-bottom: 1px; 
	border-left: 1px; 
	border-color: #7B819A; 
	border-style: solid;*/
	padding: 4px;
	margin: 4px;
	}
	
.msgtext li{
	font-family: Verdana, Tahoma, Arial; 
	font-size: 1em; 
	color: #000000; 
	list-style-image: url(../templates/install/images/file_conflict.gif);
	}
	
	
	
/*TABLE { 
	background-image: url(../templates/install/images/box.gif);
	border-top: 1px; 
	border-right: 1px; 
	border-bottom: 1px; 
	border-left: 1px; 
	border-color: #7B819A; 
	border-style: solid;
	}
	
TABLE.borderless { 
	border-style: none; 
	}
	
th { 
	font-weight: bold; 
	color: #CECFEF; 
	font-size: 1em; 
	background-image: url(../templates/install/images/gradient3dblank.gif);
	white-space: nowrap;
	text-transform: uppercase; 
	}
	
tr, td { 
	font-family: Verdana, Tahoma, Arial; 
	font-size: 11px; 
	color: #000000; 
	}
*/
	
a:link, a:visited, a:active { 
	text-decoration: underline; 
	color: #949494;
	background: url(../templates/install/images/icon_trace.gif);
 	background-repeat: no-repeat;
 	background-position: left;
 	padding-left:16px;
 
	}
	
a:hover { 
	text-decoration: underline; 
	color: #000084; 
	}
	
th a:link, th a:visited, th a:active { 
	text-decoration: underline; 
	color: #CECFEF; 
	font-weight: bold; 
	}
	
th a:hover { 
	text-decoration: underline; 
	color: #E6E6F5; 
	font-weight: bold; 
	}
	
th.smalltitle { 
	font-weight: bold; 
	color: #CECFEF; 
	background-color: #5588CC; 
	white-space: nowrap; 
	font-size: 10px; 
	}
	
th.smalltitle a:link, th.smalltitle a:visited, th.smalltitle a:active { 
	text-decoration: underline; 
	color: #CECFEF; 
	font-weight: bold; 
	font-size: 10px; 
	}
	
th.smalltitle a:hover { 
	color: #E6E6F5; 
	font-weight: bold; 
	font-size: 10px; 
	text-decoration: underline; 
	}
	
th.footer { 
	color: #CECFEF; 
	text-align: right; 
	background-color: #5588CC; 
	white-space: nowrap; 
	font-weight: normal; 
	}
	
th.footer a:link, th.footer a:visited, th.footer a:active { 
	color: #CECFEF; 
	text-decoration: underline;  
	font-weight: normal; 
	}
	
th.footer a:hover { 
	color: #E6E6F5; 
	text-decoration: underline; 
	font-weight: normal; 
	}
	
/*.row1 { 
	background-color: #FFFFFF; 
	}
	
.row2 { 
	background-color: #FFFFFF; 
	}*/
	
.quote1 { 
	background-color: #FFFFFF; 
	font-size: 11px; 
	line-height: 125%; 
	}
	
.quote2 { 
	background-color: #EFEFEF; 
	font-size: 11px; 
	line-height: 125%; 
	}
	
.positive { 
	color: #008800; 
	}
	
.negative { 
	color: #F80000; 
	}
	
.neutral  { 
	color: #000000; 
	}
	
.maintitle { 
	font-size: 18px; 
	font-weight: bold; 
	color: #949494; 
	}
	
.subtitle  { 
	font-size: 12px; 
	color: #CECFEF; 
	}
	
.menu { 
	font-size: 10px; 
	color: #CECFEF; 
	}
	
.menu a:link, .menu a:active, .menu a:visited { 
	text-decoration: none; 
	font-size: 10px; 
	color: #CECFEF; 
	}
	
.menu a:hover { 
	text-decoration: underline; 
	font-size: 10px; 
	color: #E6E6F5; 
	}
	
.small { 
	font-size: 10px; 
	}
	
.copy { 
	font-size: 10px; 
	color: #949494; 
	}
	
.copy a:link, .copy a:active, .copy a:visited { 
	font-size: 10px; 
	color: #949494; 
	}
	
.copy a:hover { 
	font-size: 10px; 
	color: #E6E6F5; 
	}
	
.input { 
	font-family: Verdana, Tahoma, Arial; 
	font-size: 10px; 
	color: #000000; 
	background-color: #FFFFFF;
	border-top: 1px; 
	border-right: 1px; 
	border-bottom: 1px; 
	border-left: 1px; 
	border-color: #000000; 
	border-style: solid; 
	}
	
.input:hover {
	 background-color: #E6E6F5;
	}
	
input.helpline1 { 
	background-color: #EFEFEF; 
	border-style: none; 
	}
	
input.helpline2 { 
	background-color: #FFFFFF; 
	border-style: none; 
	}
	
input.mainoption { 
	font-family: Verdana, Tahoma, Arial; 
	font-size: 10px; 
	font-weight: bold; 
	color: #CECFEF; 
	background-color: #5588CC; 
	border-top: 1px;
	border-right: 1px; 
	border-bottom: 1px; 
	border-left: 1px; 
	border-color: #CECFEF; 
	border-style: solid; 
	}

input.mainoption:hover {
  color: #5588CC; 
	background-color: #CECFEF; 
  }

input.liteoption { 
	font-family: Verdana, Tahoma, Arial; 
	font-size: 10px; 
	font-weight: normal; 
	color: #CECFEF; 
	background-color: #5588CC; 
	border-top: 1px;
	border-right: 1px;
	border-bottom: 1px; 
	border-left: 1px; 
	border-color: #CECFEF; 
	border-style: solid; 
	}
	
	
/* Install Progress*/
div#StepIndicatorList ul,
div#StepIndicatorList ol {
	 list-style: none;
	 border-top: 1px solid #E6E6F5;
	 padding-top: 10px;
	 margin: 0 -20px 0 -50px;
	 width: 145px;
	 font-size: 12px;
	}
	
div#StepIndicatorList li {
		
	/*display:inline;*/
	padding: 3px 4px;
	color: #FFFFFF;
	background: #70AED3 url("../templates/install/images/gradient3dblank.gif") bottom left repeat-x;
	border-top: 1px solid #6DACD2;
	border-bottom: 1px solid #327AA5;
	text-align: left;
	font-size: 0.75em;
	text-transform: uppercase;
	}
	
div#StepIndicatorList li.current {
	padding: 3px 4px;
	color: #FFFFFF;
	background: #70AED3 url("../templates/install/images/gradient3d.gif") bottom left repeat-x;
	border-top: 1px solid #6DACD2;
	border-bottom: 1px solid #327AA5;
	text-align: left;
	font-size: 0.75em;
	text-transform: uppercase;
	}
	
div#StepIndicatorList li a,
div#StepIndicatorList ol a {
	 color: white;
	 text-decoration: underline;
	 border-top: 4px solid #dedede;
	 padding-top: 6px;
	}';
}
?>