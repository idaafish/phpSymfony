# Ejemplo de envío de datos de un formulario

Tenemos un fichero *index.html*:
```html 
    <!DOCTYPE html>
    <html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="procesar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
```

Y tenemos el fichero *procesar.php*:
```php
    <?php
    //Verificamos si el método de solicitud es POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        // Aquí puedes realizar cualquier acción con los datos recibidos
        // Por ejemplo, guardarlos en una base de datos, enviar un correo, etc.

        echo "Nombre: " . $nombre . "<br>";
        echo "Email: " . $email;
    }
    ?>
```
