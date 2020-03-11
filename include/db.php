<?php
//Datos de conexion

class DB {
    static $host="localhost";
    static $user="root";
    static $password="12345678";
    static $base="personas";
    public static function init() {
        echo "Inciando base de datos";
    }
    public static function query($sql){
        
        $con = new mysqli(self::$host,self::$user,self::$password,self::$base);
        $res=$con->query($sql);
        $con->close();
        return $res;
        //no ejecuta nada
    }
}

?>
