{{-- resources/views/components/layanan-card.blade.php --}}
<div x-data="{ isOpen: false }">
    <div class="flex">
        <div class="bg-primary-500 sm:w-5 w-0"></div>
        <div class="flex sm:flex-row flex-col sm:justify-between w-full bg-white">
            <div class="flex flex-col px-3 py-5">
                <h4 class="text-primary-500 sm:text-xl text-md mb-3">{{ $title }}</h4>
                <h6 class="sm:text-base text-[13px]">{{ $description }}</h6>
                <button @click="isOpen = !isOpen" class="text-gray-400 mt-5 flex items-center"
                    :class="{ 'text-primary-500': isOpen }">
                    <i class='bx bx-error-circle text-2xl mr-2'></i>
                    <h5 x-text="isOpen ? 'Tutup Persyaratan' : 'Lihat Persyaratan'"></h5>
                </button>
            </div>
            <a href="{{ $actionLink }}" class="bg-primary-500 sm:py-0 py-5 text-white flex items-center justify-center px-3">
                Ajukan
            </a>
        </div>
    </div>

    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95" 
        class="bg-gray-200 py-5 px-8 border-[1px] border-gray-300 border-t-0">
        <h4>Persyaratan Pengajuan:</h4>
        <ul class="list-disc list-inside marker:text-secondary-500 mt-2">
            @foreach ($requirements as $requirement)
                <li>{{ $requirement }}</li>
            @endforeach
        </ul>
    </div>
</div>
