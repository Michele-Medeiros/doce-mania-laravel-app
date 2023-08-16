@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard</div>
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					
					@role('admin|manager')
						@if(Session::has('usersList'))
						<ul>
							@foreach( Session::get('usersList') as $user)
								<li>{{ $user->name }}</li>
							@endforeach
						</ul>
						@else
							<p> entrou no ELSE </p>
						@endif
					@endrole
				</div>
			</div>
		</div>
	</div>
</div>
@endsection