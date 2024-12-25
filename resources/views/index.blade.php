@extends('layout.main')

@section('pages')
<section class="relative w-full h-screen flex items-center justify-start overflow-hidden">
    <div class="absolute inset-0">
        <img 
            src="{{ asset('assets/images/headerimg.png') }}" 
            alt="Background Image" 
            class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/95 sm:from-emerald-800/90 to-emerald-400/90 sm:to-emerald-300/80"></div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-20">
        <div class="max-w-xl sm:max-w-2xl">
            <h4 class="mb-2 text-sm sm:text-base text-white/90">
                Situs Resmi
            </h4>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 sm:mb-6">
                Kepengurusan<br class="hidden sm:block"/>
                <span class="sm:mt-1 inline-block">Rukun Warga 14</span>
            </h1>
            

            <div class="transform scale-90 sm:scale-100 origin-left">
                <x-button-primary text="Data Demografis" href="/data-demografis" />
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-500 lg:h-48 lg:py-0 py-10">
    <h3 class="text-white text-center lg:py-5 py-0 lg:mb-0 mb-5">Apa Yang Bisa Kami Bantu</h3>
    <div class="flex lg:flex-nowrap flex-wrap justify-center gap-5 ">
        <a href="#" class="bg-white sm:w-44 sm:h-44 w-32 h-32  p-5 flex flex-col justify-center shadow-xl transition-all duration-100 hover:scale-105">
            <div class="flex items-center justify-between">
                <i class='bx bxs-user-detail text-primary-500 md:text-5xl text-3xl'></i>
                <div class="bg-gray-200 flex items-center justify-center w-7 h-7">
                    <i class='bx bxs-right-arrow text-secondary-500'></i>
                </div>
            </div>
            <h5 class="mt-2 align-baseline sm:text-base text-[10px]">Data Kependudukan</h5>
        </a>
        <a href="#" class="bg-white sm:w-44 sm:h-44 w-32 h-32  p-5 flex flex-col justify-center shadow-xl transition-all duration-100 hover:scale-105">
            <div class="flex items-center justify-between">
                <i class='bx bx-task text-primary-500 md:text-5xl text-3xl'></i>
                <div class="bg-gray-200 flex items-center justify-center w-7 h-7">
                    <i class='bx bxs-right-arrow text-secondary-500'></i>
                </div>
            </div>
            <h5 class="mt-2 align-baseline sm:text-base text-[10px]">Layanan Pengajuan</h5>
        </a>
        <a href="#" class="bg-white sm:w-44 sm:h-44 w-32 h-32  p-5 flex flex-col justify-center shadow-xl transition-all duration-100 hover:scale-105">
            <div class="flex items-center justify-between">
                <i class='bx bx-photo-album text-primary-500 md:text-5xl text-3xl'></i>
                <div class="bg-gray-200 flex items-center justify-center w-7 h-7">
                    <i class='bx bxs-right-arrow text-secondary-500'></i>
                </div>
            </div>
            <h5 class="mt-2 align-baseline sm:text-base text-[10px]">Gallery</h5>
        </a>
        <a href="#" class="bg-white sm:w-44 sm:h-44 w-32 h-32  p-5 flex flex-col justify-center shadow-xl transition-all duration-100 hover:scale-105">
            <div class="flex items-center justify-between">
                <i class='bx bx-news text-primary-500 md:text-5xl text-3xl'></i>
                <div class="bg-gray-200 flex items-center justify-center w-7 h-7">
                    <i class='bx bxs-right-arrow text-secondary-500'></i>
                </div>
            </div>
            <h5 class="mt-2 align-baseline sm:text-base text-[10px]">Artikel</h5>
        </a>
        <a href="#" class="bg-white sm:w-44 sm:h-44 w-32 h-32  p-5 flex flex-col justify-center shadow-xl transition-all duration-100 hover:scale-105">
            <div class="flex items-center justify-between">
                <i class='bx bx-baguette text-primary-500 md:text-5xl text-3xl'></i>
                <div class="bg-gray-200 flex items-center justify-center w-7 h-7">
                    <i class='bx bxs-right-arrow text-secondary-500'></i>
                </div>
            </div>
            <h5 class="mt-2 align-baseline sm:text-base text-[10px]">Produk</h5>
        </a>
    </div>
</section>

<section class="lg:mt-48 mt-20 xl:mx-48 lg:mx-20 mx-10 flex lg:flex-row gap-10 flex-col items-center">
    <img class="w-[500px]" src="{{ asset('assets/images/welcomepict.png') }}" alt="">
    <div>
        <div class="bg-secondary-500 w-48 h-1 mb-5"></div>
        <h5 class="text-secondary-500">Seputar Visi Misi Kami</h5>
        <h2 class="text-primary-500">Membangun desa yang maju dan berakhlak</h2>
        <h6>Lorem ipsum dolor sit amet consectetur. Mi libero accumsan arcu massa mus. Tempor sed amet eu vestibulum phasellus nunc elit. Tincidunt netus scelerisque venenatis iaculis feugiat orci sed.</h6>
        <ul class="list-inside list-disc marker:text-secondary-500 mt-5">
            <li>Lorem ipsum dolor sit amet consectetur. </li>
            <li>Et arcu facilisi neque in mauris duis.</li>
            <li>Lorem ipsum dolor sit amet consectetur. </li>
            <li>Et arcu facilisi neque in mauris duis.</li>
        </ul>
    </div>
</section>


<section class="bg-gray-300 py-20 mt-20">
    <div class="flex md:flex-row flex-col items-center justify-between xl:mx-48 lg:mx-20 mx-10 mb-10   ">
        <h2 class="text-primary-500 self-start">Berita & Artikel</h2>
        <x-button-primary text="Baca Lebih Banyak" href="#" class="self-end" />
    </div>
    <div class="xl:mx-48 lg:mx-20 mx-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="relative overflow-hidden h-[300px] sm:h-[400px] group">
                <div class="absolute inset-0">
                    <img 
                        src="{{ asset('assets/images/3.png')}}" 
                        alt="Featured news" 
                        class="w-full h-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/75"></div>
                </div>
                
                <div class="absolute bottom-0 left-0 p-4 sm:p-6 w-full">
                    <span class="inline-block px-2 py-1 sm:px-3 sm:py-1 bg-red-500 text-white text-xs sm:text-sm font-medium rounded-md mb-2 sm:mb-3">
                        HOT
                    </span>
                    
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-1 sm:mb-2">
                        Kedatangan Politisi Terkenal
                    </h2>
                    
                    <p class="text-gray-200 text-xs sm:text-sm">
                        Senin, 19 November 2024
                    </p>
                </div>
                <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
    
            <div class="flex flex-col gap-4">
                <!-- Article 1 -->
                <div class="relative overflow-hidden h-[200px] sm:h-[190px] group">
                    <div class="absolute inset-0">
                        <img 
                            src="{{ asset('assets/images/2.png')}}" 
                            alt="News item" 
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/75"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 p-3 sm:p-4 w-full">
                        <p class="text-white text-base sm:text-lg font-semibold line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur. Sit condimentum id ut turpis at mattis.
                        </p>
                    </div>
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
    
                <!-- Article 2 -->
                <div class="relative overflow-hidden h-[200px] sm:h-[190px] group">
                    <div class="absolute inset-0">
                        <img 
                            src="{{ asset('assets/images/1.png')}}" 
                            alt="News item" 
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/75"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 p-3 sm:p-4 w-full">
                        <p class="text-white text-base sm:text-lg font-semibold line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur. Sit condimentum id ut turpis at mattis.
                        </p>
                    </div>
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection