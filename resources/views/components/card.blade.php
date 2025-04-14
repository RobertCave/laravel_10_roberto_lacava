<div class="card">
    <img src="{{ Storage::url($post->immagine) }}" class="card-img-top" alt="immagine">
    <div class="card-body">
        <h5 class="card-title">{{ $post->titolo }}</h5>
        <p class="card-text"><small class="text-muted">Autore: {{ $post->autore }}</small></p>
        <p class="card-text">{{ $post->descrizione }}e</p>
        <p class="card-text"><small class="text-muted">Categoria: {{ $post->categoria }}</small></p>
        <a href="#" class="btn btn-secondary btn-sm">Leggi tutto</a>

    </div>
</div>  