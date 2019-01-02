<?php
/**
 *
 */
class Grievance_controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');

  }
  public function index()
  {

    $this->load->view('Grievance_view');
  }
  public function view1()
  {
    $this->load->view('Grievance_view1');
  }
}
/**
 *
 */






 ?>
