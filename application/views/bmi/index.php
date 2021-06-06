<div class="col-md-12">
    <h3>Daftar BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th><th>Tanggal Periksa</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Berat</th><th>Tinggi</th><th>BMI</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=0;
            foreach($list_bmipasien as $bmi){
            ?>
            <tr>
                <td><?=$nomor+1?></td>
                <td><?=$bmi->tanggal?></td>
                <td><?=$list_pasien[$nomor]->kode?></td>
                <td><?=$list_pasien[$nomor]->nama?></td>
                <td><?=$list_pasien[$nomor]->gender?></td>
                <td><?=$list_bmi[$nomor]->berat?></td>
                <td><?=$list_bmi[$nomor]->tinggi?></td>
                <td><?=$list_bmi[$nomor]->nilaiBMI()?></td>
                <td><?=$list_bmi[$nomor]->statusBMI()?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>