<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>Iresh Properties</title>

    <meta name="author" content="DanThemes" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- css files -->
    <link href="<?php echo site_url(); ?>css/stylei.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo site_url(); ?>css/prettyPhoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />





    <script type="text/javascript" src="<?php echo site_url(); ?>js/jquery-1.7.1.min.js"></script>




    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        },  3000);
    </script>


</head>

<body>



<!-- START top -->
<div id="wrapper">
    <div id="header">

        <!-- logo -->
        <div id="logo">
            <img src="<?php echo site_url();?>images/logo.png" height="100" width="195" style="margin-top:20px; margin-left:10px;" />
            <div style="clear:left"></div>
        </div>
        <div id="head">
            <div id="icon"><?php // print_r($header_right1);exit();?>
                <a href="<?php echo $header_right1[0]->content ?>" target="_blank"><img src="<?php echo site_url();?>images/facebook.png" height="35" width="35" /></a>
                <a href="<?php echo $header_right2[0]->content ?>" target="_blank"><img src="<?php echo site_url();?>images/twitter.png" height="35" width="35" /></a>
                <a href="<?php echo $header_right3[0]->content ?>" target="_blank"><img src="<?php echo site_url();?>images/LinkedIn.png" height="35" width="35" /></a>
            </div>
            <span class="phon"><img src="<?php echo site_url();?>images/Phone_icon.png" height="30" width="40" /></span>
        <span class="no">
        <b>:
            <?php
            foreach($header_right as $r)
            {
                echo $r->content;
            }
            ?>
        </b>&nbsp;&nbsp;
      </span>
            <!--<span class="no"><b>: 9970154212</b></span>-->
            <div style="clear:both"></div>
        </div>
    </div>

    <!-- nav -->
    <div id="nav" style="text-decoration:none;">

        <?php echo get_ul($menus); ?>

    </div>



    <!-- END top -->


<?php

$this->load->helper('inflector');

function get_ul ($array,$child=FALSE)
{

    $str = '';

    if (count($array)) {
        $str .= $child == FALSE ? '<ul id="nav2" >' : '<ul>';

        foreach ($array as $item) {
            $str .= '<li ' . $item['id'] .'"><a href="'.site_url($item['title']).'" >';
            $str .= '<div>';
            $str .=  str_replace("_", ' ', $item['title']);

            $str .= '</div>
                </a>  ';

            // Do we have any children?
            if (isset($item['children']) && count($item['children'])) {

                $str .= get_ul($item['children'],TRUE);
            }

            $str .= '</li>' . PHP_EOL;

        }

        $str .= '</ul>  ' . PHP_EOL;

    }

    return $str;
}
