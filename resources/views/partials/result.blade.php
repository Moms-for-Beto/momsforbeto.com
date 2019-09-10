<div class="bg-{{ $result->accuracy >= 0.7 ? 'green': 'orange' }}-100 rounded-lg overflow-hidden border border-{{ $result->accuracy >= 0.7 ? 'green': 'orange' }}-200 mb-4">

    <iframe src="https://maps.geocod.io/#{{ $result->location->lat }},{{ $result->location->lng }}" class="w-full" height="200"></iframe>

    <div class="p-4">
        <p class="mb-4 text-xl font-mono">{{ $result->formatted_address ?? 'Unknown' }}</p>
        <h2 class="text-xl mb-4"><strong>County:</strong> {{ $result->address_components->county ?? 'Unknown' }}</h2>

        @foreach ($result->fields->congressional_districts as $district)
            <h2 class="text-xl mb-2 font-bold">{{ $district->name ?? 'Unknown' }}</h2>
        @endforeach
    </div>
</div>
