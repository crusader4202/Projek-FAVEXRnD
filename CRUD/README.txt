cara supaya ini bisa dipakai, harus membuat suatu database dahulu di local pc anda, menggunakan XAMPP mysql dan juga phpmyadmin dengan :

Nama Database : dbmenu
buatlah 1 table yang bernama (dengan 5 Column) : tb_menu

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(100) NOT NULL
) 

dan juga saat ingin menjalankan codingan ini, semua codingan harus dipindahkan ke C:\xampp\htdocs supaya bisa dijalankan.