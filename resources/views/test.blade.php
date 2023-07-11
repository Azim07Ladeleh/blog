@extends('./layouts/app')

@section('page-content')

    

<div class="card mt-2">
    <div class="card-body">
    @if(session()->has('success'))
    
        <div class=" alert alert-success">{{session()->get('success')}}</div>
        
     @endif
        <form action="/article" method="POST" class="form-product">
            @csrf
            <h4>Enregistrer un article</h4>
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" placeholder="Titre de l'article" name="title" value={{old('title')}}>
                @error('title')
                <div class="text text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            {{-- <input type="email" class="form-control"  placeholder="Votre Email" name="email" value={{old('email')}}> --}}
            <button type="submit" class="btn btn-primary" name="btn-submit">Ajouter</button>
        </form>
       
    </div>
    
</div>
<div class="container mt-2">
         <a href="/voir">Liste des articles disponibles</a>
       </div>
@endsection 
