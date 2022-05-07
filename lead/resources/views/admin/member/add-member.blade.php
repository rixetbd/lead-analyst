@extends('layouts.backend_layout')


@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header py-1">
                <h5>Add User</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.member.store')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="tel" name="phone">
                    </div>
                    <div class="mb-2">
                        <label for="role">Role</label>
                        <select class="form-control" name="role">
                            <option value="">-- Select A Role</option>
                            <option value="1">Administrator</option>
                            <option value="2">Editor</option>
                            <option value="3">Member</option>
                            <option value="4">Contributor</option>
                            <option value="5">Subscriber</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header py-1">
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
