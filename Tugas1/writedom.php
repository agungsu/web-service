<?php
$mahasiswa = array();
$mahasiswa [] = array(
'nim' => '1401530037',
'nama' => 'agung',
'alamat' => "ngaliyan",
'progdi' => "Ti"
);
$mahasiswa [] = array(
'nim' => '1401530037',
'nama' => 'agung',
'alamat' => "ngaliyan",
'progdi' => "Ti"
);
 
$doc = new DOMDocument();
$doc->formatOutput = true;
 
$r = $doc->createElement( "mahasiswa" );
$doc->appendChild( $r );
 
foreach( $mahasiswa as $mahasiswa )
{
$b = $doc->createElement( "mahasiswa" );
 
$nama = $doc->createElement( "nama" );
$nama->appendChild(
$doc->createTextNode( $mahasiswa['nama'] )
);
$b->appendChild( $nama );
 
$nim = $doc->createElement( "nim" );
$nim->appendChild(
$doc->createTextNode( $mahasiswa['nim'] )
);
$b->appendChild( $nim );
 
$alamat = $doc->createElement( "alamat" );
$alamat->appendChild(
$doc->createTextNode( $mahasiswa['alamat'] )
);
$b->appendChild( $alamat );
 
 $progdi = $doc->createElement( "progdi" );
$progdi->appendChild(
$doc->createTextNode( $mahasiswa['progdi'] )
);
$b->appendChild( $progdi );

$r->appendChild( $b );
}
 
echo $doc->saveXML();
$doc->save("mahasiswas.xml");
?>