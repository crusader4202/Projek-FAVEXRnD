<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rini's Restaurant</title>

    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
</head>
<body>
    <div class="nav">
        <div><img src="{{asset('assets/img/logo.svg')}}" alt=""></div>
        <div class="tab home"><a href="{{route('food')}}"><img src="{{asset('assets/img/food-home.svg')}}" alt=""></a></div>
        <div class="tab profile"><a href="{{route('viewprofile')}}"><img src="{{asset('assets/img/food-profile.svg')}}" alt=""></a></div>
        <div class="tab logout"><a href="{{route('logout')}}"><img src="{{asset('assets/img/food-Log-Out.svg')}}" alt=""></a></div>
    </div>

    <div class="main-container">
        <div class="con1">
            <img class="image_container" src="https://via.placeholder.com/500" alt="">
                <button id="btn_upload"><p>Upload Picture</p></button>
        </div>
        <div class="con2">
            <div class="form">
                <form action="{{route('updatefood', $food->id)}}" method="POST" enctype = "multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="file" id="upload_image" name="gambar" accept="image/*">
                    <p>Edit Item</p>
                    <br>
                    <div class="form-name">
                        <!-- <label for="name">Name</label> -->
                        <input type="text" id="name" name="nama" placeholder="Name" value="{{$food->nama}}" required>
                    </div>
                    <br>
                    <div class="form-price">
                        <!-- <label for="price">Price (in RP)</label> -->
                        <input type="number" id="price" name="harga" placeholder="Price" value="{{$food->harga}}" required>
                    </div>
                    <br>
                    <div class="custom-select">
                        <select  name="category_id" required>
                          <option value="0"
                                  hidden
                          >Select Category:</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->nama}}</option>   
                            @endforeach
                        </select>
                      </div>
                      <br>
                    <div class="form-desc">
                        <!-- <label for="description">Description</label> -->
                        <input type="text" id="description" name="desc" placeholder="Description" value="{{$food->desc}}" required>
                    </div>
                    <br>
                <!-- <input type="submit" id="submit" value="submit" name="submit" class="btn btn-primary"> -->
                <div class="btn_2">
                    <button id="btn_cancel" type="reset">Cancel</button>
                    <button id="btn_save" type="submit">Save</button>
                </div>
 
                </form>
            </div>
        </div>
    </div>
</body>