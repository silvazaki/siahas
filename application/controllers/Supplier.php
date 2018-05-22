<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Supplier extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_supplier');
	}

	public function index()
	{
		$data = $this->m_supplier->GetAll();

		$this->load->view('atribut/header');
		$this->load->view('v_supplier', array('data' => $data));
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		$data = $this->m_supplier->GetAll();
		$max = count($data);

		$id_supplier = "SP".$max;
		// Data Suku Cadang 
		$nama_supplier = $this -> input -> post('nama_supplier');
		$alamat_supplier = $this -> input -> post('alamat_supplier');
		
		$dataSupplier = array(
			'IDSUPPLIER' => $id_supplier,
			'NAMASUPPLIER' => $nama_supplier,
			'ALAMATSUPPLIER' => $alamat_supplier
			);

		$result = $this -> m_supplier -> insert($dataSupplier);

		redirect('Supplier');
	}

	public function ubah(){
		// Data Suku Cadang 
		$IDSUPPLIER = $this -> input -> post('IDSUPPLIER');
		$NAMASUPPLIER = $this -> input -> post('NAMASUPPLIER');
		$ALAMATSUPPLIER = $this -> input -> post('ALAMATSUPPLIER');
		
		$dataSukucadang = array(
			'NAMASUPPLIER' => $NAMASUPPLIER,
			'ALAMATSUPPLIER' => $ALAMATSUPPLIER
			);

		$result = $this -> m_supplier -> update($IDSUPPLIER, $dataSukucadang);

		redirect('Supplier');	
	}

}

?>