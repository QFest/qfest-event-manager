<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends QFest_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{$data = array();
		$data['error']="";
		if(isset($_POST) && !empty($_POST['master']))
		{ 

				require_once(APPPATH."/config/credentials.php");
				if($master_pass	== $_POST['master'])
			file_put_contents(APPPATH."/config/credentials.php","<?php 
				//access credentials
 \$access_user= '{$_POST['username']}';
 \$access_pass	= '{$_POST['password']}';
 \$master_pass	= '{$_POST['master']}';");
		else $data['error']="Wrong master password. contact the admin";
		}
		$this->load->view('welcome_message',$data);
	}
public function test_email()
{
$r = "";
if(isset($_GET["e"]))
{
$r=$_GET["e"];
}
if($r=="")
{
echo 'need an email id.';
}
else
{
$this->load->library('email');
$config['protocol'] = 'smtp';
$config['charset'] = 'utf-8';
$config['smtp_crypto'] = 'ssl';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'support@bodhiofficial.in';
$config['smtp_pass'] = 'CatchMeIfYouCan07';
$config['smtp_port'] = '465';

$this->email->initialize($config);
$this->email->set_newline("\r\n");
				$this->email->from('support@bodhiofficial.in', 'Bodhi2k13');
				$this->email->to($r);
				$this->email->subject("mail send for trial");
				$this->email->message("Hello, send for testing smtp.");
				$this->email->send();
echo $this->email->print_debugger();
}
}
}