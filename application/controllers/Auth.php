<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $data['title'] = 'Login Page';

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['username' => $username])->row_array();
        //jika usernya ada
        if ($users) {
            //jika usernya aktif
            if ($users['is_active'] == 1) {
                //cek password
                if (password_verify($password, $users['password'])) {
                    $data = [
                        'username' => $users['username'],
                        'email' => $users['email'],
                        'role_id' => $users['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($users['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('pegawai');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email belum aktif</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">User tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            [
                'valid_email' => 'Email not valid'
            ]
        );
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches' => 'Password tidak cocok!',
                'min_length' => 'Password minimal 6 karakter!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Konfirmasi password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'user registration';
            $this->load->view('auth/registration');
        } else {
            $nama =  $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password =  password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $role_id = 3;
            $is_active = 0;
            $date_created = time();
            $update_created = time();

            $data = [
                'nama_lengkap' => $nama,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'role_id' => $role_id,
                'is_active' => $is_active,
                'date_created' => $date_created,
                'update_created' => $update_created
            ];

            $this->db->insert('users', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun berhasil dibuat !
		  </div>');
            redirect('auth/index');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
			Logout Berhasil !
		  </div>');
        redirect('auth');
    }
}
