<?php
class media extends Admin_Controller {
	var $media_path;

	function __construct()
	{
		parent::__construct();
		$this->load->model('backend/media_model');
		$this->media_path=realpath('../images/property/');
	}
	function index() 
	{			
		
		 $data['type']='others';
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='active_tab i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		
		$data['lable']='View Edit Delete Your Medias';
		$data['title']='Media';
	
		$data['count']=$this->media_model->count();
		$data['rows']=$this->media_model->get_media();
		$data['main_content']='backend/media/media_view.php';
	    $this->load->view('backend/main/templete',$data);
	}
	/*function select()
	{
			$str=$this->uri->segment(3);
			$this->select_media($str);
	}*/
	function select_media()
	{
		
		$data['type']=$this->uri->segment(4);
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='active_tab i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  
		$data['lable']='View Edit Delete Your Medias';
		$data['title']='Media';
		
	
		$data['count']=$this->media_model->count();
		$data['rows']=$this->media_model->get_selected_media($this->uri->segment(4));
		$data['main_content']='backend/media/media_view.php';
	    $this->load->view('backend/main/templete',$data);
	}
/*	function do_upload()
  	{
			
			switch($data['t']=$this->input->post('type'))
			{
				case 'banner':$type='banners';
							 break;
				case 'image':$type='images';
							break;
				case 'i_banner':$type='i_banners';
							break;			
				default:$type='others';
			}
			$config['upload_path'] = './upload/'.$type.'/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			//$config['encrypt_name']=TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				echo $this->upload->display_errors('<p>', '</p>');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$this->load->library('image_lib');
				$config['image_library'] = 'GD2';
				$config['source_image'] = $data['upload_data']['full_path'];
				$config['new_image'] = './upload/all_thumbs/';
				$config['create_thumb'] = false;
				$config['maintain_ratio'] = true;
				$config['width'] =75 ;
				$config['height'] = 50;

      $this->image_lib->initialize($config);

				if ( ! $this->image_lib->resize())
				{
    					echo $this->image_lib->display_errors();
				}
				else
				{
					$this->save_media($data,$type);
					
				}		
				//$this->index();
			}
		
		
	}
*/	
	function add()
	{


			$name=$_FILES['image']['name'];
			$tmp=$_FILES['image']['tmp_name'];
			$err=$_FILES['image']['error'];
			if($err==0)
				{
					move_uploaded_file($tmp,"images/property/".$name);
					//copy("images/news/".$name, "images/news/thumbs/".$name);

					$config['image_library'] = 'gd2';
					$config['source_image']	= "images/property/".$name;
					$config['new_image'] = "images/property/thumbs/".$name;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']	 = 75;
					$config['height']	= 50;
					$config['thumb_marker']="";
					$this->load->library('image_lib', $config); 
					$this->image_lib->resize();
					echo $this->image_lib->display_errors();

				}
		 $data['title']=$_POST['title'];
         $data['bhk']=$_POST['bhk'];
         $data['url']="images/property/".$name;
         $data['thumb_url']="images/property/thumbs/".$name;
         $data['cost']=$_POST['cost'];
           $data['type']=$_POST['type'];
             $data['area']=$_POST['area'];
                 $data['status']=$_POST['status'];
                 $data['description']=$_POST['description'];
  //     echo print_r($data);exit();
          $query=$this->media_model->addmedia($data,$_POST['id']);
			
		if($query)
		{
		 		
		redirect('backend/media','refresh');
	
		}
		else
		{
			echo "not saved";
		}

	
	}





	function add_media()
	{
		 $data['type']=$this->uri->segment(4);
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='active_tab i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		
		$data['lable']='View Edit Delete Your Medias';
		$data['title']='Add Media';
		//$data['lang']=$this->media_model->getlanguage();
		$data['count']=$this->media_model->count();
		$data['rows']=$this->media_model->get_selected_media($this->uri->segment(4));
	  $data['main_content']='backend/media/media_view';
			$this->load->view('backend/main/templete',$data);
		
	}
	/*function save_media($data1,$tp)
	{
		
		$query=$this->media_model->addmedia($data1,$tp);
			
		if($query)
		{
		 		
		redirect('backend/media','refresh');
	
		}
		else
		{
			echo "not saved";
		}
	}*/
	
	
	function delete_media()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='active_tab i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  
		$data['lable']='View Edit Delete Your Medias';
		$data['title']='Delete Media';
	    	$data1=$this->uri->segment(4);

		$data['count']=$this->media_model->count();
			$data['rows']=$this->media_model->get_selected_media($this->uri->segment(4));
		$q=$this->media_model->delete_media($data1);
		if($q)
		{
	    redirect('backend/media','refresh');
		}
		else
		{
			echo "not deleted";
		}
	  }
	
	  function edit_media()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='active_tab i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 
		$data['lable']='View Edit Delete Your Medias';
		$data['title']='Edit Media';

		

		$data1=$this->uri->segment(4);

		 $q=$this->media_model->edit($data1);
		 if($q)
		 {
		 	$data['row']=$q;
		 }
		//echo print_r($data);exit();

		 $data['main_content']='backend/media/editmedia_view.php';

		 $this->load->view('backend/main/templete',$data);
	
	}


	/*function edit()
	{


			$name=$_FILES['image']['name'];
			$tmp=$_FILES['image']['tmp_name'];
			$err=$_FILES['image']['error'];
			if($err==0)
				{
					move_uploaded_file($tmp,"images/property/".$name);
					//copy("images/news/".$name, "images/news/thumbs/".$name);

					$config['image_library'] = 'gd2';
					$config['source_image']	= "images/property/".$name;
					$config['new_image'] = "images/property/thumbs/".$name;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']	 = 75;
					$config['height']	= 50;
					$config['thumb_marker']="";
					$this->load->library('image_lib', $config); 
					$this->image_lib->resize();
					echo $this->image_lib->display_errors();

				}
		 $data['title']=$_POST['title'];
         $data['bhk']=$_POST['bhk'];
         $data['url']="images/property/".$name;
         $data['thumb_url']="images/property/thumbs/".$name;
         $data['cost']=$_POST['cost'];
           $data['type']=$_POST['type'];
             $data['area']=$_POST['area'];
                 $data['status']=$_POST['status'];
  //      echo print_r($data);exit();
          $query=$this->media_model->addmedia($data,$this->uri->segment(4));
			
		if($query)
		{
		 		
		redirect('backend/media','refresh');
	
		}
		else
		{
			echo "not saved";
		}

	
	}*/

}

?>
