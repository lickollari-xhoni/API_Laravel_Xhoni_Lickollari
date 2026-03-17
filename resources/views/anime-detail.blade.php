<x-layout>

    <a href="javascript:history.back()">← Torna indietro</a>
    <h1>{{ $result['data']['title'] }}</h1>
    <img src="{{ $result['data']['images']['jpg']['large_image_url'] }}" alt="">

</x-layout>
