<?php
// require_once '../app/Services/UserService.php';

class UserController {
    private $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index() {
        $users = $this->userService->getAll();
        return json_encode($users);
    }

    public function getAll() {
        $users = $this->userService->getAll();
    }

    public function create() {
        $data = json_decode(file_get_contents('php://input'), true);
        return $this->userService->createUser($data);
    }
}
?>