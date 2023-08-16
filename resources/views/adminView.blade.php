<x-master>
	 <x-slot name="header">
	 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
	 {{ __('Dashboard') }}
	 </h2>
	 </x-slot>
  
	<x-slot name="userNameAdmin">
		Hi {{Auth::user()->name }}! You belong to the admin group!
	 </x-slot>
</x-master>