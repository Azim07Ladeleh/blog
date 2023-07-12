@extends('./../layouts/app')

@section('page-content')
<div class="row mt-2">
    <div class="col-md-4">
        <div class="card mt-3">
            <div class="card-body">
            <h5>Editer Un Article</h5>
            <form action="/article/{{$article->id}}/update" method="POST" >
                @csrf
                @method('put')
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Titre de l'article" value="{{$article->titre}}">
                    <textarea name="description" class="form-control mt-1" placeholder="Votre description" >{{$article->description}}
                    </textarea>
                </div>
                <div class="boutons">
                    <button class="btn btn-success mt-1 "type="submit" >Actualiser</button>
                    <button class="btn btn-warning mt-1">Annuler</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection