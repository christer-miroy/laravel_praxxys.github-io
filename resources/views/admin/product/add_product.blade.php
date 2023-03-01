@extends('admin.admin_master')

@section('admin')
<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <form action="{{ route('create.product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">Create New Product</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <!-- start validation message -->
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option selected disabled>Select Category</option>
                                    <option value="One">One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                </select>
                                <!-- start validation message -->
                                @error('category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                <!-- start validation message -->
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Select Multiple Images</label>
                                <input type="file" class="form-control" name="image[]" multiple>
                                <!-- start validation message -->
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Date and Time</label>
                                <input type="datetime-local" id="datetime" name="datetime">
                                <!-- start validation message -->
                                @error('datetime')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('add.product') }}"><button
                                        class="btn btn-outline-info" type="submit"><b>Submit</b></button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection