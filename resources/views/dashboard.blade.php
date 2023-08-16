<x-master>
	 <x-slot name="header">
	 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
	 {{ __('Dashboard') }}
	 </h2>
	 </x-slot>
  
	<x-slot name="usersList">
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
	 </x-slot>
</x-master>