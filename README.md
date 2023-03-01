## PHP algorithm to simulate the FIFA World Cup draw
We learn what an algorithm is by defining one that simulates the draw of the FIFA World Cup group stage. Unlike the FIFA draw that uses balls, in this case we use the computer to generate random numbers. The code was developed in PHP.
<hr>

**Instructions**

Two solutions: `Website` and `Wordpress`.

##### 1. Website

Download the file `raffle-fifa.php` and is ready to use.

##### 2. Wordpress

2.1. Copy the following code to `functions.php` page in your Wordpress theme
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
or download the zip file `insert-php`. Unzip it in `wp-content/plugins` and activate it from your Wordpress Dashboard.

2.2 Copy the code given in `raffle-fifa-wp.php` to your Wordpress post. This file, in contrast to `raffle-fifa.php`, replaces the opening and closing PHP tags with the shortcode `[insert_php]` `[/insert_php]` 


**Information**

- To check how the code works, refer to the article: 
  
  [PHP algorithm to simulate the FIFA World Cup draw](https://nepy.pe/article.php?pid=625a92df2393c&lan=en). 










