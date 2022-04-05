@extends('layout/app')
@section('title','Service')


<!-- 
<div class="container-fluid bg-dark">
<div class="row p-5">
<div class="col-md-12 text-center">
    <h4 class="text-white">My Services</h4>
</div>
</div>    
</div>    -->

@section('paralux_content_text')
<h1 class="text-white pt-5">My Services</h1>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
    <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img width="100" height="200" src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Backend with Laravel</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

               </div>
          </div>
      </div> 
      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img width="100" height="200" src="{{asset('images/codeigniter.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Backend with Codeigniter</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

               </div>
          </div>
      </div> 

      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img width="100" height="200" src="{{asset('images/PSD-to-HTML.jpg')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">PSD to HTML</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
          </div>
      </div> 

      <div class="col-md-3 p-1">
          <div class="card" style="width:100%">
               <img width="100" height="200" src="{{asset('images/reactjs.png')}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Frontend with React JS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
          </div>
      </div> 

    </div>
</div>


<div class="container mb-5 mt-5">
     <div class="row">
    
          <div class="col-md-6">

               <form>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Your Name</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                         <label for="exampleInputEmail1">Your Mobile</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                         <label for="exampleInputEmail1">Your Email</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                         <label for="exampleInputEmail1">Your Message</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>


                    <button type="submit" class="btn btn-block btn-primary">Send Now</button>
               </form>

          </div>

          <div class="col-md-6 pt-3">
               <h5>Address</h5>
               <p>Ashcona City Complex,Ashcona,Dhaka</p>
               <p>+8801592000000</p>
               <p>riyad.prof.bd@gmail.com</p>
          </div>

     </div>
</div>

@endsection