
  <div class="page-header">
    <h1>Products</h1>
  </div>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Vendor</th>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td><a href="{{ route('products.show', ['id'=> $product->id]) }}">{{ $product->description }}</a></td>
        <td><a href="{{ route('merchants.show', ['id'=> $product->merchant->id]) }}">{{ $product->merchant->name }}</a></td>
      </tr> 
      @endforeach 
    </tbody>
  </table>
