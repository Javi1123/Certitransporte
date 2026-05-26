<?php

namespace App\modelo;

use \App\core\DB;

class tablasModelo {
  ///////////////////////////////////////////////////////////
  // CRUD de tabla sugerencias
  ///////////////////////////////////////////////////////////
  public static function getAllSugerecias(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT * FROM Sugerencias");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  // INSERT //
  public static function insertSugerencias($nombre, $apellido, $email, $telefono, $sugerencia){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("INSERT INTO Sugerencias (nombre, apellido, email, telefono, sugerencia) VALUES (:nombre, :apellido, :email, :telefono, :sugerencia)"); 
    $stmt->execute([
      ':nombre' => $nombre,
      ':apellido' => $apellido,
      ':email' => $email,
      ':telefono' => $telefono,
      ':sugerencia' => $sugerencia
    ]);
  }


  
  ///////////////////////////////////////////////////////////
  // CRUD de tabla alumnos
  ///////////////////////////////////////////////////////////

  public static function getAllAlumnos(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT * FROM Alumnos");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public static function getCaracteristicasAlumnos(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT DNI,nombre,apellido FROM Alumnos");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  // INSERT //
  public static function insertAlumnos($DNI, $nombre, $apellido, $email, $telefono, $direccion, $fechaNacimiento){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("INSERT INTO Alumnos (DNI, nombre, apellido, correo, telefono, direccion, fechaNacimiento) VALUES (:dni, :nombre, :apellido, :correo, :telefono, :direccion, :fechaNacimiento)"); 
      $stmt->execute([
        ':dni' => $DNI,
        ':nombre' => $nombre,
        ':apellido' => $apellido,
        ':correo' => $email,
        ':telefono' => $telefono,
        ':direccion' => $direccion,
        ':fechaNacimiento' => $fechaNacimiento,
      ]);
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "El registro ya a sido guardado:",
        "texto" => "Solo se puede guardar un registro por persona, lo siento las molesties si tiene alguna sugerencia utilizar el formulario indicado"
      ];
    }
  }

  // UPDATE //
  public static function updateAlumnos($DNI, $usuario, $CCC, $matricula){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Alumnos SET usuario = :usuario, CCC = :ccc, matricula = :matricula WHERE DNI = :dni"); 
      $stmt->execute([
        ':dni' => $DNI,
        ':usuario' => $usuario,
        ':ccc' => $CCC,
        ':matricula' => $matricula,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El alumno a sido editado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se a podido cambiar los datos del alumno"
      ];
    }
  }

  // DELETE //
  public static function deleteAlumnos($DNI){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("DELETE FROM Alumnos WHERE DNI = :dni"); 
      $stmt->execute([
        ':dni' => $DNI,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El alumno a sido borrado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se a podido borrar el alumno"
      ];
    }
  }
  
  ///////////////////////////////////////////////////////////
  // CRUD de tabla cursos
  ///////////////////////////////////////////////////////////

  public static function getAllCursos(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT * FROM Cursos");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public static function getClaveCursos(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT claveCurso,descripcion FROM Cursos");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  // INSERT //
  public static function insertCursos($clave, $descripcion, $precioMes, $matricula, $baja, $notas){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("INSERT INTO Cursos (claveCurso, descripcion, precioMes, matricula, baja, notas) VALUES (:clave, :descripcion, :precioMes, :matricula, :baja, :notas)"); 
      $stmt->execute([
        ':clave' => $clave,
        ':descripcion' => $descripcion,
        ':precioMes' => $precioMes,
        ':matricula' => $matricula,
        ':baja' => $baja,
        ':notas' => $notas,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El curso a sido registrado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "Este curso ya esta registrado"
      ];
    }
  }

  // UPDATE //
  public static function updateCursos($clave, $descripcion, $precioMes, $matricula, $baja, $notas){
    try{
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Cursos SET descripcion = :descripcion, precioMes = :precioMes, matricula = :matricula, baja = :baja, notas = :notas WHERE claveCurso = :clave"); 
      $stmt->execute([
        ':descripcion' => $descripcion,
        ':precioMes' => $precioMes,
        ':matricula' => $matricula,
        ':baja' => $baja,
        ':notas' => $notas,
        ':clave' => $clave,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El curso a sido editado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se ha podido editar el curso"
      ];
    }
  }

  // BAJA/DELETE //
  public static function deleteCursos($clave, $baja){
    try{
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Cursos SET baja = :baja WHERE claveCurso = :clave"); 
      $stmt->execute([
        ':clave' => $clave,
        ':baja' => $baja,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El curso se ha cambiado la baja correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se ha podido dar de baja o de alta al curso"
      ];
    }
  }

  ///////////////////////////////////////////////////////////
  // CRUD de tabla recibos
  ///////////////////////////////////////////////////////////

  public static function getAllRecibos(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT r.*, a.nombre, a.apellido FROM Recibo r INNER JOIN Alumnos a ON r.DNI = a.DNI");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  // INSERT //

  public static function insertRecibos($DNI, $claveCurso, $fechaRecibo, $estado, $cantidad){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("INSERT INTO Recibo (fechaPago, DNI, claveCurso, estado, cantidad) VALUES (:fecha, :DNI, :claveCurso, :estado, :cantidad);"); 
      $stmt->execute([
        ':DNI' => $DNI,
        ':claveCurso' => $claveCurso,
        ':fecha' => $fechaRecibo,
        ':estado' => $estado,
        ':cantidad' => $cantidad
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El recibo a sido registrado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "Los campos de DNI o clave del usuario son incorrectos"
      ];
    }
  }

  public static function insertVariosRecibos($DNIs, $claveCurso, $fechaRecibo, $estado, $cantidad){
    try {
      $pdo = DB::getInstance();

      $values = [];
      $sql = "INSERT INTO Recibo (fechaPago, DNI, claveCurso, estado, cantidad) VALUES ";

      foreach ($DNIs as $key => $DNI) {
        $values[] = "(:fecha_$key, :DNI_$key, :claveCurso_$key, :estado_$key, :cantidad_$key)";
      }

      $sql .= implode(', ', $values);
      $stmt = $pdo->prepare($sql);

      foreach ($DNIs as $key => $DNI) {
        $stmt->bindValue(":DNI_$key", $DNI);
        $stmt->bindValue(":claveCurso_$key", $claveCurso);
        $stmt->bindValue(":fecha_$key", $fechaRecibo);
        $stmt->bindValue(":estado_$key", $estado);
        $stmt->bindValue(":cantidad_$key", $cantidad);
      }

      $stmt->execute();

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "Los recibos han sido registrado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => $th
      ];
    }
  }

  // UPDATE //
  
  public static function updateRecibos($updateID, $updateEstado, $updateCantidad){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Recibo SET estado = :updateEstado, cantidad = :cantidad WHERE ID = :ID"); 
      $stmt->execute([
        ':ID' => $updateID,
        ':updateEstado' => $updateEstado,
        ':cantidad' => $updateCantidad
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El recibo a sido editado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se a podido cambiar el recibo"
      ];
    }
  }
  
  // DELETE //

  public static function deleteRecibos($ID){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("DELETE FROM Recibo WHERE ID = :ID"); 
      $stmt->execute([
        ':ID' => $ID,
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El recibo se ha borrado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se a podido borrar el recibo"
      ];
    }
  }

  ///////////////////////////////////////////////////////////
  // CRUD de tabla matriculados
  ///////////////////////////////////////////////////////////

  public static function getAllMatriculados(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT m.*, a.nombre, a.apellido FROM Matriculados m INNER JOIN Alumnos a ON m.DNI = a.DNI");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public static function getDniMatriculados(){
    $pdo = DB::getInstance();
    $stmt = $pdo->prepare("SELECT m.DNI, m.claveCurso, c.descripcion FROM Matriculados m INNER JOIN Cursos c ON m.claveCurso = c.ClaveCurso");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  // INSERT //
  public static function insertMatriculados($DNI, $claveCurso, $certificado, $alta, $notas){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("INSERT INTO Matriculados (DNI, claveCurso, fechaInscripcion, fechaFinal, certificado, alta, notas) VALUES (:DNI, :claveCurso, CURDATE(), 'NULL', :certificado, :alta, :notas)"); 
      $stmt->execute([
        ':DNI' => $DNI,
        ':claveCurso' => $claveCurso,
        ':certificado' => $certificado,
        ':alta' => $alta,
        ':notas' => $notas
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El matriculado a sido registrado correctamente",
        "texto" => ""
      ];

    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "El DNI y el curso que estas intentando matricular ya esta la lista de los matriculados"
      ];
    }
  }

  // UPDATE //
  public static function updateMatriculado($DNI, $claveCurso, $certificado, $alta, $notas) {
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Matriculados SET certificado = :certificado, alta = :alta, notas = :notas WHERE DNI = :DNI AND claveCurso = :claveCurso");
      $stmt->execute([
        ':DNI' => $DNI,
        ':claveCurso' => $claveCurso,
        ':certificado' => $certificado,
        ':alta' => $alta,
        ':notas' => $notas
      ]); 

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El matriculado a sido editado correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => $th->getMessage()
      ];
    }
  }

  // DELETE //
  public static function deleteMatriculados($DNI, $claveCurso, $alta){
    try {
      $pdo = DB::getInstance();

      $stmt = $pdo->prepare("UPDATE Matriculados SET alta = :alta WHERE DNI = :DNI AND claveCurso = :claveCurso"); 
      $stmt->execute([
        ':DNI' => $DNI,
        ':claveCurso' => $claveCurso,
        ':alta' => $alta
      ]);

      $_SESSION["popErrores"] = [
        "icon" => "success",
        "titulo" => "El matriculado a cambiado de alta correctamente",
        "texto" => ""
      ];
    } catch (\Throwable $th) {
      $_SESSION["popErrores"] = [
        "icon" => "error",
        "titulo" => "Error:",
        "texto" => "No se a podido dar de alta el usuario matriculado"
      ];
    }
  }
}
