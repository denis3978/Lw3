<?php

function wordCount(string $text): array {
    $text = strtolower($text);
    
    $text = preg_replace('/[^a-zа-яё\s]/ui', '', $text);
    
    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    
    $result = [];
    foreach ($words as $word) {
        if (isset($result[$word])) {
            $result[$word]++;
        } else {
            $result[$word] = 1;
        }
    }
    
    return $result;
}

echo "Введите текст: ";
$input = trim(fgets(STDIN));

if ($input == "") {
    $input = "hello world hello";
    echo "Используем текст по умолчанию: \"$input\"\n";
}

$result = wordCount($input);

echo "\nРезультат:\n";
print_r($result);

echo "\nСтатистика слов:\n";
foreach ($result as $word => $count) {
    echo "$word: $count раз(а)\n";
}
?>
