<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dòng ngôn ngữ xác thực mặc định của Laravel
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau chứa các thông báo lỗi mặc định được sử dụng bởi
    | lớp trình xác thực của Laravel. Một số quy tắc có nhiều phiên bản như
    | quy tắc về kích thước. Bạn có thể chỉnh sửa các thông báo này theo ý muốn.
    |
    */

    'file' => 'Trường :attribute phải là một tệp.',
    'image' => 'Trường :attribute phải là một hình ảnh.',
    'required' => 'Trường :attribute là bắt buộc.',
    'max' => [
        'array' => 'Trường :attribute không được có nhiều hơn :max phần tử.',
        'file' => 'Trường :attribute không được lớn hơn :max kilobytes.',
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'string' => 'Trường :attribute không được dài hơn :max ký tự.',
    ],
    'mimes' => 'Trường :attribute phải là một tệp thuộc định dạng: :values.',

    /*
    |--------------------------------------------------------------------------
    | Dòng ngôn ngữ xác thực tùy chỉnh
    |--------------------------------------------------------------------------
    |
    | Bạn có thể chỉ định thông báo xác thực tùy chỉnh cho các thuộc tính
    | bằng cách sử dụng quy ước "attribute.rule" để đặt tên cho các dòng.
    | Điều này giúp bạn nhanh chóng xác định thông báo cụ thể cho từng quy tắc.
    |
    */

    'custom' => [],

];
