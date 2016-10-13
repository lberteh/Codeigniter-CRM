<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

    $this->load->view('login_view');

	}

  public function to_login() {



    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == FALSE) {

      $data = array(

        'errors' => validation_errors()

      );

      $this->session->set_flashdata($data);

      redirect('index.php/Login');

    } else {

        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        // storing columns in variables
        $user_info = $this->Login_model->login_user($email, $password);
  //      $first_name = $this->Login_model->login_user($email, $password)->first_name;
	//			$admin = $this->Login_model->login_user($email, $password)->admin;

        if($user_info) {

					$user_id = $user_info->user_id; // Access the object's property
    			$first_name = $user_info->first_name; // Might as well set the first name as well
					$admin = $user_info->admin;
					$avatar = $user_info->avatar;

          $user_data = array(

            'user_id'    => $user_id,
            'first_name' => $first_name,
						'admin'      => $admin,
						'avatar'     => $avatar,
            'logged_in'  => true

          );

          $this->session->set_userdata($user_data);

					if($admin == 1) {

						redirect('Admin');

					}

					else {

						redirect('Prospects');

					}


        } else {

          $this->session->set_flashdata('login_fail', 'Invalid login. Please check the email and password fields.');
          redirect('index.php/Login');


        }

    }

  }

  public function to_logout() {

    $this->session->sess_destroy();

    redirect('index.php/Login');

  }

}
