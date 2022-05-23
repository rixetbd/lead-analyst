@extends('layouts.backend_layout')


@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header py-1">
                <p class="mt-2 text-white"><strong>Users List</strong>
                    <a href="{{route('admin.member.new')}}" class="float-right btn btn-sm btn-info"><i
                            class="fa fa-plus"></i> Add User</a>
                </p>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped nowrap">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($all_user as $key=>$user)
                        <tr>
                            <td>{{$key+1}}</td>
                            @if ($user->picture != "")
                            <td>
                                <img width="40" src="{{ asset('uploads')}}/users/{{$user->picture}}" alt="user-image"
                                    class="rounded-circle">
                            </td>
                            @else
                            <td>
                                <img width="40" src="{{ asset('admin_assets') }}/images/users/user-1.jpg"
                                    alt="user-image" class="rounded-circle">
                            </td>
                            @endif
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->phone == "")
                                {{ "N/A" }}
                                @else
                                {{$user->phone}}
                                @endif
                            </td>
                            <td>
                                {{-- {{$user->role->rel_to_role->name}} --}}N/A
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer_script')
<!-- Datatable plugin -->
<script src="{{ asset('admin_assets') }}/libs/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/dataTables.responsive.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/buttons.html5.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/buttons.flash.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/buttons.print.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/datatables/dataTables.select.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('admin_assets') }}/libs/pdfmake/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        $("#datatable").DataTable();
        var a = $("#datatable-buttons").DataTable({
            lengthChange: !1,
            buttons: ["copy", "excel", "pdf"]
        });
        $("#key-table").DataTable({
            keys: !0
        }), $("#responsive-datatable").DataTable(), $("#selection-datatable").DataTable({
            select: {
                style: "multi"
            }
        }), a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
    });

</script>
@endsection
