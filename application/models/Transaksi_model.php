<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends MY_Model
{
    public $transaksi_id;
    public $tanggal;
    public $buka;
    public $tutup;
    public $depan_buka;
    public $depan_tutup;
    public $digital_buka;
    public $digital_tutup;
    public $deep_stick_buka;
    public $deep_stick_tutup;
    public $is_pengisian;
    public $create_at;
    public $last_update;
    public $user_id;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->_table ="transaksi";
        #$this->_field_nomor_transaksi = "no_pembayaran";
    }

    public function rules()
    {
        return [
            ['field' => 'user_id',
            'label' => 'Produk',
            'rules' => 'required'],
            
            ['field' => 'tgl_transaksi',
            'label' => 'Tgl Transaksi',
            'rules' => 'required'],

            ['field' => 'datang',
            'label' => 'Datang',
            'rules' => 'numeric'],

            ['field' => 'baru',
            'label' => 'Baru',
            'rules' => 'numeric'],

            ['field' => 'lama',
            'label' => 'Lama',
            'rules' => 'numeric'],

            ['field' => 'stockawal',
            'label' => 'Stock Awal',
            'rules' => 'numeric'],

            ['field' => 'hpj',
            'label' => 'Harga Pokok Jual',
            'rules' => 'numeric'],

            ['field' => 'stockakhir',
            'label' => 'Stock Akhir',
            'rules' => 'numeric']
        ];
    }

    function data($number,$offset, $first_date, $second_date, $user_id = null){

        $this->db->where('DATE(tanggal) >=',$first_date); 
        $this->db->where('DATE(tanggal) <=',$second_date);

        
        if (!empty($user_id)) {
            $this->db->where('user_id = ' ,$user_id);
        }
        

        $this->db->order_by("tanggal", "asc");
        $this->db->select($this->_table . ".*");
        return $query = $this->db->get($this->_table,$number,$offset)->result();		
	}
 
	function jumlah_data($first_date, $second_date,$user_id = null ){
        
        $this->db->where('DATE(tanggal) >=',$first_date); 
        $this->db->where('DATE(tanggal) <=',$second_date);

        
        if (!empty($user_id)) {
            $this->db->where('user_id =',$user_id);
        }
        

        #$this->db->join('produk', 'produk.produk_id = transaksi.produk_id');
       
        #$this->output->enable_profiler(TRUE);
        #print_r($this->db->last_query());    

        return $this->db->get($this->_table)->num_rows();


    }
    
    function search_produk($nama){
        $this->db->like('nama', $nama , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('produk')->result();
    }

    public function getById($id)
    {
        $this->db->select($this->_table . ".*");
        //$this->db->join('produk', 'produk.produk_id = transaksi.produk_id');
        return $this->db->get_where($this->_table, ["transaksi_id" => $id])->row();
    }

   
    public function save(&$return_transaksi_id,&$pesan_error )
    {
        $post = $this->input->post();
        $id = $post["transaksi_id"];
        
		$this->user_id 	        = $post["user_id"];
        $this->tanggal 	        = $post["tanggal"];

        $this->buka             = 121212121212;
        $this->tutup            = null;
        $this->depan_buka       = 0;
        $this->depan_tutup      = 0;
        $this->digital_buka	    = 0;
        $this->digital_tutup    = 0;
        $this->deep_stick_buka  = 0;
        $this->deep_stick_tutup = 0;
        $this->is_pengisian     = 0;

        if ($post["buka"]) {
            $this->buka = $post["tanggal"] ."T". $post["buka"];
        }

        if ($post["tutup"]) {
            $this->tutup = $post["tutup"];
        }

        if ($post["depan_buka"]) {
            $this->depan_buka = $post["depan_buka"];
        }

        if ($post["depan_tutup"]) {
            $this->depan_tutup = $post["depan_tutup"];
        }

        if ($post["digital_buka"]) {
            $this->digital_buka = $post["digital_buka"];
        }

        if ($post["digital_tutup"]) {
            $this->digital_tutup = $post["digital_tutup"];
        }

        if ($post["deep_stick_buka"]) {
            $this->deep_stick_buka = $post["deep_stick_buka"];
        }

        if ($post["deep_stick_tutup"]) {
            $this->deep_stick_tutup = $post["deep_stick_tutup"];
        }

        if ($post["is_pengisian"]) {
            $this->is_pengisian = $post["is_pengisian"];
        }

        if ($id ==""){
            $this->transaksi_id = uniqid();
            $is_new = true;
        } else {
            $is_new = false;
            $this->transaksi_id = $id;    
        }

        $return_transaksi_id = $this->transaksi_id;
        
        if ($is_new == true) {
            log_message('Debug', "New Transaksi");
            return $this->db->insert($this->_table, $this);
        } else {
            log_message('Debug', "Update Transaksi");
            return $this->db->update($this->_table, $this, array('transaksi_id' => $id));
        }
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("transaksi_id" => $id));
    }
    
}