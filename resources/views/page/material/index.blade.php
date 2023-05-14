
@extends('layouts.app')
@section('content')

<div class="max-w-10xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-4 px-4 py-2 border-b">
        <h2 class="text-2xl font-bold leading-tight text-gray-800">Liste de Material</h2>
        <a href="{{url('materials/create')}}" 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un Material</a>
    </div>

    <div class="py-12">
        <div class="max-w-12xl max-h-12xl mx-auto sm:px-8 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="table w-full  text-sm ">
                            <thead class="border-solid border-2 border-indigo-900">
                                <tr>
                                    <th class="px-4 py-2"> Id</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Date Livrison</th>
                                    <th class="px-4 py-2">Lieu</th>
                                    <th class="px-4 py-2">Type</th>
                                    <th class="px-4 py-2">Etat</th>
                                    <th class="px-4 py-2">Probleme</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-solid border-2 border-indigo-900 ">
                                 @forelse ($materials as $material)
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    
                                     <td class="px-4 py-2 border-b">
                                         {{$material->id}}
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         {{$material->description}}
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         {{$material->dateLivrision}}
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         {{$material->lieu}}
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         {{$material->type->title}}
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                        @if (($material->etat)==0)
                                            desactive
                                        @endif
                                        active
                                    </td>
                                    <td class="px-4 py-2 border-b">
                                        @if (($material->probleme)=='')
                                            No probleme
                                        @endif
                                        {{$material->probleme}}
                                    </td>
                                     <td class="px-4 py-2 border-b">
                                        <a 
                                        href="{{url('materials/'.$material->id.'/edit')}}"
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                Edit
                                            </span>
                                        </a>
                                       
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <x-delete url="{{'materials/'.$material->id}}"/>
                                     </td>
                                     
                                     
                                 </tr>
                                 @empty
                                         
                                     @endforelse
                            </tbody>
                        </table>
                   {{$materials->links()}}
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection