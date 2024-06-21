<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password1 = $_POST['contrasena1'];
    $password2 = $_POST['contrasena2'];

    if ($password1 === $password2) {
        echo "<H1>Las contraseñas coinciden correctamente</H1>";
    } else {
        echo "<H1>las contraseñas no cionciden</H1>";
    }
}
?>