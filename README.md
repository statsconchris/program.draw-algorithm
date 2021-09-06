## draw.algorithm : Un código PHP para obtener el sorteo del Mundial de fútbol
Para ver el funcionamiento de este código y su análisis respectivo, ir al artículo: [nepy.pe/en/draw.algorithm.](http://www.nepy.pe/es/programacion/web/algoritmo-en-php-para-simular-el-sorteo-del-mundial-de-futbol/) 

Hay dos formas de usar este código:
1. Website
2. Wordpress

### Website

Descargar el archivo `algoritmo_FIFA.php` y listo.

### Wordpress

1. Copiar el siguiente código en 'functions.php' ubicado en tu editor de tema en Wordpress,
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
o descargar el archivo .zip insert-php. Extraerlo y guardarlo en wp-content/plugins para luego activarlo desde la ventana de plugins en el administrador de Wordpress.

2. Copiar el código dado en `algorithm_FIFA_WP.php` en una entrada de Wordpress. Este archivo, en contraste al archivo algoritmo_FIFA.php, reemplaza las etiquetas PHP de entrada y salida por los códigos cortos [insert_php] y [/insert_php], respectivamente. 

