<div class="bg-{{ $result->accuracy >= 0.7 ? 'green': 'orange' }}-100 border-l-4 border-{{ $result->accuracy >= 0.7 ? 'green': 'orange' }}-500 text-{{ $result->accuracy >= 0.7 ? 'green': 'orange' }}-700 mb-4">

    <iframe src="https://tile-cdn.geocod.io/#{{ $result->location->lat }},{{ $result->location->lng }}" class="w-full" height="200"></iframe>

    <div class="p-4">
        <p class="mb-4 text-xl font-mono">{{ $result->formatted_address ?? 'Unknown' }}</p>
        <h2 class="text-xl mb-4"><strong>County:</strong> {{ $result->address_components->county ?? 'Unknown' }}</h2>

        @foreach ($result->fields->congressional_districts as $district)
            <h2 class="text-xl mb-2 font-bold">{{ $district->name ?? 'Unknown' }}</h2>
        @endforeach
    </div>
</div>
