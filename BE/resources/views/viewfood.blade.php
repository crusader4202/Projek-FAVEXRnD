<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>{{$food->nama}}</div>
    <div>{{$food->desc}}</div>
    <div>{{$food->harga}}</div>
    <img src="{{asset('storage/food/'.$food->gambar)}}" alt="viewphoto.jpg">
</body>
</html>