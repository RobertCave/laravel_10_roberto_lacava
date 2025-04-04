<x-navbar />
<x-layout>



    <div class="row justify-content-center align-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
            <h1 class="text-center">
                Aggiungi un post per il blog
            </h1>

        </div>
    </div>


    <div class="container">
        <div class="row mt-1">
            <div class="col-12 col-md-6 justify-content-center">

                {{-- // id
                    // Titolo
                    // descrizione
                    // testo
                    // immagine
                    // categoria
                    // autore --}}
                <form method="POST" action="{{ route('nuovo') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo del Post</label>
                        <input name="titolo" type="text" class="form-control" id="titolo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descrizione" class="form-label">Breve descrizione del post</label>
                        <input name="descrizione" type="text" class="form-control" id="descrizione" required>
                    </div>

                    <div class="mb-3">
                        <label for="testo" class="form-label">Testo del blog</label>
                        <textarea name="testo" class="form-control" id="testo" cols="20" rows="8" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input name="categoria" type="text" class="form-control" id="categoria" required>
                    </div>

                    <div class="mb-3">
                        <label for="autore" class="form-label">Autore</label>
                        <input name="autore" type="text" class="form-control" id="autore" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>

            </div>
        </div>
    </div>



</x-layout>
