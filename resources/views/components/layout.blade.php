<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
    <script defer src="{{mix('./resources/js/theme.js')}}"></script>
    <script defer src=" {{mix('./node_modules/preline/dist/preline.js')}} "></script>
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
                <input type="text" class="py-3 form-input px-5 block w-[85%] border-gray-200 rounded-full rounded-r-none text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Search...."> 
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