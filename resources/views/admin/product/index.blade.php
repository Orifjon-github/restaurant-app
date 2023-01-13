<x-layouts.index>
    <a class='btn btn-primary pull-right float-end mb-3' href="{{route('products.create')}}">
        Create New
    </a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">About</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>$ {{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->about}}</td>
                <td>
                    <!-- Call to action buttons -->
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{route('products.destroy', ['product' => $product->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <script>
        function myFunction() {
            if(!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
</x-layouts.index>
