<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orange Bond Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2052 Orange Bond
http://www.tooplate.com/view/2052-orange-bond
-->
<link href="<?php echo base_url('css/tooplate_style.css');?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo base_url('css/nivo-slider.css');?>" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ddsmoothmenu.css');?>" />

<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/ddsmoothmenu.js');?>">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body>

<div id="tooplate_header">
	<div id="tooplate_top">
    	<div id="tooplate_search">
            
		</div>
    </div>
    <div id="tooplate_titlebar">
    	<div id="site_title"><h1><a href="#">Orange Bond</a></h1></div>
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
              <li><a href="<?php echo site_url('home/index');?>">Home</a></li>
          		<!-- <li><a href="about.html">About</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                  </ul>
              </li>
         	  <li><a href="portfolio.html">Portfolio</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                        <li><a href="#">Sub menu 4</a></li>
                        <li><a href="#">Sub menu 5</a></li>
                  </ul>
              </li> -->
              <li><a href="<?php echo site_url('home/login');?>">Login</a></li>
              <li><a href="<?php echo site_url('home/signup');?>">Singup</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of tooplate_menu -->
    </div>