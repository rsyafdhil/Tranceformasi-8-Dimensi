<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Tranceformasi - Login</title>
</head>
<body class="bg-primary md:bg-bgcolor dark:md:bg-slate-800 h-[100vh]">
    <div class="flex space-x-0 justify-center">
        <section class="w-full flex md:w-1/2 h-[100vh] justify-center items-center">
            <div class="h-fit justify-center">
                <h1 class="md:hidden text-[#FCF304] text-center font-bold text-7xl md:text-4xl mt-12 mb-10 font-montserrat">
                    #8 Dimensi Kepemimpinan
                </h1>
                <h1 class="text-primary font-montserrat md:text-primary text-center font-bold text-6xl md:text-4xl mb-10">
                    Masuk
                </h1>
                <form method="POST" action="{{ route('login') }}" class="max-w-lg mx-auto">
                    @csrf
                    <label for="email" id="">
                        <input id="email" type="email" name="email" placeholder="Masukkan Email" class="mb-10 rounded-xl md:rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full max-md:h-16 md:w-full block text-2xl md:text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer max-md:placeholder:text-2xl max-md:placeholder:text-slate-400 focus:placeholder:text-transparent" value="{{ old('email') }}" required
                        />
                    </label>
                    <label for="password" id="">
                        <input id="password" type="password" name="password" placeholder="Masukkan Password" class="mb-10 rounded-xl md:rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full md:w-full max-md:h-16 block text-2xl md:text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer max-md:placeholder:text-2xl max-md:placeholder:text-slate-400 focus:placeholder:text-transparent" required
                        />
                    </label>
                    @error('email')
                    <h1 class="text-red-600 -mt-10 mb-4">{{ $message }}</h1>
                    @enderror
                    <a href="" class="text-bgcolor text-2xl md:text-base dark:md:text-slate-300 md:text-black w-max block mx-auto underline font-montserrat hover:text-blue-400 dark:hover:text-blue-400">
                        Lupa Kata Sandi?
                    </a> 
                    <br>
                    <div class="flex space-x-20 justify-center">
                        <button type="submit" class="w-48 md:w-32 border-solid rounded-2xl md:rounded-lg border-2 bg-bgcolor md:bg-transparent dark:md:bg-bgcolor md:border-primary">
                            <h1 class="text-primary text-2xl md:text-base text-center font-montserrat font-semibold italic my-4 md:m-1">Masuk</h1>
                        </button>
                        <a href="{{ route('tfregister.create') }}" class="w-48 md:w-32 border-solid rounded-2xl md:rounded-lg border-2 md:bg-primary">
                            <h1 class="text-bgcolor text-2xl md:text-base text-center font-montserrat font-semibold italic my-4 md:m-1">Daftar</h1>
                        </a>
                    </div>
                </form>
                <h1 class="md:hidden mt-4 font-montserrat justify-center align-middle text-center text-bgcolor italic font-light text-md mb-56">
                    PT. TRANCEFORMASI INDONESIA - 2023
                </h1>
            </div>
        </section>
        <section class="hidden md:flex w-1/2 justify-center items-center bg-primary h-[100vh]">
            <div class="">
                <img src="/dist/title.png" alt="title" class="hidden md:block w-9/12 mx-auto">
                <h1 class="font-montserrat justify-center align-middle text-center text-bgcolor italic mt-12 text-4xl">
                    SELF ASSESMENT
                </h1>
                <h1 class="font-montserrat justify-center align-middle text-center text-bgcolor italic mt-12 font-light text-xs">
                    PT. TRANCEFORMASI INDONESIA - 2023
                </h1>
            </div>
        </section>
    </div>
    <input type="checkbox" name="" id="toggle" class="peer hidden"/>
    <label for="toggle" class="max-md:hidden items-center justify-center fixed h-14 w-14 bg-primary dark:border-black border-2 rounded-full z-10 bottom-4 right-4 p-4 transition ease-in-out hover:-translate-y-1  cursor-pointer">
        <span>
            <img src="/dist/moon.png" alt="">
        </span>
    </label>
        <!-- <span class="block w-5 h-5 border-t-2 border-l-2 rotate-45 mt-2"></span> -->
    </input>
    @include('templates.partials.script')
</body>
</html>