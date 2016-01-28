<?php

$this->load->view('includes/htmlheader_view');


if($title1=='')
{
$this->load->view('home_view');
}else{
    $this->load->view($main_content);

}

//$this->load->view('includes/sidebar');
$this->load->view('includes/htmlfooter_view');


?>
