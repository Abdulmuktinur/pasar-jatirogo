<?php

function cek_sudah_login(){
    $ci=& get_instance();
    $user_session = $ci->session->userdata('admin_id');
    if($user_session){
        redirect('pegawai');
    }
}

function cek_belum_logi(){
    $ci =& get_instance();
    $user_session =$ci->session->userdata('admin_id');
    if(!$user_session){
        redirect('login');
    }
}
