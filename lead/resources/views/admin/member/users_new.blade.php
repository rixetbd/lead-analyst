@extends('layouts.backend_layout')


@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header py-1">
                <h5>Add User</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.member.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="tel" name="phone">
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="mb-2">
                        <label for="role">Role</label>
                        <select class="form-control" name="role">
                            <option value="">-- Select A Role</option>
                            @foreach ($all_role as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="phone">upload a photo</label>
                        <input type="file" name="picture" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
