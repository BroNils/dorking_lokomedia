<?php
set_time_limit(0);
error_reporting(0);
$version = "4.0"; //DON'T TOUCH THIS !
$versibaru = "n";
$option = $argv[1];
$optional = $argv[2];
$optional2 = $argv[3]; //DEV
$norand = rand();
$banner = '
  [+] ========================================== [+]
         Bot Dorking Lokomedia With ReverseIP
      Original code by: zafk1el ( yuzuriha inori )
                Re-code by: GoogleX
  [+] ========================================== [+]
';
$commandlist = '
  [+] ========================================== [+]
                     Option List
  [+] ========================================== [+]
  
  
[]=> -r (Dorking sesuai range IP tertentu)
  -Contoh: 
   php re-loko.php -r 127.0.0.1-127.0.0.255
  [!] Max Range IP: 255

[]=> -d (Dorking sesuai IP yang sudah ditentukan)
  -Contoh:
   php re-loko.php -d ip:127.0.0.1

Credit: G_Bl0k Security Team
';
if(!$option){}else{
echo $banner;
print "Greetz: \n- IndoXploit \n- Mr.MaGnoM \n- LinuxSec \n- G_Bl0k Security Team \n- PringSewuDev \n- StupidC0deFamily \n- And Everyone\n";
echo "\n\nTekan Enter Untuk Lanjut !";$entercoy=trim(fgets(STDIN,1024));
}
//$zh = "zafk1el"; // zone-h nick
/*---------------------------*/
function getsource($url,$post=null) {
		$ch = curl_init($url);
		if($post != null) {
	 	 	curl_setopt($ch, CURLOPT_POST, true);
		  	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
		  	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		  	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		  	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		  	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		return curl_exec($ch);
		  	curl_close($ch);
	}
function githubraw($url){
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
	return $data;
}

$get_update = githubraw('https://raw.githubusercontent.com/GoogleX133/dorking_lokomedia/master/ver.txt');
if($get_update==null){
	$get_update = $version;
} else if($version!=$get_update){
	$versibaru = "y";
} else {}

if($versibaru=="y"){
	echo "\n\nVersi Baru Tersedia !\n";
}
if($option=="-r"){
	echo "\nMasukan RangeIP: \n";$rangeip=trim(fgets(STDIN,1024));
$pecah_range = explode("-",$rangeip);
$range_cek = array();
foreach($pecah_range as $prange){
	$pecah_ip = explode(".",$prange);
	$range_cek[] = end($pecah_ip);
}
$real_range = range($range_cek[0], $range_cek[1]);
foreach($real_range as $r_range){
	$dork = $pecah_ip[0].".".$pecah_ip[1].".".$pecah_ip[2].".".$r_range;
	$dodo = "ip:".$dork;
	//$pecah_dork = explode(":",$drange);
//$nama_dork = end($pecah_dork);
$do=urlencode($dodo);
        //$ip="200.58.111.34";
        $npage = 1;
        $npages = 30000;
        $allLinks = array();
        $lll = array();
        while($npage <= $npages) {
            $x = getsource("http://www.bing.com/search?q=".$do."&first=" . $npage."&FORM=PERE4");
            if ($x) {
                preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
                foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
                $npage = $npage + 10;
                if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
            } else break;
        }
        $URLs = array();
        foreach($allLinks as $url){
            $exp = explode("/", $url);
            $URLs[] = $exp[2];
        }
        $array = array_filter($URLs);
        $array = array_unique($array);
        $sss=count(array_unique($array));
                echo"\nTarget => ".$sss." Situs Pada ".$dork;
 
        foreach ($array as $domain) {
		$_SESSION[$domain] = "1";	
		// set var all site + path to x
		$domain1 = "http://$domain"; // URL TARGET
		$ada = 0;
		$gkada = 0;
		$loko_cek = array(
		$domain1."/wp-admin",
		$domain1."/wp-content",
		$domain1."/wp-login.php",
		$domain1."/wp-config.php",
		$domain1."/media.php",
		$domain1."/downlot.php",
		$domain1."/downloat.php",
		$domain1."/download.php",
		$domain1."/berita-1-.html",
		$domain1."/produk-1-.html",
		$domain1."/sk-1-.html",
		$domain1."/play-1-.html",
		$domain1."/galeri-1-.html",
		$domain1."/agenda-1-.html",
		$domain1."/statis-1-.html",
		$domain1."/artikel-1-.html",
		$domain1."/hasil-poling.html",
		$domain1."/profil-kami.html",
		$domain1."/hubungi-kami.html",
		$domain1."/semua-berita.html",
		$domain1."/semua-agenda.html",
		$domain1."/semua-download.html",
		$domain1."/semua-artikel.html",
		$domain1."/arsipberita.php",
		$domain1."/getarticle.php",
		$domain1."/dina_meta1.php",
		$domain1."/dina_meta2.php",
		$domain1."/dina_titel.php",
		$domain1."/simpankomentar.php",
		$domain1."/simpanshoutbox.php",
		$domain1."/aksi.php",
		$domain1."/config/fungsi_indotgl.php",
		$domain1."/config/koneksi.php",
		$domain1."/config/fungsi_seo.php",
		$domain1."/foto_banner/",
		$domain1."/foto_produk/",
		$domain1."/foto_berita/",
		$domain1."/foto_info/",
		$domain1."/foto_blog/",
		$domain1."/mobile_device_detect.php",
		$domain1."/banner.php",
		$domain1."/galeri.php",
		$domain1."/tinymcpuk/",
		$domain1."/kanan.php",
		$domain1."/kiri.php",
		$domain1."/tengah.php"
		);
echo "\nChecking $domain1\n";
    foreach($loko_cek as $loko){
		echo "  => ".$loko." ";
		$handle = curl_init($loko);
		curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

		/* Get the HTML or whatever is linked in $url. */
		$response = curl_exec($handle);

		/* Check for 404 (file not found). */
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		if($httpCode == 404) {
			echo "(404 Not Found)\n";
			$gkada++;
		} else if($httpCode == 500){
			echo "(500 Internal Error)\n";
			$gkada++;
		} else if($httpCode == 200) {
			if($loko==$domain1."/wp-admin"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-content"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-login.php"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-config.php"){
				echo "(WordPress) *SKIP*\n";
				break;
			}
		    echo "(200 OK)\n";
			$txt = $loko." (200 OK)\n";
            $myfile = file_put_contents("loko".$norand.".txt", $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
		    $ada++;
		} else {
			echo "(Error, Tidak Diketahui)\n";
			$gkada++;
		}
		curl_close($handle);
	}
	$array_akhir = end($array);
	if($array_akhir==$domain){
		echo "\n\n\n\n\n\n\nSelesai boss, hasilnya ada di loko".$norand.".txt\n\nG_Bl0k Security Team ^_^";
		if($ada>0){
			$txt = "\n\nIP->".$dork;
			$myfile = file_put_contents("loko".$norand.".txt", $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
		}
	}
		}
}
} else if($option=="-d"){
	if($optional==null){
	    echo "\nMasukan Dork: \n";$optional=trim(fgets(STDIN,1024));
    }
	$pecah_dork = explode(":",$optional);
$nama_dork = end($pecah_dork);
$do=urlencode($optional);
        //$ip="200.58.111.34";
        $npage = 1;
        $npages = 30000;
        $allLinks = array();
        $lll = array();
        while($npage <= $npages) {
            $x = getsource("http://www.bing.com/search?q=".$do."&first=" . $npage."&FORM=PERE4");
            if ($x) {
                preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
                foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
                $npage = $npage + 10;
                if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
            } else break;
        }
        $URLs = array();
        foreach($allLinks as $url){
            $exp = explode("/", $url);
            $URLs[] = $exp[2];
        }
        $array = array_filter($URLs);
        $array = array_unique($array);
        $sss=count(array_unique($array));
                echo"\nTarget => ".$sss." Situs Pada ".$nama_dork;
 
        foreach ($array as $domain) {
		$_SESSION[$domain] = "1";	
		// set var all site + path to x
		$domain1 = "http://$domain"; // URL TARGET
		$ada = 0;
		$gkada = 0;
		$loko_cek = array(
		$domain1."/wp-admin",
		$domain1."/wp-content",
		$domain1."/wp-login.php",
		$domain1."/wp-config.php",
		$domain1."/media.php",
		$domain1."/downlot.php",
		$domain1."/downloat.php",
		$domain1."/download.php",
		$domain1."/berita-1-.html",
		$domain1."/produk-1-.html",
		$domain1."/sk-1-.html",
		$domain1."/play-1-.html",
		$domain1."/galeri-1-.html",
		$domain1."/agenda-1-.html",
		$domain1."/statis-1-.html",
		$domain1."/artikel-1-.html",
		$domain1."/hasil-poling.html",
		$domain1."/profil-kami.html",
		$domain1."/hubungi-kami.html",
		$domain1."/semua-berita.html",
		$domain1."/semua-agenda.html",
		$domain1."/semua-download.html",
		$domain1."/semua-artikel.html",
		$domain1."/arsipberita.php",
		$domain1."/getarticle.php",
		$domain1."/dina_meta1.php",
		$domain1."/dina_meta2.php",
		$domain1."/dina_titel.php",
		$domain1."/simpankomentar.php",
		$domain1."/simpanshoutbox.php",
		$domain1."/aksi.php",
		$domain1."/config/fungsi_indotgl.php",
		$domain1."/config/koneksi.php",
		$domain1."/config/fungsi_seo.php",
		$domain1."/foto_banner/",
		$domain1."/foto_produk/",
		$domain1."/foto_berita/",
		$domain1."/foto_info/",
		$domain1."/foto_blog/",
		$domain1."/mobile_device_detect.php",
		$domain1."/banner.php",
		$domain1."/galeri.php",
		$domain1."/tinymcpuk/",
		$domain1."/kanan.php",
		$domain1."/kiri.php",
		$domain1."/tengah.php"
		);
echo "\nChecking $domain1\n";
    foreach($loko_cek as $loko){
		echo "  => ".$loko." ";
		$handle = curl_init($loko);
		curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

		/* Get the HTML or whatever is linked in $url. */
		$response = curl_exec($handle);

		/* Check for 404 (file not found). */
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		if($httpCode == 404) {
			echo "(404 Not Found)\n";
			$gkada++;
		} else if($httpCode == 500){
			echo "(500 Internal Error)\n";
			$gkada++;
		} else if($httpCode == 200) {
			if($loko==$domain1."/wp-admin"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-content"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-login.php"){
				echo "(WordPress) *SKIP*\n";
				break;
			} else if($loko==$domain1."/wp-config.php"){
				echo "(WordPress) *SKIP*\n";
				break;
			}
		    echo "(200 OK)\n";
			$txt = $loko." (200 OK)\n";
            $myfile = file_put_contents("loko".$norand.".txt", $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
		    $ada++;
		} else {
			echo "(Error, Tidak Diketahui)\n";
			$gkada++;
		}
		curl_close($handle);
	}
	$array_akhir = end($array);
	if($array_akhir==$domain){
		echo "\n\n\n\n\n\n\nSelesai boss, hasilnya ada di loko".$norand.".txt\n\nG_Bl0k Security Team ^_^";
		if($ada>0){
			$txt = "\n\nIP->".$nama_dork;
			$myfile = file_put_contents("loko".$norand.".txt", $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
		}
	}
		}
} else {echo $commandlist;}
?>
