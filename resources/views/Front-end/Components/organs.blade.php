<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Organs</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	
	<a href="{{route('allorgans')}}">
		<button class="btn btn-success" style="float:right; margin-right:45px;margin-top:-30px">View All</button></a>
	
	<div class="container">
	
	<div class="row clients-logo">

			   
        @forelse ($organs as $organ)
      		<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('Image/'.$organ->image)}}" alt="{{$organ->name}}" class="img-fluid"  style="height:90px; width:80px">
					<br/>
					<label style="margin-left:-50px">{{$organ->name}}</label>
				</div>
			</div>

		@empty

            <p>No Organs</p>

         @endforelse
		
        
          
		</div>
	</div>
</section>