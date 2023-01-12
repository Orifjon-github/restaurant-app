<x-layouts.index>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">

                        <form action="{{route('categories.update', ['category' => $category->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Change</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>

                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.index>
