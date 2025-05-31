<?php

return [

    /**-------------------------
     * Chat
     *------------------------*/
    'labels' => [

        'you_replied_to_yourself' => 'Bạn đã trả lời chính mình',
        'participant_replied_to_you' => ':sender đã trả lời bạn',
        'participant_replied_to_themself' => ':sender đã trả lời chính họ',
        'participant_replied_other_participant' => ':sender đã trả lời :receiver',
        'you' => 'Bạn',
        'user' => 'Người dùng',
        'replying_to' => 'Đang trả lời :participant',
        'replying_to_yourself' => 'Đang trả lời chính mình',
        'attachment' => 'Tệp đính kèm',
    ],

    'inputs' => [
        'message' => [
            'label' => 'Tin nhắn',
            'placeholder' => 'Nhập tin nhắn',
        ],
        'media' => [
            'label' => 'Phương tiện',
            'placeholder' => 'Phương tiện',
        ],
        'files' => [
            'label' => 'Tệp',
            'placeholder' => 'Tệp',
        ],
    ],

    'message_groups' => [
        'today' => 'Hôm nay',
        'yesterday' => 'Hôm qua',
    ],

    'actions' => [
        'open_group_info' => [
            'label' => 'Thông tin nhóm',
        ],
        'open_chat_info' => [
            'label' => 'Thông tin trò chuyện',
        ],
        'close_chat' => [
            'label' => 'Đóng trò chuyện',
        ],
        'clear_chat' => [
            'label' => 'Xóa lịch sử trò chuyện',
            'confirmation_message' => 'Bạn có chắc muốn xóa lịch sử trò chuyện không? Việc này chỉ xóa ở phía bạn và không ảnh hưởng đến người khác.',
        ],
        'delete_chat' => [
            'label' => 'Xóa cuộc trò chuyện',
            'confirmation_message' => 'Bạn có chắc muốn xóa cuộc trò chuyện này không? Hành động này chỉ xóa ở phía bạn và không xóa đối với người tham gia khác.',
        ],
        'delete_for_everyone' => [
            'label' => 'Xóa cho tất cả',
            'confirmation_message' => 'Bạn có chắc không?',
        ],
        'delete_for_me' => [
            'label' => 'Xóa cho tôi',
            'confirmation_message' => 'Bạn có chắc không?',
        ],
        'reply' => [
            'label' => 'Trả lời',
        ],
        'exit_group' => [
            'label' => 'Rời nhóm',
            'confirmation_message' => 'Bạn có chắc muốn rời nhóm này không?',
        ],
        'upload_file' => [
            'label' => 'Tệp',
        ],
        'upload_media' => [
            'label' => 'Ảnh & Video',
        ],
    ],

    'messages' => [
        'cannot_exit_self_or_private_conversation' => 'Không thể rời khỏi cuộc trò chuyện cá nhân hoặc với chính mình',
        'owner_cannot_exit_conversation' => 'Chủ sở hữu không thể rời khỏi cuộc trò chuyện',
        'rate_limit' => 'Thao tác quá nhanh, vui lòng chậm lại',
        'conversation_not_found' => 'Không tìm thấy cuộc trò chuyện.',
        'conversation_id_required' => 'Cần cung cấp ID cuộc trò chuyện',
        'invalid_conversation_input' => 'Dữ liệu cuộc trò chuyện không hợp lệ.',
    ],

    /**-------------------------
     * Info Component
     *------------------------*/
    'info' => [
        'heading' => [
            'label' => 'Thông tin trò chuyện',
        ],
        'actions' => [
            'delete_chat' => [
                'label' => 'Xóa cuộc trò chuyện',
                'confirmation_message' => 'Bạn có chắc muốn xóa cuộc trò chuyện này? Hành động này chỉ xóa ở phía bạn và không xóa với người khác.',
            ],
        ],
        'messages' => [
            'invalid_conversation_type_error' => 'Chỉ chấp nhận cuộc trò chuyện cá nhân hoặc với chính mình',
        ],
    ],

    /**-------------------------
     * Group Folder
     *------------------------*/
    'group' => [

        // Group info component
        'info' => [
            'heading' => [
                'label' => 'Thông tin nhóm',
            ],
            'labels' => [
                'members' => 'Thành viên',
                'add_description' => 'Thêm mô tả nhóm',
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
                'photo' => [
                    'label' => 'Ảnh',
                ],
            ],
            'actions' => [
                'delete_group' => [
                    'label' => 'Xóa nhóm',
                    'confirmation_message' => 'Bạn có chắc muốn xóa nhóm này không?',
                    'helper_text' => 'Bạn cần xóa tất cả thành viên trước khi xóa nhóm.',
                ],
                'add_members' => [
                    'label' => 'Thêm thành viên',
                ],
                'group_permissions' => [
                    'label' => 'Phân quyền nhóm',
                ],
                'exit_group' => [
                    'label' => 'Rời nhóm',
                    'confirmation_message' => 'Bạn có chắc muốn rời khỏi nhóm này không?',
                ],
            ],
            'messages' => [
                'invalid_conversation_type_error' => 'Chỉ hỗ trợ cuộc trò chuyện nhóm',
            ],
        ],

        // Members component
        'members' => [
            'heading' => [
                'label' => 'Thành viên',
            ],
            'inputs' => [
                'search' => [
                    'label' => 'Tìm kiếm',
                    'placeholder' => 'Tìm thành viên',
                ],
            ],
            'labels' => [
                'members' => 'Thành viên',
                'owner' => 'Chủ sở hữu',
                'admin' => 'Quản trị viên',
                'no_members_found' => 'Không tìm thấy thành viên',
            ],
            'actions' => [
                'send_message_to_yourself' => [
                    'label' => 'Nhắn tin cho chính mình',
                ],
                'send_message_to_member' => [
                    'label' => 'Nhắn tin cho :member',
                ],
                'dismiss_admin' => [
                    'label' => 'Bãi nhiệm quản trị viên',
                    'confirmation_message' => 'Bạn có chắc muốn bãi nhiệm :member khỏi vai trò quản trị viên không?',
                ],
                'make_admin' => [
                    'label' => 'Đặt làm quản trị viên',
                    'confirmation_message' => 'Bạn có chắc muốn đặt :member làm quản trị viên không?',
                ],
                'remove_from_group' => [
                    'label' => 'Xóa khỏi nhóm',
                    'confirmation_message' => 'Bạn có chắc muốn xóa :member khỏi nhóm này không?',
                ],
                'load_more' => [
                    'label' => 'Tải thêm',
                ],
            ],
            'messages' => [
                'invalid_conversation_type_error' => 'Chỉ hỗ trợ cuộc trò chuyện nhóm',
            ],
        ],

        // Add Members component
        'add_members' => [
            'heading' => [
                'label' => 'Thêm thành viên',
            ],
            'inputs' => [
                'search' => [
                    'label' => 'Tìm kiếm',
                    'placeholder' => 'Tìm kiếm',
                ],
            ],
            'labels' => [],
            'actions' => [
                'save' => [
                    'label' => 'Lưu',
                ],
            ],
            'messages' => [
                'invalid_conversation_type_error' => 'Chỉ hỗ trợ cuộc trò chuyện nhóm',
                'members_limit_error' => 'Thành viên không được vượt quá :count',
                'member_already_exists' => 'Đã là thành viên trong nhóm',
            ],
        ],

        // Permissions component
        'permisssions' => [
            'heading' => [
                'label' => 'Quyền hạn',
            ],
            'inputs' => [
                'search' => [
                    'label' => 'Tìm kiếm',
                    'placeholder' => 'Tìm kiếm',
                ],
            ],
            'labels' => [
                'members_can' => 'Thành viên có thể',
            ],
            'actions' => [
                'edit_group_information' => [
                    'label' => 'Chỉnh sửa thông tin nhóm',
                    'helper_text' => 'Bao gồm tên, ảnh và mô tả',
                ],
                'send_messages' => [
                    'label' => 'Gửi tin nhắn',
                ],
                'add_other_members' => [
                    'label' => 'Thêm thành viên khác',
                ],
            ],
            'messages' => [],
        ],
    ],
];
