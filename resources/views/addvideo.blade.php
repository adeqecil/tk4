@extends('layout/main')

@section('title', 'Check Stock - Add Video')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'Add Video')</h1>

    <!-- Form Add Video -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Video</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="video" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="videoname">Video</label>
						<input type="text" class="form-control @error('videoname') is-invalid @enderror" placeholder="Video Name..." name="videoname" value="{{ old('videoname') }}" >
                        @error('videoname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" >
						
                        @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-add-video-user">Submit</button>
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
