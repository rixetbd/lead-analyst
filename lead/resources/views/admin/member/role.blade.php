@extends('layouts.backend_layout')


@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header py-1">
                <h5>Add Role</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.role.store')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Role Title</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <label for="name">Permission</label>
                    <div class="mb-2 d-flex">
                        <table class="table text-center">
                            <tbody>
                                <tr>
                                    <td>Read</td>
                                    <td>
                                        <select name="read" class="form-control">
                                            <option value="">-- Select one</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                    <td>Write</td>
                                    <td>
                                        <select name="write" class="form-control">
                                            <option value="">-- Select one</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td>
                                        <select name="create" class="form-control">
                                            <option value="">-- Select one</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                    <td>Delete</td>
                                    <td>
                                        <select name="delete" class="form-control">
                                            <option value="">-- Select one</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">Add Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header py-1">
                <h5>Add Role</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Role Title</th>
                            <th>Read</th>
                            <th>Write</th>
                            <th>Create</th>
                            <th>Delete</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($all_role as $role)
                        <tr>
                            <td>{{$role->name}}</td>
                            <td>{{ ($role->read == 1 ? "Yes" : "No") }}</td>
                            <td>{{($role->write == 1 ? "Yes" : "No")}}</td>
                            <td>{{($role->create == 1 ? "Yes" : "No")}}</td>
                            <td>{{($role->delete == 1 ? "Yes" : "No")}}</td>
                            <td>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
