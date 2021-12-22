<?php
$url = "http://localhost/pwd/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->nim . "<br />";
 echo "Nama : " . $r->nama . "<br />";
 echo "kelas : " . $r->kelas . "<br />";
 echo "Alamat : " . $r->alamat . "<br />";
 echo "kode_matkul : " . $r->kode_matkul . "<br />";
 echo "</p>";
}
