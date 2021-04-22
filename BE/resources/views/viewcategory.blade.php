

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rini's Restaurant</title>

    <link rel="stylesheet" href="{{asset('css/food.css')}}">
</head>
<body>
    <div class="nav">
        <div><img src="{{asset('assets/img/logo.svg')}}" alt=""></div>
        <div class="tab home"><a href="{{ route('food') }}"><img src="{{asset('assets/img/food-home.svg')}}" alt=""></a></div>
        <div class="tab profile"><img src="{{asset('assets/img/food-profile.svg')}}" alt=""></div>
        <div class="tab logout"><a href="{{route('logout')}}"><img src="{{asset('assets/img/food-Log-Out.svg')}}" alt=""></a></div>
    </div>

    <div class="main-container">
        <div class="text-big"><b>Menu</b> Category</div>
        <div class="add"><a href="{{route('createcategory')}}"><img src="{{asset('assets/img/food-plus.svg')}}" alt=""></a></div>
        <div class="category-wrapper">
            @foreach ($categories as $target)
            <div class="edit-delete">
                <a href="{{ route('editcategory', $category->id) }}"><img class="edit" src="{{asset('assets/img/food-edit.svg')}}" alt=""></a>
                <form action="{{ route('destroycategory', $category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="text-medium">X</button>
                </form>
            </div>
            @if ($id == $target->id)
            
            <div class="container1 category-active">
                <div class="container2"><img src="{{asset('assets/img/food-flame.svg')}}" alt=""></div>
                <div class="text-regular-bold">Hot</div>
            </div>
            @else
                <div class="container1">
                <a href="{{route('viewcategory', $target->id)}}">
                    <div class="container2"><img src="{{asset('storage/category/'.$target->gambar)}}" alt=""></div>
                    <div class="text-regular-bold">{{$target->nama}}</div>
                </a>
                </div>
            @endif
            @endforeach
            {{-- <div class="container1 category-active">
                <div class="container2"><img src="{{asset('assets/img/food-flame.svg')}}" alt=""></div>
                <div class="text-regular-bold">Hot</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-2burger.svg" alt=""></div>
                <div class="text-regular-bold">Burger</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-3rice.svg" alt=""></div>
                <div class="text-regular-bold">Rice</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-4chicken.svg" alt=""></div>
                <div class="text-regular-bold">Chicken</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-5fries.svg" alt=""></div>
                <div class="text-regular-bold">Fries</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-6beverages.svg" alt=""></div>
                <div class="text-regular-bold">Drinks</div>
            </div>
            <div class="container1">
                <div class="container2"><img src="./Assets/img/food-7dessert.svg" alt=""></div>
                <div class="text-regular-bold">Dessert</div>
            </div> --}}
        </div>

        <div class="text-big"><b>Choose</b> Item</div>
        <div class="add"><a href="{{route('createfood')}}"><img src="{{asset('assets/img/food-plus.svg')}}" alt=""></a></div>
        <div class="item-wrapper">
            @foreach ($category->food as $food)
            <div class="container">
                <div class="edit-delete">
                    <a href="{{ route('editfood', $food->id) }}"><img class="edit" src="{{asset('assets/img/food-edit.svg')}}" alt=""></a>
                    <form action="{{ route('destroyfood', $food->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="text-medium">X</button>
                    </form>
                </div>
                <img class="pic" src="{{asset('storage/food/'.$food->gambar)}}" alt="">
                <div class="text-medium-bold">{{$food->nama}}</div>
                <div class="text-regular-bold">Rp {{$food->harga}}</div>
            </div>
            {{-- @endif --}}
            @endforeach
            {{-- <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
            <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
            <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
            <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
            <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
            <div class="container">
                <img class="edit" src="./Assets/img/food-edit.svg" alt="">
                <img class="pic" src="./Assets/img/burger.svg" alt="">
                <div class="text-medium-bold">Cheese Burger</div>
                <div class="text-regular-bold">Rp 20.000</div>
            </div>
        </div> --}}
        <div class="pagination">
            {{-- <img class="prev" src="./Assets/img/food-prev.svg" alt="">
            <div class="number">
                <div class="text-medium pagination-active">1</div>
                <div class="text-medium">2</div>
                <div class="text-medium">3</div>
            </div>
            <img class="next" src="./Assets/img/food-next.svg" alt=""> --}}
            {{-- {{$foods->onEachSide(5)->links()}} --}}
        </div>
        
    </div>

    <script type="text/javascript" src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/food.js')}}"></script>
</body>
</html>