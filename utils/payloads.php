<?php
    namespace Utils;

    class Payloads
    {
        public static $greeting = "\xE1\x8A\xA5\xE1\x8A\x95\xE1\x8A\xB3\xE1\x8A\x95\x20\xE1\x89\xA0\xE1\x88\xB0\xE1\x88\x8B\xE1\x88\x9D\x20\xE1\x88\x98\xE1\x8C\xA1\x21" . "%0A%0A" .
            "\xE1\x8B\xAD\xE1\x88\x85\x20\x20\x62\x6F\x74\x20\xE1\x88\x98\xE1\x8C\xBD\xE1\x88\x90\xE1\x8D\x8D\x20\xE1\x89\x85\xE1\x8B\xB1\xE1\x88\xB5\xE1\x8A\x95\x20\xE1" .
            "\x89\x80\xE1\x88\x8B\xE1\x88\x8D\x20\xE1\x89\xA0\xE1\x88\x86\xE1\x8A\x90\x20\xE1\x88\x98\xE1\x8A\x95\xE1\x8C\x88\xE1\x8B\xB5\x20\xE1\x89\xB4\xE1\x88\x8C\xE1" .
            "\x8C\x8D\xE1\x88\xAB\xE1\x88\x9D\xE1\x8A\x95\x20\xE1\x8A\xA5\xE1\x8B\xA8\xE1\x89\xB0\xE1\x8C\xA0\xE1\x89\x80\xE1\x88\x99\x20\xE1\x8A\xA5\xE1\x8A\x95\xE1\x8B" .
            "\xB2\xE1\x8B\xAB\xE1\x8C\x88\xE1\x8A\x99\xE1\x8A\x93\x20\xE1\x8A\xA8\xE1\x88\x98\xE1\x8C\xBD\xE1\x88\x90\xE1\x8D\x8D\x20\xE1\x89\x85\xE1\x8B\xB1\xE1\x88\xB5" .
            "\x20\xE1\x8C\x8B\xE1\x88\xAD\x20\xE1\x8B\xAB\xE1\x88\x8D\xE1\x8B\x8E\xE1\x89\xB5\xE1\x8A\x95\x20\xE1\x8C\x8D\xE1\x8A\x91\xE1\x8A\x9D\xE1\x8A\x90\xE1\x89\xB5" .
            "\x20\xE1\x89\xA0\xE1\x88\x9B\xE1\x8A\x95\xE1\x8A\x9B\xE1\x8B\x8D\xE1\x88\x9D\x20\xE1\x88\xB0\xE1\x8B\x93\xE1\x89\xB5\x20\xE1\x8A\xA5\xE1\x8A\x95\xE1\x8B\xB2" .
            "\xE1\x89\x80\xE1\x8C\xA5\xE1\x88\x89\x20\xE1\x8B\xAB\xE1\x8B\xB0\xE1\x88\xAD\xE1\x8C\x8B\xE1\x88\x8D\xE1\x8D\xA2" . "%0A%0A" .
            "\xE1\x89\xA0\xE1\x89\xA0\xE1\x88\x88\xE1\x8C\xA0\x20\xE1\x88\xB5\xE1\x88\x88\x20\xE1\x89\xA6\xE1\x89\xB1\x20\xE1\x8A\xA0\xE1\x88\xB0\xE1\x88\xAB\xE1\x88\xAD" .
            "\x20\xE1\x88\x88\xE1\x88\x9B\xE1\x8B\x88\xE1\x89\x85\x20\xE1\x8A\xA8\xE1\x89\xB3\xE1\x89\xBD\x20\xE1\x8A\xA8\xE1\x89\xB0\xE1\x89\x80\xE1\x88\x98\xE1\x8C\xA1" .
            "\xE1\x89\xB5\x20\xE1\x8B\x9D\xE1\x88\xAD\xE1\x8B\x9D\xE1\x88\xAE\xE1\x89\xBD\x20\xE1\x8B\x8D\xE1\x88\xB5\xE1\x8C\xA5\x20\x60\x60\xE1\x88\xB5\xE1\x88\x88\x20" .
            "\xE1\x89\xA6\xE1\x89\xB1\x60\x60\x20\xE1\x8B\xA8\xE1\x88\x9A\xE1\x88\x88\xE1\x8B\x8D\xE1\x8A\x95\x20\xE1\x89\x81\xE1\x88\x8D\xE1\x8D\x8D\x20\xE1\x8B\xAD\xE1" .
            "\x8C\xAB\xE1\x8A\x91\xE1\x8D\xA2";

        public static $main_menu = [
            "inline_keyboard" => [
                    [["text" => "\xF0\x9F\x93\x9C"."%20"."\xE1\x88\x98\xE1\x8C\xBD\xE1\x88\x90\xE1\x8D\x8D\x20\xE1\x89\x85\xE1\x8B\xB1\xE1\x88\xB5", "callback_data" => "bible"], ["text" => "\xF0\x9F\x96\x8A"."%20"."\xE1\x8C\xA5\xE1\x89\x85\xE1\x88\xB6\xE1\x89\xBD\xE1\x8A\x95\x20\xE1\x8D\x88\xE1\x88\x8D\xE1\x8C\x8D", "callback_data" => "quote"]],
                    [["text" => "\xE2\x9A\x99\xEF\xB8\x8F"."%20"."\xE1\x8B\xA8\xE1\x89\xA6\xE1\x89\xB1\x20\xE1\x88\x98\xE1\x89\xBC\xE1\x89\xB5", "callback_data" => "setting"], ["text" => "\xF0\x9F\xA4\x96"."%20"."\xE1\x88\xB5\xE1\x88\x88\x20\xE1\x89\xA6\xE1\x89\xB1", "callback_data" => "about_bot"]],
                    [["text" => "\xF0\x9F\x91\xA8\xE2\x80\x8D\xF0\x9F\x92\xBB"."%20"."\xE1\x88\xB5\xE1\x88\x88\x20\xE1\x8A\xA0\xE1\x89\xA0\xE1\x88\x8D\xE1\x8C\xBB\xE1\x8C\x8A\xE1\x8B\x8E\xE1\x89\xB9"."%20"."\xF0\x9F\x91\xA9\xE2\x80\x8D\xF0\x9F\x92\xBB", "callback_data" => "about_dev"]]
            ]
        ];

        public static $bible_menu = [
            "inline_keyboard" => [
                [["text"=>"\xF0\x9F\x93\x9C"."\xE1\x89\xA5\xE1\x88\x89\xE1\x8B\xAD\x20\xE1\x8A\xAA\xE1\x8B\xB3\xE1\x8A\x95", "callback_data"=>"old"]],
                [["text"=>"\xF0\x9F\x93\x9C"."\xE1\x8A\xA0\xE1\x8B\xB2\xE1\x88\xB5\x20\xE1\x8A\xAA\xE1\x8B\xB3\xE1\x8A\x95", "callback_data"=>"new"]],
                [["text"=>"<<", "callback_data"=>"back_mm"]]
            ]
        ];

        public static $old_testament = [
            "inline_keyboard" => [
                [
                    ["text"=>"\xe1\x8a\xa6\xe1\x88\xaa\xe1\x89\xb5" . "%20" . "\xe1\x8b\x98\xe1\x8d\x8d\xe1\x8c\xa5\xe1\x88\xa8\xe1\x89\xb5", "callback_data"=>"bo0"],
                    ["text"=>"\xe1\x8a\xa6\xe1\x88\xaa\xe1\x89\xb5" . "%20" . "\xe1\x8b\x98\xe1\x8c\xb8\xe1\x8a\xa0\xe1\x89\xb5\xe1\x8a\xa6", "callback_data"=>"bo1"],
                    ["text"=>"\xe1\x8a\xa6\xe1\x88\xaa\xe1\x89\xb5" . "%20" . "\xe1\x8b\x98\xe1\x88\x8c\xe1\x8b\x8b\xe1\x8b\x8d\xe1\x8b\xab\xe1\x8a\x95", "callback_data"=>"bo2"]
                ],
                [
                    ["text"=>"\xe1\x8a\xa6\xe1\x88\xaa\xe1\x89\xb5" . "%20" . "\xe1\x8b\x98\xe1\x8a\x8d\xe1\x88\x8d\xe1\x89\x8d", "callback_data"=>"bo3"],
                    ["text"=>"\xe1\x8a\xa6\xe1\x88\xaa\xe1\x89\xb5" . "%20" . "\xe1\x8b\x98\xe1\x8b\xb3\xe1\x8c\x8d\xe1\x88\x9d", "callback_data"=>"bo4"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\xa2\xe1\x8b\xab\xe1\x88\xb1" . "%20" . "\xe1\x8b\x88\xe1\x88\x8d\xe1\x8b\xb0" . "%20" . "\xe1\x8a\x90\xe1\x8b\x8c", "callback_data"=>"bo5"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\x98\xe1\x88\xa3\xe1\x8d\x8d\xe1\x8a\x95\xe1\x89\xb5", "callback_data"=>"bo6"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\xa9\xe1\x89\xb5", "callback_data"=>"bo7"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\xb3\xe1\x88\x99\xe1\x8a\xa4\xe1\x88\x8d" . "%20" . "\xe1\x89\x80\xe1\x8b\xb3\xe1\x88\x9b\xe1\x8b\x8a", "callback_data"=>"bo8"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\xb3\xe1\x88\x99\xe1\x8a\xa4\xe1\x88\x8d" . "%20" . "\xe1\x8a\xab\xe1\x88\x8d", "callback_data"=>"bo9"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\x90\xe1\x8c\x88\xe1\x88\xa5\xe1\x89\xb5" . "%20" . "\xe1\x89\x80\xe1\x8b\xb3\xe1\x88\x9b\xe1\x8b\x8a", "callback_data"=>"bo10"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\x90\xe1\x8c\x88\xe1\x88\xa5\xe1\x89\xb5" . "%20" . "\xe1\x8a\xab\xe1\x88\x8d\xe1\x8b\x95", "callback_data"=>"bo11"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8b\x9c\xe1\x8a\x93" . "%20" . "\xe1\x88\x98\xe1\x8b\x8b\xe1\x8b\x95\xe1\x88\x8d" . "%20" . "\xe1\x89\x80\xe1\x8b\xb3\xe1\x88\x9b\xe1\x8b\x8a", "callback_data"=>"bo12"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8b\x9c\xe1\x8a\x93" . "%20" . "\xe1\x88\x98\xe1\x8b\x8b\xe1\x8b\x95\xe1\x88\x8d" . "%20" . "\xe1\x8a\xab\xe1\x88\x8d\xe1\x8b\x95", "callback_data"=>"bo13"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8b\x95\xe1\x8b\x9d\xe1\x88\xab", "callback_data"=>"bo14"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\x90\xe1\x88\x85\xe1\x88\x9d\xe1\x8b\xab", "callback_data"=>"bo15"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\xa0\xe1\x88\xb5\xe1\x89\xb4\xe1\x88\xad", "callback_data"=>"bo16"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x8a\xa2\xe1\x8b\xae\xe1\x89\xa5", "callback_data"=>"bo17"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8b\x9d\xe1\x88\x99\xe1\x88\xa8" . "%20" . "\xe1\x8b\xb3\xe1\x8b\x8a\xe1\x89\xb5", "callback_data"=>"bo18"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\x9d\xe1\x88\xb3\xe1\x88\x8c", "callback_data"=>"bo19"],
                    ["text"=>"\xe1\x88\x98\xe1\x8c\xbd\xe1\x88\x90\xe1\x8d\x88" . "%20" . "\xe1\x88\x98\xe1\x8a\xad\xe1\x89\xa5\xe1\x89\xa5", "callback_data"=>"bo20"]
                ],
                [
                    ["text"=>"\xe1\x88\x98\xe1\x8a\x83\xe1\x88\x8d\xe1\x8b\xad" . "%20" . "\xe1\x8b\x98\xe1\x88\xb0\xe1\x88\x8e\xe1\x88\x9e\xe1\x8a\x95", "callback_data"=>"bo21"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\xa2\xe1\x88\xb3\xe1\x8b\xad\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo22"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\xa4\xe1\x88\xad\xe1\x88\x9d\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo23"]
                ],
                [
                    ["text"=>"\xe1\x88\xb0\xe1\x89\x86\xe1\x89\x83\xe1\x8b\x8d" . "%20" . "\xe1\x8a\xa4\xe1\x88\xad\xe1\x88\x9d\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo24"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\x95\xe1\x8b\x9d\xe1\x89\x85\xe1\x8a\xa4\xe1\x88\x8d", "callback_data"=>"bo25"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8b\xb3\xe1\x8a\x95\xe1\x8a\xa4\xe1\x88\x8d", "callback_data"=>"bo26"]
                ],
                [
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\x86\xe1\x88\xb4\xe1\x8b\x95", "callback_data"=>"bo27"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\xa2\xe1\x8b\xae\xe1\x8a\xa4\xe1\x88\x8d", "callback_data"=>"bo28"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\xa0\xe1\x88\x9e\xe1\x8c\xbd", "callback_data"=>"bo29"]
                ],
                [
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\xa0\xe1\x89\xa5\xe1\x8b\xb5\xe1\x8b\xa9", "callback_data"=>"bo30"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8b\xae\xe1\x8a\x93\xe1\x88\xb5", "callback_data"=>"bo31"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\x9a\xe1\x8a\xad\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo32"]
                ],
                [
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8a\x93\xe1\x88\x86\xe1\x88\x9d", "callback_data"=>"bo33"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8b\x95\xe1\x8a\x95\xe1\x89\xa3\xe1\x89\x86\xe1\x88\x9d", "callback_data"=>"bo34"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\xb6\xe1\x8d\x8e\xe1\x8a\x95\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo35"]
                ],
                [
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\x90\xe1\x8c\x8c", "callback_data"=>"bo36"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x8b\x98\xe1\x8a\xab\xe1\x88\xad\xe1\x8b\xab\xe1\x88\xb5", "callback_data"=>"bo37"],
                    ["text"=>"\xe1\x89\xb5\xe1\x8a\x95\xe1\x89\xa2\xe1\x89\xb0" . "%20" . "\xe1\x88\x9a\xe1\x88\x8d\xe1\x8a\xad\xe1\x8b\xab", "callback_data"=>"bo38"]
                ],
                [["text"=>"<<", "callback_data"=>"bible_m"]]
            ]
        ];

        public static $new_testament = [
            "inline_keyboard" => [
                [
                	["text"=>"\xe1\x8b\xa8\xe1\x88\x9b\xe1\x89\xb4\xe1\x8b\x8e\xe1\x88\xb5" . "%20" . "\xe1\x8b\x88\xe1\x8a\x95\xe1\x8c\x8c\xe1\x88\x8d", "callback_data"=>"39"],
                	["text"=>"\xe1\x8b\xa8\xe1\x88\x9b\xe1\x88\xad\xe1\x89\x86\xe1\x88\xb5" . "%20" . "\xe1\x8b\x88\xe1\x8a\x95\xe1\x8c\x8c\xe1\x88\x8d", "callback_data"=>"40"],
                	["text"=>"\xe1\x8b\xa8\xe1\x88\x89\xe1\x89\x83\xe1\x88\xb5" . "%20" . "\xe1\x8b\x88\xe1\x8a\x95\xe1\x8c\x8c\xe1\x88\x8d", "callback_data"=>"41"]
                ],
                [
                	["text"=>"\xe1\x8b\xa8\xe1\x8b\xae\xe1\x88\x90\xe1\x8a\x95\xe1\x88\xb5" . "%20" . "\xe1\x8b\x88\xe1\x8a\x95\xe1\x8c\x8c\xe1\x88\x8d", "callback_data"=>"42"],
                	["text"=>"\xe1\x8b\xa8\xe1\x88\x90\xe1\x8b\x8b\xe1\x88\xad\xe1\x8b\xab\xe1\x89\xb5" . "%20" . "\xe1\x88\xa5\xe1\x88\xab", "callback_data"=>"43"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x88\xae\xe1\x88\x9c" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"44"]
                ],
                [
                	["text"=>"1\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\x86\xe1\x88\xae\xe1\x8a\x95\xe1\x89\xb6\xe1\x88\xb5" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"45"],
                	["text"=>"2\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\x86\xe1\x88\xae\xe1\x8a\x95\xe1\x89\xb6\xe1\x88\xb5" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"46"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8c\x88\xe1\x88\x8b\xe1\x89\xb5\xe1\x8b\xab" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"47"]
                ],
                [
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8a\xa4\xe1\x8d\x8c\xe1\x88\xb6\xe1\x8a\x95" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"48"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8d\x8a\xe1\x88\x8d\xe1\x8c\xb5\xe1\x88\xb5\xe1\x8b\xa9\xe1\x88\xb5" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"49"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\x86\xe1\x88\x8b\xe1\x88\xb5\xe1\x8b\xad\xe1\x88\xb5" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"50"]
                ],
                [
                	["text"=>"1\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\xb0\xe1\x88\xb0\xe1\x88\x8e\xe1\x8a\x95\xe1\x89\x84" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"51"],
                	["text"=>"2\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\xb0\xe1\x88\xb5\xe1\x88\x8e\xe1\x8a\x95\xe1\x89\x84" . "%20" . "\xe1\x88\xb0\xe1\x8b\x8e\xe1\x89\xbd", "callback_data"=>"52"],
                	["text"=>"1\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8c\xa2\xe1\x88\x9e\xe1\x89\xb4\xe1\x8b\x8e\xe1\x88\xb5", "callback_data"=>"53"]
                ],
                [
                    ["text"=>" 2\xe1\x8a\x9b" . "%20" . "\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8c\xa2\xe1\x88\x9e\xe1\x89\xb4\xe1\x8b\x8e\xe1\x88\xb5", "callback_data"=>"54"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x89\xb2\xe1\x89\xb6", "callback_data"=>"55"],
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8d\x8a\xe1\x88\x8d\xe1\x88\x9e\xe1\x8a\x93", "callback_data"=>"56"]
                ],
                [
                	["text"=>"\xe1\x8b\x88\xe1\x8b\xb0" . "%20" . "\xe1\x8b\x95\xe1\x89\xa5\xe1\x88\xab\xe1\x8b\x8d\xe1\x8b\xab\xe1\x8a\x95", "callback_data"=>"57"],
                	["text"=>"\xe1\x8b\xa8\xe1\x8b\xab\xe1\x8b\x95\xe1\x89\x86\xe1\x89\xa5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"58"],
                	["text"=>"1\xe1\x8a\x9b" . "%20" . "\xe1\x8b\xa8\xe1\x8c\xb4\xe1\x8c\xa5\xe1\x88\xae\xe1\x88\xb5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"59"]
                ],
                [
                	["text"=>"2\xe1\x8a\x9b" . "%20" . "\xe1\x8b\xa8\xe1\x8c\xb4\xe1\x8c\xa5\xe1\x88\xae\xe1\x88\xb5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"60"],
                	["text"=>"1\xe1\x8a\x9b" . "%20" . "\xe1\x8b\xa8\xe1\x8b\xae\xe1\x88\x90\xe1\x8a\x95\xe1\x88\xb5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"61"],
                	["text"=>"2\xe1\x8a\x9b" . "%20" . "\xe1\x8b\xa8\xe1\x8b\xae\xe1\x88\x90\xe1\x8a\x95\xe1\x88\xb5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"62"]
                ],
                [
                	["text"=>"3\xe1\x8a\x9b" . "%20" . "\xe1\x8b\xa8\xe1\x8b\xae\xe1\x88\x90\xe1\x8a\x95\xe1\x88\xb5" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"63"],
                	["text"=>"\xe1\x8b\xa8\xe1\x8b\xad\xe1\x88\x81\xe1\x8b\xb3" . "%20" . "\xe1\x88\x98\xe1\x88\x8d\xe1\x8a\xa5\xe1\x8a\xad\xe1\x89\xb5", "callback_data"=>"64"],
                	["text"=>"\xe1\x8b\xa8\xe1\x8b\xae\xe1\x88\x90\xe1\x8a\x95\xe1\x88\xb5" . "%20" . "\xe1\x88\xab\xe1\x8a\xa5\xe1\x8b\xad", "callback_data"=>"65"]
                ],
                [["text"=>"<<", "callback_data"=>"bible_m"]]
            ]
        ];

        public static $testaments = "\xE1\x8B\xA8\xE1\x88\x98\xE1\x8C\xBD\xE1\x88\x90\xE1\x8D\x8D\xE1\x89\xB5\x20\xE1\x88\x9B\xE1\x8B\x8D\xE1\x8C\xAB";

        public static $error = "\xE1\x89\xA6\xE1\x89\xB1\x20\xE1\x8B\x8D\xE1\x88\xB5\xE1\x8C\xA3\xE1\x8B\x8A\x20\xE1\x89\xB4\xE1\x8A\xAD\xE1\x8A\x92\xE1\x8A\xAB\xE1\x88\x8D" .
            "\x20\xE1\x89\xBD\xE1\x8C\x8D\xE1\x88\xAE\xE1\x89\xBD\xE1\x8A\x95\x20\xE1\x8A\xA0\xE1\x88\xB5\xE1\x89\xB0\xE1\x8A\x93\xE1\x8C\x8D\xE1\x8B\xB7\xE1\x88\x8D\x21" . "%20" .
            "\xE1\x8A\xA5\xE1\x89\xA3\xE1\x8A\xA5\xE1\x8B\x8E\x20\x2F\x73\x74\x61\x72\x74\x20\xE1\x8B\xAD\xE1\x8A\x95\xE1\x8A\xA9\x21";

        public static function chapter($limit)
        {
            file_get_contents(API_URL . API_TOKEN . "/sendMessage?chat_id=686804748&text=".$limit);

            $chapters = array();
            $row = array();
            $cell = null;
            $count = 0;

            for ($i = 1; $i <= $limit; $i++)
            {
                if ($count != 4)
                {
                    $cell = array("text" => "\xE1\x88\x9D\xE1\x8B\x95\xE1\x88\xAB\xE1\x8D\x8D" . "%20" . $i, "callback_data" => "ch" . $i);
                    array_push($row, $cell);
                }
                else
                {
                    array_push($chapters, $row);
                    $row = array();
                    $cell = array("text" => "\xE1\x88\x9D\xE1\x8B\x95\xE1\x88\xAB\xE1\x8D\x8D" . "%20" . $i, "callback_data" => "ch" . $i);
                    array_push($row, $cell);
                    $count = 0;
                }
                $count++;
            }
            $row = array(array("text" => "<<", "callback_data" => "bible_m"));
            array_push($chapters, $row);
            $value = array('inline_keyboard' => $chapters);
            return $value;
        }
    }
?>
