<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vu</title>
</head>
<body>
    
    <p>Le nom de l'utilisateur est {{$nom}} et il a {{$age}}</p>
    
    {{-- @if($nom == 'Azim Ladeleh')
        <p>Oui c'est lui</p>
    @else
        <p> Non, Ce n'est pas lui</p>
    @endif --}}

    {{-- @switch($age)
        @case($age<18)
            <p>L'utilisateur {{$nom}} est encore mineur !</p>  
        @break
        @case($age>=18)
            <p>L'utilisateur {{$nom}} peut déjà avoir un enfant !</p>  
        @break
        @default
            <p>L'utilisateur {{$nom}} est neutre !</p>  
    @endswitch --}}

    {{-- @isset($product)
    <P>Le produit existe</P>
    @endisset

    @empty($product)
    <p>La valeur du produit n'est pas définis ou est vide</p>
    @endempty --}}

    {{-- @while($age < 20)
        <p>L'utilisateur est toujours mineur</p>
        @break
    @endwhile --}}

    {{-- @for($i= 15; $i < $age; $i++)
    <p>L'age est {{$i}}</p>
    @endfor --}}


    {{-- @foreach($nums as $num)
    <p>Le numéro est {{$num}}</p>
    @endforeach --}}


    @if(count($nums) >= 1)
    @foreach($nums as $num)
    <p>Le numéro est {{$num}}</p>
    @endforeach
    @else
    <p>Aucun numéro n'est fournis</p>
    @endif
</body>
</html>