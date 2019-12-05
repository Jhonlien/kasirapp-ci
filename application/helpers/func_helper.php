<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('format_rupiah')){
    function format_rupiah($data){
        $format = "Rp. ". number_format($data,0,'.',',');
        return $format;
    }
}