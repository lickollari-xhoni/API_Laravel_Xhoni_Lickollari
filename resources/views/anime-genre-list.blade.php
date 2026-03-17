<x-layout>
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-0 border-bottom pb-2">Risultati Ricerca</h2>
                    <p class="text-muted">Ecco gli anime trovati per questa categoria</p>
                </div>
                <a href="{{ route('rotta1') }}" class="btn btn-outline-dark btn-sm">
                    ← Torna ai Generi
                </a>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($results['data'] as $result)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-info border-4">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title text-dark mb-3">
                                {{ $result['title'] }}
                            </h5>
                            
                            <div class="mt-auto">
                                <a href="{{ route('rotta3', ['id' => $result['mal_id']]) }}" 
                                   class="btn btn-dark w-100 shadow-sm">
                                    Guarda Dettagli
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>