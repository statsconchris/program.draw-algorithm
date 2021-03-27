## draw.algorithm : A PHP code to obtain the draw of the FIFA World Cup
To check the functionality of this code refer to the article: [nepy.pe/en/draw.algorithm.](http://www.nepy.pe/en/programming/algorithm-in-php-to-set-the-fifa-world-cup-draw/) 

There are two ways to use this code:
1. Website
2. Wordpress

### Website

Download the file `algorithm_FIFA.php` and is ready to use.

### Wordpress

1. Copy the following code to `functions.php` page in your Wordpress theme
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
or download the zip file insert-php. Unzip it in wp-content/plugins and activate it from your Wordpress Dashboard.

2. Copy the code given in `algorithm_FIFA_WP.php` to your Wordpress post. This file, in contrast to algorithm_FIFA.php, replaces the opening and closing PHP tags with the shortcode [insert_php] [/insert_php] 

