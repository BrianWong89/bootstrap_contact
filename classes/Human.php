<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 25/10/2017
 * Time: 6:53 PM
 */

class Human
{
    private $name;
    private $dateofbirth;

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
    public function getDateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * @param mixed $dateofbirth
     */
    public function setDateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    }

    public function calculateAge()
    {
        //Calculate the age with $this->dateOfBirth
        $this->dateofbirth;
        $today = date("d-m-Y");
        $diff = date_diff(date_create($this->dateofbirth), date_create($today));
        return $diff->format('%y');
    }

}
