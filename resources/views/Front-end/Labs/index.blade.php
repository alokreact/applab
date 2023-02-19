@extends('Front-end.layout.mainlayout')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white"></span>
          <h1 class="text-capitalize mb-5 text-lg">All Labs</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->

        </div>
      </div>
    </div>
  </div>
</section>



<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
          @forelse ($labs->getLab as $lab)
          <div class="col-lg-4 col-sm-6 col-md-6" style="margin-bottom:3px">
                <div class="contact-block mb-4 mb-lg-0">
                <img src="{{asset('Image/'.$lab->image)}}" alt="{{$lab->lab_name}}" class="img-fluid"  style="height:120px; width:230px">
                <br/>
                <br/>
 
                <h3>{{$lab->lab_name}}</h3>     
                   <br/>

                   <h5> {{$lab->pivot->price}} </h5>    
                   
                   <button class="btn btn-success">Add To Cart</button>

                
                </div>
            </div>
            
          @empty
          <p>No Records</p>
            
          @endforelse
            
           
        </div>
    </div>
</section>

@endsection
