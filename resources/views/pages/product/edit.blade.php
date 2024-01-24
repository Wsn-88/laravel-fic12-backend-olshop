@extends('layouts.app')

@section('title', 'Edit Product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Product</h2>
                <div class="card">
                    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name" class="">Name</label>
                                <div class="mb-3">
                                    <input id="name" type="text" name="name" value="{{ $product->name }}"
                                        class="form-control"
                                        @error('name')
                                is-invalid @enderror>
                                </div>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div class="mb-3">
                                    <input id="price" type="number" name="price" value="{{ $product->price }}"
                                        class="form-control"
                                        @error('price')
                                is-invalid @enderror>
                                </div>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <div class="mb-3">
                                    <input id="stock" type="number" name="stock" value="{{ $product->stock }}"
                                        class="form-control"
                                        @error('stock')
                                is-invalid @enderror>
                                </div>
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category_id" value="1" class="selectgroup-input"
                                            @if ($product->category->id == '1') checked @endif>
                                        <span class="selectgroup-button btn btn-dark">Kopi Arabica</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category_id" value="2" class="selectgroup-input"
                                            @if ($product->category->id == '2') checked @endif>
                                        <span class="selectgroup-button btn btn-dark">Kopi Robusta</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category_id" value="3" class="selectgroup-input"
                                            @if ($product->category->id == '3') checked @endif>
                                        <span class="selectgroup-button btn btn-dark">Kopi Liberika</span>
                                    </label>

                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="image">Photo Product Sekarang</label>

                                <div class="mb-3">
                                    <input type="text" name="image" value="{{ $product->image }}" class="form-control"
                                        disabled>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/products/' . $product->image) }}" width="100px"
                                            class="img-thumbnail">
                                    @endif
                                </div>
                                <label for="image">Ganti Photo Produk</label>
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="image" id="validationCustom05"
                                        required @error('image') is-invalid @enderror>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
