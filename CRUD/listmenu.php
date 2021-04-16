<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Menu</title>
</head>

<body>
    <header>
        <h3>List Menu : </h3>
    </header>

    <nav>
        <a href="crudmenu.html">Home Page</a>
        <br>
        <a href="crud.php">[+] Create New</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tb_menu";
        $query = mysqli_query($db, $sql);

        $i = 1;
        while($menu = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$i."</td>";
            $i++;
            echo "<td>".$menu['name']."</td>";
            echo "<td>".$menu['price']."</td>";
            echo "<td>".$menu['description']."</td>";
            echo "<td>".$menu['img']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$menu['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$menu['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>