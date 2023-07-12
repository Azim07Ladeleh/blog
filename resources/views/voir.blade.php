@extends('./layouts/app')

@section('page-content')

    

<div class="card mt-2">
    <div class="card-body">
        <ul class="list-group mt-2">
            <h4>Article disponibles</h4>
            @forelse ($articles as $article)
            <li class="list-group-item">
                <a href="/article/{{$article->id}}" class="title">{{$article->titre}}</a>
                <div class="description">{{$article->description}}</div>
            </li>
            @empty
            <p class="text text-info">Aucun article disponible</p>
                
            @endforelse
        </ul>
    </div>
</div>

@endsection 
