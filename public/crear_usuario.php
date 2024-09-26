<?php
require_once '../app/Controllers/UserController.php';
require_once '../app/Services/UserService.php';
require_once '../app/repositories/UserRepository';

$input = json.decode(file_get_contents('php://input'),true); # guarda lo del form en formato array
$userController = new UserController(new UserService(new UserRepository()));
$response = $userController->create($input);

header('Content-Type: application/json');
echo json_encode(['message' => $response]);
?>