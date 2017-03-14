<?php
$doc = new DOMDocument();
$doc->load( 'mahasiswas.xml');
$xpath = new DOMXPath($doc);
$arts = $xpath->query("/mahasiswas/mahasiswa/nim");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
$arts = $xpath->query("/mahasiswas/mahasiswa/nama");

foreach ($arts as $art)
{
echo $art->nodeValue."";
}
?>
