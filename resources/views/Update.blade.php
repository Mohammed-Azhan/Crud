@extends('Index')
@section('contents')
    @if (Session::has('success') || Session::has('failure'))
        <div class="p-4 mb-4 text-sm dark:bg-gray-800 dark:text-green-400"
            role="alert">
            @if (Session::has('success'))
                    @if(Session::has('success'))
                <span class="font-medium text-green-50">
                    {{Session('success')}}
                </span>
                    @endif
                    @else
                    <span class="font-medium text-red-500">
                        {{Session('failure')}}
                    </span>
            @endif
        </div>
    @endif


    <div class="flex items-center justify-center">
        <form class="bg-black p-4 relative dark:bg-gray-900 w-3/4 mt-12 rounded-lg" action="/Users/{{$getData->id}}/update" method="POST">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                @csrf
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                        name</label>
                    <input type="text" id="first_name" name="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John" value="{{$getData->first_name}}" />
                    @error('first_name')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                        name</label>
                    <input type="text" id="last_name" name="last_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doe" value="{{$getData->last_name}}" />
                    @error('last_name')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" id="company" name="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Flowbite" value="{{$getData->company}}" />
                    @error('company')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="text" id="phone" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="1234567890" value="{{$getData->phone}}" />
                    @error('phone')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website
                        URL</label>
                    <input type="url" id="website" name="url"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="flowbite.com" value="{{$getData->url}}"/>
                    @error('url')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" value="{{$getData->email}}"/>
                    @error('email')
                        <p class="text-red-500 mt-3">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-3"><a href="{{route('Users')}}">Back</a></button>
        </form>
    </div>
@endsection
