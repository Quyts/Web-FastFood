@extends('layouts.app', ['pageId' => ''])

@section('title', 'Trang quản lí thêm loại món ăn')
@section('content')
<!-- Form controls -->
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>
        @if ( Session::has('success') )
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @endif
        @if ( Session::has('error') )
        <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Thêm loại món ăn</h5>
                <div class="card-body">
                    <form action="{{ route('loaiMonAn.store') }}" method="post" enctype="multipart/form-data">
                        {!! @csrf_field() !!}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên loại món ăn</label>
                            <input type="text" name="TenLoai" class="form-control" id="exampleFormControlInput1" placeholder="Tên loại món ăn" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success py-2 mb-4">Thêm loại món ăn</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var loadFile = function(event) {
                var previewImage = document.getElementById('preview-image');
                previewImage.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
        @endsection