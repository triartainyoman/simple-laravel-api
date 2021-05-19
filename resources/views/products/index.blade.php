<h1>List Products</h1>
<a href="/products/create">Create</a>
<br>
<br>
<table border="1" cellspacing="2" cellpadding="5">
  <thead>
    <tr>
      <th>Name</th> 
      <th>Description</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href="/products/{{$product->id}}/edit">Edit</a>
        <span> | </span>
        <form action="/products/{{$product->id}}" method="POST">
          @method('DELETE')
          @csrf
          <input type="submit" value="Delete"></input>
        </form>
        <span> | </span>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>