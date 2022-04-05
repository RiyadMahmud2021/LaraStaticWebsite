@extends('layout/app')
@section('title','Portfolio')



<!-- 
<div class="container-fluid bg-dark">
<div class="row p-5">
<div class="col-md-12 text-center">
    <h4 class="text-white">My Portfolio</h4>
</div>
</div>    
</div>    -->

@section('paralux_content_text')
<h1 class="text-white pt-5">My Portfolio</h1>
@endsection

 
@section('content') 

<div class="container mt-5">
    <div class="row">
      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img width="100" height="200" src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
          </div>
      </div>  



      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img  width="100" height="200" src="{{asset('images/codeigniter.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
          </div>
      </div>  


      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img  width="100" height="200" src="{{asset('images/reactjs.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
          </div>
      </div>  


      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img  width="100" height="200" src="{{asset('images/bootstrap.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
          </div>
      </div>  

    </div>
</div>



@endsection