<?php

function format_rupiah($value){
		$hasil_rupiah = number_format($value,0,',','.');
		return $hasil_rupiah;
}

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function get_day($tanggal){
	$date = $tanggal;
	$dates = date('D', strtotime($date));

	$hari 	 = array("Minggu" , "Senin" , "Selasa" , "Rabu" , "Kamis" , "Jumat" , "Sabtu");
	$hari_eng = array("Sun" , "Mon" , "Tue" , "Wed" , "Thu" , "Fri" , "Sat");

	$inc = 0;
	foreach($hari_eng as $days){
		if($dates == $days){
			$index = $inc;
			break;
		}
	$inc++;
	}

	return $hari[$index];
}

function get_week($tanggal){

	$ddate = $tanggal;
	$date = new DateTime($ddate);
	$week = $date->format("W");

	return $week;
}

function slugify($text, string $divider = '-')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

?>