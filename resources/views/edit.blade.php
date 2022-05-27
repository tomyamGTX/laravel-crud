
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Product</title>
    </head>
    <body>
        
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-61g:px-8">
         <div class="py-4px-4bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form action = "{{ url('product_update/'.$product->id) }}" method = "post" class="form-group" style="width:70%; margin-left:15%;">
            @method('PUT')
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

            <label class="form-group">Product Name:</label>
                <input type="text" class="form-control" value="{{ $product->name }}" name="name"><br><br><br>
            <label>Product description:</label>
                <input type="text" class="form-control" value="{{ $product->description }}" name="description"><br><br><br>
            <label>Product Price:</label>
                <select class="form-control" name="price" value="{{ $product->price }}">
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select><br><br><br>
            <label>Url:</label>
                <input type="text" class="form-control" value="{{ $product->url }}" name="url"><br><br><br>
            <button type="submit"  value = "Edit Product" class="btn btn-primary">Submit</button><br><br>
        </form>  
         </div>
    </div>
</div>
<a href = "/">Home</a><br><br>
    </body>
</html>



