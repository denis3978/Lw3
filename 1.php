<?php
function wordCount($text) {
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

echo "Введите текст: ";
$input = trim(fgets(STDIN));

$result = wordCount($input);

foreach ($result as $word => $count) {
    echo $word . " => " . $count . "\n";
}
?>
