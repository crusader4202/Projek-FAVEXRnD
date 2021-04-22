{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updatecategory', $category->id)}}" method="POST" enctype = "multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="">nama</label>
            <input name="nama"type="text" value="{{$category->nama}}">
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
    <title>Rini's Restaurant</title>

    <link rel="stylesheet" href="{{asset('css/edit_category.css')}}">
</head>
<body>
    <div class="nav">
        <div><img src="{{asset('assets/img/logo.svg')}}" alt=""></div>
        <div class="tab home"><a href="{{route('food')}}"><img src="{{asset('assets/img/food-home.svg')}}" alt=""></a></div>
        <div class="tab profile"><img src="{{asset('assets/img/food-profile.svg')}}" alt=""></div>
        <div class="tab logout"><a href="{{route('logout')}}"><img src="{{asset('assets/img/food-Log-Out.svg')}}" alt=""></a></div>
    </div>

    <div class="main-container">
        <div class="con1">
            <img class="image_container" src="https://via.placeholder.com/500" alt="">
                <button id="btn_upload"><p>Upload Picture</p></button>
        </div>
        <div class="con2">
            <div class="form">
                <form action="{{route('updatecategory', $category->id)}}" method="post" enctype = "multipart/form-data"> 
                    @csrf
                    @method('PATCH')
                    <input type="file" id="upload_image" name="gambar" accept="image/*">
                    <p>Edit Category</p>
                    <br>
                    <div class="form-name">
                        <!-- <label for="name">Name</label> -->
                        <input type="text" id="name" name="nama" placeholder="Name" value="{{$category->nama}}" required>
                    </div>
                    <!-- <br>
                    <div class="employee-id">   
                        <label for="Employee-ID">Employee ID</label>
                        <input type="text" class="description" name="Employee-ID" placeholder="Employee ID" disabled>
                    </div>
                    <br>
                    <div class="gender">   
                        <label for="name">Gender</label>
                        <input type="text" class="description" name="description" placeholder="Man/Woman" disabled>
                    </div> -->
                    <!-- <div class="gender">
                        <label class="container1">Man
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          <label class="container2">Woman
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                          </label>
                    </div> -->
                    <br>
                    <br>
                <div class="btn_2">
                    <button id="btn_cancel" type="reset">Cancel</button>
                    <button id="btn_save" type="submit">Save</button>
                </div>
 
                </form>
            </div>
        </div>
    </div>
</body>