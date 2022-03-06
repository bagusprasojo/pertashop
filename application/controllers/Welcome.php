<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
		$this->load->model("user_model");
		// Inisialisasi usermodel
                
        
            
    }
	public function index()
	{
		if($this->user_model->isNotLogin()) {
			$data['show_dashboard'] 		= 0;
			$data['total_piutang'] 			= 0;
			$data['jumlah_pembeli'] 		= 0;
			$data['pembayaran_hari_ini'] 	= 0;
			$data['unsettled_payment'] 		= 0;
			
		} else {	
			$this->load->model("transaksi_model");
			$this->load->model("pembeli_model");
			$this->load->model("pembayaran_model");

			$number = 1000;
			$offset = 0;
			$first_date = date('Y-m-01'); 
			$second_date = date('Y-m-t'); 
			$user_id = null;// $_SESSION['user_logged']->user_id;

			$data['show_dashboard'] 		= 1;
			$data['transaksis'] 			= $this->transaksi_model->data($number,$offset, $first_date, $second_date, $user_id);
			
			//echo $first_date . "<br>";
			//echo $this->db->last_query();
		}

		$this->load->view('welcome_message', $data);
	}
}
