<?php

class Mod_unduh extends CI_model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getFile($category)
    {
        echo "<script>alert('Akan Mendownload Form $category'); window.location = '".base_url()."';</script>";
    }

}