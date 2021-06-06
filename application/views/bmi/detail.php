<h2>Data Pasien BMI #ID : <?=$patien->id?></h2>
<div>
    <table class="table table-striped">
        <tr>
            <td>Tanggal</td><td>:</td><td><?=$patien->tanggal?></td>
        </tr>
        <tr>
            <td>Berat</td><td>:</td><td><?=$patien->berat?></td>
        </tr>
        <tr>
            <td>Tinggi</td><td>:</td><td><?=$patien->tinggi?></td>
        </tr>
        <tr>
            <td>BMI</td><td>:</td><td><?=$patien->bmi?></td>
        </tr>
        <tr>
            <td>Status BMI</td><td>:</td><td><?=$patien->status_bmi?></td>
        </tr>
        <tr>
            <td>Catatan</td><td>:</td><td><?=$patien->catatan?></td>
        </tr>
    </table>
</div>