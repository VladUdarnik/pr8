<?php
// Отримання значень з адресного рядка
$a = $_POST['a'];
$b = $_POST['b'];

// Перевірка, чи обидва значення є цілими числами
if (is_numeric($a) && is_numeric($b) && floor($a) == $a && floor($b) == $b) {
    // Виконання математичних операцій
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $a / $b;

    // Виведення результатів
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
} else {
    echo "Помилка: Обидва значення мають бути цілими числами.";
}
?>
