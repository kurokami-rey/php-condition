<?php
echo 'harga jajan di sebuah toko' ;
echo "<br>" ;
echo 'hasil akan berubah sesuai input di $harga' ;
echo "<br>" ;
echo 'hasil : ' ;
echo "<br>" ;
$harga = 1000 ;
if ($harga > 4000){
	echo 'saya tidak beli' ;
}
else if ($harga >2000) {
	echo 'saya tawar' ;
}else{
	echo 'saya beli' ;
}
?>
