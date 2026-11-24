<?php

require_once("DatosConexionBD.inc.php");

/**
 * Crear conexión PDO
 */
function crearConexion()
{
    global $host, $username, $password, $dbname;

    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);

        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

/**
 * Insertar usuario
 */
function insertarUsuario($p_usuario, $p_contrasenia, $p_rol)
{
    $pdo = crearConexion();

    $sql = "INSERT INTO usuarios (usuario, contrasenia, rol)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $p_usuario,
        $p_contrasenia,
        $p_rol
    ]);
}

/**
 * Actualizar usuario
 */
function actualizarUsuario($p_id, $p_usuario, $p_contrasenia, $p_rol)
{
    $pdo = crearConexion();

    $sql = "UPDATE usuarios
            SET usuario = ?,
                contrasenia = ?,
                rol = ?
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $p_usuario,
        $p_contrasenia,
        $p_rol,
        $p_id
    ]);
}

/**
 * Borrado lógico
 */
function eliminarUsuario($p_id)
{
    $pdo = crearConexion();

    $sql = "UPDATE usuarios
            SET borrado_v = CURRENT_TIMESTAMP
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$p_id]);
}

/**
 * Consultar usuarios
 */
function consultarUsuarios($p_id = "")
{
    $pdo = crearConexion();

    if (empty($p_id)) {

        $sql = "SELECT *
                FROM usuarios
                WHERE borrado_v IS NULL";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

    } else {

        $sql = "SELECT *
                FROM usuarios
                WHERE borrado_v IS NULL
                AND id = ?";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$p_id]);
    }

    return $stmt->fetchAll();
}

?>