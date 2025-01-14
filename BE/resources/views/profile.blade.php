<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rini's Restaurant</title>

    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
</head>
<body>
    <div class="nav">
        <div><img src="{{asset('assets/img/logo.svg')}}" alt=""></div>
        <div class="tab home nav-active"><a href="{{ route('food') }}"><img src="{{asset('assets/img/food-home.svg')}}" alt=""></a></div>
        <div class="tab profile"><img src="{{asset('assets/img/food-profile.svg')}}" alt=""></div>
        <div class="tab logout"><a href="{{route('logout')}}"><img src="{{asset('assets/img/food-Log-Out.svg')}}" alt=""></a></div>
    </div>

    <div class="main-container">
        <!-- <div class="con1">
            <img class="image_container" src="https://via.placeholder.com/500" alt="">
                <button id="btn_upload"><p>Upload Picture</p></button>
                <input type="file" id="upload_image" name="img" accept="image/*">
        </div> -->
        <div class="con2">
            <div class="form">
                {{-- <form action="insert.php" method="post">  --}}
                    <p>Profile</p>
                    <br>
                    <div class="form-name">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" value="{{Auth::user()->name}}" disabled>
                    </div>
                    <br>
                    <div class="employee-id">   
                        <label for="Employee-ID">Employee ID</label>
                        <input type="text" class="description" name="Employee-ID" placeholder="Employee ID" value="{{Auth::user()->ID_karyawan}}" disabled>
                    </div>
                    <br>
                    <div class="gender">   
                        <label for="name">Gender</label>
                        <input type="text" class="description" name="description" placeholder="Man/Woman" value="{{Auth::user()->gender}}" disabled>
                    </div>
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
                <!-- <div class="btn_2">
                    <button id="btn_cancel">Cancel</button>
                    <button id="btn_save">Save</button>
                </div> -->
 
                {{-- </form> --}}
            </div>
        </div>
    </div>
</body>