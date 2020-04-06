<?php
include 'koneksi.php';
    $sql = "SELECT * FROM siswa"; 

    $res = mysqli_query($koneksi, $sql);

    $nilai = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $siswa[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row at-4">
    <div class="col-md">
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i>Data Siswa</h2>
  </div>
  <div class="card-body" style="background-color: #008B8B;">
  <table class="table table-striped">
  <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>                  
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nilai Web</th>
                            <th scope="col">Nilai PBO</th>
                            <th scope="col">Nilai Basdat</th>
                            <th scope="col">Nilai Desain</th>
                            <th scope="col">Nilai Progdas</th>
                            <th scope="col">Nilai Rata - rata</th>
                            <th scope="col">Predikat Nilai</th>
                            <th scope="col">Keterangan</th>             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $s ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $s['nis'] ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['jurusan'] ?></td>
                            <td><?= $s['kelas'] ?></td>
                            <td><?= $s['alamat'] ?></td>
                            <td><?= $s['nilai_matpel_web'] ?></td>
                            <td><?= $s['nilai_matpel_pbo'] ?></td>
                            <td><?= $s['nilai_matpel_basdat'] ?></td>
                            <td><?= $s['nilai_matpel_desain'] ?></td>
                            <td><?= $s['nilai_matpel_progdas'] ?></td>
                            <td><?= $s['nilai_rata_rata'] ?></td>
                            <td><?= $s['predikat_nilai'] ?></td>
                            <td><?= $s['keterangan'] ?></td>                           
                        </tr>    
    <?php
        $no++;
    }
    ?>
</table>
    
    </div>
</div>

<?php
include '../aset/footer.php';
?>