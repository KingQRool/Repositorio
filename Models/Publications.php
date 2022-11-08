<?php
include_once '../Config/Conexion.php';
class Publicaction{
    protected $id_p;
    protected $nombre_p; // 1
    protected $info_p; // 2
    protected $fotos_p; // 3
    protected $foto_p_url; // 4
    protected $precios_p; // 5


    protected function GuardarPublicacion()
    {
        
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_publicaciones (nombre_p,info_p,fotos_p,foto_p_url,precios_p) VALUES (?,?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_p);
        $insertar->bindParam(2,$this->info_p);
        $insertar->bindParam(3,$this->fotos_p);
        $insertar->bindParam(4,$this->foto_p_url);
        $insertar->bindParam(5,$this->precios_p);
        $insertar->execute();
        
        $_SESSION['nombre_p'] = $this->nombre_p;

        echo "Se guardo el producto con exito";
    }

        public function BorrarPublicacion($borrar){
            include_once '../Config/Conexion.php';
            $conexion = new Conexion();
            $sql = "DELETE FROM tbl_publicaciones WHERE id_p='$borrar'";
            $mostrar = $conexion->stm->prepare($sql);
            $mostrar->execute();
        }
        public function ActPublicaciones($act){
            include_once '../Config/Conexion.php';
            $conexion = new Conexion();
            $sql = "UPDATE tbl_publicaciones SET
            nombre_p='$this->nombre_p',info_p='$this->info_p',fotos_p='$this->fotos_p', precios_p='$this->precios_p' WHERE id_p=$act";
            $mostrar = $conexion->stm->prepare($sql);
            $mostrar->execute();
            $objetoretornadopublicacion = $mostrar->fetchAll(PDO::FETCH_OBJ);
            // return var_dump($objetoretornadopublicacion);
            return $objetoretornadopublicacion;
        }
//     public function BorrarPublicacion($borrar) {
//         include '../Config/Conexion.php';
//         $conexion = new Conexion();
//         $sql = "DELETE FROM tbl_publicaciones WHERE id_p='$borrar'";
//         $publicacion = $conexion->stm->prepare($sql);
//         $publicacion->execute();
}

?>