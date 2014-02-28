<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:54
 */

    require 'Infrastructure/Memory/UserRepository.php';
    require 'UsesCases/Users/ViewUserUseCase.php';

    use Infrastructure\Memory\UserRepository as UserRepository;
    use UsesCases\Users\ViewUserUseCase as ViewUserUseCase;

    $repo = new UserRepository();
    $user = new ViewUserUseCase($repo);
    $request = new \UsesCases\Users\ViewUserRequest();
    $request->userId = '1';

    var_dump($user->viewUser($request));


