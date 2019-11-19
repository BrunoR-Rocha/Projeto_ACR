@extends('layouts.layout')

    @section('content')
    
    <div class="procura-principal">

            <label><b>Procurar Filmes / Series / Atores</b></label>
            <input type="text" placeholder="Inserir item de procura" name="nome_procura" >

        <div class="campos-procura">
                <label for="genero">Genero:</label>

                <select name="procura-genero" id="genero">
                    <option value="">----</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                </select>
        </div>
        <div class="campos-procura">
                <label for="ordem_por">Ordenar por:</label>

                <select name="ordem" id="ordem_por">
                    <option value="">----</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="spider">Spider</option>
                    <option value="goldfish">Goldfish</option>
                </select>
        </div>
        <div class="campos-procura">
            <button type="submit" class="searchbtn">Search</button>
        </div>
    </div>
    <hr>
        <section class="home">
            <div class="popular">
                <div class="movie-row">
                    @foreach ($search as $movie)

                    <div class="movie">
                        <a href="/movie/{{$movie['id']}}" class="movie-link">
                            <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="">
                        </a>
                        <div class="movie-box">
                            <a href="/movie/{{$movie['id']}}" class="movie-title">{{$movie['original_title']}}</a>
                            @if( empty($movie['release_date']))
                            <div class="movie-year">Undefined</div>
                                
                            @else
                            <div class="movie-year">{{substr( $movie['release_date'],0,4)}}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
</body>
@endsection
