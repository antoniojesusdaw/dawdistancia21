<?php

/**
 * Método que devuelve un saludo.
 *
 * @author AntonioJesús Fernández Porras
 * @version 1.0
 * @param string $cadena la cadena que queramos
 * @return string $cadena Devolveremos una cadena con un añadido
 * @access private
 */
function mostrarCAdena($cadena)
{

  echo "Hola";
  $cadena = "Hola ".($cadena);
  return $cadena;
}

/**
 * Método que averigua los puntos segun la edad introducida.
 *
 * @author Antonio Jesús Fernández Porras
 * @param integer $edad edad del usuario.
 * @return integer $puntos  puntos que ha recibido el usuario.
 * @version 1.0
 * @access private
*/
function calcularPuntos($edad)
{
  echo "Tu edad es ".$edad;
  $puntos = $edad * 23;
  return $puntos;
}

/**
 * Llamamos a los métodos para su uso.
 * @access public
*/
echo "Tus puntos son :".calcularPuntos(54);
echo "La cadena queda :".mostrarCAdena("amigo");

?>
