{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storefood')}}" method="POST" enctype = "multipart/form-data">
        @csrf
        <div>
            <label for="">nama</label>
            <input name="nama"type="text">
        </div>
        <div>
            <label for="">category</label>
            <select name="category_id" id="" placeholder="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nama}}</option>   
                @endforeach
            </select>
        </div>
        <div>
            <label for="">description</label>
            <textarea name="desc" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">harga</label>
            <input type="number" name="harga" id="">
        </div>
        <div>
            <label for="">gambar</label>
            <input type="file" name="gambar" id="">
        </div>
        <button type="submit">submit</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="con1">
        <div class="sidenav">
        <img id="burger" src="{{asset('assets/PNG_image/burger.png')}}" alt="">
             <a href="{{route('food')}}"><img id="home" src="{{asset('assets/PNG_image/home.png')}}" alt=""></a>
             <a href=""><img id="user" src="{{asset('assets/PNG_image/profile.png')}}" alt=""></a>
             <a href=""><img id="setting" src="{{asset('assets/PNG_image/setting.png')}}" alt=""></a>
             <a href="{{route('logout')}}"><img id="logout" src="{{asset('assets/PNG_image/logout.png')}}" alt=""></a>
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
            <form action="{{route('storefood')}}" method="post" enctype = "multipart/form-data">
                @csrf
                <div class="form-name">
                    <label for="name">Name</label>
            <input type="text" id="name" name="nama" required>
                </div>
                <div class="form-price">
                    <label for="price">Price (in RP)</label>
                    <input type="number" id="price" name="harga" required>
                </div>
                <div class="form-desc">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="desc" required>
                </div>
                <div class="form-image">
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="gambar" accept="image/*">
                </div>
            <input type="submit" id="submit" value="save" name="save" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>