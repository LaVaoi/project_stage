<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main class="bg-white font-montserrat" >
        <header class="h-24 sm:h-32 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">
                <div class="text-black font-black text-2xl flex items-center">
                <div class="sm:w-1/4 ">
                <img src="https://doosys.ma/wp-content/uploads/2021/06/20.jpg" alt="Example Image">
              </div>
                </div>
                <div class="flex items-center">
                    <nav class="text-black text-lg hidden lg:flex items-center">

                        @if(Route::has('admin.login'))
                                <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-green-700">Login</a>

                        @endif

                        <!-- @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="py-2 px-6 flex hover:text-green-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-2 px-6 flex hover:text-green-500">Sign up</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 py-2 px-6 flex hover:text-green-500">Register</a>
                                @endif
                            @endauth
                        @endif -->
                    </nav>
                    <button class="lg:hidden flex flex-col">
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row items-center">
            <div class="sm:w-2/5 flex flex-col items-start mt-8 sm:mt-0">
                <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">SaharaAtlas</strong> for</h1>
                <p class="lg:text-lg mb-4 sm:mb-12">Atlas Sahara is today the main subsidiary of the DERHEM Group, its activity is focused on the purchase, import and marketing of petroleum products.</p>
                <a href="#" class="font-semibold text-lg bg-green-500 hover:bg-green-400 text-white py-2 px-3 rounded-full">Pour Nous</a>
            </div>
            <div class="sm:w-3/5 ">
            <img src="https://static.medias24.com/content/uploads/2020/03/atlassahara.jpg?x27138" alt="Example Image">
            </div>
        </div>
    </main>







</x-front-guest-layout>
