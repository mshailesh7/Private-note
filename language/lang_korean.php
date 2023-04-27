<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "korean",
        "self_destruct_text" => "비공개 메모는 링크가 열리면 자동으로 파기됩니다.",
        "note_heading" => "익명의 개인 메모",
        "note_heading_password" => "비밀번호가 있는 익명의 개인 메모",
        "textarea_placeholder" => "당신의 개인 메모는 무엇입니까 ... ?",
        "create_note_btn" => "비공개 메모 만들기",
        "create_note_with_password_btn" => "비밀번호로 개인 메모 작성",
        "spam_msg" => "스패머는 허용되지 않습니다.",
        "empty_note_error" => "비공개 메모는 비워둘 수 없습니다.",
        "empty_note_error_password" => "개인 메모, 비밀번호 및 비밀번호 재입력은 비워둘 수 없습니다.",
        "empty_note_password_error" => "개인 메모 및 비밀번호는 비워둘 수 없습니다.",
        "note_password_error" => "비밀번호가 잘못되었습니다. 다시 시도하십시오.",
        "password_error" => "비밀번호와 비밀번호 재입력이 일치하지 않습니다.",
        "note_heading_link" => "익명 개인 메모 링크",
        "note_destroy_msg" => "이 메모는 폐기되었습니다. 창을 닫거나 언어/모드를 변경하기 전에 복사하십시오.",
        "create_pvt_note" => "개인 메모 만들기",
        "read_msg" => "메모를 읽고 파괴한 것 같습니다.",
        "password_heading" => "비밀번호",
        "repassword_heading" => "비밀번호 재입력",
        "password_msg_heading" => "비공개 메모는 암호로 암호화되어 있습니다.",
        "enter_password" => "비밀번호 입력 및 메모 열기",
        "copyright_heading" => "저작권",
        "all_right_reserved" => "판권 소유."
    );  
    return $userlang[$txt];
}

?>