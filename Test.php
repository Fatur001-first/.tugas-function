<?php
function jumlah(): void {
    echo"saya memiliki apel ";
}

function pengurangan($angka1,$angka2): int{
    return $angka1 + $angka2;

}
jumlah();
echo "hasil:";
echo pengurangan( 8,2);
?>