<?php
require_once '../Controllers/UserController.php';
$userController = new UserController(new UserService(new UserRepository()));

switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $userController->create();
        break;
}
?>