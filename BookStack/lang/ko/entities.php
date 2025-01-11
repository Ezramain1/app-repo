<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '최근에 수정함',
    'recently_created_pages' => '최근에 만든 문서',
    'recently_updated_pages' => '최근에 수정한 문서',
    'recently_created_chapters' => '최근에 만든 챕터',
    'recently_created_books' => '최근에 만든 책',
    'recently_created_shelves' => '최근에 만든 책장',
    'recently_update' => '최신 수정 목록',
    'recently_viewed' => '최근에 본 목록',
    'recent_activity' => '최근 활동 기록',
    'create_now' => '바로 만들기',
    'revisions' => '버전',
    'meta_revision' => '버전 #:revisionCount',
    'meta_created' => '생성 :timeLength',
    'meta_created_name' => '생성 :timeLength, :user',
    'meta_updated' => '수정 :timeLength',
    'meta_updated_name' => '수정 :timeLength, :user',
    'meta_owned_name' => ':user 소유',
    'meta_reference_count' => '참조 대상 :count item|참조 대상 :count items',
    'entity_select' => '항목 선택',
    'entity_select_lack_permission' => '이 항목을 선택하기 위해 필요한 권한이 없습니다',
    'images' => '이미지',
    'my_recent_drafts' => '내 최근의 초안 문서',
    'my_recently_viewed' => '내가 읽은 문서',
    'my_most_viewed_favourites' => '내가 가장 많이 본 즐겨찾기',
    'my_favourites' => '나의 즐겨찾기',
    'no_pages_viewed' => '본 페이지가 없습니다.',
    'no_pages_recently_created' => '최근에 생성된 페이지가 없습니다.',
    'no_pages_recently_updated' => '최근 업데이트된 페이지가 없습니다.',
    'export' => '내보내기',
    'export_html' => '포함된 웹 파일',
    'export_pdf' => 'PDF 파일',
    'export_text' => '일반 텍스트 파일',
    'export_md' => '마크다운 파일',
    'export_zip' => '압축 파일',
    'default_template' => '기본 페이지 템플릿',
    'default_template_explain' => '이 항목 내에서 생성되는 모든 페이지의 기본 콘텐츠로 사용할 페이지 템플릿을 지정합니다. 페이지 작성자가 선택한 템플릿 페이지를 볼 수 있는 권한이 있는 경우에만 이 항목이 사용된다는 점을 유의하세요.',
    'default_template_select' => '템플릿 페이지 선택',
    'import' => '압축 파일 가져오기',
    'import_validate' => '압축 파일 검증하기',
    'import_desc' => '같은 인스턴스나 다른 인스턴스에서 휴대용 zip 내보내기를 사용하여 책, 장 및 페이지를 가져옵니다. 진행하려면 ZIP 파일을 선택합니다. 파일을 업로드하고 검증한 후 다음 보기에서 가져오기를 구성하고 확인할 수 있습니다.',
    'import_zip_select' => '업로드할 휴대용 압축 파일 선택',
    'import_zip_validation_errors' => '제공된 Portable ZIP 파일을 검증하는 동안 오류가 감지되었습니다.',
    'import_pending' => 'Portable ZIP 파일 가져오기가 일시정지 되었습니다.',
    'import_pending_none' => 'Portable ZIP 파일 가져오기가 시작되지 않았습니다.',
    'import_continue' => 'Portable ZIP 가져오기 계속하기',
    'import_continue_desc' => '업로드된 ZIP 파일에서 가져올 내용을 검토합니다. 준비가 되면 가져오기를 실행하여 이 시스템에 내용을 추가합니다. 업로드된 ZIP 가져오기 파일은 가져오기가 성공하면 자동으로 제거됩니다.',
    'import_details' => '압축된 ZIP 파일 상세',
    'import_run' => '가져오기 실행',
    'import_size' => '압축된 ZIP 파일 사이즈',
    'import_uploaded_at' => '업로드되었습니다. :relativeTime',
    'import_uploaded_by' => '업로드되었습니다.',
    'import_location' => '가져올 경로',
    'import_location_desc' => '가져온 콘텐츠에 대한 대상 위치를 선택하세요. 선택한 위치 내에서 만들려면 관련 권한이 필요합니다.',
    'import_delete_confirm' => '정말 삭제하시겠습니까?',
    'import_delete_desc' => '업로드된 ZIP 파일이 삭제되며, 실행 취소할 수 없습니다.',
    'import_errors' => '가져오기 오류',
    'import_errors_desc' => '가져오기 중 에러가 발생했습니다.',

    // Permissions and restrictions
    'permissions' => '권한',
    'permissions_desc' => '여기에서 권한을 설정하여 사용자 역할에서 제공하는 기본 권한을 재정의합니다.',
    'permissions_book_cascade' => '책에 설정된 권한은 자체 권한이 정의되어 있지 않은 한 하위 챕터와 페이지에 자동으로 계단식으로 적용됩니다.',
    'permissions_chapter_cascade' => '챕터에 설정된 권한은 하위 페이지에 자체 권한이 정의되어 있지 않는 한 자동으로 계단식으로 적용됩니다.',
    'permissions_save' => '권한 저장',
    'permissions_owner' => '소유자',
    'permissions_role_everyone_else' => '그 외 모든 사용자',
    'permissions_role_everyone_else_desc' => '특별히 재정의되지 않은 모든 역할에 대한 권한을 설정.',
    'permissions_role_override' => '역할에 대한 권한 재정의하기',
    'permissions_inherit_defaults' => '기본값 상속',

    // Search
    'search_results' => '검색 결과',
    'search_total_results_found' => ':count개|총 :count개',
    'search_clear' => '검색 지우기',
    'search_no_pages' => '결과 없음',
    'search_for_term' => ':term 검색',
    'search_more' => '더 많은 결과',
    'search_advanced' => '고급 검색',
    'search_terms' => '용어 검색',
    'search_content_type' => '형식',
    'search_exact_matches' => '정확히 일치',
    'search_tags' => '꼬리표 일치',
    'search_options' => '선택',
    'search_viewed_by_me' => '내가 읽음',
    'search_not_viewed_by_me' => '내가 읽지 않음',
    'search_permissions_set' => '권한 설정함',
    'search_created_by_me' => '내가 만듦',
    'search_updated_by_me' => '내가 수정함',
    'search_owned_by_me' => '내가 소유함',
    'search_date_options' => '날짜',
    'search_updated_before' => '이전에 수정함',
    'search_updated_after' => '이후에 수정함',
    'search_created_before' => '이전에 만듦',
    'search_created_after' => '이후에 만듦',
    'search_set_date' => '날짜 설정',
    'search_update' => '검색',

    // Shelves
    'shelf' => '책꽂이',
    'shelves' => '책꽂이',
    'x_shelves' => '책꽂이 :count개|총 :count개',
    'shelves_empty' => '만든 책꽂이가 없습니다.',
    'shelves_create' => '책꽂이 만들기',
    'shelves_popular' => '많이 읽은 책꽂이',
    'shelves_new' => '새로운 책꽂이',
    'shelves_new_action' => '새로운 책꽂이',
    'shelves_popular_empty' => '많이 읽은 책꽂이 목록',
    'shelves_new_empty' => '새로운 책꽂이 목록',
    'shelves_save' => '저장',
    'shelves_books' => '이 책꽂이에 있는 책들',
    'shelves_add_books' => '이 책꽂이에 책 추가',
    'shelves_drag_books' => '책을 이 책장에 추가하려면 아래로 드래그하세요',
    'shelves_empty_contents' => '이 책꽂이에 책이 없습니다.',
    'shelves_edit_and_assign' => '책꽂이 바꾸기로 책을 추가하세요.',
    'shelves_edit_named' => '책꽂이 편집 :name',
    'shelves_edit' => '책꽂이 편집',
    'shelves_delete' => '책꽂이 삭제',
    'shelves_delete_named' => '책꽂이 삭제 :이름',
    'shelves_delete_explain' => "그러면 ':name'이라는 이름의 서가가 삭제됩니다. 포함된 책은 삭제되지 않습니다.",
    'shelves_delete_confirmation' => '이 책꽂이를 삭제하시겠습니까?',
    'shelves_permissions' => '책꽂이 권한',
    'shelves_permissions_updated' => '책꽂이 권한 업데이트됨',
    'shelves_permissions_active' => '책꽂이 권한 활성화',
    'shelves_permissions_cascade_warning' => '책꽂이에 대한 권한은 포함된 책에 자동으로 계단식으로 부여되지 않습니다. 한 권의 책이 여러 개의 책꽂이에 존재할 수 있기 때문입니다. 그러나 아래 옵션을 사용하여 권한을 하위 책으로 복사할 수 있습니다.',
    'shelves_permissions_create' => '책꽂이 만들기 권한은 아래 작업을 사용하여 하위 책에 대한 권한을 복사하는 데만 사용됩니다. 책을 만드는 기능은 제어하지 않습니다.',
    'shelves_copy_permissions_to_books' => '권한 맞춤',
    'shelves_copy_permissions' => '실행',
    'shelves_copy_permissions_explain' => '그러면 이 책꽂이의 현재 권한 설정이 이 책꽂이에 포함된 모든 책에 적용됩니다. 활성화하기 전에 이 책꽂이의 권한에 대한 변경 사항이 모두 저장되었는지 확인하세요.',
    'shelves_copy_permission_success' => '책꽂이 권한이 복사됨 :count books',

    // Books
    'book' => '책',
    'books' => '책',
    'x_books' => '책 :count개|총 :count개',
    'books_empty' => '만든 책이 없습니다.',
    'books_popular' => '많이 읽은 책',
    'books_recent' => '최근에 읽은 책',
    'books_new' => '새로운 책',
    'books_new_action' => '새로운 책',
    'books_popular_empty' => '많이 읽은 책 목록',
    'books_new_empty' => '새로운 책 목록',
    'books_create' => '책 만들기',
    'books_delete' => '책 삭제하기',
    'books_delete_named' => ':bookName(을)를 지웁니다.',
    'books_delete_explain' => ':bookName에 있는 모든 챕터와 문서도 지웁니다.',
    'books_delete_confirmation' => '이 책을 지우시겠습니까?',
    'books_edit' => '책 바꾸기',
    'books_edit_named' => ':bookName(을)를 바꿉니다.',
    'books_form_book_name' => '책 이름',
    'books_save' => '저장',
    'books_permissions' => '책 권한',
    'books_permissions_updated' => '책의 권한이 수정되었습니다.',
    'books_empty_contents' => '이 책에 챕터나 문서가 없습니다.',
    'books_empty_create_page' => '문서 만들기',
    'books_empty_sort_current_book' => '현재 책 정렬',
    'books_empty_add_chapter' => '챕터 만들기',
    'books_permissions_active' => '책 권한 허용함',
    'books_search_this' => '이 책에서 검색',
    'books_navigation' => '목차',
    'books_sort' => '책 내용 정렬',
    'books_sort_desc' => '책 내에서 챕터와 페이지를 이동하여 내용을 재구성할 수 있습니다. 다른 책을 추가하여 책 간에 챕터와 페이지를 쉽게 이동할 수 있습니다.',
    'books_sort_named' => ':bookName 정렬',
    'books_sort_name' => '제목',
    'books_sort_created' => '만든 날짜',
    'books_sort_updated' => '수정한 날짜',
    'books_sort_chapters_first' => '챕터 우선',
    'books_sort_chapters_last' => '문서 우선',
    'books_sort_show_other' => '다른 책들',
    'books_sort_save' => '적용',
    'books_sort_show_other_desc' => '여기에 다른 책을 추가하여 정렬 작업에 포함시키고 책 간 재구성을 쉽게 할 수 있습니다.',
    'books_sort_move_up' => '위로 이동',
    'books_sort_move_down' => '아래로 이동',
    'books_sort_move_prev_book' => '이전 책으로 이동',
    'books_sort_move_next_book' => '다음 책으로 이동',
    'books_sort_move_prev_chapter' => '이전 챕터로 이동',
    'books_sort_move_next_chapter' => '다음 챕터로 이동',
    'books_sort_move_book_start' => '책 시작 부분으로 이동',
    'books_sort_move_book_end' => '책의 끝으로 이동',
    'books_sort_move_before_chapter' => '이전 챕터로 이동',
    'books_sort_move_after_chapter' => '챕터 뒤로 이동',
    'books_copy' => '책 복사하기',
    'books_copy_success' => '책을 복사하였습니다.',

    // Chapters
    'chapter' => '챕터',
    'chapters' => '챕터',
    'x_chapters' => '챕터 :count개|총 :count개',
    'chapters_popular' => '많이 읽은 챕터',
    'chapters_new' => '새로운 챕터',
    'chapters_create' => '챕터 만들기',
    'chapters_delete' => '챕터 삭제하기',
    'chapters_delete_named' => ':chapterName(을)를 지웁니다.',
    'chapters_delete_explain' => '\':ChapterName\'에 있는 모든 페이지도 지웁니다.',
    'chapters_delete_confirm' => '이 챕터를 지울 건가요?',
    'chapters_edit' => '챕터 수정하기',
    'chapters_edit_named' => ':chapterName 바꾸기',
    'chapters_save' => '저장',
    'chapters_move' => '챕터 이동하기',
    'chapters_move_named' => ':chapterName 이동하기',
    'chapters_copy' => '챕터 복사하기',
    'chapters_copy_success' => '챕터를 복사하였습니다.',
    'chapters_permissions' => '챕터 권한',
    'chapters_empty' => '이 챕터에 문서가 없습니다.',
    'chapters_permissions_active' => '문서 권한 허용함',
    'chapters_permissions_success' => '챕터의 권한을 수정하였습니다.',
    'chapters_search_this' => '이 챕터에서 검색',
    'chapter_sort_book' => '책 정렬하기',

    // Pages
    'page' => '문서',
    'pages' => '문서',
    'x_pages' => '문서 :count개|총 :count개',
    'pages_popular' => '많이 읽은 문서',
    'pages_new' => '새로운 문서',
    'pages_attachments' => '첨부',
    'pages_navigation' => '목차',
    'pages_delete' => '문서 삭제하기',
    'pages_delete_named' => ':pageName 삭제하기',
    'pages_delete_draft_named' => ':pageName 초안 문서 삭제하기',
    'pages_delete_draft' => '초안 문서 삭제하기',
    'pages_delete_success' => '문서 지움',
    'pages_delete_draft_success' => '초안 문서 지움',
    'pages_delete_warning_template' => '이 페이지는 책의 기본 페이지 템플릿으로 사용 중입니다. 이 페이지가 삭제되면 해당하는 책에 더 이상 기본 페이지 템플릿이 적용되지 않습니다.',
    'pages_delete_confirm' => '이 문서를 지울 건가요?',
    'pages_delete_draft_confirm' => '이 초안을 지울 건가요?',
    'pages_editing_named' => ':pageName 수정',
    'pages_edit_draft_options' => '초안 문서 옵션',
    'pages_edit_save_draft' => '초안으로 저장',
    'pages_edit_draft' => '초안 문서 수정',
    'pages_editing_draft' => '초안 문서 수정',
    'pages_editing_page' => '문서 수정',
    'pages_edit_draft_save_at' => '보관함: ',
    'pages_edit_delete_draft' => '초안 삭제',
    'pages_edit_delete_draft_confirm' => '초안 페이지 변경 내용을 삭제하시겠습니까? 마지막 전체 저장 이후의 모든 변경 내용이 손실되고 편집기가 최신 페이지의 초안 저장 상태가 아닌 상태로 업데이트됩니다.',
    'pages_edit_discard_draft' => '변경된 내용 삭제',
    'pages_edit_switch_to_markdown' => '마크다운 편집기로 전환',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'WYSIWYG 편집기로 전환',
    'pages_edit_switch_to_new_wysiwyg' => '새 위지윅 편집기로 변경',
    'pages_edit_switch_to_new_wysiwyg_desc' => '알파 테스트 중',
    'pages_edit_set_changelog' => '수정본 설명',
    'pages_edit_enter_changelog_desc' => '수정본 설명',
    'pages_edit_enter_changelog' => '변경 로그 입력란',
    'pages_editor_switch_title' => '편집기 전환',
    'pages_editor_switch_are_you_sure' => '이 페이지의 편집기를 변경하시겠어요?',
    'pages_editor_switch_consider_following' => '편집기를 전환할 때에 다음 사항들을 고려하세요:',
    'pages_editor_switch_consideration_a' => '저장된 새 편집기 옵션은 편집기 유형을 직접 변경할 수 없는 편집자를 포함하여 향후 모든 편집자가 사용할 수 있습니다.',
    'pages_editor_switch_consideration_b' => '이로 인해 특정 상황에서는 상세 내용과 구문이 손실될 수 있습니다.',
    'pages_editor_switch_consideration_c' => '마지막 저장 이후 변경된 태그 또는 변경 로그 변경 사항은 이 변경 사항에서 유지되지 않습니다.',
    'pages_save' => '저장',
    'pages_title' => '문서 제목',
    'pages_name' => '문서 이름',
    'pages_md_editor' => '에디터',
    'pages_md_preview' => '미리 보기',
    'pages_md_insert_image' => '이미지 추가',
    'pages_md_insert_link' => '내부 링크',
    'pages_md_insert_drawing' => '드로잉 추가',
    'pages_md_show_preview' => '미리보기 표시',
    'pages_md_sync_scroll' => '미리보기 스크롤 동기화',
    'pages_drawing_unsaved' => '저장되지 않은 드로잉 발견',
    'pages_drawing_unsaved_confirm' => '이전에 실패한 드로잉 저장 시도에서 저장되지 않은 드로잉 데이터가 발견되었습니다. 이 저장되지 않은 드로잉을 복원하고 계속 편집하시겠습니까?',
    'pages_not_in_chapter' => '챕터에 있는 문서가 아닙니다.',
    'pages_move' => '문서 이동하기',
    'pages_copy' => '문서 복제',
    'pages_copy_desination' => '복제할 위치',
    'pages_copy_success' => '복제함',
    'pages_permissions' => '문서 권한',
    'pages_permissions_success' => '문서 권한 바꿈',
    'pages_revision' => '수정본',
    'pages_revisions' => '문서 수정본',
    'pages_revisions_desc' => '아래는 이 페이지의 모든 과거 개정 버전입니다. 권한이 허용하는 경우 이전 페이지 버전을 되돌아보고, 비교하고, 복원할 수 있습니다. 시스템 구성에 따라 이전 수정본이 자동으로 삭제될 수 있으므로 페이지의 전체 기록이 여기에 완전히 반영되지 않을 수 있습니다.',
    'pages_revisions_named' => ':pageName 수정본',
    'pages_revision_named' => ':pageName 수정본',
    'pages_revision_restored_from' => '#:id; :summary에서 복구함',
    'pages_revisions_created_by' => '만든 사용자',
    'pages_revisions_date' => '수정한 날짜',
    'pages_revisions_number' => 'No.',
    'pages_revisions_sort_number' => '수정 번호',
    'pages_revisions_numbered' => '수정본 :id',
    'pages_revisions_numbered_changes' => '수정본 :id에서 바꾼 부분',
    'pages_revisions_editor' => '편집기 유형',
    'pages_revisions_changelog' => '설명',
    'pages_revisions_changes' => '바꾼 부분',
    'pages_revisions_current' => '현재 판본',
    'pages_revisions_preview' => '미리 보기',
    'pages_revisions_restore' => '복원',
    'pages_revisions_none' => '수정본이 없습니다.',
    'pages_copy_link' => '주소 복사',
    'pages_edit_content_link' => '편집기의 섹션으로 이동',
    'pages_pointer_enter_mode' => '섹션 선택 모드로 들어가기',
    'pages_pointer_label' => '페이지 섹션 옵션',
    'pages_pointer_permalink' => '페이지 섹션 퍼머링크',
    'pages_pointer_include_tag' => '페이지 섹션 포함 태그 포함',
    'pages_pointer_toggle_link' => '퍼머링크 모드, 포함 태그를 표시하려면 누릅니다.',
    'pages_pointer_toggle_include' => '태그 포함 모드, 퍼머링크를 표시하려면 누릅니다.',
    'pages_permissions_active' => '문서 권한 허용함',
    'pages_initial_revision' => '처음 판본',
    'pages_references_update_revision' => '시스템에서 내부 링크 자동 업데이트',
    'pages_initial_name' => '제목 없음',
    'pages_editing_draft_notification' => ':timeDiff에 초안 문서입니다.',
    'pages_draft_edited_notification' => '최근에 수정한 문서이기 때문에 초안 문서를 폐기하는 편이 좋습니다.',
    'pages_draft_page_changed_since_creation' => '최근에 수정한 문서이기 때문에 임시 저장문서를 폐기하는 편이 좋습니다.',
    'pages_draft_edit_active' => [
        'start_a' => ':count명이 이 문서를 수정하고 있습니다.',
        'start_b' => ':userName이 이 문서를 수정하고 있습니다.',
        'time_a' => '수정본이 생겼습니다.',
        'time_b' => '(:minCount분 전)',
        'message' => ':start :time. 다른 사용자의 수정본을 덮어쓰지 않도록 주의하세요.',
    ],
    'pages_draft_discarded' => '초안 폐기! 편집기가 현재 페이지 콘텐츠로 업데이트되었습니다.',
    'pages_draft_deleted' => '초안이 삭제되었습니다! 편집기가 현재 페이지 콘텐츠로 업데이트되었습니다.',
    'pages_specific' => '특정한 문서',
    'pages_is_template' => '템플릿',

    // Editor Sidebar
    'toggle_sidebar' => '사이드바 토글',
    'page_tags' => '문서 태그',
    'chapter_tags' => '챕터 꼬리표',
    'book_tags' => '책 꼬리표',
    'shelf_tags' => '책꽂이 꼬리표',
    'tag' => '꼬리표',
    'tags' =>  '꼬리표',
    'tags_index_desc' => '태그를 시스템 내의 콘텐츠에 적용하여 유연한 형태의 분류를 적용할 수 있습니다. 태그는 키와 값을 모두 가질 수 있으며 값은 선택 사항입니다. 태그가 적용되면 태그 이름과 값을 사용하여 콘텐츠를 쿼리할 수 있습니다.',
    'tag_name' =>  '꼬리표 이름',
    'tag_value' => '리스트 값 (선택 사항)',
    'tags_explain' => "꼬리표로 문서를 분류하세요.",
    'tags_add' => '꼬리표 추가',
    'tags_remove' => '꼬리표 삭제',
    'tags_usages' => '모든 꼬리표',
    'tags_assigned_pages' => '문서에 꼬리표 지정함',
    'tags_assigned_chapters' => '챕터에 꼬리표 지정함',
    'tags_assigned_books' => '책에 태그 지정함',
    'tags_assigned_shelves' => '책꽂이에 꼬리표 지정함',
    'tags_x_unique_values' => ':count 중복 없는 값',
    'tags_all_values' => '모든 값',
    'tags_view_tags' => '꼬리표 보기',
    'tags_view_existing_tags' => '사용 중인 꼬리표 보기',
    'tags_list_empty_hint' => '꼬리표는 에디터 사이드바나 책, 챕터 또는 책꽂이 정보 편집에서 지정할 수 있습니다.',
    'attachments' => '첨부 파일',
    'attachments_explain' => '파일이나 링크를 첨부하세요. 정보 탭에 나타납니다.',
    'attachments_explain_instant_save' => '여기에서 바꾼 내용은 바로 적용합니다.',
    'attachments_upload' => '파일 올리기',
    'attachments_link' => '링크로 첨부',
    'attachments_upload_drop' => '또는 파일을 여기로 끌어다 놓아 첨부 파일로 업로드할 수도 있습니다.',
    'attachments_set_link' => '링크 설정',
    'attachments_delete' => '이 첨부 파일을 지울 건가요?',
    'attachments_dropzone' => '업로드할 파일을 여기에 놓아주세요.',
    'attachments_no_files' => '올린 파일 없음',
    'attachments_explain_link' => '파일을 올리지 않고 링크로 첨부할 수 있습니다.',
    'attachments_link_name' => '링크 이름',
    'attachment_link' => '파일 주소',
    'attachments_link_url' => '파일로 링크',
    'attachments_link_url_hint' => '파일 주소',
    'attach' => '파일 첨부',
    'attachments_insert_link' => '페이지에 첨부파일 링크 추가',
    'attachments_edit_file' => '파일 수정',
    'attachments_edit_file_name' => '파일 이름',
    'attachments_edit_drop_upload' => '여기에 파일을 드롭하거나 여기를 클릭하세요. 파일을 올리거나 덮어쓸 수 있습니다.',
    'attachments_order_updated' => '첨부 순서 바꿈',
    'attachments_updated_success' => '첨부 파일 정보 수정함',
    'attachments_deleted' => '첨부 파일 삭제함',
    'attachments_file_uploaded' => '파일 올림',
    'attachments_file_updated' => '파일 바꿈',
    'attachments_link_attached' => '링크 첨부함',
    'templates' => '템플릿',
    'templates_set_as_template' => '현재 페이지는 템플릿용 페이지 입니다.',
    'templates_explain_set_as_template' => '템플릿은 보기 권한만 있어도 문서에 쓸 수 있습니다.',
    'templates_replace_content' => '문서 대체',
    'templates_append_content' => '문서 앞에 추가',
    'templates_prepend_content' => '문서 뒤에 추가',

    // Profile View
    'profile_user_for_x' => ':time 전에 가입함',
    'profile_created_content' => '활동한 이력',
    'profile_not_created_pages' => ':userName(이)가 만든 문서 없음',
    'profile_not_created_chapters' => ':userName(이)가 만든 챕터 없음',
    'profile_not_created_books' => ':userName(이)가 만든 책 없음',
    'profile_not_created_shelves' => ':userName(이)가 만든 책꽂이 없음',

    // Comments
    'comment' => '댓글',
    'comments' => '댓글',
    'comment_add' => '댓글 쓰기',
    'comment_placeholder' => '이곳에 댓글을 쓰세요...',
    'comment_count' => '{0} 댓글 없음|{1} 댓글 1개|[2,*] 댓글 :count개',
    'comment_save' => '등록',
    'comment_new' => '새로운 댓글',
    'comment_created' => '댓글 등록함 :createDiff',
    'comment_updated' => ':username(이)가 댓글 수정함 :updateDiff',
    'comment_updated_indicator' => '업데이트됨',
    'comment_deleted_success' => '댓글 지움',
    'comment_created_success' => '댓글 등록함',
    'comment_updated_success' => '댓글 수정함',
    'comment_delete_confirm' => '이 댓글을 지울 건가요?',
    'comment_in_reply_to' => ':commentId(을)를 향한 답글',
    'comment_editor_explain' => '이 페이지에 남겨진 댓글은 다음과 같습니다. 저장된 페이지를 볼 때 댓글을 추가하고 관리할 수 있습니다.',

    // Revision
    'revision_delete_confirm' => '이 수정본을 지울 건가요?',
    'revision_restore_confirm' => '이 버전을 되돌릴 건가요? 현재 페이지는 대체됩니다.',
    'revision_cannot_delete_latest' => '현재 버전본은 지울 수 없습니다.',

    // Copy view
    'copy_consider' => '항목을 복사할 때 다음을 고려하세요.',
    'copy_consider_permissions' => '권한 설정은 복사되지 않습니다.',
    'copy_consider_owner' => '복사한 항목의 소유자가 됩니다.',
    'copy_consider_images' => '이미지 파일은 복사되지 않습니다. 올라가 있던 이미지가 사라지지 않습니다.',
    'copy_consider_attachments' => '첨부 파일은 복사되지 않습니다.',
    'copy_consider_access' => '경로, 소유자, 권한이 바뀌면 이 문서를 본 적 없는 사용자가 볼 수도 있습니다.',

    // Conversions
    'convert_to_shelf' => '책장으로 변환',
    'convert_to_shelf_contents_desc' => '이 책을 동일한 내용의 새 서가로 변환할 수 있습니다. 이 책에 포함된 챕터는 새 책으로 변환됩니다. 이 책에 챕터에 포함되지 않은 페이지가 포함되어 있는 경우, 이 책의 이름이 변경되어 해당 페이지가 포함되며 이 책은 새 서가의 일부가 됩니다.',
    'convert_to_shelf_permissions_desc' => '이 책에 설정된 모든 권한은 새 서가 및 자체 권한이 적용되지 않은 모든 새 책에 복사됩니다. 책에 대한 권한은 책에 대한 권한처럼 그 안의 콘텐츠로 자동 캐스케이드되지 않는다는 점에 유의하세요.',
    'convert_book' => '책 변환',
    'convert_book_confirm' => '이 책을 변환하시겠어요?',
    'convert_undo_warning' => '이 작업은 되돌리기 어렵습니다.',
    'convert_to_book' => '책으로 변환',
    'convert_to_book_desc' => '이 챕터를 동일한 내용의 새 책으로 변환할 수 있습니다. 이 장에 설정된 모든 권한은 새 책에 복사되지만 상위 책에서 상속된 권한은 복사되지 않으므로 액세스 제어가 변경될 수 있습니다.',
    'convert_chapter' => '챕터 변환',
    'convert_chapter_confirm' => '이 챕터를 변환하시겠어요?',

    // References
    'references' => '참조',
    'references_none' => '이 항목에 대한 추적된 참조가 없습니다.',
    'references_to_desc' => '이 항목으로 연결되는 시스템에서 알려진 모든 콘텐츠가 아래에 나열되어 있습니다.',

    // Watch Options
    'watch' => '변경 알림 설정',
    'watch_title_default' => '기본 설정',
    'watch_desc_default' => '알림 설정을 기본값으로 되돌리기',
    'watch_title_ignore' => '알림 설정 끄기',
    'watch_desc_ignore' => '사용자 수준 환경설정의 알림을 포함한 모든 알림을 무시합니다.',
    'watch_title_new' => '새로운 페이지',
    'watch_desc_new' => '이 항목에 새 페이지가 생성되면 알림을 받습니다.',
    'watch_title_updates' => '전체 페이지 업데이트',
    'watch_desc_updates' => '모든 새 페이지와 페이지 변경 시 알림을 보냅니다.',
    'watch_desc_updates_page' => '모든 페이지 변경 시 알림을 보냅니다.',
    'watch_title_comments' => '모든 페이지 업데이트 및 댓글',
    'watch_desc_comments' => '모든 새 페이지, 페이지 변경 및 새 댓글에 대해 알림을 보냅니다.',
    'watch_desc_comments_page' => '페이지 변경 및 새 댓글이 있을 때 알림을 보냅니다.',
    'watch_change_default' => '기본 알림 환경설정 변경하기',
    'watch_detail_ignore' => '알림 무시하기',
    'watch_detail_new' => '새 페이지 보기',
    'watch_detail_updates' => '새 페이지 및 업데이트 보기',
    'watch_detail_comments' => '새 페이지, 업데이트 및 댓글 보기',
    'watch_detail_parent_book' => '상위 책을 통해 보기',
    'watch_detail_parent_book_ignore' => '상위 책을 통한 무시하기',
    'watch_detail_parent_chapter' => '상위 챕터를 통해 보기',
    'watch_detail_parent_chapter_ignore' => '상위 챕터를 통해 무시하기',
];
