<?php 
	set_time_limit(-1);
	$sites=explode("\n",file_get_contents('sites.txt');
	$csv='';
	
	for ($i=0;$i<count($sites)-1;$i++) {
		$sites[$i]=trim($sites[$i]);
		$site=explode(' ',$sites[$i]);
		unset($out);
		$out=get_headers('http://'.$site[0]);
		
		$csv.=$site[0].';';
		for ($j=0;$j<count($out)-1;$j++) {
			$csv.=$out[$j].';';
		}
		$csv.="\n";
	}
	file_put_contents('response.csv',$csv);
	echo 'Open response.csv\n';
?>