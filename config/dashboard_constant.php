<?php
return [
    'SYS_THEME_ASSETS_PATH' => public_path().DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR,
    'SYS_THEME_ASSETS_URL' => env('APP_URL').'assets/',
    'PAGE_TYPE' => [
        'common' => 'Common Page',
        'home' => 'Home Page',
        'master' => 'Masters Program' ,
        'courses' => 'Courses',
        'event' => 'Event',
        'list' => 'Item List'
    ],
    'FIELD_TYPE' => [
        "FT"=>'text',
        "FE"=>'email',
        "FC"=>'date',
        "FN"=>'number',
        "TA"=>'textarea',
        "FR"=>'radio',
        "FS"=>'select',
        "FK"=>'checkbox'
    ],
    'COURSE_TYPE' => [
        "Featured"=>'Featured Courses',
        "Certificate"=>'Certificate Course',
        "Popular"=>'Popular Courses',
        "Upcoming"=>'Upcoming Courses',
        "Running"=>'Running Courses',
        "Completed"=>'Completed courses'
    ],
    'FIELD_SHOW_TYPE' => [
        "FT"=>'Text',
        "FE"=>'Email',
        "FC"=>'Calender',
        "FN"=>'Number',
        "TA"=>'Textarea',
        "FR"=>'Radio',
        "FS"=>'Select/Dropdown',
        "FK"=>'Checkbox'
    ],
    'PAYMENT_STATUS' => [
        "d"=>'DUE',
        "h"=>'Hold',
        "p"=>'Paid',
        "f"=>'Failed'
    ],
    'USER_TYPE' => [
        'AU' => 'Admin',
        'MU' => 'Manager',
        'SU' => 'Supervisor',
        'EU' => 'Executive'
    ],

    'USER_STATUS' => [
        'Y' => 'Active',
        'N' => 'Inactive',
    ],
    /**
     * User Privileges
     */

    'USER_PRIVILEGE' => [
        'DR' => 'Dashboard Report',
        'UL' => 'User List',
        'UE' => 'User Edit',
        'UD' => 'User Delete',
        'ML' => 'Menu List',
        'ME' => 'Menu Edit',
        'MD' => 'Menu Delete',
        'PL' => 'Page List',
        'PE' => 'Page Edit',
        'PD' => 'Page Delete',
        'SL' => 'Student List',
        'SE' => 'Student Edit',
        'SD' => 'Student Delete',
        'MPL' => 'Master Program List',
        'MPE' => 'Master Program Edit',
        'MPD' => 'Master Program Delete',
        'CL' => 'Course List',
        'CE' => 'Course Edit',
        'CD' => 'Course Delete',
        'EL' => 'Event List',
        'EE' => 'Event Edit',
        'ED' => 'Event Delete',
        'SBL' => 'Side Bar List',
        'SBE' => 'Side Bar Edit',
        'SBD' => 'Side Bar Delete',
        'IL' => 'Item List',
        'IE' => 'Item Edit',
        'UP' => 'Upload File',
        'RA' => 'Report Access',
//        'ID' => 'Item Delete',
        'FL' => 'Form List',
        'FE' => 'Form Edit',
        'FD' => 'Form Delete',
        '*' => 'ALL',
    ],

    /**
     * email config
     */
    'FROM_EMAIL' => '',
    'TO_EMAIL' => '',
    'REPLY_TO_EMAIL' => '',
    'FROM_EMAIL_NAME' => "Email Sender",
    'CAMPAIGN_FROM_EMAIL' => "",
    'CAMPAIGN_TO_EMAIL' => "",
    'CAMPAIGN_EMAIL_SUBJECT' => "Email Sender Campaign",
];
