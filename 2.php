<?php
function toSnakeCase($input) {
    $result = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if ($char >= 'A' && $char <= 'Z') {
            if ($i > 0) {
                $result .= "_";
            }
            $result .= strtolower($char);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

echo "Введите строку в camelCase: ";
$input = trim(fgets(STDIN));

echo toSnakeCase($input) . "\n";
?>
