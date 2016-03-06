<?php

class site_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    public function get_nested_menu()
    {

        $this->db->where('status','active');
        $menus = $this->db->get('menu')->result_array();
        $array = array();
        if ($menus) {
            foreach ($menus as $menu) {
                if (!$menu['parent_id']) {
                    $array[$menu['id']] = $menu;
                } else {
                    $array[$menu['parent_id']]['children'][] = $menu;
                }
            }
        }
        return $array;
    }


    function get_content($da)
    {

        $array1 = array(
            'title' => $da,

        );
        $this->db->where($array1);
        $q = $this->db->get('pages');
        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    function get_property($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $q = $this->db->get('media');

        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    function get_property1()
    {

        $sql = "SELECT * FROM media order by media.id DESC LIMIT 0, 1";

        $q = $this->db->query($sql)->result();
        return $q;
    }


    function get_property_description($data2)
    {

        $this->db->where('id', $data2);
        return $this->db->get('media')->row();


    }


    function get_details($data)
    {

        $result = $this->db->insert('requirement', $data);

        return $result;
    }


    function get_header_right()
    {
        $this->db->where('position', 'header_right');
        $this->db->where('status', 'active');
        $q = $this->db->get('blocks');
        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    function get_header_right1()
    {
        $this->db->where('position', 'header_right1');
        $this->db->where('status', 'active');
        $q = $this->db->get('blocks');
        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    function get_header_right2()
    {
        $this->db->where('position', 'header_right2');
        $this->db->where('status', 'active');
        $q = $this->db->get('blocks');
        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    function get_header_right3()
    {
        $this->db->where('position', 'header_right3');
        $this->db->where('status', 'active');
        $q = $this->db->get('blocks');
        if ($q->num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    /*function get_news()
        {
           $q=$this->db->get('articles');

            if($q->num_rows>0)
            {
                foreach($q->result() as $rows)
                {
                    $data[]=$rows;
                }
                return $data;
            }
        }

        function add_downloaders_details()
        {
            $data=array(
            'mob_no'=>$this->input->post('mob_no')
            );

            $q=$this->db->insert('downloaders',$data);
            return $q;
        }





        function download()
        {

        }*/

}

?>