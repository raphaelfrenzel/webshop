{{$product->name}}

<a href="{{route('products.edit',['product'=>$product])}}">Edit</a>
<form action="{{route('products.destroy',['product'=>$product])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
<br>
