
@extends('layouts.app')
@section('content')

<div class="max-w-10xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-4 px-4 py-2 border-b">
        <h2 class="text-2xl font-bold leading-tight text-gray-800">Liste des Etablisements</h2>
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
                                    <th class="px-4 py-2">Code d'eytablisement</th>
                                    <th class="px-4 py-2">Nom d'eytablisement</th>
                                    <th class="px-4 py-2">Directeur d'eytablisement</th>
                                    <th class="px-4 py-2"></th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            
                            <tbody class="border-solid border-2 border-indigo-900 >
                                @forelse ($etablisements as $etablisement)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-4 py-2 border-b">
                                    {{$etablisement->id}}
                                </td>
                                <td class="px-4 py-2 border-b">
                                    {{$etablisement->codeEtablisement}}
                                </td>
                                <td class="px-4 py-2 border-b">
                                    {{$etablisement->nom}}
                                </td>
                                <td class="px-4 py-2 border-b">
                                    @foreach ($etablisement->users as $user)
                                        {{$user->name}}
                                    @endforeach
                                </td>
                                <td class="px-4 py-2 border-b">
                                    @foreach ($etablisement->materials as $material)
                                        {{$material->count('id')}}
                                    @endforeach
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <x-delete url="{{'etablisements/'.$etablisement->id}}"/>
                                </td>
                                @empty
                            </tr>
                                @endforelse
                                
                          
                            
                        </tbody>
                        </table>
                       
                       {{$etablisements->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection