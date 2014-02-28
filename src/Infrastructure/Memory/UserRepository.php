<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:49
 */

namespace Infrastructure\Memory;


class UserRepository implements \Domain\UserRepository
{

    public function findById($id)
    {
        $users = array ('1'=>'alex','2'=>'alfonso');

        return $users[$id];
    }

} 