<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" href="https://firebasestorage.googleapis.com/v0/b/script-648a7.appspot.com/o/app.css?alt=media&token=2c39170e-a2b7-40f3-940d-c496562d1960">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    {{-- <script src="{{asset('build/assets/app-44467501.js')}}"></script>
    <script src="{{asset('build/assets/theme-1b80c2c4.js')}}"></script>
    <script src="{{asset('build/assets/preline-e130ea49.js')}}"></script>
    <link rel="stylesheet" href="{{asset('build/assets/app-2cbc16ec.css')}}"> --}}

    {{-- <script src="{{config('app.url')}}js/app.js"></script>
    <script src="{{config('app.url')}}js/theme.js"></script>
    <script src="{{config('app.url')}}js/preline.js"></script>
    <link rel="stylesheet" href="{{ config('app.url')}}css/app.css"> --}}

    {{-- <script src="https://firebasestorage.googleapis.com/v0/b/script-648a7.appspot.com/o/preline.js?alt=media&token=f006ebdf-54ec-46b9-9a80-319b53978ac4"></script>
    <script src="https://firebasestorage.googleapis.com/v0/b/script-648a7.appspot.com/o/theme.js?alt=media&token=717f5b76-f531-45c2-b4cf-71a6a6d276bf"></script>
    <script src="https://firebasestorage.googleapis.com/v0/b/script-648a7.appspot.com/o/bootstrap.js?alt=media&token=87b18c41-540f-4505-83f0-c14818a6b03c"></script> --}}

    @vite(['resources/js/app.js'])
    
    <style>
        .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
        }
    </style>
</head>

<body class="" >
    <header class="lg:flex flex-wrap hidden sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
            <a class="flex-none text-xl font-semibold dark:text-white w-[30%]" href="#">Brand</a>
            <div class="flex gap-0 w-[39%]">
                <input type="text" class="py-3 form-input px-5 block w-[85%] border-gray-200 rounded-full rounded-r-none border-r-none text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Search...."> 
                <button data-hs-overlay="#search-box" aria-controls="search-box" class=" form-input w-[15%] flex justify-center items-center border-gray-200 rounded-full border-l-none rounded-l-none  focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class=" w-full h-full flex justify-center items-center material-symbols-outlined">search</span>
                </button>
            </div>
            <div class="flex flex-row items-center w-[30%] gap-5 mt-5 sm:justify-end sm:mt-0 sm:pl-5">
                <a class="font-medium text-blue-500" href="#" aria-current="page">Landing</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="#">Account</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="#">Work</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="#">Blog</a>
            </div>
        </nav>
    </header>
    <header class="block lg:hidden dark:bg-gray-900 p-2">
        <nav class=" flex items-center justify-between">
            <div class="w-[33%]">
                <x-sidebar />
            </div>
            
            <a class="flex justify-center text-xl font-semibold dark:text-white w-[33%]" href="#">Brand</a>
            <div class=" flex gap-4 w-[33%] md:justify-end">

                <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#search-box" aria-controls="search-box" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="#">Account</a>

            </div>
            <div class=" bg-white absolute top-0 left-0 right-0  border-b w-full min-h-screen hs-overlay hs-overlay-open:block z-[60] hidden" id="search-box">
                
                <div class=" flex gap-4 dark:bg-slate-900 p-2">
                    <button data-hs-overlay="#search-box" aria-controls="search-box" class=""><span class="material-symbols-outlined dark:text-white">west</span></button>
                    <input type="text" class="py-3 form-input px-5 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Search...."> 
                </div>
                <div class=" dark:bg-slate-950 dark:text-white py-4">
                    No search result
                    
                </div>
            </div>
        </nav>
    
    </header>
    

        {{$slot}}
</body>
</html>