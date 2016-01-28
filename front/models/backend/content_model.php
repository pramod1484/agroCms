<?php

class content_model extends MY_Model {

    function get_pages() {
        //$this->db->where('status','1');
        $q = $this->db->get('pages');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function get_selected_page($str) {
        $this->db->where('status', $str);
        $q = $this->db->get('pages');

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function count() {

        $this->db->where('status', 'active');
        $q = $this->db->get('pages');
        $data['acount'] = $q->num_rows();
        $this->db->where('status', 'inactive');
        $q = $this->db->get('pages');
        $data['incount'] = $q->num_rows();
        $q = $this->db->get('pages');
        $data['allcount'] = $q->num_rows();
        return $data;
    }
    function save_domain()
    {
        $this->db->insert('domains',array('domain_name'=>$this->input->post('domain')));
    }
     function save_type()
    {
        $this->db->insert('types',array('name'=>$this->input->post('type')));
    }
    function add() {
        $data = array(
            'title' => str_replace(' ', '_', $this->input->post('title')),
            'content' => $this->input->post('content'),
            'meta_keyword' => $this->input->post('meta_keyword'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_discription' => $this->input->post('meta_discription'),
            'permalink' => $this->input->post('permalink'),
            'date_of_modify' => $this->input->post('date'),
                //	'region'=>$this->input->post('language')
        );

        $q = $this->db->insert('pages', $data);
        $this->setting_model->write_log("Added " . $this->input->post('title') . " page");
        return $q;
    }

    function edit($data) {

        $this->db->where('id', $data);
        $q = $this->db->get('pages');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data = $row;
            }
            return $data;
        }
    }

    function update_pages($data1) {
        $data = array(
            'title' => str_replace(' ', '_', $this->input->post('title')),
            'content' => $this->input->post('content'),
            'meta_keyword' => $this->input->post('meta_key'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_discription' => $this->input->post('meta_disc'),
            'permalink' => $this->input->post('permalink'),
            'date_of_modify' => $this->input->post('date')
        );

        $this->db->where('id', $data1);
        $q = $this->db->update('pages', $data);
        $this->setting_model->write_log("Edited" . $this->input->post('title') . " page");
        return $q;
    }

    function deletepage($data) {
        $this->db->where('title', $data);
        $q = $this->db->delete('pages');
        if ($q) {
            $this->db->where('title', $data);
            $q = $this->db->delete('menu');
            return $q;
        }
    }

    function publish($data1) {
        //echo $data1;

        $this->db->select('status');
        $this->db->where('id', $data1);
        $this->db->limit(1);
        $ans = $this->db->get('pages');
        return $ans->row('status');
    }

    function update_publish($data, $s) {
        // echo $s;
        $data1 = array(
            'status' => $s
        );
        $this->db->where('id', $data);
        $query = $this->db->update('pages', $data1);
        return $query;
    }

    function save_project($syn, $base) {
        $domain = implode(',', $this->input->post('domain'));

        if (!$this->input->post('id')) {
            $str = 'DKT';
            $str.=substr($this->input->post('type'), 0, 2);
            $str.=substr($this->input->post('year'), 2);
            $this->db->select('project_id');
            $this->db->order_by('project_id desc');
            $this->db->limit(1);
            $id = $this->db->get('project_details')->row()->project_id;
            $str.=$id + 1;
        } else {

            $str = $this->input->post('project_code');
        }
        $data = array('project_code' => $str,
            'project_type' => $this->input->post('type'),
            'title' => $this->input->post('title'),
            'domain' => $domain,
            'year' => $this->input->post('year'),
            'synopsis' => 'upload/' . $syn['upload_data']['file_name'],
            'basepaper' => 'upload/' . $base['upload_data']['file_name']
        );
        if ($id = $this->input->post('id')) {
            //  print_r($data);
            //echo $id;
            $this->db->where('project_id', $id);
            $this->db->update('project_details', $data);
        } else {
            $this->db->insert('project_details', $data);
        }
    }

}

?>
