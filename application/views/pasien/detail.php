<h2>Data Pasien #ID : <?=$patien->id?></h2>
<div>
    <table class="table table-striped">
        <tr>
            <td>Kode Pasien</td><td>:</td><td><?=$patien->kode?></td>
        </tr>
        <tr>
            <td>Nama</td><td>:</td><td><?=$patien->nama?></td>
        </tr>
        <tr>
            <td>Gender</td><td>:</td><td><?=$patien->gender?></td>
        </tr>
        <tr>
            <td>Tempat, Tgl Lahir</td><td>:</td>
            <td><?=$patien->tmp_lahir?>, <?=$patien->tgl_lahir?></td>
        </tr>
        <tr>
            <td>Email</td><td>:</td><td><?=$patien->email?></td>
        </tr>
    </table>
</div>