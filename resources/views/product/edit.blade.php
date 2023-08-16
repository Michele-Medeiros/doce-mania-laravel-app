<x-master>
 <x-slot name="header">
 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
 {{ __('Edit Product') }}
 </h2>
 </x-slot>
 <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
 <div class="md-full max-w-xs">

 <form class="w-full max-w-lg"" method="POST" action="{{ route('products.update', $product->id )}}"
enctype="multipart/form-data">
 @csrf
 @method('patch')
<div class="flex flex-wrap -mx-3 mb-6">
 <div class="sm-full md:w-1/2 px-3 mb-6 md:mb-0">
 <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
for="price">Price</label>
 <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('price') is-invalid @enderror" name="price"
id="price" type="text" value="{{ old('price', $product->price) }}" placeholder="price" required autocomplete="price"
autofocus>
 @error('price')
 <span class="text-red-500 text-xs italic" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror

 <div class="flex flex-wrap -mx-3 mb-6">
 <div class="sm-full md:w-1/2 px-3 mb-6 md:mb-0">
 <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
for="image">Image</label>
 <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('image') is-invalid @enderror" name="image"
id="image" type="file" placeholder="image name">
 @error('image')
 <span class="text-red-500 text-xs italic" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
<div>
<img src="{{asset('storage/'. $product->image)}}">
</div>
 </div>
 </div>
 <div class="flex flex-wrap -mx-3 mb-6">
 <div class="sm-full md:w-1/2 px-3 mb-6 md:mb-0">
 <button type="submit" class="btn btn-primary">
 {{ __('Update') }}
 </button>
 <a href="{{ url('products') }}">Back to List</a>
 </div>
 </div>
 </form>

 </div>
 </div>
 </div>
 </div>
</x-master>