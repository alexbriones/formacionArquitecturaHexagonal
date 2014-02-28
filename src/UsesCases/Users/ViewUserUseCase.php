<?php
/**
 * Created by PhpStorm.
 * User: alex.briones
 * Date: 28/02/14
 * Time: 14:26
 */

namespace UsesCases\Users;

class ViewUserUseCase {

    /**
     * @var \Domain\UserRepository
     */
    private $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function viewUser($request)
    {
        $this->createResponse($this->findUserById($request->getId()));
    }

    public function createResponse($user)
    {
        $response = new ViewUserResponse();
        $response->user = $user;
    }

    public function findUserById($id) {
        $user = $this->userRepository->findById($id);

        return $user;
    }

} 