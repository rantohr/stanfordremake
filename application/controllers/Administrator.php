<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 5/2/2019
 * Time: 5:10 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $this->load->model('Service');
        $service = new Service();
        if($this->session->userdata('admin')==null) $this->load->view('back/signin');
        else redirect(base_url().'Administrator/Departments-Manager/');
    }

    public function login()
    {
        $this->load->model('Service');
        $service = new Service();
        $username = $this->input->get('username');
        $password = $this->input->get('password');
        $user = $service->findInAdmins($username,$password);
        if($user!=null){
            // *USE TOKEN
            $this->session->set_userdata('admin',$user);
            redirect(base_url().'Administrator/Departments-Manager/');
        }
        else redirect(base_url().'login-error/');
    }

    public function login_error(){
        $errors = array(
            'error'=>'wrong information'
        );
        $this->load->view('back/signin',$errors);
    }

    public function loadLog()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //echo (base_url().'login/'.$username.'/'.$password);
        redirect(base_url().'login/'.$username.'/'.$password, 'refresh');
    }

    public function logout()
    {
        $this->session->unset_userdata('admin');
        redirect(base_url().'Administrator/');
    }

    public function departments()
    {
        //$this->load->library('grocery_CRUD');
        $this->load->model('Service');
        $service = new Service();
        $crud = new grocery_CRUD();
        $crud->set_table('departments');
        $crud->display_as('id_sch','School');
        $crud->set_subject('Department');
        $crud->set_relation('id_sch','schools','name');
        $crud->unset_columns(array('dep_index','img'));
        $output = $crud->render();

        $view_data = array(
            'page' => 'departments',
            'output' => $output
        );
        //$this->load->view('back/index-back',$view_data);
        $this->load->view('back/index-back',$output);
    }

    function arrayToObject($d) {
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return (object) array_map(__FUNCTION__, $d);
        }
        else {
            // Return object
            return $d;
        }
    }

    public function dashboard()
    {
        $this->load->model('Service');
        $service = new Service();

        $view_data = array(
            'page' => 'dashboard'
        );
        $this->load->view('back/index-back',$view_data);
    }

}