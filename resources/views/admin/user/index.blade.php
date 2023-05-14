@extends('admin.layouts.app')
@section('body-admin')

<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md">
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form method="post" action="{{url('admin/users')}}">
          @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                    Name
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="name"
                    name="name"
                     id="name" type="text" required autofocus 
                     class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md 
                     placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition 
                     duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900
                      placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                    PPr
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="ppr" id="ppr"  name="ppr" type="number" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ppr') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('ppr')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6">
                <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                    Email address
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="email" name="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                    Password
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="password" name="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                    Confirm Password
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
            </div>

            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Utilisateur
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
</div>
<div class="relative overflow-x-auto mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom d'utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                  Code ppr d'utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                  Email d'utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                  Role d'utilisateur
                </th>
            </tr>
        </thead>
        <tbody>
                @forelse ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$user->ppr}}
                </td>
                <td class="px-6 py-4">
                  {{$user->email}}
              </td>
              <td class="px-6 py-4">
                {{$user->role}}
            </td>
                <td class="px-6 py-4">
                   <x-delete url="{{'users/'.$user->id}}"/>
                </td>
                @empty
            </tr>

                @endforelse
                
        </tbody>
    </table>
    {{$users->links()}}
</div>

@endsection