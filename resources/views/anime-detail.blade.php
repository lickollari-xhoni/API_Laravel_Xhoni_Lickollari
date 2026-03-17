<x-layout>
    <div class="container my-5">
        <div class="mb-4 text-end">
            <a href="javascript:history.back()" class="btn btn-outline-dark btn-sm shadow-sm ">
                ← Torna alla lista
            </a>
        </div>

        <div class="card shadow-lg border-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-md-4 bg-dark d-flex align-items-center justify-content-center">
                    <img src="{{ $result['data']['images']['jpg']['large_image_url'] }}"
                        class="img-fluid rounded-start shadow" alt="{{ $result['data']['title'] }}"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <div class="col-md-8">
                    <div class="card-body p-4">
                        <h1 class="display-5 fw-bold text-dark mb-3">
                            {{ $result['data']['title'] }}
                        </h1>

                        <hr class="my-4" style="border-top: 3px solid #0dcaf0; width: 50px;">

                        <div class="mb-4">
                            <span class="badge bg-info text-dark p-2 me-2">Voto:
                                {{ $result['data']['score'] ?? 'N/D' }}</span>
                            <span class="badge bg-dark p-2">Episodi: {{ $result['data']['episodes'] ?? '?' }}</span>
                        </div>

                        <h5 class="fw-bold text-muted uppercase small">Sinossi</h5>
                        <p class="card-text fs-5 text-secondary" style="line-height: 1.6;">
                            {{ $result['data']['synopsis'] ?? 'Nessuna descrizione disponibile per questo anime.' }}
                        </p>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
