<?php
$kalimat = "Nvidia dikabarkan akan mengurangi produksi kartu grafis lamanya untuk bisa meningkatkan volume produksi lini kartu grafis terbarunya, RTX 3000. Dilansir Techspot, Selasa, hal ini diketahui dari postingan di sebuah forum Board Channel, yang merupakan forum tertutup yang berisi distributor dan direksi rekanan pembuat kartu grafis. Dalam sebuah postingan di forum tersebut diketahui kalau Nvidia mengirimkan pemberitahuan pada perusahaan pembuat kartu grafis kalau mereka akan mengurangi pasokan chip RTX 2060 sampai setengahnya mulai bulan Juni ini.";

$kata = explode(" ", $kalimat);
$jumlah_kata = count($kata);
echo $kalimat;
echo "<br/>";
echo "<br/>";
echo "banyak kalimat = ".$jumlah_kata;
?>
<br/>
<br/>
<?php echo "PENCARIAN" ?>
<form action="" method="get">
  <input type="text" name="keyword" autofocus placeholder="masukkan kalimat..." autocomplete="off">
  <button type="submit" name="cari">Cari</button>
</form>

<?php
if (isset($_GET["cari"])) {
  $count = 0;
  foreach($kata as $k) {
    if (stristr($k, $_GET["keyword"])) {
      $count += 1;
    }
  }

  echo $_GET["keyword"]." : ".$count;
}
?>
<br/>
<br/>
<?php
sort($kata);
echo implode(" ",$kata);
?>
