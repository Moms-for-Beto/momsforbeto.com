@if ($results[0]->accuracy >= 1 && in_array($results[0]->accuracy_type, ['rooftop', 'range_interpolation', 'point']))
  @include('partials.result', ['result' => $results[0]])
@else
  @component('components.alert')
    @slot('title')
      We could not find an exact match for the address
    @endslot

    @if (count($results) > 1)
        Here are a couple of options
    @else
        This is the best match we could find
    @endif
  @endcomponent

  @foreach ($results as $result)
    @include('partials.result', ['result' => $result])
  @endforeach
@endif
