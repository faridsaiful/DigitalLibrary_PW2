<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model');
    }

    public function index() {
        $search = $this->input->get('search');
        $config['base_url'] = base_url('books/index');
        $config['total_rows'] = $this->Book_model->count_books($search);
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['books'] = $this->Book_model->get_books($config['per_page'], $page, $search);
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('templates/header');
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'publisher' => $this->input->post('publisher'),
                'year' => $this->input->post('year'),
                'isbn' => $this->input->post('isbn')
            );
            
            if ($this->Book_model->create($data)) {
                $this->session->set_flashdata('success', 'Book added successfully');
                redirect('books');
            }
        }
        
        $this->load->view('templates/header');
        $this->load->view('books/create');
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $data['book'] = $this->Book_model->get_book($id);
        
        if ($this->input->post()) {
            $update_data = array(
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'publisher' => $this->input->post('publisher'),
                'year' => $this->input->post('year'),
                'isbn' => $this->input->post('isbn')
            );
            
            if ($this->Book_model->update($id, $update_data)) {
                $this->session->set_flashdata('success', 'Book updated successfully');
                redirect('books');
            }
        }
        
        $this->load->view('templates/header');
        $this->load->view('books/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id) {
        if ($this->Book_model->delete($id)) {
            $this->session->set_flashdata('success', 'Book deleted successfully');
        }
        redirect('books');
    }
}