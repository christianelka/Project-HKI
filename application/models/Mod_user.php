<?php

class Mod_user extends CI_model {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function login($uname)
    {
        if(!$this->session->has_userdata('data_user')){

            $validator = $this->db->get_where('dummy', ['uname' => $uname]);
            if($validator->num_rows() > 0){
                $this->session->set_userdata('data_user', $validator->result_array());
                $data_ses = $this->session->userdata('data_user')[0];
                // var_dump($data_ses);

                if($data_ses['level'] == 0){
                    redirect(base_url());
                }elseif ($data_ses['level'] >= 1 and $data_ses['level'] < 3) {
                    redirect(base_url()."admin/dashboard");
                }else{
                    echo "<script>alert('Sistem tidak mengenali role mu'); window.location = '".base_url()."user/logout';</script>";
                }

            }else{ 
                echo "<script>alert('Username Salah / Tidak Ada'); window.location = '".base_url()."';</script>";
                // echo "Username Salah / Tidak Ada";
            }

        }else {
            echo "<script>alert('Anda Sudah Login'); window.location = '".base_url()."';</script>";
        }
        
        
        


    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}