<div>
    <p class="mb-4">{{ $result->formatted_address ?? 'Unknown' }}</p>
    <h2 class="text-xl mb-4"><strong>County:</strong> {{ $result->address_components->county ?? 'Unknown' }}</h2>

    @foreach ($result->fields->congressional_districts as $district)
        <h2 class="text-xl mb-4 font-bold">{{ $district->name ?? 'Unknown' }}</h2>
    @endforeach
</div>
