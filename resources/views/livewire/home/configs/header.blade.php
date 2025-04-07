<div>
    <header class="mt-5">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-5  menu-bg lg:px-8 bg-white border-rad rounded-xl"
                 aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5  btn-start text-gray-500 ">
                        Let's get started
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <div class="hidden lg:flex lg:gap-x-12">

                    <a href="{{route('home')}}" class="text-sm/6 font-semibold text-gray-500  {{request()->routeIs('home') ? 'text-orange-600' : 'menu-link'}}">خانه</a>
                    <a href="{{route('services.index')}}" class="text-sm/6 font-semibold text-gray-500 {{request()->routeIs('services.*') ? 'text-orange-600' : 'menu-link'}}">خدمات ما</a>
                    <a href="{{route('portfolio')}}" class="text-sm/6 font-semibold text-gray-500 {{request()->routeIs('portfolio') ? 'text-orange-600' : 'menu-link'}}">نمونه کار ها</a>
                    <a href="{{route('article')}}" class="text-sm/6 font-semibold text-gray-500 {{request()->routeIs('article') ? 'text-orange-600' : 'menu-link'}}">مقالات</a>
                    <a href="{{route('about')}}" class="text-sm/6 font-semibold text-gray-500 {{request()->routeIs('about') ? 'text-orange-600' : 'menu-link'}}">درباره ما</a>
                    <a href="{{route('contact')}}" class="text-sm/6 font-semibold text-gray-500 {{request()->routeIs('contact') ? 'text-orange-600' : 'menu-link'}}">ارتباط با ما</a>
{{--                    <div class="flex lg:flex-1">--}}
{{--                        <a href="#" class="-m-1.5  btn-start text-gray-500 ">--}}
{{--                            Let's get started--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </div>

            </nav>
    </header>
</div>
