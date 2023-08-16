<x-master>
	 <x-slot name="header">
	 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
	 {{ __('Dashboard') }}
	 </h2>
	 </x-slot>
  
	<x-slot name="userName">
		Hi {{Auth::user()->name }}! 
	 </x-slot>
</x-master>