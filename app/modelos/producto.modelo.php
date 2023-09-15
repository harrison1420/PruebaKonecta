<?php

 require_once "./app/configuracion/conexion.php";
 class Producto extends Connection{

public static function mostrarDatos()
{
  try{
    $sql = "SELECT * FROM producto";
    $stmt = Connection::getConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }catch(PDOException $th){
    echo $th->getMessage();
  }
}
  public static function obtenerDatoId($id){
    try{
      $sql = "SELECT * FROM producto WHERE id = :id";
      $stmt = Connection::getConnection()->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    }catch(PDOException $th){
      echo $th->getMessage();
    }
  }
  public static function guardarDatos($data){
    try{
      $sql = "INSERT INTO producto(nombres,referencia,precio,peso,categoria,stock,fecha) VALUES (:nombres,:referencia,:precio,:peso,:categoria,:stock,:fecha)";
      $stmt = Connection::getConnection()->prepare($sql);
      $stmt->bindParam(':nombres', $data['nombres']);
      $stmt->bindParam(':referencia', $data['referencia']);
      $stmt->bindParam(':precio', $data['precio']);
      $stmt->bindParam(':peso', $data['peso']);
      $stmt->bindParam(':categoria', $data['categoria']);
      $stmt->bindParam(':stock', $data['stock']);
      $stmt->bindParam(':fecha', $data['fecha']);
      $stmt->execute();
      return true;
    }catch(PDOException $th){
      echo $th->getMessage();
    }
  }
  public static function actualizarDatos($data){
    try{
        $sql = "UPDATE producto SET nombres = :nombres,referencia = :referencia,precio = :precio,peso = :peso,categoria = :categoria,stock = :stock,fecha = :fecha WHERE id = :id";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindParam(':nombres', $data['nombres']);
        $stmt->bindParam(':referencia', $data['referencia']);
        $stmt->bindParam(':precio', $data['precio']);
        $stmt->bindParam(':peso', $data['peso']);
        $stmt->bindParam(':categoria', $data['categoria']);
        $stmt->bindParam(':stock', $data['stock']);
        $stmt->bindParam(':fecha', $data['fecha']);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();
        return true;
    }catch(PDOException $th){
      echo $th->getMessage();
    

}
 
 
}
public static function eliminarDatos($id){
    try{
      $sql = "DELETE FROM producto WHERE id = :id";
      $stmt = Connection::getConnection()->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return true;
    }catch(PDOException $th){
      echo $th->getMessage();
    }
}

}

?>