<?php
  namespace App\Repositories;
  require_once __DIR__ . '/../Interfaces/UserInterface.php';
  //require_once '../../config/database.php';

  class UserRepository implements UserInterface {
    private $db;

    public function __construct(){
      $this->db = $db;
    }
    
    public function getAll(){
      $queryAll = $this->db->query('SELECT * FROM usuarios');
      return $queryAll->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $userData){
      $queryInsert = $this->db->prepare('INSERT INTO usuarios(nombre, apaterno, amaterno, direccion, telefono, ciudad, usuario, password, rol) VALUES (:nombre, :apaterno, :amaterno, :direccion, :telefono, :ciudad, :usuario, :password, :rol)');
        return $queryInsert->execute($userData);
    }

    /*
    public function __construct() {
        $config = require 'config/database.php';
        $this->db = new PDO(
          "mysql:host={$config['host']};dbname={$config['database']}",
          $config['username'],
          $config['password']
      );
    }
    public function create (User $user) {
        $insert = $this->db->prepare("INSERT INTO usuarios(nombre, apaterno, amaterno, direccion, telefono, ciudad, usuario, password, rol) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $insert->execute([ //debe tener el mismo orden que en los signos de interrogacion
            $user->nombre,
            $user->apaterno,
            $user->amaterno,
            $user->direccion,
            $user->telefono,
            $user->ciudad,
            $user->usuario,
            $user->password,
            $user->rol
        ]);
    }*/
  }
?>