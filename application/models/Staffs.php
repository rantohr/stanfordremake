<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 5/2/2019
 * Time: 12:16 PM
 */
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Staffs extends CI_Model
{
    private $id;
    private $name;
    private $job;
    private $img;

    /**
     * Staffs constructor.
     * @param $id
     * @param $name
     * @param $job
     * @param $img
     */
    public function __construct($id, $name, $job, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->job = $job;
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
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
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