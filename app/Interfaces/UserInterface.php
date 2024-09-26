<?php
namespace App\Repositories;

interface UserInterface
{
 /*
 Regresa un arreglo con los datos
 @return array
 */
 public function getAll();
 /*
 Crea un nuevo usuario
 @param array $userData
 @return true or false
 */
 public function create(array $userData);
}
?>