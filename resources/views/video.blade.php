@extends('layout/main')

@section('title', 'Check Stock - video Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'video')</h1>

    <!-- Table Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">video Data</h6>
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
                    <a href="addvideo" class="btn btn-primary">Add video</a>
                </div>
                {{-- End Add --}}

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Video</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video as $videos)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $videos->videoname }}</>
                                <td>
                                    <a href="video/{{ $videos->id }}/playvideo" class="badge badge-success">Play</a>
                                    <form action="video/{{ $videos->id }}" method="POST" class="d-inline">
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
