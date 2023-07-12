@extends('./../layouts/app')

@section('page-content')
<a href="/test">Retour</a>
<div class="card mt-3">
    <div class="card-body">
        <div class="title">{{$article->titre}}</div>
        <p>{{$article->description}}</p>
    </div>
    <div class="card-footer">
        <a href="/article/{{$article->id}}/edition" class="btn btn-primary">Editer</a>
        <form action="/article/{{$article->id}}/delete" method="POST" class="mt-1">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
        
    </div>
</div>
@endsection