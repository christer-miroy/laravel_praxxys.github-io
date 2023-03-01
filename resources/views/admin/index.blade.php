@extends('admin.admin_master')

@section('admin')
<div class="row">
    
    <!--start stats table-->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Statistics
            </div>
            @php
                $products = DB::table('products') -> get();
                $users = DB::table('users') -> get();
            @endphp
            <div class="card-body">
                <table class="table m-2">
                    <tbody>
                        <tr>
                            <td>Number of Users:</td>
                            <td>{{ count($users) }}</td>
                        </tr>
                        <tr>
                            <td>Number of Products:</td>
                            <td>{{ count($products) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection