<style>
  
    .card-container {
        background-color: black;
    }

    .icon {
        width: 40px;
    }

    .container-fluid {
        background-color: rgb(0, 132, 255)
        
    }
    
    .container-fluid img {
    object-position: top;
    }
   
</style>
@extends('layout.app')

@section('content')
<div class="container-fluid px-0">
    <img class="h-25 w-100 object-fit-cover" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="bg-black">
    <div class="container py-4">
        <div class="row">
            @foreach ($comics as $comic)
            
            <div class="col-2 py-2">
                <div class="card" style="width: 100%; height: 100%;">
                    <img src="{{$comic['thumb']}}" class="h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        
                    </div>
                </div>  
                
            </div>
            
            @endforeach
            <div class="d-flex justify-content-center my-3">
                <a href="#" class="btn btn-primary">Load More</a>            
    
            </div>
        </div>
    </div>

</div>

<div class="container-fluid z-3">
    <ul class="d-flex justify-content-center align-items-center text-light gap-5 py-4 m-0">
        <li>
            <img class="icon" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            Digital Comics
        </li>
        <li>
            <img class="icon" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            Dc Merchandise
        </li>
        <li>
            <img class="icon" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            Subscription
        </li>
        <li>
            <img class="icon" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            Comic Shop Locator
        </li>
        <li>
            <img class="icon" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            Dc Power Visa
        </li>
    </ul>
</div>


    
@endsection