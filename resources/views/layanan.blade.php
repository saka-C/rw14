@extends('layout.main')

@section('pages')
    <section class="sm:mt-44 mt-32 lg:mx-52 sm:mx-20 mx-4">
        <div class="flex flex-col gap-4 ">
            <div class="bg-secondary-500 w-32 h-1"></div>
            <h2 class="text-primary-500">Layanan & Pengajuan</h2>
            <h6>Pilih layanan & pengajuan yang dibutuhkan</h6>
        </div>

        <div class="flex flex-col gap-7 my-16">
            <x-layanan-card 
            title="Pengajuan SKTM (Surat Keterangan Tidak Mampu)"
            description="Lorem ipsum dolor sit amet consectetur. Elit cras id diam aenean."
            :requirements="[
                'KTP asli & fotocopy',
                'KK asli & fotocopy',
                'Et arcu facilisi neque in mauris duis.',
                'Lorem ipsum dolor sit amet consectetur. '
            ]"
            actionLink="/ajukan-sktm" 
            />
            <x-layanan-card 
            title="Pengajuan SKTM (Surat Keterangan Tidak Mampu)"
            description="Lorem ipsum dolor sit amet consectetur. Elit cras id diam aenean."
            :requirements="[
                'KTP asli & fotocopy',
                'KK asli & fotocopy',
                'Et arcu facilisi neque in mauris duis.',
                'Lorem ipsum dolor sit amet consectetur. '
            ]"
            actionLink="/ajukan-sktm" 
            />
            <x-layanan-card 
            title="Pengajuan SKTM (Surat Keterangan Tidak Mampu)"
            description="Lorem ipsum dolor sit amet consectetur. Elit cras id diam aenean."
            :requirements="[
                'KTP asli & fotocopy',
                'KK asli & fotocopy',
                'Et arcu facilisi neque in mauris duis.',
                'Lorem ipsum dolor sit amet consectetur. '
            ]"
            actionLink="/ajukan-sktm" 
            />
        </div>

    </section>
    
    
@endsection
