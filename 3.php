<?php
function chunkArray(array $items, int $size): array {
    if ($size <= 0) {
        return [];
    }
    
    $result = [];
    $temp = [];
    $i = 0;
    
    foreach ($items as $item) {
        $temp[] = $item;
        $i++;
        
        if ($i == $size) {
            $result[] = $temp;
            $temp = [];
            $i = 0;
        }
    }
    
    if (!empty($temp)) {
        $result[] = $temp;
    }
    
    return $result;
}

$arr = [1, 2, 3, 4, 5];
print_r(chunkArray($arr, 2));
?>
