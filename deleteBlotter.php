<?php
include('config.php');

if (isset($_GET['bID'])) {
    $id = $_GET['bID'];
    include("config.php");
    $sql = "DELETE FROM tblBlotter WHERE bID = $id";
    $result = mysqli_query($conn, $sql);
    header("Location: blotter.php");
}
