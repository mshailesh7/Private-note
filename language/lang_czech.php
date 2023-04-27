<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "czech",
        "self_destruct_text" => "Soukromá poznámka se po otevření odkazu sama zničí.",
        "note_heading" => "Anonymní soukromá poznámka",
        "note_heading_password" => "Anonymní soukromá poznámka s heslem",
        "textarea_placeholder" => "Jaká je vaše soukromá poznámka...?",
        "create_note_btn" => "Vytvořit soukromou poznámku",
        "create_note_with_password_btn" => "Vytvořte soukromou poznámku s heslem",
        "spam_msg" => "Spammer není povolen.",
        "empty_note_error" => "Soukromá poznámka by neměla být prázdná.",
        "empty_note_error_password" => "Soukromá poznámka, heslo a heslo znovu zadejte nesmí být prázdné.",
        "empty_note_password_error" => "Soukromá poznámka a heslo by nemělo být prázdné.",
        "note_password_error" => "Heslo je špatné. Zkus to znovu.",
        "password_error" => "Heslo a znovu zadejte heslo se neshodují.",
        "note_heading_link" => "Anonymní odkaz na soukromou poznámku",
        "note_destroy_msg" => "Tato poznámka byla zničena. Před zavřením okna nebo změnou jazyka/režimu jej zkopírujte.",
        "create_pvt_note" => "Vytvořte si soukromou poznámku",
        "read_msg" => "Zdá se, že poznámka byla přečtena a zničena.",
        "password_heading" => "Heslo",
        "repassword_heading" => "Zadejte heslo znovu",
        "password_msg_heading" => "Soukromá poznámka je zašifrována heslem.",
        "enter_password" => "Zadejte heslo a otevřete poznámku",
        "copyright_heading" => "autorská práva",
        "all_right_reserved" => "Všechna práva vyhrazena.",
        "admin_login_heading" => "Přihlášení do panelu administrátora",
        "username" => "uživatelské jméno",
        "admin_incorrectlogin_msg" => "Buď špatné uživatelské jméno nebo heslo. Zkus to znovu.",
        "empty_admin_error" => "Uživatelské jméno / heslo správce by nemělo být prázdné.",
        "login" => "Přihlásit se",
        "notifications" => "Upozornění a zkratky",
        "view" => "Pohled",
        "total_private_note" => "Celkem soukromých poznámek",      
        "total_unreadprivate_note" => "Celkový počet nepřečtených soukromých poznámek" ,       
        "total_readprivate_note" => "Celkem přečtené soukromé poznámky",        
        "total_banned_ip" => "Celková IP adresa zakázaného uživatele",
        "logout" => "Odhlásit se",
        "analysis" => "Analýza",
        "lifetime_notes" => "Doživotní soukromé poznámky",
        "thismonth_notes" => "Tento měsíc Soukromé poznámky",
        "today_notes" => "Dnes soukromé poznámky",
        "wrong_password" => "Heslo je špatné. Zkus to znovu.",
        "form_empty" => "Všechna pole jsou povinná. Zkus to znovu.",
        "username_changed" => "Uživatelské jméno správce úspěšně změněno.",
        "change_admin_username" => "Změnit uživatelské jméno správce",
        "old_admin_username" => "Staré uživatelské jméno správce",
        "new_admin_username" => "Nové uživatelské jméno správce",
        "change" => "Změna",
        "old_admin_password" => "Staré heslo správce",
        "new_admin_password" => "Nové heslo správce",
        "min_password" => "Heslo musí obsahovat minimálně 8 znaků, 1 velké písmeno, 1 malé písmeno a 1 číslo (příklad - Test1234) .",
        "change_admin_password" => "Změnit heslo správce",
        "password_changed" => "Heslo správce úspěšně změněno.",
        "read" => "Číst",
        "unread" => "Nepřečtený",
        "delete_note" => "Smazat poznámku",
        "delete_note_with_ip" => "Smazat poznámku a blokovat IP uživatele",
        "view_note" => "Zobrazit poznámku",
        "yes" => "Ano",
        "no" => "Ne",
        "serial_number" => "č.v.",
        "date" => "datum",
        "note_id" => "ID poznámky",
        "note_unique_id" => "Poznámka Jedinečné ID",
        "user_ip" => "IP uživatele",
        "note" => "Poznámka",
        "password_protected" => "Chráněno heslem",
        "status" => "Postavení",
        "action" => "Akce",
        "note_deleted" => "Poznámka byla úspěšně smazána.",
        "note_deleted_with_ip" => "Poznámka byla úspěšně smazána a IP uživatele byla zablokována.",  
        "unblock_ip" => "Odblokujte IP uživatele a odstraňte z černé listiny.",
        "unblocked_ip" => "IP uživatele odblokována a odstraněna z černé listiny.",
        "blocked_msg" => "Promiňte ! Tento web není pro vás."
    );  
    return $userlang[$txt];
}

?>