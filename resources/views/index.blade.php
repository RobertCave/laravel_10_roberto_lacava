<x-navbar />
<x-layout>


    <!-- Blog Header -->
    <header class="blog-header py-5">
        <h1>Benvenuto al Blog</h1>
        <p>Questo è solo un esercizio in PHP su laravel e database.</p>
    </header>

    <!-- Featured Post Section -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-post">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/post.jpg" alt="Featured Post">
                        </div>
                        <div class="col-md-6">
                            <h2>Un Blog creato ad-hoc per Laravel e Php</h2>
                            <p class="mt-3">
                                "Laravel è uno dei framework PHP più popolari per lo sviluppo web moderno. Con la sua
                                sintassi elegante e strumenti potenti, Laravel semplifica la creazione di applicazioni
                                web robuste e scalabili. Grazie a funzionalità come l'ORM Eloquent, il sistema di
                                routing, e la gestione delle migrazioni, Laravel permette agli sviluppatori di
                                concentrarsi sulla logica dell'applicazione, riducendo il tempo necessario per scrivere
                                codice ripetitivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- loop dei post -->
    <div class="container">
        <div class="row g-4">


            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ $post->immagine }}" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titolo }}</h5>
                            <p class="card-text"><small class="text-muted">Autore: {{ $post->autore }}</small></p>
                            <p class="card-text">{{ $post->descrizione }}e</p>
                            <p class="card-text"><small class="text-muted">Categoria: {{ $post->categoria }}</small></p>
                            <a href="#" class="btn btn-secondary btn-sm">Leggi tutto</a>

                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>


</x-layout>
