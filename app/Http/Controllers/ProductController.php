<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Hiển thị form bài viết/sản phẩm
    public function create()
    {
        return view('product');
    }

    // Xử lý khi nhấn nút Create (Submit)
    public function store(Request $request)
    {
        // Kiểm tra xem các trường có trống hay không
        if (empty($request->slug) || empty($request->title) || empty($request->description)) {
            return redirect()->back()
                ->withInput() // Giữ lại dữ liệu đã nhập (old)
                ->with('message', 'Vui lòng điền đầy đủ thông tin!');
        }

        // Nếu hợp lệ, chuyển sang view kết quả (product_view.blade.php)
        return view('product_view', [
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
}