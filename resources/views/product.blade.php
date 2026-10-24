<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {{-- Hiển thị thông báo nếu có session --}}
            @if(!empty(session('message')))
            <h2>{{ session('message') }}</h2>
            @endif

            {{-- Form gửi dữ liệu --}}
            <form action="/" method="POST">
                @csrf {{-- Đừng quên token CSRF khi dùng POST trong Laravel --}}

                {{-- Ô nhập Slug --}}
                <div class="form-group has-error">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" />
                </div>

                {{-- Ô nhập Title --}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
                </div>

                {{-- Ô nhập Description --}}
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description">{{ old('description') }}</textarea>
                </div>

                {{-- Dòng chú thích --}}
                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>

                {{-- Nút Submit và Cancel --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>