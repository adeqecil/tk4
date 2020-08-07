@extends('layout/main')

@section('title', 'Check Stock - Edit Product')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'Edit Product')</h1>

    <!-- Form Add Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="update">
                    @csrf
                    <div class="form-group">
					<input class="form-control" type="hidden" name="id" id="id" value="{{ $products->id}}">
                        <label for="productname">Product</label>
                    <input type="text" class="form-control @error('productname') is-invalid @enderror" placeholder="Product Name..." name="productname" value="{{ $products->product }}" >
                        @error('productname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Product Description..." name="description" value="{{ $products->description }}" >
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="purchaseprice">Purchase Price</label>
                        <input type="text" class="form-control @error('purchaseprice') is-invalid @enderror" placeholder="Product Purchase Price..."
                            name="purchaseprice" value="{{ $products->purchase_price }}" >
                            @error('purchaseprice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="sellprice">Sell Price</label>
                        <input type="text" class="form-control @error('sellprice') is-invalid @enderror" placeholder="Product Sell Price..." name="sellprice" value="{{ $products->sell_price }}" >
                        @error('sellprice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ $products->image }}" >
                        @error('image')
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
