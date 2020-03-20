<?php

$queryp = "SELECT * FROM laporan_kepesertaan";
$sqlp = mysqli_query($connect, $queryp);
$datap = mysqli_fetch_assoc($sqlp);

// total jumlah
$jml_normal = $datap['jml_normal'];
$jml_cepat = $datap['jml_cepat'];
$jml_meninggal = $datap['jml_meninggal'];
$jml_tunda = $datap['jml_tunda'];
$jml_kurang = $datap['jml_kurang'];
$totalmanfaat = $jml_normal + $jml_cepat + $jml_meninggal + $jml_tunda + $jml_kurang;

// total nilai
$nilai_normal = $datap['nilai_normal'];
$nilai_cepat = $datap['nilai_cepat'];
$nilai_meninggal = $datap['nilai_meninggal'];
$nilai_tunda = $datap['nilai_tunda'];
$nilai_kurang = $datap['nilai_kurang'];
$totalnilai = $nilai_normal + $nilai_cepat + $nilai_meninggal + $nilai_tunda + $nilai_kurang;
 

// $total = "SELECT ($datap (jml_normal + jml_cepat + jml_meninggal + jml_tunda + jml_kurang))";

function tgl_indo($tanggal){
    $bulan = array (
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );
    $pecahkan = explode('-', $tanggal);
     
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

?>
   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/4.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">LAPORAN KEPESERTAAN</h1>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
         <div class="col-md-10">
         <h2 class="column-title">Laporan Kepesertaan Dana Pensiun KARYAWAN PT PAL INDONESIA</h2>
         <font color="black"><p><b>1. Jumlah Peserta</b></p>
         <p>Data Administrasi Peserta Dana Pensiun Karyawan PT PAL INDONESIA</p>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th>Keterangan</th>
				<!-- <th class="text-center"><?php echo tgl_indo($datap['tgl_awal']); ?></th> -->
                <th class="text-center"><?php echo tgl_indo($datap['tgl_akhir']); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><center>1</center></td>
				<td>Jumlah Peserta (Awal Periode)</td>
				<!-- <td><?php echo $datap['jml_awal1']; ?></td> -->
                <td><center><?php echo $datap['jml_akhir1']; ?></center></td>
			</tr>
			<tr>
				<td><center>2</center></td>
				<td>Penambahan Peserta</td>
				<!-- <td><?php echo $datap['tambah_awal']; ?></td> -->
                <td><center><?php echo $datap['tambah_akhir']; ?></center></td>
			</tr>
			<tr>
				<td><center>3</center></td>
				<td>Pengurangan Peserta</td>
				<!-- <td><?php echo $datap['kurang_awal']; ?></td> -->
                <td><center><?php echo $datap['kurang_akhir']; ?></center></td>
			</tr>
			<tr>
				<td><center>4</center></td>
				<td>Jumlah Peserta (Akhir Periode)</td>
				<!-- <td><?php echo $datap['jml_awal2']; ?></td> -->
                <td><center><?php echo $datap['jml_akhir2']; ?></center></td>
			</tr>
		</tbody>
	</table>
      <br>
      <p><b>2. Rincian Pengurangan Peserta</b></p>
         <table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Jenis Pensiun</th>
				<th><center>Jumlah</center></th>
				<!-- <th class="text-center">Nilai Manfaat Pensiun (Rp Miliar)</th>			 -->
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Normal</td>
				<td><center><?php echo $datap['jml_normal']; ?></center></td>
                <!-- <td><?php echo $datap['nilai_normal']; ?></td> -->
			</tr>
			<tr>
				<td>Dipercepat</td>
				<td><center><?php echo $datap['jml_cepat']; ?></center></td>
                <!-- <td><?php echo $datap['nilai_cepat']; ?></td> -->
			</tr>
			<tr>
				<td>Meninggal (Janda/Duda/Anak)</td>
				<td><center><?php echo $datap['jml_meninggal']; ?></center></td>
                <!-- <td><?php echo $datap['nilai_meninggal']; ?></td> -->
			</tr>
			<tr>
				<td>Ditunda</td>
				<td><center><?php echo $datap['jml_tunda']; ?></center></td>
                <!-- <td><?php echo $datap['nilai_tunda']; ?></td> -->
			</tr>
                  <tr>
				<td>Kurang dari 3 tahun</td>
				<td><center><?php echo $datap['jml_kurang']; ?></center></td>
                <!-- <td><?php echo $datap['nilai_kurang']; ?></td> -->
			</tr>
                  <!-- <tr>
				<td><b>Jumlah Manfaat Pensiun</b></td>
				<td><?php echo $totalmanfaat ?></td>
                <td><?php echo $totalnilai ?></td></font>
			</tr> -->
		</tbody>
	</table>

         </div><!-- Main row end -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
	

 