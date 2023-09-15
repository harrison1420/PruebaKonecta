<?php
require_once "../modelos/producto.modelo.php";
$arrayName = array('nombres'=> $_POST['nombres'],
'referencia'=> $_POST['ferencia'],
'precio'=> $_POST['precio'],
'peso'=> $_POST['peso'],
'categoria'=> $_POST['categoria'],
'stock'=> $_POST['stock'],
'fecha'=> $_POST['fecha']
);
echo json_encode(Producto::guardarDatos($arrayName));