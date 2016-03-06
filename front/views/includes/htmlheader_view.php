<!DOCTYPE html>
<html>
<head>
    <meta  charset="UTF-8" />
    <title>Agro Hub</title>
    <meta name="description"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/agro/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/css.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/component.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/agro/ng-table.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>js/ng-table/ng-table.css" />
    <script src="<?php echo site_url(); ?>js/modernizr.custom.js"></script>
    <style type="text/css">
        .min_hgt{height:670px;}
        .overflow_hiden{overflow:hidden}
        .logo {
            width: 27.4%;
            display: inline-block;
            margin: 60px 0px 0px;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body class="overflow_hiden" ng-app="myagrohubApp">
<div id="">
    <header>
        <div class="mid_cnt">
            <span class="menu" ><a href="#"><img src="images/menu_bg.png" width="44" height="44"></a></span>
            <nav class="nav ">
                <a  href="#" id="pull">Menu</a>
                <ul class="nav-list">
                    <?php echo get_ul($menus,$title1); ?>

                </ul>
            </nav>

           <?php

            $this->load->helper('inflector');

            function get_ul ($array,$title,$child=FALSE)
            {
                $str = '';
                $c = 1;

                    $str .= $child == FALSE ? '<ul id="nav2" >' : '<ul>';
                    $str .= '<li><a data-scroll-nav="'.$c++.'">Rates</a></li><li><a data-scroll-nav="'.$c++.'">Wheather</a></li>';

                if (count($array)) {
                    foreach ($array as $item) {
                        $str .= '<li ' . $item['id'] .'">';

                        if($title=="")
                            $str .=  '<a data-scroll-nav="'.$c++.'">';
                        else
                            $str .= '<a href="'.site_url($item['title']).'" >';

                        $str .=  str_replace("_", ' ', $item['title']);

                        $str .= '</a>';

                        // Do we have any children?
                        if (isset($item['children']) && count($item['children'])) {

                            $str .= get_ul($item['children'],$title,TRUE);
                        }

                        $str .= '</li>' . PHP_EOL;

                    }

                }
                    $str .= '</ul>  ' . PHP_EOL;


                return $str;
            }
            ?>

        </div>
    </header>
