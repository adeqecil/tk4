@extends('layout/main')

@section('title', 'Check Stock - User Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'User')</h1>

    <!-- Table Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
        </div>

        <div class="card-body datatables">
            <div class="table-responsive">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- Add --}}
                <div class="row btn-add">
                    <a href="adduser" class="btn btn-primary">Add User</a>
                </div>
                {{-- End Add --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Date of birth</th>
                            <th>Gender</th>
                            <th>Password</th>
                            <th>Retype Password</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $users)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $users->fullname }}</td>
                                <td>{{ $users->dateofbirth }}</td>
                                <td>{{ $users->gender }}</td>
                                <td>{{ $users->password }}</td>
                                <td>{{ $users->retypepassword }}</td>
                                <td>{{ $users->email }}</td>
                                <td>
                                    <!--TAMBAHAN-->
									<a href="user/{{ $users->id }}/edituser" class="badge badge-success">Edit</a>
                                    <form action="user/{{ $users->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- End of Table Data --}}

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
@endsection
