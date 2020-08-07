@extends('layout/main')

@section('title', 'Check Stock - Add User')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'Add User')</h1>

    <!-- Form Add Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="user">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                            placeholder="Full Name..." name="fullname" value="{{ old('fullname') }}">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dateofbirth">Date of birth</label>
                        <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror"
                            placeholder="Date of birth..." name="dateofbirth"
                            value="{{ old('dateofbirth') }}">
                        @error('dateofbirth')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control @error('gender') is-invalid @enderror" name="gender"
                            value="{{ old('gender') }}">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password..." name="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="retypepassword">Retype Password</label>
                        <input type="password" class="form-control @error('retypepassword') is-invalid @enderror"
                            placeholder="Retype Password..." name="retypepassword"
                            value="{{ old('retypepassword') }}">
                        @error('retypepassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email..." name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
