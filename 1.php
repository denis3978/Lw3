<?php

function wordCount(string $text): array
{
    $text = strtolower($text);
    $words = str_word_count($text, 1);
    $result = [];

    foreach ($words as $word) {
        if (!isset($result[$word])) {
            $result[$word] = 0;
        }
        $result[$word]++;
    }

    return $result;
}

var_dump(wordCount("hello world hello"));
