<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "dutch",
        "self_destruct_text" => "De privénotitie vernietigt zichzelf zodra de link is geopend.",
        "note_heading" => "Anonieme privénotitie",
        "note_heading_password" => "Anonieme privénotitie met wachtwoord",
        "textarea_placeholder" => "Wat is uw persoonlijke notitie ... ?",
        "create_note_btn" => "Privénotitie maken",
        "create_note_with_password_btn" => "Maak een privénotitie met wachtwoord",
        "spam_msg" => "Spammer is niet toegestaan.",
        "empty_note_error" => "Privénotitie mag niet leeg zijn.",
        "empty_note_error_password" => "Privénotitie, wachtwoord en wachtwoord opnieuw typen mag niet leeg zijn.",
        "empty_note_password_error" => "Privénotitie en wachtwoord mogen niet leeg zijn.",
        "note_password_error" => "Wachtwoord is fout. Probeer het nog eens.",
        "password_error" => "Wachtwoord en wachtwoord opnieuw typen komen niet overeen.",
        "note_heading_link" => "Anonieme privénotitielink",
        "note_destroy_msg" => "Deze notitie is vernietigd. Kopieer het voordat u het venster sluit of de taal/modus wijzigt.",
        "create_pvt_note" => "Maak uw privénotitie",
        "read_msg" => "Het lijkt erop dat de notitie is gelezen en vernietigd.",
        "password_heading" => "Wachtwoord",
        "repassword_heading" => "Geef nogmaals het wachtwoord",
        "password_msg_heading" => "Private Note is met een wachtwoord versleuteld.",
        "enter_password" => "Voer wachtwoord in en open notitie",
        "copyright_heading" => "auteursrechten",
        "all_right_reserved" => "Alle rechten voorbehouden.",
        "admin_login_heading" => "Inloggen op het beheerdersdashboard",
        "username" => "gebruikersnaam",
        "admin_incorrectlogin_msg" => "Ofwel verkeerde gebruikersnaam of wachtwoord. Probeer het nog eens.",
        "empty_admin_error" => "Admin gebruikersnaam / wachtwoord mag niet leeg zijn.",
        "login" => "Log in",
        "notifications" => "Meldingen en snelkoppelingen",
        "view" => "Weergave",
        "total_private_note" => "Totaal aantal privénotities",      
        "total_unreadprivate_note" => "Totaal ongelezen privénotities" ,       
        "total_readprivate_note" => "Totaal gelezen privénotities",        
        "total_banned_ip" => "Totaal verbannen gebruikers-IP",
        "logout" => "Uitloggen",
        "analysis" => "Analyse",
        "lifetime_notes" => "Levenslange privénotities",
        "thismonth_notes" => "Deze maand privé notities",
        "today_notes" => "Vandaag privé notities",
        "wrong_password" => "Wachtwoord is fout. Probeer het nog eens.",
        "form_empty" => "Alle velden zijn verplicht. Probeer het nog eens.",
        "username_changed" => "Admin gebruikersnaam succesvol gewijzigd.",
        "change_admin_username" => "Gebruikersnaam beheerder wijzigen",
        "old_admin_username" => "Oude beheerdersgebruikersnaam",
        "new_admin_username" => "Nieuwe beheerdersgebruikersnaam",
        "change" => "Wijziging",
        "old_admin_password" => "Oud beheerderswachtwoord",
        "new_admin_password" => "Nieuw beheerderswachtwoord",
        "min_password" => "Wachtwoord moet minimaal 8 tekens bevatten, 1 hoofdletter, 1 kleine letter en 1 cijfer (voorbeeld - Test1234).",
        "change_admin_password" => "Beheerderswachtwoord wijzigen",
        "password_changed" => "Beheerderswachtwoord succesvol gewijzigd.",
        "read" => "Lezen",
        "unread" => "Ongelezen",
        "delete_note" => "Opmerking verwijderen",
        "delete_note_with_ip" => "Verwijder notitie en blokkeer gebruikers-IP",
        "view_note" => "Opmerking bekijken",
        "yes" => "Ja",
        "no" => "Nee",
        "serial_number" => "S.Nr.",
        "date" => "Datum",
        "note_id" => "Notitie-ID",
        "note_unique_id" => "Opmerking Unieke ID",
        "user_ip" => "Gebruikers-IP",
        "note" => "Opmerking",
        "password_protected" => "Beschermd met een wachtwoord",
        "status" => "Toestand",
        "action" => "Actie",
        "note_deleted" => "Notitie is succesvol verwijderd.",
        "note_deleted_with_ip" => "Notitie is succesvol verwijderd en gebruikers-IP is geblokkeerd.",  
        "unblock_ip" => "Deblokkeer gebruikers-IP & verwijder van zwarte lijst.",
        "unblocked_ip" => "Gebruikers-IP gedeblokkeerd en verwijderd van zwarte lijst.",
        "blocked_msg" => "Sorry ! Deze website is niet voor jou."
    );  
    return $userlang[$txt];
}

?>