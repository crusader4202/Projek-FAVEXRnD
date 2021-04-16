<?php

include("connection.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: listmenu.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_menu WHERE id=$id";
$query = mysqli_query($db, $sql);
$menu = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="crud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="con1">
        <div class="sidenav">
             <img id="burger" src="Images/Real/burger.png" alt="">
             <a href="listmenu.php"><img id="home" src="Images/Real/Home.PNG" alt=""></a>
             <a href=""><img id="user" src="Images/Real/Profile.PNG" alt=""></a>
             <a href=""><img id="setting" src="Images/Real/Setting.PNG" alt=""></a>
             <a href=""><img id="logout" src="Images/Real/Logout.PNG" alt=""></a>
        </div>
    </div>
    <div class="con2">
        <div class="second">
            <img id="mainimage" src="https://via.placeholder.com/500" alt="">
            <button id="btn_upload">Upload Picture</button>
        </div>
    </div>
    <div class="con3">
        <p id="txt_profile">Profile</p>
    </div>
    <div class="con4">
        <div class="form">
            <form action="processedit.php" method="post"> 
            <input type="hidden" name="id" value="<?php echo $menu['id'] ?>" />
                <div class="form-name">
                    <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $menu['name'] ?>" required>
                </div>
                <div class="form-price">
                    <label for="price">Price (in RP)</label>
                    <input type="number" id="price" name="price" value="<?php echo $menu['price'] ?>" required>
                </div>
                <div class="form-desc">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="<?php echo $menu['description'] ?>" required>
                </div>
                <div class="form-image">
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*">
                </div>
            <input type="submit" id="submit" value="save" name="save" class="btn btn-primary">
            </form>
        </div> -->





    <!-- <div class="con1">
    </div>
    <div class="con2">
        <div class="form">
            <form action="processedit.php" method="post"> 
            <input type="hidden" name="id" value="<?php echo $menu['id'] ?>" />
                <div class="form-name">
                    <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $menu['name'] ?>" required>
                </div>
                <div class="form-price">
                    <label for="price">Price (in RP)</label>
                    <input type="number" id="price" name="price" value="<?php echo $menu['price'] ?>" required>
                </div>
                <div class="form-desc">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="<?php echo $menu['description'] ?>" required>
                </div>
                <div class="form-image">
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*" required>
                </div>
            <input type="submit" value="save" name="save" class="btn btn-primary">
            </form>
        </div>
    </div> -->