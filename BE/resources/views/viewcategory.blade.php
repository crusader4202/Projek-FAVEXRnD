<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>{{$category->nama}}</div>
    <ul>
        @foreach($category->food as $food)
        <li>
            <a href="{{route('viewfood', $food->id)}}">{{$food->nama}}</a>
        </li>
        @endforeach
        
    </ul>
    <img src="{{asset('storage/category/'.$category->gambar)}}" alt="viewphoto.jpg">
</body>
</html>