<?php
function chunkArray($items, $size) {
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

echo "Введите числа через пробел: ";
$arr_input = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $arr_input));

echo "Введите размер подмассива: ";
$size = (int)trim(fgets(STDIN));

$result = chunkArray($arr, $size);

foreach ($result as $chunk) {
    echo "[" . implode(", ", $chunk) . "]\n";
}
?>
