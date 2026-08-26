<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: index.php"); exit(); }
require_once 'conexion.php';

// Validar que se reciba un ID por GET
if (!isset($_GET['id'])) { header("Location: inventario.php"); exit(); }

$id_producto = $_GET['id'];

// 1. Consultar los datos actuales del producto
$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
