<div>
    <!-- resources/views/pages/services.blade.php -->

    <section class="bg-white py-16 menu-bg mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">خدمات استارت وب وان</h2>
                <p class="mt-4 text-gray-600">طراحی سایت حرفه‌ای، اختصاصی و مطابق با نیاز کسب‌و‌کار شما</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">
                @foreach ($services as $service)
                    <div class="bg-gray-50 shadow-md rounded-2xl p-6 hover:shadow-xl transition">
                        <div class="text-4xl mb-4 text-indigo-500">
                           <img src="{{asset($service->image)}}">
                        </div>
                        <a href="{{route('services.details',$service->slug)}}">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2 text-[14px] sm:text-[20px]">{{ $service['title'] }}</h3>
                        </a>
                        <div class="line-clamp-3 text-gray-600 text-[12px]/8 text-[10px] sm:text-[13px]">
                            <p class="text-gray-600 ">{!! $service['description'] !!}</p>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-xl shadow hover:bg-orange-700 transition">
                    درخواست مشاوره رایگان
                </a>
            </div>
        </div>
    </section>
    <div class="mb-5 mt-10 sm:mt-[50px]">
        <div class="w-full menu-bg rounded-xl shadow-md overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- بخش تصویر -->
                <div class="bg-gray-100 flex items-center justify-center p-6 h-[300px] overflow-hidden">
                    <img
                        src="{{asset('home/images/services.jpg')}}"
                        alt="تصویر تماس"
                        class="w-full h-full object-cover object-top rounded-lg"
                    >
                </div>

                <!-- بخش فرم -->
                <div class="p-6">
                    <div class="mt-6 text-sm text-gray-500 mb-2">
                        <p class="mb-2">لطفاً شماره همراه معتبر خود را وارد نمایید.</p>
                        <p>همکاران ما در سریع‌ترین زمان ممکن با شما تماس خواهند گرفت.</p>
                    </div>
                    <form class="space-y-4" wire:submit="save">
                        <div>
                            <input
                                type="tel"
                                wire:model.lazy="phone"
                                placeholder="۰۹۱۲۳۴۵۶۷۸۹"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right dir-rtl"
                                pattern="09[0-9]{9}"
                                required
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200"
                        >
                            درخواست تماس
                        </button>
                    </form>

                    <div class="mt-6 text-sm text-gray-500">
                        <p>ما در ساعات کاری ۹ صبح تا ۵ عصر پاسخگوی شما هستیم</p>
                        @if(session('message'))
                            <div class="bg-green-100 mt-2 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ session('message') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
