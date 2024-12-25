<div class="flex flex-col bg-white w-[292px]">
    <img src="{{ asset('assets/images/' . $img) }}" alt="{{ $title }}">
    <div class="p-5 flex flex-col gap-4">
        <h4 class="">{{ $title }}</h4>
        <h6 class="text-gray-400">{{ $description }}</h6>
        {{ $slot }}
    </div>
</div>