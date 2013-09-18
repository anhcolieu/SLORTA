<!-- TEMPLATE COLOR -->
<?php
if ($this->params->get('templateColor'))
{
?>
<style type="text/css">
/* module H3 text color */
#page_header_h3
{
color: <?php echo $this->params->get('module_title_color');?>;
}
/* start slideshow text info */
.slim-caption P
{
color: <?php echo $this->params->get('templateColor');?>;
}
/* start horizontal navigation */
#hor_nav_outer
{
border-color: <?php echo $this->params->get('templateColor');?>;
}
#hor_nav LI A
{
color: <?php echo ($hornav_font_color); ?>
}

#hor_nav LI.active A
{
background-color: <?php echo $this->params->get('templateColor');?>;
}
#hor_nav LI A:hover, #hor_nav LI:hover A, #hor_nav LI.sfHover A
{
background-color: <?php echo $this->params->get('templateColor');?>;
}
#hor_nav LI LI A, #hor_nav LI LI.active A, #hor_nav LI LI A:hover
{
background-color: <?php echo $this->params->get('templateColor');?>;
}
/* hor nav border color */
#hor_nav LI A
{
border-right: 1px solid <?php echo ($hornav_border_color); ?>
}
#hor_nav LI LI A, #hor_nav LI LI.active A, #hor_nav LI LI A:hover
{
border-top: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
border-right: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
}

/* start dropdown */
H3.js_heading
{
background: <?php echo $this->params->get('templateColor');?>;
}
/* end dropdown */

/* start tabs */
ul.tabs li,dl.tabs dt h3 a:link,dl.tabs dt h3 a:visited
{
border-bottom: 1px solid <?php echo $this->params->get('templateColor');?>;
}
ul.tabs li a.linkopen:link,ul.tabs li a.linkopen:visited,dl.tabs dt.open h3 a:link,dl.tabs dt.open h3 a:visited
{
background: <?php echo $this->params->get('templateColor');?>;
}
.tabcontent,div.current
{
background: <?php echo $this->params->get('templateColor');?>;
}
ul.tabs li a.linkclosed:hover,ul.tabs li a.linkclosed:active,ul.tabs li a.linkclosed:focus,ul.tabs li a.linkopen:hover,ul.tabs li a.linkopen:active,ul.tabs li a.linkopen:focus
{
background: <?php echo $this->params->get('templateColor');?>;
}
/* end tabs */

/* body text color  */
BODY
{
color: <?php echo $this->params->get('body_textcolor');?> !important;
}

/* template link color  */

a
{
color: <?php echo $this->params->get('templateColor');?>;
}

.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
.btn-primary
{
background: <?php echo $this->params->get('templateColor');?>;
}

.navbar-inner
{
-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
}

.site-title, .site-description
{
color: <?php echo $this->params->get('templateColor');?>;
}

.site-title, .site-description
{
color: <?php echo $this->params->get('templateColor');?>;
}

</style>
<?php
}
?>
<!-- END CUSTOM COLOR -->
<!-- ################ -->

<!-- START CSS -->
<!-- ################ -->
<style type="text/css">
/* BODY FONT SIZE */
body
{
font-size: <?php echo ($body_fontsize); ?>
}
body.site
{
background-color: <?php echo $this->params->get('templateBackgroundColor');?>
}
/* EXTRA BODY */
body.site 
{
background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/backgrounds/<?php echo $body_bg_image_default ?>.png) !important;
}
<?php if($this->params->get('body_bg_image_file') == '') : ?>
body.site
{
background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/backgrounds/<?php echo $body_bg_image_default ?>.png) !important;
}

<?php elseif($this->params->get('body_bg_image_file') != '') : ?>
body.site
{
background-image: url(<?php echo $this->baseurl ?>/<?php echo $body_bg_image_file; ?>) !important;
}
<?php endif; ?>

</style>
<!-- END CSS -->
<!-- ################ -->

<!-- START IE -->
<!-- ################ -->

<!--[if lt IE 9]>
<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->


<!-- END IE -->
<!-- ################ -->

<!-- jquery no conflict -->
<script>var jQ = jQuery.noConflict();</script>