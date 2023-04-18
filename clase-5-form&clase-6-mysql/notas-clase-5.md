# 3 - Server Side Scripting con PHP

# Notas

- TP FINAL. Mismo tema para todos
- Las variables no tienen declaración de tipo
- PHP es un lenguaje interpretado (Se parsea, se analiza estructuralmente en tiempo de ejecución). Necesita un servidor que lo procese. Lo que va al navegador es el resultado de ejecutar el código.
- El contenido estático no cambia al momento de pedirlo y el dinámico si, puedo cambiar el resultado, por ejemplo pasando parámetros.

# Ventajas

- Es mas fácil de implementar
- Es independiente de la plataforma (multiplataforma)

# Desventajas

- Es mas lento que un lenguaje compilado
- Mas propenso a errores

# Formas de pasar información del CLIENTE al SERVIDOR

- URL → GET
- Formulario HTML → GET/POST
- Hipervínculo → <a href=”pepe.html”>Ir a</a>
- Imagen → <img src=”pepe.gif”>
- Websocket → **INVESTIGAR** / Lo veremos mas adelante

# Formularios

- En GET - URL tiene máximo 1024 caracteres y es mas fácil debuggear
- En POST - El limite lo define el servidor
- En <form> el enctype define el tipo de encoding
- El application/x-www-form-urlencoded por ejemplo reemplaza los espacios con %20
- El text/plain por ejemplo reemplaza los espacios con un +
- El application/form-data sirve para enviar grandes volúmenes de información, como archivos
- $_SERVER → Cada vez que hago una petición se llena esta variable

# Validaciones

En el Front se valida para mejorar la UX y también para reducir peticiones con errores al servidor. De todas formas, en el servidor también validamos por seguridad.

# URLs

- **Absoluta:** La URL empieza con la “/”
- **Relativa:** No empieza con la “/”

# Código

---

## foreach con PHP

```php
foreach ($_SERVER as $clave => $valor) {
    echo $clave . " - " . $valor . "<br>";
}
```

## Operador ternario

```php
$user = isset($_POST["user"]) ? $_POST["user"] : "Error: No se especifico el usuario";
```

## Redirect y matar la ejecución

```php
// Hago un Redirect (En el servidor)
header("Location: index.php");
// Luego mato la ejecución del script con exit() o die()
exit();
//die();
```