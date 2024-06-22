<nav class="bg-transparent overflow-hidden">
    <div class="w-auto h-16 sm:h-20 px-3 lg:px-8 bg-red-500">
        <div class="relative flex items-center justify-between">
            <div class="shrink-0 flex items-center justify-center">
                <img src="{{ asset('images/assets/logo.png') }}" alt="Gymfinity" class="w-16 h-16 sm:w-20 sm:h-20 inset-0">
            </div>
            <div class="flex-1 ml-6 hidden lg:block">
                <div class="flex">
                    <a href="" class="px-4 py-2 mx-5 rounded-md uppercase text-sm text-semibold text-slate-50 hover:bg-slate-700 hover:bg-opacity-10">
                        home
                    </a>
                    <a href="" class="px-4 py-2 mx-5 rounded-md uppercase text-sm text-semibold text-slate-50 hover:bg-slate-700 hover:bg-opacity-10">
                        Clothes
                    </a>
                    <a href="" class="px-4 py-2 mx-5 rounded-md uppercase text-sm text-semibold text-slate-50 hover:bg-slate-700 hover:bg-opacity-10">
                        Blogs
                    </a>
                    <a href="" class="px-4 py-2 mx-5 rounded-md uppercase text-sm text-semibold text-slate-50 hover:bg-slate-700 hover:bg-opacity-10">
                        items
                    </a>
                </div>
            </div>
            <div class="flex">
                <a href="#" class="shrink-0 py-2 px-4 mr-1 rounded-md bg-slate-700 bg-opacity-20 hidden lg:block">
                    Sign in
                </a>

                {{-- Search image --}}
                <button class="rounded-full p-2 mr-1 hover:bg-slate-700 hover:bg-opacity-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                </button>

                {{-- Favorite image --}}
                <button class="rounded-full p-2 mr-1 hover:bg-slate-700 hover:bg-opacity-10 hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>                      
                </button>

                {{-- Profile image --}}
                <button class="rounded-full p-2 mr-2 hover:bg-slate-700 hover:bg-opacity-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                      </svg>                                           
                </button>
                
                <div class="mr-2 felx items-center lg:hidden">
                    <button type="button" class="inline-flex items-center justify-center rounded-md p-2 hover:bg-slate-700 hover:bg-opacity-10 hover:bg-gray-700  focus:outline-none focus:ring-1 focus:ring-inset focus:ring-slate-700 menu-btn" arial-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        {{-- Menu Button --}}
                        <svg class="block h-6 w-6 menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                        </svg>
                          
                          {{-- Close Button --}}
                          <svg class="block h-6 w-6 hidden close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>
                          
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute w-full inset-y-0 top-16 lg:top-20 md:w-8/12 lg:hidden bg-red-500 hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300" aria-current="page">
                Profile
            </a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Clothes</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Items</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blogs</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Favorite</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sign in</a>
          </div>
    </div>
</nav>