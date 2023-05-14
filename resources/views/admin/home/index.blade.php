@extends('admin.layouts.app')
@section('body-admin')

<div class="d-flex justify-content-center  m-80">
    <div class="grid lg:grid-cols-6 gap-4 p-4">
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>150</p>
                <p className='text-gray-600'>Material Active</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>15</p>
                <p className='text-gray-600'>Material Desactive</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>
    
    </div>
    <div className="w-full md:col-span-2 relative lg:h-[70vh] h-[50vh] m-auto p-4 border rounded-lg bg-white"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
</div>
@endsection