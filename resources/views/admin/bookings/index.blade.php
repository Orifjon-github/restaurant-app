<x-layouts.index>
    <a class='btn btn-primary pull-right float-end mb-3' href="{{route('bookings.create')}}">
        Create New
    </a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name of User</th>
            <th scope="col">Phone</th>
            <th scope="col">Number of People</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Message</th>

        </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{$booking->id}}</th>
                <td>{{$booking->user->name}}</td>
                <td>{{$booking->phone}}</td>
                <td>{{$booking->people}}</td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->time}}</td>
                <td>{{$booking->message}}</td>
                <td>
                    <!-- Call to action buttons -->
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{route('bookings.edit', ['booking' => $booking->id])}}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{route('bookings.destroy', ['booking' => $booking->id])}}" method="POST">
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
