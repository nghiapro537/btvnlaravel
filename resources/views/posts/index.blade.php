@extends('layouts.master')

@section('title', 'Danh sách bài viết')

@section('content')
<div class="row">
    <!-- Cột bên trái: Danh sách bài viết -->
    <div class="col-md-8">
        <h2>DANH SÁCH BÀI VIẾT</h2>
        <hr>

        {{-- Sử dụng directive @if để kiểm tra dữ liệu mảng posts --}}
        @if(isset($posts) && count($posts) > 0)
        {{-- Sử dụng directive @foreach để lặp qua danh sách bài viết --}}
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="text-muted">Slug: {{ $post->slug }}</p>
                <p class="card-text">Mô tả ngắn về nội dung bài viết số {{ $post->id }}...</p>
                <a href="#" class="btn btn-primary">Đọc thêm &rarr;</a>
            </div>
        </div>
        @endforeach
        @else
        <div class="alert alert-warning" role="alert">
            Hiện tại không có bài viết nào trong cơ sở dữ liệu!
        </div>
        @endif
    </div>

    <!-- Cột bên phải: Sidebar -->
    <div class="col-md-4">
        <h2>Giới thiệu bản thân</h2>
        <div class="fakeimg">Ảnh đại diện</div>
        <p>Tôi là lập trình viên Laravel đang trong quá trình học tập và thực hành.</p>
        <h3>Bài viết nổi bật</h3>
        <ul class="list-group">
            <li class="list-group-item active">Bài viết 1</li>
            <li class="list-group-item">Bài viết 2</li>
            <li class="list-group-item">Bài viết 3</li>
        </ul>
        <hr class="d-sm-none">
    </div>
</div>
@endsection