

<!DOCTYPE html>
<html>
<head>
    <meta  charset="UTF-8" />
    <title>Agro Hub</title>
    <meta name="description"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/css.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/component.css" />
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

<body class="overflow_hiden">
<div id="">
    <header>
        <div class="mid_cnt">
            <span class="menu"><a href="<?php echo site_url(); ?>"><img src="images/menu_bg.png" width="44" height="44"></a></span>
            <nav class="nav ">
                <a href="#" id="pull">Menu</a>
                <ul class="nav-list">

<!--                    <li><a data-scroll-nav='1'>Rates</a></li>-->
<!--                    <li><a data-scroll-nav='2'>Weather</a></li>-->
<!--                    <li><a data-scroll-nav='3'>Fertilizer </a></li>-->
<!--                    <li><a data-scroll-nav='4'>Students Desk</a></li>-->
<!--                    <li><a data-scroll-nav='5'>Gov News </a></li>-->
<!--                    <li><a data-scroll-nav='6'>Tips/Help</a></li>-->

                    <?php echo get_ul($menus); ?>

                </ul>
            </nav>

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
?>

        </div>
    </header>
