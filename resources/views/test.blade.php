
{{-- formulaire pour poster les element dans la dd; name, description, imgUrl, price --}}

<form action="{{ route('add') }}" method="post">

@csrf

<input type="text" name="name" placeholder="name">
<input type="text" name="description" placeholder="description">
<input type="text" name="price" placeholder="price">
<input type="text" name="imgUrl" placeholder="imgUrl">

{{-- mettre  l'image en local dans la base de donnée
 --}}

 



<button type="submit">Envoyer</button>

</form>



<ul style="border: 1px solid black; padding: 10px; margin: 10px;">
    @foreach($items as $item)
        <li>{{ $item->name }}</li>
        <li>{{ $item->description }}</li>
        <li>{{ $item->price }}</li>
        <img src="{{ "img/".$item->imgUrl }}" alt="image" width="100" height="100">
    @endforeach
</ul>