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
        $this->load->model('Service');
        $service = new Service();
        $output = $service->findAllDept();
        $listSch = $service->findAllSchool();
        $view_data = array(
            'page' => 'departments',
            'output' => $output,
            'listSch' => $listSch
        );
        $this->load->view('back/index-back',$view_data);
    }

    public function go_add()
    {
        $this->load->model('Service');
        $service = new Service();
        $listSch = $service->findAllSchool();
        $view_data = array(
            'page' => 'create',
            'listSch' => $listSch
        );
        $this->load->view('back/index-back',$view_data);
    }

    public function addDept()
    {
        $this->load->model('Service');
        $service = new Service();
        $data = array(
            'name' => $this->input->post('name'),
            'id_sch' => $this->input->post('id_sch'),
            'director' => $this->input->post('director'),
            'founded_in' => $this->input->post('fi'),
            //'img' => $this->input->post('img'),
            'description' => $this->input->post('description')
        );
        $service->addDept($data);
        redirect(base_url().'Administrator/');
    }

    public function updateDept()
    {
        $this->load->model('Service');
        $service = new Service();
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'id_sch' => $this->input->post('id_sch'),
            'director' => $this->input->post('director'),
            'founded_in' => $this->input->post('fi'),
            'description' => $this->input->post('description'),
            'img' => $this->input->post('img')
        );
        $service->updateDept($id,$data);
        redirect(base_url().'Administrator/');
    }

    public function deleteDept()
    {
        $this->load->model('Service');
        $service = new Service();
        $id = $this->input->post('id');
        $service->deleteDept($id);
        redirect(base_url().'Administrator/');
    }

}