<?php

return [

    // Thành phần "new-chat"
    'chat' => [
        'labels' => [
            'heading' => 'Tin nhắn mới',
            'you' => 'Bạn',
        ],

        'inputs' => [
            'search' => [
                'label' => 'Tìm kiếm cuộc trò chuyện',
                'placeholder' => 'Tìm kiếm',
            ],
        ],

        'actions' => [
            'new_group' => [
                'label' => 'Nhóm mới',
            ],
        ],

        'messages' => [
            'empty_search_result' => 'Không tìm thấy người dùng phù hợp với tìm kiếm của bạn.',
        ],
    ],

    // Thành phần "new-group"
    'group' => [
        'labels' => [
            'heading' => 'Trò chuyện mới',
            'add_members' => 'Thêm thành viên',
        ],

        'inputs' => [
            'name' => [
                'label' => 'Tên nhóm',
                'placeholder' => 'Nhập tên',
            ],
            'description' => [
                'label' => 'Mô tả',
                'placeholder' => 'Không bắt buộc',
            ],
            'search' => [
                'label' => 'Tìm kiếm',
                'placeholder' => 'Tìm kiếm',
            ],
            'photo' => [
                'label' => 'Ảnh',
            ],
        ],

        'actions' => [
            'cancel' => [
                'label' => 'Hủy',
            ],
            'next' => [
                'label' => 'Tiếp theo',
            ],
            'create' => [
                'label' => 'Tạo',
            ],
        ],

        'messages' => [
            'members_limit_error' => 'Thành viên không được vượt quá :count',
            'empty_search_result' => 'Không tìm thấy người dùng phù hợp với tìm kiếm của bạn.',
        ],
    ],
];
