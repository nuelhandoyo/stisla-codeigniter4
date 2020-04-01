<?php
if (!function_exists('monefy')) {
	function monefy($text = "", $is_decimal = TRUE)
	{
		if ($is_decimal) {
			return number_format($text, 2, ',', '.');
		}
		return number_format($text, 0, ',', '.');
	}
}

if (!function_exists('unmonefy')) {
	function unmonefy($string)
	{
		$string = str_replace('.', '', $string);
		return str_replace(',', '.', $string);
	}
}

if (!function_exists('trim_array')) {
	function trim_array($data)
	{
		foreach ($data as $index => $item) {
			if (empty($item) && $item !== '0') {
				unset($data[$index]);
			}
		}
		return $data;
	}
}

if (!function_exists('zerofy')) {
	function zerofy($string, $digit = 2)
	{
		return str_pad($string, $digit, '0', STR_PAD_LEFT);
	}
}

if (!function_exists('datify')) {
	function datify($string, $format = 'd-m-Y')
	{
		return date($format, strtotime($string));
	}
}

if (!function_exists('uniqchar')) {
	function uniqchar($len = 4)
	{
		$char = 'abcdefghjklmnpqrstuvwxyz123456789';
		$max  = strlen($char) - 1;

		$string = '';
		for ($i = 0; $i < $len; $i++) {
			$string .= $char[mt_rand(0, $max)];
		}
		return $string;
	}
}

if (!function_exists('dump')) {
	function dump($array = array())
	{
		echo '<pre>';
		print_r($array);
		echo '</pre>';
		die();
	}
}

if (!function_exists('img_compress')) {
	function img_compress($source, $destination, $quality, $replace = FALSE)
	{

		$info = getimagesize($source);

		if ($info['mime'] == 'image/jpeg')
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif')
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png')
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		if ($replace) {
			unlink($source);
		}

		return $destination;
	}

	if (!function_exists('time_ago')) {
		function time_ago($datetime)
		{
			$since = time() - strtotime($datetime);
			$chunks = array(
				array(60 * 60 * 24, 'hari'),
				array(60 * 60, 'jam'),
				array(60, 'menit'),
				array(1, 'detik')
			);

			for ($i = 0; $i < count($chunks); $i++) {
				$seconds = $chunks[$i][0];
				$name = $chunks[$i][1];
				if (($count = floor($since / $seconds)) != 0) {
					break;
				}
			}

			$print = ($count <= 31) ? "$count {$name} lalu" : datify($datetime, 'd/m/Y, h:i');
			return $print;
		}
	}

	if(!function_exists('show_404')) {
		function show_404()
		{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
