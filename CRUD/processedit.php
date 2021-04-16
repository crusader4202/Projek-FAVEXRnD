<?php

include("connection.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    // buat query update
    $sql = "UPDATE tb_menu SET name ='$name', price ='$price', description ='$description', img ='$img' WHERE id = $id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ){
        header('Location: listmenu.php');
    } else {
        die("Edit Failed...");
    }

} else {
    die("Access Denied...");
}

?>