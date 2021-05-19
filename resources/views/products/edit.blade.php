<h1>Edit Product</h1>

<form action="/products/{{$product->id}}" method="POST">
  @method('PUT')
  @csrf
  <label for="">Name : </label>
  <input type="text" name="name" autocomplete="off" value="{{$product->name}}"><br>
  <label for="">Desc :</label>
  <input type="text" name="description" autocomplete="off" value="{{$product->description}}"><br>
  <label for="">Price :</label>
  <input type="number" name="price" value="{{$product->price}}"><br>
  <label for="">Image :</label>
  <input type="text" name="image_url" value="{{$product->image_url}}"><br>
  <input type="submit" value="save">

</form>