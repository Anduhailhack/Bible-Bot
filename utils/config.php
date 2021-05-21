<?php
    namespace Utils;

    define("DB_NAME", "SERVICES");
    define("DB_USER", "root");
    define("DB_HOST", "localhost");
    define("DB_PASS", "");
    define("DB_PORT", 3306);

    define("API_URL", "https://api.telegram.org/");
    define("API_TOKEN", "bot1740911451:AAFb093KmaiexLI6t4VjqSGJlDEp-UHZwDQ");

    define("METHODS", array("sendMessage?",
                "editMessageReplyMarkup?",
                "editMessageText?",
                "deleteMessage?"));
    define("BOOKS", array(["genesis", "50"], ["exodus", "40"], ["leviticus", "27"],
                          ["numbers", "36"], ["deuteronomy", "34"], ["joshua", "24"],
                          ["judges", "21"], ["ruth", "4"], ["1_samuel", "31"],
                          ["2_samuel", "24"], ["1_kings", "22"], ["2_kings", "25"],
                          ["1_chronicles", "29"], ["2_chronicles", "36"], ["ezra", "10"],
                          ["nehemiah", "13"], ["esther", "10"], ["job", "42"],
                          ["psalms", "150"], ["proverbs", "31"], ["ecclesiastes", "12"],
                          ["song_of_solomon", "8"], ["isaiah", "66"], ["jeremiah", "52"],
                          ["lamentations", "5"], ["ezekiel", "48"], ["daniel", "12"],
                          ["hosea", "14"], ["joel", "3"], ["amos", "9"],
                          ["obadiah", "1"], ["jonah", "4"], ["micah", "7"],
                          ["nahum", "3"], ["habakkuk", "3"], ["zephaniah", "3"],
                          ["haggai", "2"], ["zechariah", "14"], ["malachi", "4"],
                          ["matthew", "28"], ["mark", "16"], ["luke", "24"],
                          ["john", "21"], ["acts", "28"], ["romans", "16"],
                          ["1_corinthians", "16"], ["2_corinthians", "13"],
                          ["galatians", "6"], ["ephesians", "6"], ["philippians", "4"],
                          ["colossians", "4"], ["1_thessalonians", "5"], ["2_thessalonians", "3"],
                          ["1_timothy", "6"], ["2_timothy", "4"], ["titus", "3"],
                          ["philemon", "1"], ["hebrews", "13"], ["james", "5"],
                          ["1_peter", "5"], ["2_peter", "3"], ["1_john", "5"],
                          ["2_john", "1"], ["3_john", "1"], ["jude", "1"],
                          ["revelation", "22"]));
?>
