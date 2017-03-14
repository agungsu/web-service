<?php
$doc = new DOMDocument();
$doc->load( 'mahasiswas.xml' );
 
$mahasiswa = $doc->getElementsByTagName( "mahasiswas" );
foreach( $mahasiswa as $mahasiswas )
{
$nim = $mahasiswas->getElementsByTagName( "nim" );
$nim = $nim->item(0)->nodeValue;
 
$nama = $mahasiswas->getElementsByTagName( "nama" );
$nama = $nama->item(0)->nodeValue;
 
$alamat = $mahasiswas->getElementsByTagName( "alamat" );
$alamat = $alamat->item(0)->nodeValue;

$progdi = $mahasiswas->getElementsByTagName( "progdi" );
$progdi = $progdi->item(0)->nodeValue;
 
echo "$alamat - $nim - $nama - $progdi\n";
}
?>