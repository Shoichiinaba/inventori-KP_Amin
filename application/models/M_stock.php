<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stock extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
    }

    function get_stock(){

        return $this->db->get('tb_barang_masuk')->result();
        }


}



 ?>
