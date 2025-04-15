<x-navbar />
<x-layout>


    @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif


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
 
                <form 
                method="POST" 
                action="{{ route('nuovo') }}"
                enctype="multipart/form-data"
                >
                    @csrf
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo del Post</label>
                        <input name="titolo" type="text" class="form-control" value="{{ old('titolo') }}" id="titolo" >
                    </div>
                    <div class="mb-3">
                        <label for="descrizione" class="form-label">Breve descrizione del post</label>
                        <input name="descrizione" type="text" class="form-control" id="descrizione" value="{{ old('descrizione') }}">
                    </div>

                    <div class="mb-3">
                        <label for="testo" class="form-label">Testo del blog</label>
                        <textarea name="testo" class="form-control" id="testo" cols="20" rows="8" value="{{ old('testo') }}"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input name="categoria" type="text" class="form-control" id="categoria" value="{{ old('categoria') }}">
                    </div>

                    <div class="mb-3">
                        <label for="immagine" class="form-label">Immagine di copertina</label>
                        <input name="immagine" type="file" class="form-control" id="immagine" >
                    </div>

                    <div class="mb-3">
                        <label for="autore" class="form-label">Autore</label>
                        <input name="autore" type="text" class="form-control" id="autore" value="{{ old('autore') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>

            </div>
        </div>
    </div>



</x-layout>
