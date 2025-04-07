<div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 px-4 py-5  ">
            <h1 class="mt-5 text-orange-600  slide-in-text-1 font-bold text-[30px] sm:text-[60px] text-center sm:text-right">استارت وب وان</h1>
            <p class="mt-4 text-lg slide-in-text-2 text-center sm:text-right">چشم انداز خود را به یک تجربه آنلاین جذاب تبدیل کنید.</p>
            <p class="mt-2 text-base text-gray-700 slide-in-text-3 text-center sm:text-right">
                در استارت وب وان، ما وب سایت های زیبا و کاربردی ایجاد می کنیم که به رشد آنلاین کسب و کار کمک می کند. تیم ما
                به ارائه وب سایت های با کیفیت بالا و پاسخگو متناسب با نیازهای شما اختصاص دارد.            </p>
            <div class=" hidden md:block">
                <div class="mt-3 flex flex-wrap slide-in-text-4 text-center sm:text-right">
                <span class="services ">
                    راه حل های تجارت الکترونیک
                </span>
                    <span class="services">
                    بهینه سازی سئو
                </span>
                    <span class="services">
                    واکنش گرا
                </span>
                    <span class="services">
                    طراحی
                    UI/UX
                </span><span class="services">
برندسازی و طراحی گرافیک                </span>
                    <span class="services">
                    تعمیر و نگهداری وب سایت
                </span>
                </div>
            </div>
            <div class="slide-in-text-4 text-center sm:text-right">
                <button class="social-link">
                    <i class="fa fa-facebook" style="font-size:15px;"></i>
                </button>
                <button class="social-link">
                    <i class="fa fa-instagram" style="font-size:15px;"></i>
                </button>
                <button class="social-link">
                    <i class="fa fa-twitter" style="font-size:15px;"></i>
                </button>
                <button class="social-link">
                    <i class="fa fa-heart" style="font-size:15px;"></i>
                </button>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-4 py-5 ">
                <img class="pic-main h-[300px] slide-out-text-3 sm:h-[400px]"  src="{{asset('home/images/main.png')}}">
        </div>
    </div>
    <div class="mt-10 sm:mt-[100px] mb-5 ">
            <p class="mb-3  text-center text-gray-800 text-[20px]">خدمات ما</p>
            <p class="text-center mb-3 text-gray-700 text-[10px] sm:text-[13px]">لیست خدماتی که شرکت استارت وب وان ارائه می دهد</p>
            <hr class="mb-3">
            <div wire:ignore class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 ">
                @foreach(\App\Models\Services::where('status',1)->get() as $service)
                    <div class="bg-blue-500 p-2 services-us fade-in-up">
                        <img src="{{asset('home/images/responsive.png')}}" width="100%" class="h-[184px] sm:h-[200px] md:h-[184px]">
                        <div class="p-2">
                            <p class="text-[14px] sm:text-[20px] mb-1">{{$service->title}}</p>
                            <p class="text-gray-600 text-[12px]/8 text-[10px] sm:text-[13px] line-clamp-3">{{$this->remove_html($service->description)}}.</p>
                            <button  class=" bg-transparent hover:bg-orange-500 mt-2 w-full text-orange-600 font-semibold hover:text-white py-2 px-4 border border-orange-600 hover:border-transparent rounded-[27px]">
                                مشاوره رایگان<i class="fa fa-phone  mx-2"></i>
                            </button>

                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <div class="mb-5 mt-10 sm:mt-[150px]">
        <p class="mb-3  text-center text-gray-800  text-[20px] sm:text-[20px]">پلن ها</p>
        <p class="text-center mb-3 text-gray-700 text-[10px] sm:text-[13px]">لیست قیمت و ویژگی‌های طراحی سایت در استارت وب وان</p>
        <hr class="mb-2">
        <div  class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 shadow-sx">
            @foreach(\App\Models\Price::where('status',1)->orderBy('order')->get() as $item)
                @if($loop->first)
                        <div wire:key="plans_{{$item->id}}" wire:click="get_plans({{$item->id}})" class="cursor-pointer hover:bg-orange-600 hover:text-white text-orange-600 text-center p-3 sm:rounded-tr-lg transition-all duration-900  border-[1px] border-orange-600  {{$plan?->id == $item->id ? 'bg-orange-600 text-white' : ''}}">
                            {{$item->title}}
                        </div>
                    @elseif($loop->last)
                        <div wire:key="plans-{{$item->id}}" wire:click="get_plans({{$item->id}})" class="cursor-pointer hover:bg-orange-600 hover:text-white text-orange-600 text-center p-3   sm:border-r-0 rounded-bl-lg sm:rounded-tl-lg transition-all duration-900 border-[1px] border-orange-600 {{$plan?->id == $item?->id ? 'bg-orange-600 text-white' : ''}}">
                            {{$item->title}}
                        </div>
                    @else
                        <div wire:key="plans-{{$item->id}}" wire:click="get_plans({{$item->id}})" class="cursor-pointer hover:bg-orange-600 hover:text-white text-orange-600 text-center transition-all duration-900  p-3 sm:border-r-0 border-[1px] border-orange-600 {{$plan?->id == $item->id ? 'bg-orange-600 text-white' : ''}}">
                            {{$item->title}}
                        </div>
                @endif
            @endforeach
        </div>
        @if($plans ?? 0)
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 shadow-sx">
                @foreach($plans as $item)
                    @if($loop->first)
                        <div class="p-4 {{$plans->count() > 1 ? '' : 'sm:rounded-bl-lg'}} sm:rounded-br-lg border-t-0 border-[1px] border-orange-600">
                            <p>{{$item->title}}</p>
                            <hr class="border-t-1 border-orange-600 mb-2 mt-2">
                            @foreach($item->features ?? [] as $feature)
                                <p class="text-[12px]  text-gray-700">{{$feature}}</p>
                                <hr class="border-t-1 border-orange-600 mb-2 mt-2">

                            @endforeach
                            <button class="bg-transparent text-orange-600 w-full px-4 py-2 rounded-lg border-2 border-orange-600 transition-all duration-300
               hover:bg-orange-600 hover:text-white hover:border-orange-600">
                                {{ number_format($item->price) }} تومان
                                <i class="fa fa-phone"></i>
                            </button>

                        </div>
                    @elseif($loop->last)
                        <div class="p-4 {{$plans->count() > 2 ? '' : 'sm:rounded-bl-lg'}}  {{$plans->count() > 2 ? 'sm:rounded-br-lg' : ''}} border-t-0 border-[1px] border-orange-600 sm:border-r-0">
                            <p>{{$item->title}}</p>
                            <hr class="border-t-1 border-orange-600 mb-2 mt-2">
                            @foreach($item->features ?? [] as $feature)
                                <p class="text-[12px]  text-gray-700">{{$feature}}</p>
                                <hr class="border-t-1 border-orange-600 mb-2 mt-2">
                            @endforeach
                            <button class="bg-transparent text-orange-600 w-full px-4 py-2 rounded-lg border-2 border-orange-600 transition-all duration-300
               hover:bg-orange-600 hover:text-white hover:border-orange-600">
                                {{ number_format($item->price) }} تومان
                                <i class="fa fa-phone"></i>
                            </button>

                        </div>
                    @else`
                        <div class="p-4  {{$plans->count() > 2 ? '' : 'sm:rounded-bl-lg'}} border-t-0 sm:broder-r-0 border-[1px] border-orange-600">
                            <p>{{$item->title}}</p>
                            <hr class="border-t-1 border-orange-600 mb-2 mt-2">
                            @foreach($item->features ?? [] as $feature)
                                <p class="text-[12px]  text-gray-700">{{$feature}}</p>
                                <hr class="border-t-1 border-orange-600 mb-2 mt-2">

                            @endforeach
                            <button class="bg-transparent text-orange-600 w-full px-4 py-2 rounded-lg border-2 border-orange-600 transition-all duration-300
               hover:bg-orange-600 hover:text-white hover:border-orange-600">
                                {{ number_format($item->price) }} تومان
                                <i class="fa fa-phone"></i>`

                            </button>


                        </div>
                    @endif
                @endforeach
            </div>
        @endif



    </div>
    <div class="mb-5 mt-10 sm:mt-[100px]">
        <p class="mb-3  text-center text-gray-800 text-[20px]">نمونه کار ها</p>
        <p class="text-center mb-3 text-gray-700 text-[10px] sm:text-[13px]">نمونه کارهای طراحی سایت در استارت وب وان</p>
        <hr class="mb-2">
        <div class="slider-card mt-5 relative">
            <div class="flip-container">
                <img id="main-image" class="item-slide rounded-xl transition-transform duration-500 ease-in-out"
                     src="{{ asset('home/images/Screenshot (127).png') }}">
            </div>
            <div class="absolute -bottom-5 -left-5   flex  overflow-x-auto scroll-smooth gap-3 w-max cursor-grab max-w-full overflow-auto"
                 id="slider">

                @foreach(\App\Models\Posts::latest()->take(4)->get() as $post)
                    <div class="flex-shrink-0">
                        <img width="200" height="100"
                             class="w-[200px] h-[100px] rounded-xl object-cover shadow-lg object-cover object-top slide"
                             src="{{ asset($post->image) }}"
                             alt="{{ $post->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mb-5 mt-10 text-gray-800 sm:mt-[100px]">
        <p class="mb-3  text-center  text-[20px] ">سوالات متداول</p>
        <p class="text-center mb-3 text-gray-700 text-[10px] sm:text-[13px]">در این بخش به رایج‌ترین پرسش‌ها پاسخ داده‌ایم تا ابهامات شما را برطرف کنیم</p>
        <hr class="mb-2">
        <div wire:ignore class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 ">
            @foreach(\App\Models\Queztions::orderBy('order')->get() as $queztion)
                <div class=" fade-in-up">
                    <div class="p-2">
                        <div class="flex">
                            <img src="{{asset('home/images/comment.png')}}" style="width: 40px;height: 40px">
                            <div class="mx-2">
                                <p class="text-[12px] sm:text-[18px] mb-0">{{$queztion->title}}</p>
                                <p class="text-gray-600 text-[12px]/6  sm:text-[13px]/8 line-clamp-3">{{$queztion->description}}.</p>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>

    <script>
        document.querySelectorAll('.slide').forEach(image => {
            image.addEventListener('click', function () {
                const mainImage = document.getElementById('main-image');
                mainImage.classList.add('flip');

                setTimeout(() => {
                    mainImage.src = image.src;
                    mainImage.classList.remove('flip');
                }, 600);
            });
        });
        const elements = document.querySelectorAll('.fade-in-up');

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // دیگر المان رو observe نمی‌کنیم
                }
            });
        }, options);

        // observe کردن تمام المان‌ها
        elements.forEach(element => {
            observer.observe(element);
        });
    </script>
</div>
