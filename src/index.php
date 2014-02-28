<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:54
 */

    use Infrastructure\Memory\UserRepository as UserRepository;
    use UsesCases\Users\ViewUserUseCase as ViewUserUseCase;

    $repo = new UserRepository();
    $user = new ViewUserUseCase($repo);

    var_dump($user->viewUser(1));


