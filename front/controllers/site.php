<?php

class site extends CI_Controller
{

    public $header_right = array();
    public $header_right1 = array();
    public $header_right2 = array();
    public $header_right3 = array();

    function __construct()
    {
        parent::__construct();
        $this->load->model('site_model');
//        $this->header_right = $this->site_model->get_header_right();
//        $this->header_right1 = $this->site_model->get_header_right1();
//        $this->header_right2 = $this->site_model->get_header_right2();
//        $this->header_right3 = $this->site_model->get_header_right3();
//        $this->load->library('pagination');
    }

    public function index()
    {
        $this->get_content();

    }

    public function get_content($title = NULL)
    {
        //echo  $this->uri->segment(1);


//        $data['records'] = $this->site_model->get_property($limit, $offset);
        //print_r($data);exit();
//        $data['property'] = $this->site_model->get_property1();
        $data['menus'] = $this->site_model->get_nested_menu();

//        $data['header_right'] = $this->header_right;
//        $data['header_right1'] = $this->header_right1;
//        $data['header_right2'] = $this->header_right2;
//        $data['header_right3'] = $this->header_right3;

        if ($title == NULL) {
            $title = $this->uri->segment(1);
        }

        $data['title1'] = $title;

        $data['get1'] = '';

        //echo $title1;


        if ($title == '' && $data['menus']) {
            $c = 3;
//            $content = $this->load->view('home_view');
//            $data['get1'] .='<div class=" min_hgt" data-scroll-index="' . $c++ . '">';
//           data['get1'] .=  $this->load->view('rates_view');
            //$data['get1'].='</div>';
            foreach ($data['menus'] as $menu) {
                $ct =$this->site_model->get_content($menu['title'])[0];
                $data['get1'] .= '<div class=" weather_cnt  min_hgt" data-scroll-index="' . $c++ . '" style="background-image:url('.$ct->bg_image.')"><div class="bnr_txt ">';
                $data['get1'] .= $ct->content;
                $data['get1'] .= '</div></div>';
            }
        }
        /* echo '<pre>';
         var_dump( $data['get1']);
         echo $title;*/
        $data['main_content'] = 'content_view';

        $this->load->view('includes/templete', $data);

    }

    public function    get_property()
    {

        $data2 = $this->uri->segment(3);
        $data['records'] = $this->site_model->get_property();

        $data['menus'] = $this->site_model->get_nested_menu();

        $data['header_right'] = $this->header_right;

        $data['header_right1'] = $this->header_right1;

        $data['header_right2'] = $this->header_right2;

        $data['header_right3'] = $this->header_right3;

        $data['rows'] = $this->site_model->get_property_description($data2);

        $data['get1'] = $this->site_model->get_content($data['title1']);
        $data['main_content'] = 'discription_view';
        $this->load->view('includes/templete', $data);

    }


    /*function get_search_result()
    {
        $req=$_REQUEST['req'];
        $field=$_REQUEST['field'];
        $this->db->like($field,$req);

        $sql = "select * from project_details where $field like '{$req}%'";

        $ans=$this->db->query($sql)->result();
        $output='<table class="tables datatable" >

        <thead >
            <tr>
                <th style="font-size:18px;">Sr. No</th>
                <th style="font-size:18px;">Project Code</th>
                <th style="font-size:18px;">Project Title</th>
                <th class="hidden-480" style="font-size:18px;">Domain</th>
                <th class="hidden-480" style="font-size:18px;">Project Type</th>
                <th style="font-size:18px;">Abstract</th>
                <th style="font-size:18px;">Synopsys</th>

            </tr>
        </thead>

        <tbody>';

            $srno=1;

            foreach($ans as $r)
            {
            $output.= '<tr>
                <td style="font-size:16px;">'.$srno++.'</td>
                <td style="font-size:16px;">'.$r->project_code.'</td>
                <td style="font-size:16px;">'.$r->title.'</td>
                <td style="font-size:16px;">'.$r->domain.'</td>
                <td style="font-size:16px;">'.$r->project_type.'</td>
                <td style="font-size:16px;"><a href="'. base_url().'site/get_download_form" target="_blank" >Download</a></td>
                <td style="font-size:16px;"><a href="'.base_url('site/get_download_form').'" target="_blank" >Download</a></td>


        </tr>';
            }
    $output.= '</tbody>

    </table>';
//echo $output;

    }

    function article()
    {
        $this->load->view('articles');
    }

    public function get_download_form()
    {
     $this->load->view('download_form');
    }

    public function add_downloaders_details()
    {
     $this->site_model->add_downloaders_details();
     $this->load->view('sms_verification');
    }

    public function download()
    {
     $this->site_model->download();

    }

    public function randomString()
    {
        $length = 4;
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";

        for ($i = 0; $i < $length; $i++)
        {
            $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $str;
    }*/


    function submit_details()
    {


        $this->load->library('form_validation');
        //field_name,error message,validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('loginId', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('coveredAreaFromId', 'Covered/Built-up Area', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('listType', 'Buy/Sell', 'required');


        if ($this->form_validation->run() == FALSE) {
            //redirect('Post_Requirement','refresh');


            $this->get_content('Post_Requirement');
        } else {
            $a = $_POST['coveredAreaFromId'];
            $area = $a . $_POST['area'];


            $data['want_to'] = $_POST['listType'];
            $data['types'] = $_POST['house'];
            $data['bedroom'] = $_POST['rooms'];
            $data['builtup_area'] = $area;
            $data['budget_min'] = $_POST['minbudget'];
            $data['budget_max'] = $_POST['maxbudget'];
            $data['name'] = $_POST['name'];
            $data['email_id'] = $_POST['loginId'];
            $data['mobile'] = $_POST['mobile'];

            $q = $this->site_model->get_details($data);
            if ($q) {

                //$this->session->set_flashdata('requeststatus','Your Request sent successfully');
                $this->submit_via_email();
                //redirect('Post_Requirement','refresh');

            } else {
                echo "Request Not Sent";
            }
        }
    }

    function submit_via_email()
    {
        $a = $_POST['coveredAreaFromId'];
        $area = $a . $_POST['area'];
        //print_r($area);exit();
        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);


        $to = "majesticfinancialservices@gmail.com";
        $from = $_REQUEST['loginId'];
        $subject = "Customer Request Received";
        $message = 'Request form filled by :' . $_REQUEST['name'];
        $message .= "\n" . 'Contact No :' . $_REQUEST['mobile'];
        $message .= "\n" . 'Email Address :' . $_REQUEST['loginId'];
        $message .= "\n" . 'I Want to :' . $_REQUEST['listType'] . ' Property';
        $message .= "\n" . 'Looking For :' . $_REQUEST['house'];
        $message .= "\n" . 'Bedrooms Required :' . $_REQUEST['rooms'] . 'BHK';
        $message .= "\n" . 'Expected Area :' . $area;
        $message .= "\n" . 'Minimum Budget :' . $_REQUEST['minbudget'];
        $message .= "\n" . 'Maximum Budget :' . $_REQUEST['maxbudget'];


        $this->email->to($to, $_REQUEST['user_name']);

        $this->email->from($from);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_flashdata('requeststatus', 'Your Request sent successfully');
        } else {
            $this->session->set_flashdata('requeststatus', $this->email->print_debugger());
        }

        redirect('Post_Requirement', 'refresh');

    }


    function send_details()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        //field_name,error message,validation rules
        $this->form_validation->set_rules('user_name', 'Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('number', 'Mobile', 'trim|required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('yes', 'Yes/No', 'required');
        if ($this->form_validation->run() == FALSE) {
            //redirect('Post_Requirement','refresh');
            //header('Location:../Home');
            $this->get_content('Home');
        } else {


            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);


            $to = "majesticfinancialservices@gmail.com";
            $from = $_REQUEST['email'];
            $subject = "Customer Request Received";
            $message = '<p> Request form fill by : ' . $_REQUEST['user_name'];
            $message .= '<br/>Contact No : ' . $_REQUEST['number'];
            $message .= '<br/>Email ID: ' . $_REQUEST['email'];
            $message .= '<br/>Loan Required: ' . $_REQUEST['yes'];
            //$contact = "";
            //$country = "";

            //$this->email->set_newline("\r\n");

            $this->email->to($to, $_REQUEST['user_name']);

            $this->email->from($from);
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                $this->session->set_flashdata('mailstatus', 'Your Request sent successfully');
            } else {
                $this->session->set_flashdata('mailstatus', $this->email->print_debugger());
            }

            header('Location:../Home');
        }

    }

}

?>
