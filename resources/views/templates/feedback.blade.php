@if(session('success'))
	<div class="card shadow mb-4">
		<div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">{!!session('success')!!}</h6>
        </div>
	</div>
@endif

@if(session('error'))
	<div class="card shadow mb-4">
		<button class="close pull-right" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{!!session('error')!!}
	</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<p>Perhatian.</p>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif