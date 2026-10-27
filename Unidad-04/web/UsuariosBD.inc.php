<?php

$usuariosBD = array(
    array("user" => password_hash("1234",PASSWORD_BCRYPT),"rol" => "registrado"),
    array("admin" => password_hash("1234",PASSWORD_BCRYPT),"rol" => "admin")
);

?>