<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    /*
	public function index()
	{
		$this->load->view('welcome_message');
	}
    */

    // localhost/Codeigniter/CIview/index.php/mahasiswa
   
    public function __construct()
    {
            parent::__construct();
            echo "Selamat Siang..<br>";
            // Your own constructor code
    }


    public function index(){
        echo "Hello World Admin..";
    }

    // localhost/Codeigniter/CIview/index.php/admin/mahasiswa/

    public function cetakID($nim,$nama){
       $tahun=2021;
       echo "NIM Mahasiswa :$nim <br>";
       echo "Nama Mahasiswa :$nama <br>";
       echo "Tahun Ajaran :$tahun <br>";
    }

    // localhost/Codeigniter/CIview/index.php/mahasiswa/cetakID/M311xxx/Anjay

    public function cetakID2(){
        $nim="M311xxx";
        $nama="Anjayani";
        echo "NIM Mahasiswa :$nim <br>";
        echo "Nama Mahasiswa :$nama <br>";
     }
 
     // localhost/Codeigniter/CIview/index.php/mahasiswa/cetakID2

     /*
     public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
                return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }
    */

    public function _output($output)
    {
        //echo $output;
        echo "TI SV UNS <br>";
    }

    
}

