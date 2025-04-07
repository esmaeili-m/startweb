<div>
    <!-- resources/views/pages/services.blade.php -->

    <section class="bg-white py-16 menu-bg">
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

</div>
