<?php
class Data extends CI_Model
{
    // get 
    public function get_data_limit($db,$limit,$sid,$order='desc')
    {
        $this->db->limit($limit);
        $this->db->order_by($sid,$order);
        return $this->db->get($db);
    }
    public function get_data($db,$sid,$order='desc')
    {
        $this->db->order_by($sid,$order);
        return $this->db->get($db);
    }
    public function get_search($val)
    {
        $this->db->like('s_tags',$val);
        $this->db->or_like('s_title',$val);
        $this->db->or_like('s_ar_title',$val);
        $this->db->order_by('s_id','desc');
        return $this->db->get('services');
    }
    public function get_data_where($db,$where,$sid,$order='desc')
    {
        $this->db->where($where);
        $this->db->order_by($sid,$order);
        return $this->db->get($db);
    }
    // get 

    // insert
    public function insert_data($db,$set)
    {
        $this->db->insert($db,$set);
    }
    public function last_insert_id($db,$set)
    {
        $this->db->insert($db,$set);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    // insert

    // update
    public function update_data($db,$set,$where)
    {
        $this->db->where($where);
        $this->db->update($db,$set);
    }
    public function sset()
    {
        $r = rand(1, 3);
        $r2 = rand(1, 3);
        $r3 = rand(1, 3);
        $this->db->set('s_km', 's_km+'.$r, FALSE);
        $this->db->set('s_dlev', 's_dlev+'.$r2, FALSE);
        $this->db->set('s_clients', 's_clients+'.$r3, FALSE);
        $this->db->where('s_id', 1);
        $this->db->update('settings');
    }
    // update

    // delete
    public function delete_data($db,$where)
    {
        $this->db->where($where);
        $this->db->delete($db);
    }
    // delete
}
