<?php
require_once '../vendor/autoload.php'; // Ensure Composer autoload is included

use App\Controllers\UserController;
use App\Services\UserService;
use App\Repositories\UserRepository;

$userController = new UserController(new UserService(new UserRepository()));

$users = $userController->index();
header('Content-Type: application/json');
echo json_encode($users);
?>