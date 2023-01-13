<x-layouts.index>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">

                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 mt-5">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>No Category Selected</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="about">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="photo">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary float-end">Create</button>

                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.index>
