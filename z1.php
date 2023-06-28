<!DOCTYPE html>
<html>
<head>
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<h1>Суперглобальні змінні PHP</h1>
<table>
    <tr>
        <th>Змінна</th>
        <th>Характеристика</th>
        <th>Значення</th>
    </tr>
    <tr>
        <td>$GLOBALS</td>
        <td>Змінні глобального контексту PHP</td>
        <td><?php var_dump($GLOBALS); ?></td>
    </tr>
    <tr>ц
        <td>$_SERVER</td>
        <td>Інформація про сервер і запит клієнта</td>
        <td><?php var_dump($_SERVER); ?></td>
    </tr>
    <tr>
        <td>$_GET</td>
        <td>Змінні, передані методом GET</td>
        <td><?php var_dump($_GET); ?></td>
    </tr>
    <tr>
        <td>$_POST</td>
        <td>Змінні, передані методом POST</td>
        <td><?php var_dump($_POST); ?></td>
    </tr>
    <tr>
        <td>$_FILES</td>
        <td>Змінні, пов'язані з завантаженням файлів</td>
        <td><?php var_dump($_FILES); ?></td>
    </tr>
    <tr>
        <td>$_COOKIE</td>
        <td>Змінні, збережені в куках</td>
        <td><?php var_dump($_COOKIE); ?></td>
    </tr>
    <tr>
        <td>$_SESSION</td>
        <td>Змінні, збережені в сесії</td>
        <td><?php var_dump($_SESSION); ?></td>
    </tr>
    <tr>
        <td>$_REQUEST</td>
        <td>Змінні, передані методом GET, POST або COOKIE</td>
        <td><?php var_dump($_REQUEST); ?></td>
    </tr>
    <tr>
        <td>$_ENV</td>
        <td>Змінні середовища</td>
        <td><?php var_dump($_ENV); ?></td>
    </tr>
</table>
</body>
</html>
