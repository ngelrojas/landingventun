<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		header('Access-Control-Allow-Origin: *');

	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

	/*public function sendemail()
    {	
    	$config = Array(
	         'protocol'  => 'smtp',
	         'smtp_host' => 'ssl://me.com',
	         'smtp_crypto' => 'ssl',
	         'smtp_port' => 465,
	         'smtp_user' => '******', 
	         'smtp_pass' => '*****', 
	         'mailtype'  => 'html',
	         'charset'  => 'iso-8859-1',
	         'wordwrap'  => TRUE,
	         'newline' => "\r\n"
	      );

    	$this->load->library('email', $config);

    	//$csrf_token = $this->security->get_csrf_token_name();
    	// request
    	$this->form_validation->set_rules('name_email', 'Name', 'required');

        $this->form_validation->set_rules('from_email', 'Email', 'required|valid_email');

        $this->form_validation->set_rules('message_email', 'Message', 'required');

        /*$data = array(
        	'csrf_token' => $csrf_token 
        );*/
    	
    	/*if($this->form_validation->run() == TRUE){

	        $name = $_POST['name_email'];
	        $email = $_POST['from_email'];
	        $message = $_POST['message_email'];
	        // content
	        $to = 'me@ngelrojasp.com';
	        $subject = 'New message from your website';
    
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
	    	$this->email->from($email, $name);
	        $this->email->to($to);
	        $this->email->subject($subject);
	        $this->email->message($message);

	        if($this->email->send())
	        {
	            echo json_encode(array('resp' => 'ok'));
	        }
	        else
	        {
	            echo json_encode(array('resp' => 'error', 'name' => $name, 'email' => $email, 'message' => $message, 'status'=>$this->email->send()));
	        } 

    	}else{
    		    echo json_encode(array('resp' => 'error', 'name' => $name, 'email' => $email, 'message' => $message, 'status'=>$this->email->send()));
    	}*/

    public function sendemail()
    {
    	$this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
    	//
    	$this->form_validation->set_rules('name_email', 'Name', 'required');
        $this->form_validation->set_rules('from_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message_email', 'Message', 'required');
        $this->form_validation->set_rules('cell_email', 'Celphone', 'required');
    	//
    	if($this->form_validation->run() == TRUE){

			$name = $_POST['name_email'];
			$email = $_POST['from_email'];
			$message = $_POST['message_email'];
			$cell = $_POST['cell_email'];
	        // SMTP configuration
	        $mail->isSMTP();
	        $mail->Host     = 'me.com';
	        $mail->SMTPAuth = true;
	        $mail->Username = '****';
	        $mail->Password = '****';
	        $mail->SMTPSecure = 'ssl';
	        $mail->Port     = 465;
	        
	        $mail->setFrom($email);
	        //$mail->addReplyTo('me@ngelrojasp.com', 'Admin');
	        
	        // Add a recipient
	        $mail->addAddress('me@ngelrojasp.com');
	        
	        
	        // Email subject
	        $mail->Subject = 'Informacion sobre productos de Ventun';
	        
	        // Set email format to HTML
	        $mail->isHTML(true);
	        
	        // Email body content
	        $mailContent = "
	        	<p> Nombre: ".$name."</p>
	        	<p> Email: ".$email."</p>
	        	<p> Telefono o Celular: ".$cell."</p>
	            <p>".$message."</p>";
	        $mail->Body = $mailContent;
	        
	        // Send email
	        if(!$mail->send()){
	            echo 'Message could not be sent.';
	            echo 'Mailer Error: ' . $mail->ErrorInfo;
	            echo json_encode(array('resp' => false));
	            
	        }else{
	            echo json_encode(array('resp' => true));
	        }    

    	}else{
    		echo json_encode(array('resp' => false));
    	}


    }
}
