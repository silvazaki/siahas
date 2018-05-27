<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('v_home');
		$this->load->view('atribut/footer');
	}

	public function call(){
		$this->load->library("Nusoap_lib","");
		//$api_url = WEBSERVICE_URL; // ex. http://www.example.com/index.php/soapserver
		//$api_username = AUTHENTICATION USERNAME;
		//$api_password = AUTHENTICATION PASSWORD;

		// ex. http://www.example.com/index.php/soapserver
		$api_url = "http://localhost:8080/CalculatorApp/CalculatorWSService?wsdl"; 
		
		$api_username = "xxx";
		$api_password = "xxx";

		// $service = "addnumbers"; // from my POST <a href="http://www.php-guru.in/2013/soap-server-in-codeigniter-using-nusoap-library/" target="_blank">SOAP Server In CodeIgniter using NuSOAP PHP Toolkit</a>
		$service = "add"; // from my POST <a href="http://www.php-guru.in/2013/soap-server-in-codeigniter-using-nusoap-library/" target="_blank">SOAP Server In CodeIgniter using NuSOAP PHP Toolkit</a>
		// $params = array('a' => 5, 'b' => 10); // input parameters to "addnumbers" medhod
		$params = array('value1' => 5, 'value2' => 10);
		?>
		<h2>hey</h2>
		<?php
		
		if ($api_url != ''){
			// $result = $this->nusoap_library->soaprequest($api_url, $api_username, $api_password, trim($service), $params);
			$result = $this->nusoap->soaprequest($api_url, $api_username, $api_password, trim($service), $params);
			if (is_array($result) && count($result) > 0){
				print_r($result);
				echo "<h1>$result</h1>";
			}
		}
	}

}

?>