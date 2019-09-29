@extends('layouts/app')

@section('main-content')
	<div class="container">
		<div class="row">
			<?php
				$imgPath=asset('images/1531909_783197711695268_993399013_n.jpg');
				for($i=0; $i<20; $i++){
					echo '<div class="card col-3">
					
					 
  <img src="'.$imgPath.'" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
    <a href="#" class="btn btn-primary">Go Somewhere</a>
  </div>
</div>
					';
				}

			?>
		</div>
	</div>
@endsection