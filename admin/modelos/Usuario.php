<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Usuario{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($nombre,$apellidos,$user,$iddepartamento,$idtipousuario,$email,$clavehash,$imagen,$codigo_persona){
	date_default_timezone_set('America/Mexico_City');
	$fechacreado=date('Y-m-d H:i:s');
	$sql="INSERT INTO usuarios (nombre,apellidos,user,iddepartamento,idtipousuario,email,password,imagen,estado,fechacreado,codigo_persona) VALUES ('$nombre','$apellidos','$user','$iddepartamento','$idtipousuario','$email','$clavehash','$imagen','1','$fechacreado','$codigo_persona')";
	return ejecutarConsulta($sql);

}

public function editar($idusuario,$nombre,$apellidos,$user,$iddepartamento,$idtipousuario,$email,$imagen,$codigo_persona){
	$sql="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',user='$user',iddepartamento='$iddepartamento',idtipousuario='$idtipousuario',email='$email',imagen='$imagen' ,codigo_persona='$codigo_persona'    
	WHERE idusuario='$idusuario'";
	 return ejecutarConsulta($sql);

}
public function editar_clave($idusuario,$clavehash){
	$sql="UPDATE usuarios SET password='$clavehash' WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}
public function mostrar_clave($idusuario){
	$sql="SELECT idusuario, password FROM usuarios WHERE idusuario='$idusuario'";
	return ejecutarConsultaSimpleFila($sql);
}
public function desactivar($idusuario){
	$sql="UPDATE usuarios SET estado='0' WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}
public function activar($idusuario){
	$sql="UPDATE usuarios SET estado='1' WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}

//metodo para mostrar registros
public function mostrar($idusuario){
	$sql="SELECT * FROM usuarios WHERE idusuario='$idusuario'";
	return ejecutarConsultaSimpleFila($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM usuarios";
	return ejecutarConsulta($sql);
}

public function cantidad_usuario(){
	$sql="SELECT count(*) nombre FROM usuarios";
	return ejecutarConsulta($sql);
}

//Función para verificar el acceso al sistema
	public function verificar($user,$clave)
    {
    	$sql="SELECT u.codigo_persona,u.idusuario,u.nombre,u.apellidos,u.user,u.idtipousuario,u.iddepartamento,u.email,u.imagen,u.user, tu.nombre as tipousuario FROM usuarios u INNER JOIN tipousuario tu ON u.idtipousuario=tu.idtipousuario WHERE user='$user' AND password='$clave' AND estado='1'"; 
    	return ejecutarConsulta($sql);  
    }
}

 ?>
