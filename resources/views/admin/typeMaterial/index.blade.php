@extends('admin.layouts.app')
@section('body-admin')
<!-- component -->
<div class="w-full max-w-screen-xl mx-auto px-6 mt-8">
    <div class="flex justify-center p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                     List type de material
                </div>
                <form action="{{url('admin/types')}}" method="post">
                    @csrf
                    <div class="flex items-center bg-gray-200 rounded-md">
                        <div class="pl-2">
                           <button type="submit" class="bg-grey-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            ajouter
                           </button>
                        </div>
                        <input
                            class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight border-none focus:outline-none py-2 px-2"
                            id="title" type="text" name="title" placeholder="">
                    </div>
                </form>
               @foreach ($types as $type)
               <div class="py-3 text-sm">
                <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                    <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                    <div class="flex-grow font-medium px-2">{{$type->title}} </div>
                    <div class="text-sm font-normal text-gray-500 tracking-wide">
                        <x-delete url="{{'types/'.$type->id}}"/>
                    </div>
                </div>
            </div>
               @endforeach
               {{$types->links()}}
            </div>
        </div>
    </div>
</div>

@endsection