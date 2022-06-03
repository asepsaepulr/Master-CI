<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

function my_number_format($number){
	if ($number == '') $number = 0;
	return number_format($number, 2, '.', ',');
}

function strip_comma($text){
	return str_replace(',', '', $text);
}

function strip_titik($text){
	return str_replace('.', '', $text);
}

function excel_header($filename){
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=$filename");
	header("Pragma: no-cache");
	header("Expires: 0");
}

function newline(){
	echo "<br />";
}

function tab(){
	echo "\t";
}

function options($src, $id, $ref_val, $text_field){
	$options = '';
	foreach ($src->result() as $row) {
		$opt_value	= $row->$id;
		$text_value	= $row->$text_field;
		
		if ($row->$id == $ref_val) {
			$options .= '<option value="'.$opt_value.'" selected>'.$text_value.'</option>';
		}
		else {
			$options .= '<option value="'.$opt_value.'">'.$text_value.'</option>';
		}
	}
	return $options;
}

function no_slip(){
	$CI 	=& get_instance();			
	$reg 	= "";
	
	$CI->db->select('id');
	$CI->db->from('transaksi_gaji');
	$CI->db->order_by('id', 'desc');
	$CI->db->limit(1);
	$q_reg = $CI->db->get();
	
	if ($q_reg->num_rows()>0) {
		foreach($q_reg->result() as $row){
			$reg = $row->id;
		}
		$reg = substr($reg,8);
		$reg = $reg+1;
		
		if (strlen($reg)==1){$reg='000'.$reg;} 
		elseif(strlen($reg)==2){$reg='00'.$reg;}
		elseif(strlen($reg)==3){$reg='0'.$reg;}
		else {$reg=$reg;}
		
		$reg=date("y").date("m").date("d").$reg;
	} 
	else{
		$reg=date("y").date("m").date("d").'0001';
	}
	return $reg;
}

function tgl_indo($tgl){
	$tanggal = substr($tgl,8,2);
	$bulan = getBulan(substr($tgl,5,2));
	$tahun = substr($tgl,0,4);

	return $tanggal.' '.$bulan.' '.$tahun;		 
}	

function getBulan($bln){
	switch ($bln){
		case 1: return "Januari"; break;
		case 2:	return "Februari"; break;
		case 3:	return "Maret";	break;
		case 4:	return "April";	break;
		case 5:	return "Mei"; break;
		case 6:	return "Juni"; break;
		case 7:	return "Juli"; break;
		case 8:	return "Agustus"; break;
		case 9:	return "September";	break;
		case 10: return "Oktober"; break;
		case 11: return "November";	break;
		case 12: return "Desember";	break;
	}
}

function tgl_str($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}

function tgl_sql($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}


/************************************ call fungsi JS *************************************************/
function jquery_select2(){
	return
		'<link href="'.base_url('/assets/plugins/select2/select2.css').'" rel="stylesheet" />'."\n".
		'<link href="'.base_url('/assets/plugins/select2/select2.ext.css').'" rel="stylesheet" />'."\n".
		'<script type="text/javascript" src="'.base_url('/assets/plugins/select2/select2.min.js').'"></script>'."\n";
}

function bootstrap_datepicker3(){
	return 
		'<link rel="stylesheet" href="'.base_url('/assets/plugins/bootstrap/css/bootstrap-datepicker3.css').'" type="text/css" />'."\n".
		'<script type="text/javascript" src="'.base_url('/assets/plugins/bootstrap/js/bootstrap-datepicker3.js').'"></script>'."\n";
}

function jquery_slimscrool(){
	return
		'<script type="text/javascript" src="'. base_url('/assets/plugins/slimscroll/jquery.slimscroll.js').'"></script>';
}

function jquery_auto_numeric(){
	return
		'<script type="text/javascript" src="'. base_url('/assets/plugins/auto_numeric/autoNumeric.js').'"></script>';
}

function terbilang($angka){
	$angka = (float)$angka;
	$bilangan = array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas');
	if ($angka < 12) {
		return $bilangan[$angka];
	} else if ($angka < 20) {
		return $bilangan[$angka - 10] . ' Belas';
	} else if ($angka < 100) {
		$hasil_bagi = (int)($angka / 10);
		$hasil_mod = $angka % 10;
		return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
	} else if ($angka < 200) { return sprintf('Seratus %s', terbilang($angka - 100));
	} else if ($angka < 1000) { $hasil_bagi = (int)($angka / 100); $hasil_mod = $angka % 100; return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], terbilang($hasil_mod)));
	} else if ($angka < 2000) { return trim(sprintf('Seribu %s', terbilang($angka - 1000)));
	} else if ($angka < 1000000) { $hasil_bagi = (int)($angka / 1000); $hasil_mod = $angka % 1000; return sprintf('%s Ribu %s', terbilang($hasil_bagi), terbilang($hasil_mod));
	} else if ($angka < 1000000000) { $hasil_bagi = (int)($angka / 1000000); $hasil_mod = $angka % 1000000; return trim(sprintf('%s Juta %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
	} else if ($angka < 1000000000000) { $hasil_bagi = (int)($angka / 1000000000); $hasil_mod = fmod($angka, 1000000000); return trim(sprintf('%s Milyar %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
	} else if ($angka < 1000000000000000) { $hasil_bagi = $angka / 1000000000000; $hasil_mod = fmod($angka, 1000000000000); return trim(sprintf('%s Triliun %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
	} else {
		return 'Data Salah';
	}
}
/************************************ end call fungsi JS *************************************************/


/* End of file purbadian_helper.php */
/* Location: ./application/helpers/purbadian_helper.php */