<?php
include('config.php');

if (isset($_GET['rID'])) {
    $id = $_GET['rID'];
    include("config.php");
    $sql = "DELETE FROM tblResidents WHERE rID = $id";
    $result = mysqli_query($conn, $sql);
    header("Location: residents.php");
}
