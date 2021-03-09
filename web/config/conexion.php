  
<?php
require_once("../config/conexion.php");
    class Conectar{
        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost:5000;dbname=tiendabd","root","");
            return $conectar;	
        } catch (PDOException $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();	
        }
    }

        public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>