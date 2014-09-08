public function get($obj_id)
{
    $this->db->where($this->idkey,$obj_id);
    $query = $this->db->get($this->table);
    return $query->row_array();
}