<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
</head>
<script>
  $( function() {
    $( "#tanggal[]" ).datepicker({
         format : "yyyy-mm-dd",


    });
  } );
  </script>

<body>
	<div class="container">
     <form role="form"  action='simpan_tagihan.php' method='POST'> 
<?php	
  $periode = $_POST['periode'];
      $batas_bayar = $_POST['batas_bayar'];
      $tahun = $_POST['tahun'];
      $query="select s.nis, s.nama, s.kelas, p.jumlah_spp, s.id_pegawai
						from siswa s, spp p
						where s.tahun_masuk=p.tahun_masuk";
  
  
  
     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Tahun</th>
                                        <th>Periode Pembayaran</th>
                                        <th>Batas Pembayaran</th>
                                        <th>Jumlah Bayar</th>
									                    <th>Tanggal Bayar</th>
                                        <th>Status</th>
                                        <th>Id Pegawai</th>
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                    <tr class='odd gradeX'>
                                    <td><input type='text' class='form-control' name = 'nis[]' value='{$data['nis']}' readonly  ></td>
                                    <td>".$data['nama']."</td>
                                        <td>".$data['kelas']."</td>
                                         <td><input type='text' class='form-control' name = 'tahun[]' value='$tahun' readonly  ></td>
                                            <td><input type='text' class='form-control' name = 'periode[]' value='$periode' readonly  ></td>
											
                                                 <td><input type='text' class='form-control' name = 'batas_bayar[]' value='$batas_bayar' readonly  ></td>
												                                  <td>"."Rp".$data['jumlah_spp']."</td>
                                                        
                                                          <td> <input class='form-control' type='date' name='tgl_bayar[]'>    </td>
                                                                    <td>  <select name='status[]' class='form-control'>
                                                                            <option value='belum'>Belum Bayar</option>
                                                                            <option value='Lunas'>Lunas</option>
                                                                    
                                                                                    </select>
                                                                </td>
                                                                <td><input type='text' class='form-control' name = 'id_pegawai' value='{$data['id_pegawai']}' readonly  ></td>
                                </tbody>";
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
               

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-primary">reset</button>
    </div>
  </div>
</form>


  
	</div>

</body>
</html>