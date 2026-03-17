<x-layout>
    <ul>
        @foreach ($results['data'] as $result)
            <li><a href="{{ route('rotta3', ['id' => $result['mal_id']]) }}">{{ $result['title'] }}</a></li>
        @endforeach
    </ul>
</x-layout>