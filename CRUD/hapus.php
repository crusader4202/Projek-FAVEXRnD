<?php

include("connection.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tb_menu WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: listmenu.php');
    } else {
        die("Delete Failed...");
    }

} else {
    die("Access Denied...");
}

?>