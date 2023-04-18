# 5 - MySQL (17/04/2023)

# Notas

- Motor de base de datos, es como un intermediario entre la forma de guardar los datos y el usuario
- MySQL es motor de base de datos relacional
- Para hablar con el motor hay un estándar. En el caso de bd relacionales es SQL
- SQL → Structured Query Language
- DDL →
- ANSI es un estándar para SQL que funciona en todos los motores de bd
- Las claves en una tabla a parte

# Diferencia entre isnull, isset, isnumeric e isempty

- isnull chequea si es null
- isset chequea si la variable se usó
- isempty chequea si es vacío
- isnumeric chequea si es un numero

# PhpMyAdmin

- Puedo definir el motor de almacenamiento por tabla según me convenga o necesite
- InnoDB graba mas rápido
- MyISAM lee mas rápido

# Conexión a DB

- Necesito mínimamente Usuario, Clave, Puerto, nombreDB = null, IP)
- Método fetch_assoc devuelve un array asociativo de la consulta y trae el primer resultado, cada vez que lo ejecuta trae el siguiente

# Generando conexión y consultas

```php
$db = new mysqli("localhost:3307", "root", "", "users");
echo $db -> connect_errno;
echo "<br>";
$sql = "SELECT idusuario, nick, nombre, clave FROM usuario";

$resultado = $db->query($sql);
$filas = $resultado->fetch_assoc();
```

### Ejemplo de consulta dinámica

La siguiente consulta funciona pero es fácilmente hackeable mediante SQL Injection

```php
$sql = "SELECT idusuario, nick, nombre, clave FROM usuario WHERE nick = '$user' AND clave = '$pw'";
```

### Iterar resultado con fetch assoc y while

```php
while( $fila = $resultado->fetch_assoc() ) {
	echo "Nick: " . $fila["nick"] . "<br>";
	echo "Nombre: " . $fila["nombre"] . "<br>";
}
```