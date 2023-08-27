<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
    <title>Laravel CRUD </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">Products</a>
        </li>
    </ul>

</nav>
     <div class="container">
         <div class="text-right">
             <a href="products/create" class="btn btn-dark mt-2" >New Product</a>
         </div>

         <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->index+1}}</td>
                        <td>
                            <a href="products/{{ $product->id }}/show" class="text-dark" style="color: deepskyblue">{{ $product->name }}</a></td>
                        <td>
                            @if($product->image==NULL)
                                <img src="images/no_image.jpg" class="rounded-circle"
                                     width="30"  height="30"/>
                            @else
                                <img src="products/{{$product->image}}" class="rounded-circle"
                                     width="30"  height="30"/>
                            @endif
                        </td>
                        <td>
                            <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <a href="products/{{$product->id}}/edit" class="btn btn-danger btn-sm">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
         </table>
         {{ $products->links()}}
         <h1>Products</h1>
     </div>
</body>
</html>
