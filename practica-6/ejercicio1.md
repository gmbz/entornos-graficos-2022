Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función 
> mysqli_connect()

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: 
> $hostname, $nombreUsuario, $password

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
> mysqli_select_db()

Esta función debe pasar como parámetro
> $nombreConexión, nombreBaseDatos

La función mysqli_query () se utiliza para
> ejecutar una consulta a la base de datos

y requiere como parámetros 
> $nombreConexion, $query

La cláusula or die() se utiliza para 
> Capturar un error

y la función mysqli_error () se puede usar para
> Obtener el último mensaje de error para la llamada más
reciente a una función de MySQLi que puede haberse
ejecutado correctamente o haber fallado

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo `$vResult`, y a continuación se puede ejecutar el siguiente código (explicarlo):

```
<?php
// se obtienen los resultados de una fila del result de la consulta realizada y 
// se guardan en una variable, si no hay datos sale del bucle
while ($fila = mysqli_fetch_array($vResultado)) 
{
?>
<tr>
    // se muestran los datos de la columna 1, 2 y 3
    <td><?php echo ($fila[0]); ?></td>
    <td><?php echo ($fila[1]); ?></td>
    <td><?php echo ($fila[2']); ?></td>
</tr>   
<tr>
    <td colspan="5">
<?php
}
// se liberan los resultados de la consulta
mysqli_free_result($vResultado); 

// se cierra la conexcion a la db
mysqli_close($link);
?>
 
```