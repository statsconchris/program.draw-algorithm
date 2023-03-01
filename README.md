## Algoritmo en PHP para simular el sorteo del Mundial de fútbol
Aprendemos lo que es un algoritmo, definiendo uno que simula el  sorteo de los grupos del Mundial de fútbol. A diferencia del sorteo  de la FIFA que hace uso de bolillas, en este caso utilizamos el ordenador para generar números aleatorios. El código fue desarrollado en PHP.
<hr>

**Instrucciones**

Dos soluciones: `Website` y `Wordpress`.

##### 1. Website

Descargar el archivo `draw-fifa.php` y listo.

##### 2. Wordpress

2.1. Copiar el siguiente código en 'functions.php' ubicado en tu editor de tema en Wordpress,
```markdown
if( ! function_exists('will_bontrager_insert_php') )
{

	function will_bontrager_insert_php($content)
	{
		$will_bontrager_content = $content;
		preg_match_all('!\[insert_php[^\]]*\](.*?)\[/insert_php[^\]]*\]!is',$will_bontrager_content,$will_bontrager_matches);
		$will_bontrager_nummatches = count($will_bontrager_matches[0]);
		for( $will_bontrager_i=0; $will_bontrager_i<$will_bontrager_nummatches; $will_bontrager_i++ )
		{
			ob_start();
			eval($will_bontrager_matches[1][$will_bontrager_i]);
			$will_bontrager_replacement = ob_get_contents();
			ob_clean();
			ob_end_flush();
			$will_bontrager_content = preg_replace('/'.preg_quote($will_bontrager_matches[0][$will_bontrager_i],'/').'/',$will_bontrager_replacement,$will_bontrager_content,1);
		}
		return $will_bontrager_content;
	} # function will_bontrager_insert_php()

	add_filter( 'the_content', 'will_bontrager_insert_php', 9 );

} # if( ! function_exists('will_bontrager_insert_php') )
```
o descargar el archivo .zip `insert-php`. Extraerlo y guardarlo en `wp-content/plugins` para luego activarlo desde la ventana de plugins en el administrador de Wordpress.

2.2 Copiar el código dado en `draw-fifa-wp.php` en una entrada de Wordpress. Este archivo, en contraste al archivo `draw-fifa.php`, reemplaza las etiquetas PHP de entrada y salida por los códigos cortos `[insert_php]` `[/insert_php]`, respectivamente. 


**Información**

- Para ver el funcionamiento del código, ir al artículo: 
  
  [Algoritmo en PHP para simular el sorteo del Mundial de fútbol](https://nepy.pe/article.php?pid=625a92df2393c&lan=es). 
  
  



