<x-layouts.index>

    <main id="main" class="main">

        <div class="pagetitle">
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
    </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </main>

</x-layouts.index>
