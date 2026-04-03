<?php

function chunkArray(array $items, int $size): array
{
    if ($size <= 0) {
        return [];
    }

    $result = [];
    $chunk = [];

    foreach ($items as $item) {
        $chunk[] = $item;

        if (count($chunk) == $size) {
            $result[] = $chunk;
            $chunk = [];
        }
    }

    if (!empty($chunk)) {
        $result[] = $chunk;
    }

    return $result;
}

var_dump(chunkArray([1, 2, 3, 4, 5], 2));
