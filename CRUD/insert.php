<?php

include("connection.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    // buat query
    $sql = "INSERT INTO tb_menu (name, price, description, img) VALUE ('$name', '$price', '$description', '$img')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: crud.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: crud.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>