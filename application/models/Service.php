<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*******/
    public function findStaff($page,$limit)
    {
        $sql = "SELECT * from staffs limit %d,%d ";
        $sql = sprintf($sql,$page,$limit);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findAllSchool()
    {
        $sql = "SELECT * from schools";
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findAllDeptBySchool($id_sch)
    {
        $sql = "SELECT * FROM departments WHERE id_sch=%s";
        $sql = sprintf($sql,$id_sch);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findDeptById($id_dept)
    {
        $sql = "SELECT * FROM department_view WHERE id=%s";
        $sql = sprintf($sql,$id_dept);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        $response = null;
        if($ret!=null) $response = $ret[0];
        return $response;
    }

    public function findSomeDept()
    {
        $sql = "SELECT * FROM departments ORDER BY RAND() LIMIT 3;";
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findSomeStaff()
    {
        $sql = "SELECT * FROM staffs ORDER BY RAND() LIMIT 6;";
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function indextion_once()
    {
        $sql = "update departments set dep_index=concat(description,name)";
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findDeptByKey($key_word)
    {
        $sql = "SELECT * FROM departments WHERE description like '".$key_word."%' OR name like '".$key_word."%'";
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findInAdmins($username,$password)
    {
        // *PASSWORD ENCRYPTION
        $sql = "SELECT * FROM admins WHERE username like '%s' AND password like '%s'";
        $sql = sprintf($sql,$username,$password);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findSchoolByID($id_sch)
    {
        $sql = "SELECT * FROM schools WHERE id=%s";
        $sql = sprintf($sql,$id_sch);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        $response = null;
        if($ret!=null) $response = $ret[0];
        return $response;
    }

    public function setSessionDepartment(){
        $list_schools_with_dept = null;
        $list_school = $this->findAllSchool();
        $length = sizeof($list_school);
        if($length>0) $list_schools_with_dept = array();
        for ($i=0;$i<$length;$i++){
            $list_schools_with_dept[$i]['school'] = $list_school[$i];
            $list_schools_with_dept[$i]['departments'] = $this->findAllDeptBySchool($list_school[$i]['id']);
        }
        $this->session->set_userdata('depts',$list_schools_with_dept);
        //return $list_schools_with_dept;
    }

    /*******/
}