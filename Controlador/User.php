<?php

include_once'conexion.php'

class User extends conexion{

	private $nombre;
	private $username;

	public function userExists($user, $pass){

		$md5pass = md5($pass);

        $query = $this-> connect()-> prepare('SELECT * FROM jefe WHERE username = :NumDoc AND password =:pass');

        $query-> execute(['user' => $user, 'pass'=> $md5pass]);

        if($query -> rowCount()){
        	return true;
        }else{
        	return false;
        }

        }

        public function setUser($user){
        	$query = $this -> connect()-> prepare('SELECT * FROM jefe WHERE username = :user');
        	$query-> execute(['user'=> $user]);

        	foreach ($query as $currentUser) {
        		$this-> nombre = $currentUser['nombre'];
        		$this-> username = $currentUser['username'];
        	}




        }

        public function getNombre(){
        	return $this-> nombre;
        }
	}


?>