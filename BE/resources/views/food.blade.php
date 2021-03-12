<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <th>Name</th>
        <th>desc</th>
        <th>harga</th>
        <th>gambar</th>
        <th>action</th>
        @foreach ($foods as $food)
            <td><a href="{{route('viewfood', $food->id)}}">{{$food->nama}}</a></td>
            <td>{{$food->desc}}</td>
            <td>{{$food->harga}}</td>
            <form action="{{route('destroyfood', $food->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            <a href="{{route('editfood', $food->id)}}">update</a>
        @endforeach
    </table>
    <a href="{{route('createfood')}}">add new</a>
</body>
</html>