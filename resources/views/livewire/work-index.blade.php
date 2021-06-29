<div>
    <div class="bg-gray-200 py-4 mb-16">
        <div class="container flex ">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los trabajos
            </button>

            <!-- Dropdown -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Categorías
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach($categories as $category)
                        <a class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-sky-500 hover:text-white cursor-pointer" wire:click="$set('category_id', {{ $category->id }})" x-on:click="open = false">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>

            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-clock text-sm mr-2"></i>
                    Horarios
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach($types as $type)
                        <a class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-sky-500 hover:text-white cursor-pointer" wire:click="$set('type_id', {{ $type->id }})" x-on:click="open = false">
                            {{ $type->name }}
                        </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>

            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-hospital text-sm mr-2"></i>
                    Sedes
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach($places as $place)
                        <a class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-sky-500 hover:text-white cursor-pointer" wire:click="$set('place_id', {{ $place->id }})" x-on:click="open = false">
                            {{ $place->name }}
                        </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>

        </div>
    </div>

    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach($works as $work)
            <x-work-card :work="$work" />
        @endforeach
    </div>

    <div class="container mt-4 mb-8">
        {{ $works->links() }}
    </div>
</div>
