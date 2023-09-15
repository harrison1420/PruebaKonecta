<?php
require_once "../modelos/producto.modelo.php";
echo json_encode(Producto::mostrarDatos());