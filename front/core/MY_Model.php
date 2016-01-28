<?php
    /**
     * @MY_Model 
	 * 
	 * custom model class for basic crud 
     */
    class MY_Model extends CI_Model {
        protected $_tab_name='';
		protected $_pri_key='id';
		protected $_pri_filter='intval';
		protected $_order_by='';
		public $_rules=array();
		protected $_timestamp=FALSE;
		public $language=array();
		
        function __construct() {
            parent::__construct();
        }
		public function array_from_post($value)
		{
			$data=array();
			foreach ($value as $field) {
				$data[$field]=$this->input->post($field);
			}
			return $data;
		}
		public function get($id=NULL,$single=FALSE)
		{
			if($id!=NULL)
			{
				$filter=$this->_pri_filter;
				$id=$filter($id);
				$this->db->where($this->_pri_key,$id);
				$method='row';
			}elseif($single==TRUE)
			{
				$method='row';
			}else
			{
				$method='result';	
			}
			if(!count($this->db->ar_orderby))
			{
				$this->db->order_by($this->_order_by);
			}
			return $this->db->get($this->_tab_name)->$method();
		}
		public function get_by($where,$sing=FALSE)
		{
			$this->db->where($where);
			return $this->get(NULL,$sing);
			
		}
		public function save($data,$id=NULL)
		{
			//timestamp
			if ($this->_timestamp==TRUE) {
				$now=date('Y-m-d H:i:s');
				$id||$data['created']=$now;
				$data['modified']=$now;
			}
			//insert save
			if($id===NULL)
			{
				!isset($data[$this->_pri_key])||$data[$this->_pri_key]=NULL;
				$this->db->set($data);
				$this->db->insert($this->_tab_name);
				$id=$this->db->insert_id();
			}//update
			else
			{
				$filter=$this->_pri_filter;
				$id=$filter($id);
				$this->db->set($data);
				$this->db->where($this->_pri_key,$id);
				$this->db->update($this->_tab_name);	
			}
			return $id;
		}
		public function delete($id)
		{
			$filter=$this->_pri_filter;
			$id=$filter($id);
			if(!$id)
			{
				return FALSE;
			}
			$this->db->where($this->_pri_key,$id);
			$this->db->limit(1);
			$this->db->delete($this->_tab_name);
		}
		
		
		
    }
    
