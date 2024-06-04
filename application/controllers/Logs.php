<?php 
    
class logs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('customer/Auth_model');
    }

    public function index() {
        $this->form_validation->set_rules('username','Username', 'required',
            array(
                'required' => 'Tidak boleh kosong',
            )
        );
        $this->form_validation->set_rules('password','Password', 'required',
        array(
            'required' => 'Tidak boleh kosong',
            )
        );
    
        if($this->form_validation->run() == FALSE) {
            $this->load->view('customer/form_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->Auth_model->prosesLogin($username,$password);
        }
           
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }
}
?>