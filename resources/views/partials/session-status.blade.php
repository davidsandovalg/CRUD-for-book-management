@if( session('success') )
  <div class="container alert-containers">
		<div class="alert alert-success alert-dismissible fade show alert-errors-partials" role="alert">
			{{ session('success') }}
			<button type="button" class="close" data-dismiss="alert" arial-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
@elseif( session('danger') )
  <div class="container alert-containers">
		<div class="alert alert-danger alert-dismissible fade show alert-errors-partials" role="alert">
			{{ session('danger') }}
			<button type="button" class="close" data-dismiss="alert" arial-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
@elseif( session('info') )
  <div class="container alert-containers">
    <div class="alert alert-info alert-dismissible fade show alert-errors-partials" role="alert">
    	{{ session('info') }}
		<button type="button" class="close" data-dismiss="alert" arial-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
    </div>
  </div>
@elseif($errors->all())
  <div class="container alert-containers">
		<div class="alert alert-danger alert-dismissible fade show alert-errors-partials" role="alert">
			<ul>
				@foreach ($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach
			</ul>
			<button type="button" class="close" data-dismiss="alert" arial-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
  </div>
@endif