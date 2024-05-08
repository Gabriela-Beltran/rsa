<?php 
include "Conexion.php";

class Auth extends Conexion {
    public function registrar($usuario, $password) {
        $conexion = parent::conectar();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (usuario, password) VALUES (?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param('ss', $usuario, $hashed_password);
        return $query->execute();
    }

 

    public function logear($usuario, $password) {
        echo "usuario: " . $usuario . " contraseña: " . $password;
        $conexion = parent::conectar();
        $sql = "SELECT * FROM users WHERE usuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('s', $usuario);
        $query->execute();
        $result = $query->get_result();
    
        if ($result->num_rows > 0) {
            $data_usuario = $result->fetch_assoc();
            $password_hashed = $data_usuario['password'];
            echo "Contraseña almacenada en la base de datos: " . $password_hashed;
            var_dump("usuario: " . $usuario . " contraseña: " . $password);
            if (password_verify($password, $password_hashed)) {
                echo "Contraseña verificada correctamente";
                $_SESSION['usuario'] = $usuario;
                $_SESSION['id_usuario'] = $data_usuario['id_usuario'];
                return true;
            } else {
                echo "Contraseña incorrecta";
                return false;
            }
        } else {
            echo "No se encontró el usuario en la base de datos";
            return false;
        }
    } 
    
    
}
?>
