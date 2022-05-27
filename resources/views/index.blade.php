



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List All Product</title>
       <style>
       table {  
         font-family:sans-serif;
        th, td {
            padding:.25em .5em;
            text-align:left;
             &:nth-child(2) {
             text-align:right;
            }
         }
        td {
            background-color:#eee;    
        }
        th {
        background-color:#009;
        color:#fff;
            }
        }

        .zigzag {
        border-collapse:separate;
        border-spacing:.25em 1em;
        tbody tr:nth-child(odd) {
            transform:rotate(2deg);
        }
        thead tr,
        tbody tr:nth-child(even) {
            transform:rotate(-2deg);
        }
        }
       </style>
    </head>
    <body>
    <table class="zigzag">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>product Price</th>
        <th>Product Description</th>
        <th>Url</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
      <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price}}</td>
      <td>{{ $product->description  }}</td>
      <td>{{ $product->url }}</td>
      <td><a href="{{ url('/product_edit/'.$product->id) }}"/>Edit</a></td>
      <td> <form action = "{{ url('product_delete/'.$product->id) }}" method = "post" class="form-group" style="width:70%; margin-left:15%;">
            @method('DELETE')
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><button type="submit"  value = "Edit Product" class="btn btn-primary">Delete</button></form>
</td>
      </tr>
      @empty
      <tr>
        <td colspan="6">No Record Found</td>
      </tr>
      @endforelse 
    </tbody>
  </table> <label style="color: green" class="form-group">{{Session::get('message')}}</label><br><br>
  <a href = "/">Home</a><br><br>
    </body>
</html>



