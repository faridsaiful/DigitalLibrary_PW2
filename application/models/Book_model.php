<?php
class Book_model extends CI_Model {
    public function get_books($limit, $offset, $search = '') {
        if ($search) {
            $this->db->like('title', $search);
            $this->db->or_like('author', $search);
        }
        $this->db->limit($limit, $offset);
        return $this->db->get('books')->result();
    }

    public function count_books($search = '') {
        if ($search) {
            $this->db->like('title', $search);
            $this->db->or_like('author', $search);
        }
        return $this->db->count_all_results('books');
    }

    public function get_book($id) {
        return $this->db->get_where('books', array('id' => $id))->row();
    }

    public function create($data) {
        return $this->db->insert('books', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('books', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('books');
    }
}