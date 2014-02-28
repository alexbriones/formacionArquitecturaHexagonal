<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:36
 */

namespace Domain;

interface UserRepository {

    public function findById($id);

} 