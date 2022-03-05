<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $_SESSION['halaman_terakhir'] = "transaksi";
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        #$this->load->model("pembayaran_model");
        $this->load->model("transaksi_model");        
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_POST['btn_submit'])) {
			$data['user_id'] = $this->input->post('user_id');
            $data['tanggal1'] = $this->input->post('tanggal1');
            $data['tanggal2'] = $this->input->post('tanggal2');

			// se session userdata untuk pencarian, untuk paging pencarian
			//$this->session->set_userdata('sess_nama', $data['nama']);
            $this->session->set_userdata('sess_tanggal1', $data['tanggal1']);
            $this->session->set_userdata('sess_tanggal2', $data['tanggal2']);
		}
		else {
			$data['user_id'] = $_SESSION['user_logged']->user_id;

            if ($this->session->userdata('sess_tanggal1')==""){
                $data['tanggal1'] = date("Y-m-01");    
            } else {
                $data['tanggal1'] = $this->session->userdata('sess_tanggal1');
            }

            if ($this->session->userdata('sess_tanggal2')==""){
                $data['tanggal2'] = date("Y-m-d");    
            } else {
                $data['tanggal2'] = $this->session->userdata('sess_tanggal2');
            }
		}

        $from  = $this->uri->segment(3);
        
        
        $jumlah_data = $this->transaksi_model->jumlah_data($data['tanggal1'],$data['tanggal2'], $data['user_id']);

        #echo "from : " . $from . "<br>";
        #echo "tgl1 : " . $tgl1 . "<br>";
        #echo "tgl1 : " . $jumlah_data . "<br>";

		$this->load->library('pagination');
		$config['base_url']     = base_url().'index.php/buka/index/';
		$config['total_rows']   = $jumlah_data;
        $config['per_page']     = 3;

        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_open'] = '</span></li>';

		$this->pagination->initialize($config);
        $data['transaksis'] = $this->transaksi_model->data($config['per_page'],$from,$data['tanggal1'],$data['tanggal2'], $data['user_id']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_transaksi_list_buka", $data);
    }

    public function add_test()
    {
        $post = $this->input->post();
        echo "Buka : " . $post["tanggal"] . "<br>";
        echo "Buka : " ."2022-02-16T18:38" . "<br>";
        echo "Buka : " . $post["tanggal"] ."T". $post["buka"];

    }

    public function add($id=null)
    { 
        $transaksi = $this->transaksi_model;
        //$validation = $this->form_validation;
        //$validation->set_rules($transaksi->rules());

        $post = $this->input->post();

        if ($post){
            $id = $post["transaksi_id"];    

            $this->db->trans_begin();
            
            if ($transaksi->save($return_transaksi_id, $pesan_error)) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                $this->db->trans_commit();
                
                redirect('buka');
                // return true;
            }  else {
                $data["salah"] = $pesan_error;
                $this->load->view("v_error", $data);
            }
            
            if ($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
            }
        } else {

            $transaksi->tanggal = date("Y-m-d");
    		$data["transaksi"] = $transaksi;
            
            //$data["nama_produk"]   = "";
            //$data["kode_produk"]   = "";

            $this->load->view("v_transaksi_input_buka", $data);
        }
    }

    public function edit($id = null, $is_tutup=null)
    {
        if (!isset($id)) redirect('buka');
       
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["transaksi"] = $transaksi->getById($id);
        $data["is_tutup"] = $is_tutup;
        if (!$data["transaksi"]) show_404();
        

        //$data["nama_produk"]   = $data["transaksi"]->nama_produk;
        //$data["kode_produk"]   = $data["transaksi"]->kode_produk;
        $this->load->view("v_transaksi_input_buka", $data);
    }

    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->db->trans_begin();        
        if ($this->transaksi_model->delete($id)) {
            $this->db->trans_commit();
            redirect(site_url('buka'));
        }

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
        }
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->transaksi_model->search_produk($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'         => $row->nama,
                        'description'   => $row->produk_id,
                        'kode'          => $row->kode,
                 );
                    echo json_encode($arr_result);
            }
        }
    }
}