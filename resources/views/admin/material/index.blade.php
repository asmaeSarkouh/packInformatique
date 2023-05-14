@extends('admin.layouts.app')
@section('body-admin')
<div class="w-full overflow-x-auto mt-8">
    <table  class="w-full mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr
            
        class="text-xs font-semibold tracking-wide 
        text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" 
                >
                    description
                </th>
                <th scope="col" class="px-6 py-3">
                    Type de material
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($materials as $material)
          <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$material->id}}
            </th>
            <td class="px-4 py-3 text-xs">
                {{$material->description}}
            </td>
            <td class="px-4 py-3 text-xs">
                {{$material->type->title}}
            </td>
            <td class="px-4 py-3 text-xs">
                <x-delete url="{{'materials/'.$material->id}}"/>
                </td>
        </tr>
          @endforeach
            
        </tbody>
    </table>
    {{$materials->links()}}
  </div>
<div class="relative overflow-x-auto">
    
</div>

@endsection