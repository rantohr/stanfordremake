<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Model
{
	private $id;
	private $name;
	private $username;
	private $password;

	public function __construct()
	{
		parent::__construct();
	}

	public function constructor($id,$name,$username,$password)
	{
		$this->setId($id);
		$this->setName($name);
		$this->setUsername($username);
		$this->setPassword($password);
	}

/*******/
	public function testlogin($pseudo,$mdp)
	{
		$sql = "SELECT * from Admins where login ='".$pseudo."' and mdp ='".$mdp."' ";
		$resultat = $this->db->query($sql);
		$ret = $resultat->result_array();
		return $ret;
		
	}
/*******/

	public function getId(){
        return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getUsername(){
		return $this->username;
	}
	public function getPassword(){
		return $this->password;
	}

    public function setId($new)
    {
        $this->id = $new;
	}
    public function setName($new)
    {
        $this->name = $new;
    }
	public function setUsername($new)
    {
        $this->username = $new;
    }
	public function setPassword($new)
    {
        $this->password = $new;
    }
}