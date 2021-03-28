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
        <th>gambar</th>
        <th>action</th>
        @foreach ($categories as $category)
            <td><a href="{{route('viewcategory', $category->id)}}">{{$category->nama}}</a></td>
            <form action="{{route('destroycategory', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            <a href="{{route('editcategory', $category->id)}}">update</a>
        @endforeach
    </table>
    <a href="{{route('createcategory')}}">add new</a>
    <a href="{{route('food')}}">food</a>
</body>
</html>