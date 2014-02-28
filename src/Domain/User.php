<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:20
 */

namespace Domain;

class User {

    private $id;

    private $name;

    private $password;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}