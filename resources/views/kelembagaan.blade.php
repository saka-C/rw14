@extends('layout.main')

@section('pages')
    <section class="sm:mt-44 mt-32 lg:mx-40 sm:mx-20 mx-4">
        <div class="flex flex-col gap-3">
            <div class="bg-secondary-500 w-32 h-1 mb-2"></div>
            <h5 class="text-secondary-500">Beberapa organisasi di desa</h5>
            <h1 class="text-primary-500">Kelembagaan</h1>
        </div>
        <div class="flex flex-wrap justify-center my-20 gap-10">
            <x-kelembagaan-card title="Kampung Ramah Lingkungan (KRL)"
                description="Lorem ipsum dolor sit amet consectetur. Suspendisse cursus malesuada at placerat lorem."
                img="krl.png">
                <x-button-primary text="Lihat Selengkapnya" href="#"
                    class="w-full justify-between bg-primary-100 mt-2" />
            </x-kelembagaan-card>
            <x-kelembagaan-card title="Kemasyarakatan Pemuda Karang taruna"
                description="Lorem ipsum dolor sit amet consectetur. Suspendisse cursus malesuada at placerat lorem."
                img="taruna.png">
                <x-button-primary text="Lihat Selengkapnya" href="#"
                    class="w-full justify-between bg-primary-100 mt-2" />
            </x-kelembagaan-card>
            <x-kelembagaan-card title="Dewan Kemakmuran Masjid (DKM)"
                description="Lorem ipsum dolor sit amet consectetur. Suspendisse cursus malesuada at placerat lorem."
                img="dkm.png">
                <x-button-primary text="Lihat Selengkapnya" href="#"
                    class="w-full justify-between bg-primary-100 mt-2" />
            </x-kelembagaan-card>
            <x-kelembagaan-card title="Bank Sampah Desa"
                description="Lorem ipsum dolor sit amet consectetur. Suspendisse cursus malesuada at placerat lorem."
                img="bsd.png">
                <x-button-primary text="Lihat Selengkapnya" href="#"
                    class="w-full justify-between bg-primary-100 mt-2" />
            </x-kelembagaan-card>
            <x-kelembagaan-card title="Kewirausahaan (PKK)"
                description="Lorem ipsum dolor sit amet consectetur. Suspendisse cursus malesuada at placerat lorem."
                img="pkk.png">
                <x-button-primary text="Lihat Selengkapnya" href="#"
                    class="w-full justify-between bg-primary-100 mt-2" />
            </x-kelembagaan-card>
        </div>
    </section>
@endsection
