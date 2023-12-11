<style>
  
    .card-container {
        background-color: black;
    }
  
   
</style>
@extends('layout.app')

@section('content')
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
    </div>
</div>


    
@endsection