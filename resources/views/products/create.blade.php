<h1>Create Product</h1>

<form action="/products" method="POST">
  @csrf
  <label for="">Name : </label>
  <input type="text" name="name" autocomplete="off"><br>
  <label for="">Desc :</label>
  <input type="text" name="description" autocomplete="off"><br>
  <label for="">Price :</label>
  <input type="number" name="price"><br>
  <label for="">Image :</label>
  <input type="text" name="image_url"><br>
  <input type="submit" value="save">

</form>