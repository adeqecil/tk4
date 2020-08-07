@extends('layout/main')

@section('title', 'Check Stock - Edit User')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'Edit User')</h1>

    <!-- Form Add Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="update">
                    @csrf
                    <div class="form-group">
					<input class="form-control" type="hidden" name="id" id="id" value="{{ $user->id}}">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name..." name="fullname" value="{{ $user->fullname }}">
                    </div>
                    <div class="form-group">
                        <label for="dateofbirth">Date of birth</label>
                        <input type="text" class="form-control" placeholder="Date of birth..." name="dateofbirth" value="{{ $user->dateofbirth }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" value="{{ $user->gender }}">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password..." name="password" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="retypepassword">Retype Password</label>
                        <input type="password" class="form-control" placeholder="Retype Password..."
                            name="retypepassword" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email..." name="email" value="{{ $user->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-add-product-user">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {{-- End of Form Add Data --}}

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
