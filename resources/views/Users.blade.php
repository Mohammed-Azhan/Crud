@extends('Index')
@section('contents')

<div class="relative my-20 flex items-center justify-center w-full">
    <table class="w-[90%] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Mobile
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    URL
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getData as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->first_name}}
                </th>
                <td class="px-6 py-4">
                    {{$item->last_name}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->phone}}
                </td>
                <td class="px-6 py-4">
                    {{$item->company}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->email}}
                </td>
                <td class="px-6 py-4">
                    <div class="break-words w-[300px]">  
                        {{-- leaned new class <break-words></break-words> --}}
                        {{$item->url}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="Users/{{$item->uuid}}/Edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="Users/{{$item->uuid}}/Delete" class="font-medium text-red-600 dark:text-red-500 hover:underline mx-2">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
