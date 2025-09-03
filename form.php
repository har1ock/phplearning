<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "<p>Привіт, $name!</p>";
}
?>

<form method = "post">
    <input type="text" name="name" placeholder="Введітьь ім'я">
    <button type="submit">Відправити</button>
</form>