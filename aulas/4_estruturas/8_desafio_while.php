<?php
$itens = ['banana', 'uva', 'pera', 'maca', 'manga'];
$i = 0;

echo "<ul>";

while ($i < sizeof($itens)) {
	echo "<li>$itens[$i]</li>";
	$i++;
}

echo "</ul>";

/*
 * <ul>
	 *<li>nome fruta</li>
	 * <li>nome fruta</li>
	 * <li>nome fruta</li>
	 * <li>nome fruta</li>
	 * <li>nome fruta</li>
   </ul>
 */
