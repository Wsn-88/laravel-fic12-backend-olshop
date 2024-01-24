@extends('layouts.app')

@section('title', 'Product Form')

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
                <h1>Product Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Product</h2>
                <div class="card">
                    <form id="productform" action="{{ route('product.store') }}" method="POST"
                        enctype="multipart/form-data" enctype="multipart/form-data" class="needs-validation" novalidate >
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Nama Produk</label>
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" id="validationCustom01"
                                        required @error('name')
                                is-invalid @enderror>
                                    <div class="invalid-feedback">
                                        Nama Produk Wajib Diisi
                                    </div>
                                </div>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="form-label">Harga</label>
                                <div class="mb-3">
                                    <input id="price" type="number" name="price" class="form-control"
                                        id="validationCustom02" required
                                        @error('price')
                                is-invalid @enderror>
                                    <div class="invalid-feedback">
                                        Tentukan Harga Barang
                                    </div>
                                </div>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="form-label">Stock</label>
                                <div class="mb-3">
                                    <input id="stock" type="number" name="stock" class="form-control"
                                        id="validationCustom03" required
                                        @error('stock')
                                is-invalid @enderror>
                                    <div class="invalid-feedback">
                                        Tentukan Stock Barang
                                    </div>
                                </div>
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom04" class="form-label">Category</label>
                                <div class="mb-3">
                                    <select name="category_id" class="form-select" id="validationCustom04" required
                                        @error('category_id') is-invalid @enderror>
                                        <option selected disabled value="">-- Pilih Category --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Pilih Kategori Barang
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom05" class="form-label">Photo Produk</label>
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="image" id="validationCustom05"
                                        required @error('image') is-invalid @enderror>
                                    <div class="invalid-feedback">
                                        Photo Produk Wajib Diisi
                                    </div>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
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
    <script src="{{ asset('library/custom/validation.js') }}"></script>
@endpush
