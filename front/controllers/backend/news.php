<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends Admin_Controller {
	  var $media_path;
	function __construct()
	{
		parent::__construct();
	 $this->load->model('backend/news_model');
	 $this->media_path=realpath('../images/news/');
	}
	
	function index() 
	{	 $data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

		$data['rows']=$this->news_model->get_news();
		 $data['main_content']='backend/news/news_view.php';
		 $this->load->view('backend/main/templete',$data);
	}
	
	function add_news()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

		$data['rows']=$this->news_model->get_category();
		
		 $data['main_content']='backend/news/add_news.php';

		 $this->load->view('backend/main/templete',$data);
	
	}

	function article_created()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

			$name=$_FILES['image']['name'];
			$tmp=$_FILES['image']['tmp_name'];
			$err=$_FILES['image']['error'];
			if($err==0)
				{
					move_uploaded_file($tmp,"images/news/".$name);
					//copy("images/news/".$name, "images/news/thumbs/".$name);

					$config['image_library'] = 'gd2';
					$config['source_image']	= "images/news/".$name;
					$config['new_image'] = "images/news/thumbs/".$name;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']	 = 75;
					$config['height']	= 50;
					$config['thumb_marker']="";
					$this->load->library('image_lib', $config); 
					$this->image_lib->resize();
					echo $this->image_lib->display_errors();

				}
		 $data['cat']=$_POST['category'];
         $data['tit']=$_POST['title'];
         $data['img']="images/news/".$name;
         $data['thumb']="images/news/thumbs/".$name;
         $data['cont']=$_POST['contents'];

	//echo print_r($data);exit();
		 $data['main_content']='backend/news/article_created.php';

		 $this->load->view('backend/main/templete',$data);
	}

function add_category()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';
		
		 $data['main_content']='backend/news/add_category.php';

		 $this->load->view('backend/main/templete',$data);
		}

	function category_created()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';
	
		 $data['cat']=$_POST['cat'];
  		 $data['main_content']='backend/news/category_created.php';
		 $this->load->view('backend/main/templete',$data);

	}

		function remove_category()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

		$data['rows']=$this->news_model->get_category();
		
		 $data['main_content']='backend/news/remove_category.php';

		 $this->load->view('backend/main/templete',$data);
	
	}

	function category_removed()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';
	
		 $data['cat']=$_POST['category'];

  		 $data['main_content']='backend/news/category_removed.php';
		 $this->load->view('backend/main/templete',$data);

	}

	function delete_news()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

	//	$data['rows']=$this->news_model->get_category();
		
		 $data['main_content']='backend/news/delete_news.php';

		 $this->load->view('backend/main/templete',$data);
	
	}

	function edit_news()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

		

		$data1=$this->uri->segment(4);

		 $q=$this->news_model->edit($data1);
		 if($q)
		 {
		 	$data['row']=$q;
		 }
		//echo print_r($data);exit();

		 $data['main_content']='backend/news/edit_news.php';

		 $this->load->view('backend/main/templete',$data);
	
	}

	function article_edited()
	{
		$data['type']='';
		 $data['title']='News';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='active_tab i_21_ui';
		 $data['lable']='View Edit Delete our News';

			$name=$_FILES['image']['name'];
			$tmp=$_FILES['image']['tmp_name'];
			$err=$_FILES['image']['error'];
			if($err==0)
				{
					move_uploaded_file($tmp,"images/news/".$name);
				}
		$data['id']=$_POST['id'];		
		 $data['cat']=$_POST['category'];
         $data['tit']=$_POST['title'];
         $data['img']="images/news/".$name;
         $data['cont']=$_POST['contents'];

	//echo print_r($data);exit();
		 $data['main_content']='backend/news/article_edited.php';

		 $this->load->view('backend/main/templete',$data);
	}


}

?>
