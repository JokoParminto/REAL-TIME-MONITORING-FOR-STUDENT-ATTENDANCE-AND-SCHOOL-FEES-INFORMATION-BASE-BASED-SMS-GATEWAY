<?php
	include("header.php");

?>
               
                <script>




                function getState(kelas) {
                    $.ajax({
                    type: "POST",
                    url: "tabel_presensi.php",
                    data:{kelas:kelas},
                    success: function(data){
                        $("#div1").html(data);
                          
                    }
                    });
                }


</script>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
</head>
<body>
	<div class="container" >

<div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <select id="kelas" class="form-control" name="tahun_masuk" onChange="getState(this.value);">
         						<option>Pilih Kelas</option>
                                                    <?php
                                                         $query = ("select * from siswa group by kelas");
                                                         $connect =mysqli_query($connect, $query);
                                                            while ($data=mysqli_fetch_assoc($connect)){
                                                            echo "<option value='{$data['kelas']}'>{$data['kelas']}</option>";}?>
                                                </select>    

      </div>
						<div class="panel-body" id="div1">
                           
                        </div>

	</div>

</body>
</html>