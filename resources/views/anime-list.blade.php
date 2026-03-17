<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="border-bottom pb-2">Esplora i Generi</h2>
                <p class="text-muted">Seleziona una categoria per scoprire nuovi anime.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($results['data'] as $result)
                <div class="col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold text-dark">
                                    {{ $result['name'] }}
                                </h5>
                                <p class="card-text text-muted small">
                                    Anime associati: <span class="badge bg-info text-dark">{{ $result['count'] }}</span>
                                </p>
                            </div>
                            
                            <a href="{{ route('rotta2', ['id' => $result['mal_id']]) }}" 
                               class="btn btn-dark w-100 mt-3 align-self-end">
                                Vedi Anime
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
</x-layout>