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
            <h6 class="m-0 font-weight-bold text-primary">Video Data</h6>
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
                    <a href="{{ url('video') }}" class="btn btn-primary">Back to List</a>
                </div>
                {{-- End Add --}}
				<video width="320" height="240" controls>
					<source src="{{ url('upload_video/'.$videos->videoname) }}" type='video/mp4'>
				</video>
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
