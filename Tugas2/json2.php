    <?php 
    //Koneksi database MySQL
    $koneksi = mysqli_connect("localhost","root","","akademik") 
        or die("Error ".mysqli_error($koneksi));
    
	//Mengambil data pada table dari database MySQL
    $sql = "select * from mahasiswa";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    
	//Membuat array
    $mahasiswa = array();
    while($row =mysqli_fetch_assoc($result))
    {
      $mahasiswa[] = $row;
    }
    
	//Menampilkan konversi data pada tabel mahasiswa ke format JSON
    echo json_encode($mahasiswa);
    
	//close the db connection
    mysqli_close($koneksi);
    ?>