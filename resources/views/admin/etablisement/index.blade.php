@extends('admin.layouts.app')
@section('body-admin')
<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md ">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10  mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <form wire:submit.prevent="authenticate" action="{{url('admin/etablisements')}}" method="post">
            @csrf
            <div>
                <label for="ppr" class="block text-sm font-medium text-gray-700 leading-5">
                    Code d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="codeEtablisement" id="codeEtablisement" name="codeEtablisement" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('codeEtablisement')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700 leading-5">
                    Nom d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="nom" id="nom" name="nom" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('nom')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="type_id" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
        <div class="mt-2">
          <select id="type_id" name="type_id" autocomplete="type_id-name" 
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option>select Directeur</option>
            {{-- @foreach ($users as $user)
            <option value="{{$user->id}}"
                @if( old('id')  == $user->id) selected="selected" @endif>
                {{$user->name}}</option>
            @endforeach --}}
          </select>
        </div>
        </div>
        <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Etablisement
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="relative overflow-x-auto mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Code d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom de la directeur
                </th>
            </tr>
        </thead>
        <tbody>
                @forelse ($etablisements as $etablisement)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$etablisement->codeEtablisement}}
                </td>
                <td class="px-6 py-4">
                    {{$etablisement->nom}}
                </td>
                <td class="px-6 py-4">
                   <x-delete url="{{'etablisements/'.$etablisement->id}}"/>
                </td>
                @empty
            </tr>

                @endforelse
                
        </tbody>
    </table>
    {{$etablisements->links()}}
</div>

@endsection