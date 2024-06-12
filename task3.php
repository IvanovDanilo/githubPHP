<?php
function reformatText($text) {
    // Видалити пробіли, знаки пунктуації та числа
    $cleanedText = preg_replace('/[\s\d\pP]/u', '', $text);

    // Чередування великих та маленьких літер для багатобайтових символів
    $result = '';
    $upper = true;
    $length = mb_strlen($cleanedText);
    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($cleanedText, $i, 1);
        if ($upper) {
            $result .= mb_strtoupper($char);
        } else {
            $result .= mb_strtolower($char);
        }
        $upper = !$upper;
    }

    return $result;
}

// Приклад використання функції
$inputText = "Це приклад тексту, який містить 200 слів. Пробіли, знаки пунктуації, числа - все це буде видалено!";
echo reformatText($inputText);
?>


