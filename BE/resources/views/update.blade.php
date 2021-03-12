<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updatefood', $food->id)}}" method="POST" enctype = "multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="">nama</label>
            <input name="nama"type="text" value="{{$food->nama}}">
        </div>
        <div>
            <label for="">description</label>
            <textarea name="desc" id="" cols="30" rows="10" value="{{$food->desc}}"></textarea>
        </div>
        <div>
            <label for="">harga</label>
            <input type="number" name="harga" id="" value="{{$food->harga}}">
        </div>
        <div>
            <label for="">gambar</label>
            <input type="file" name="gambar" id="">
        </div>
        <button type="submit">submit</button>
    </form>
</body>
</html>