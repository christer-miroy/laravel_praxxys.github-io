@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <!-- start alert message -->
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
            </div>
            <!-- end alert message -->
            

            <div class="row">
                <!-- start all products table -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            All Products
                        </div>
                        <div class="card-body">
                            <table class="table m-2">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date and Time</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->datetime }}</td>
                                            <td>
                                                <!-- Edit Button -->
                                                <a href="{{ url('product/edit/' . $product->id) }}"
                                                    class="btn btn-outline-info"><b>Edit</b></a>
                                                <!-- Delete Button -->
                                                <a href="{{ url('/product/delete/' . $product->id) }}"
                                                    class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to delete this product?')"><b>Delete</b></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- start pagination -->
                            {{ $products->links() }}
                            <!-- end pagination -->
                        </div>
                    </div>
                </div>
                <!-- end all products table -->

                <!-- start search -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Search Name or Category</div>
                        <div class="card-body">
                            <form action="{{ route('all.products') }}" method="get">
                                <div class="form-group" style="display:flex">
                                    <input type="text" name="search" class="form-control" placeholder="Search here.">
                                    <button type ="submit" class="btn btn-outline-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end search -->
            </div>
        </div>
    </div>
@endsection
