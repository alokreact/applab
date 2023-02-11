<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">


        @forelse ($labs as $lab )
            
      		<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('Image/'.$lab->image)}}" alt="" class="img-fluid">
				</div>
			</div>

        @empty
            <p>No Labs</p>


         @endforelse
		
        
          
		</div>
	</div>
</section>