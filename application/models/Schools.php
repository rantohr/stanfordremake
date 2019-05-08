<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 5/2/2019
 * Time: 12:18 PM
 */
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Schools extends CI_Model
{
    private $id;
    private $name;

    /**
     * Schools constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}