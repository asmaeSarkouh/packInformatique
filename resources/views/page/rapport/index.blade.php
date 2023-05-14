@extends('layouts.app')
@section('content')

    <!-- component -->
    @foreach($rapports as $rapport)
<div class="m-8">
    <ul class="mb-8 space-y-4 text-left text-gray-500 dark:text-gray-400">
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span>Nom de le directeur</span>
            <span class="font-semibold text-gray-900 dark:text-white">{{$rapport->user['name']}} </span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span>Nom de l'etablisement</span>
            <span class="font-semibold text-gray-900 dark:text-white">{{$rapport->etablisement['nom']}} </span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span>Le nombere de material active: <span class="font-semibold text-gray-900 dark:text-white">{{$rapport->material->count('id')}} </span></span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span>Le nomber de material desactivet: 
                <span class="font-semibold text-gray-900 dark:text-white">6 months</span>
            </span>
        </li>
    </ul>
    <a 
        href="{{ url('rapport/'.$rapport->id)}}"
        class="px-4 py-3 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex"
    >
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
        </svg>

        <span class="ml-2">Download</span>
    </a>
    {{-- <a href="{{ route('download-pdf') }}">Download PDF</a> --}}


</div>
@endforeach

@endsection