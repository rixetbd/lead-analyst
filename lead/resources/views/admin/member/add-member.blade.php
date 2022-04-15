@extends('layouts.backend_layout')


@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5>Add User</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-2">
                        <label for="">Name</label>
                        <input type="text" name="" id="" class="form-control"> 
                    </div>
                    <div class="mb-2">
                        <label for="">Email</label>
                        <input type="email" name="" id="" class="form-control"> 
                    </div>
                    <div class="mb-2">
                        <label for="">Phone</label>
                        <input type="tel" name="" id="" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="">Role</label>
                        <select name="" id="" class="form-control"></select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Users List</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>SL</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Role</td>
                            <td>Action</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@endsection