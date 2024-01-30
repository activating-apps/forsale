@extends('layouts.app')

@section('content')
    <div class="flex h-screen justify-center items-center px-5 dark:bg-dark">
        <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-10 text-white shadow-2xl w-[60%]">
            <h1 class="text-5xl text-center font-bold mb-5">
                {{ $_SERVER['HTTP_HOST'] }}
            </h1>
            <h2 class="text-3xl text-center mb-5">
                This domain is for sale!
            </h2>
            <p class="text-xl text-center mb-5">
                If you want this domain, please contact us!
            </p>
            <div class="text-center">
                <a href="mailto:activatingapps@gmail.com">
                    <button
                        class="bg-white hover:bg-gray-100 text-blue-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Contact Us
                    </button>
                </a>
                <div class="text-center mt-4"><a href="https://36projects.nl">36projects.nl</a>
                </div>
            </div>
        </div>
    </div>
@endsection
