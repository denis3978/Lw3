<?php
function wordCount(string $text): array {
    $text = strtolower($text);
    $text = trim($text);
    $words = explode(" ", $text);
    
    $result = [];
    foreach ($words as $word) {
        if ($word != "") {
            if (isset($result[$word])) {
                $result[$word]++;
            } else {
                $result[$word] = 1;
            }
        }
    }
    return $result;
}

$text = "hello world hello";
print_r(wordCount($text));
?>
