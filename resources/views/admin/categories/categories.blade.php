<x-layouts.index>

            <a class='btn btn-primary pull-right float-end' href="{{route('categories.create')}}">
                 Create New
            </a>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
{{--        <th scope="col">Position</th>--}}
{{--        <th scope="col">Age</th>--}}
{{--        <th scope="col">Start Date</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>
            <!-- Call to action buttons -->
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <a href="{{route('categories.edit', ['category' => $category->id])}}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                </li>
                <li class="list-inline-item">
                    <form action="{{route('categories.destroy', ['category' => $category->id])}}" method="POST">
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
