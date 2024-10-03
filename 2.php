<?php
function countLetterA($str) {
    $lowercaseCount = substr_count(strtolower($str), 'a');
    
    if ($lowercaseCount > 0) {
        return "A letra 'a' aparece $lowercaseCount vezes na string.";
    } else {
        return "A letra 'a' não aparece na string.";
    }
}

// Teste com string definida
$str = "Esta é uma string de Exemplo";
echo countLetterA($str);
?>
