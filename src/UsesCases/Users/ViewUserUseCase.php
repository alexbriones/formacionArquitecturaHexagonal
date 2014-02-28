<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:26
 */

namespace UsesCases\Users;

require 'ViewUserRequest.php';
require 'ViewUserResponse.php';

class ViewUserUseCase {

    /**
     * @var \Domain\UserRepository
     */
    private $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function viewUser(ViewUserRequest $request)
    {
        return $this->createResponse($this->findUserById($request->userId));
    }

    public function createResponse($user)
    {
        $response = new ViewUserResponse();
        $response->user = $user;

        return $response;
    }

    public function findUserById($id) {
        $user = $this->userRepository->findById($id);

        return $user;
    }

} 