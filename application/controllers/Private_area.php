<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
 private $base_url0="http://alivepages.com/test2"; 
 public function __construct()
 {
  parent::__construct();

  if(false && !$this->session->userdata('id'))
  {
   //redirect('login');

   @header("Location: ".$this->base_url0."/login");
   die();
  }
 }

 function index()
 {
  echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
  echo '<p align="center"><a href="'.$this->base_url0.'private_area/logout">Logout</a></p>';
 }

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  @header("Location: ".$this->base_url0."/login");
   die();
 }
}

?>
