<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 5/2/2019
 * Time: 12:20 PM
 */
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Departments extends CI_Model
{
    private $id;
    private $name;
    private $id_sch;
    private $director;
    private $founded_in;
    private $description;
    private $img;

    /**
     * Departments constructor.
     * @param $id
     * @param $name
     * @param $id_sch
     * @param $director
     * @param $founded_in
     * @param $description
     * @param $img
     */
    public function __construct($id, $name, $id_sch, $director, $founded_in, $description, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->id_sch = $id_sch;
        $this->director = $director;
        $this->founded_in = $founded_in;
        $this->description = $description;
        $this->img = $img;
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

    /**
     * @return mixed
     */
    public function getIdSch()
    {
        return $this->id_sch;
    }

    /**
     * @param mixed $id_sch
     */
    public function setIdSch($id_sch)
    {
        $this->id_sch = $id_sch;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return mixed
     */
    public function getFoundedIn()
    {
        return $this->founded_in;
    }

    /**
     * @param mixed $founded_in
     */
    public function setFoundedIn($founded_in)
    {
        $this->founded_in = $founded_in;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

}