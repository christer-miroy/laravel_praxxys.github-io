@extends('admin.admin_master')

@section('admin')
<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <form action="{{ url('product/update/'. $products -> id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">Edit Existing Product</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ $products -> name }}">
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
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <!-- start validation message -->
                                @error('category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea placeholder="{{ $products -> description }}">
                                <!-- start validation message -->
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!-- end validation message -->
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Select Multiple Images</label>
                                <input type="file" class="form-control" name="image[]" aria-describedby="emailHelp" multiple>
                                @php
                                    $old_images = Images::where('product_id', 'LIKE', '%'.$id.'%');
                                @endphp
                                @foreach ($old_images as $old_image)
                                <img src="{{ $old_image -> image }}" alt="{{ $old_image -> image }}">
                                    <input type="hidden" name="old_image" value="{{ $old_image -> image }}">
                                @endforeach
                                <!-- start validation message -->
                                @error('datetime')
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
                                <button type="submit" class="btn btn-outline-primary mt-3">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection