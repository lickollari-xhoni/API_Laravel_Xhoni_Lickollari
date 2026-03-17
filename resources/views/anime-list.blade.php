<x-layout>

    <ul>
        @foreach ($results['data'] as $result)
            <li>
                <a href="{{ route('rotta2', ['id' => $result['mal_id']]) }}">
                    {{ $result['name'] }} -Anime Associati:{{ $result['count'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
