<?php

$this->load->view('includes/htmlheader_view');



$this->load->view('home_view');
$this->load->view('rates_view');

$this->load->view('wheather_news');

    $this->load->view($main_content);


//$this->load->view('includes/sidebar');
$this->load->view('includes/htmlfooter_view');


?>
