<div class="col-md-12">
    <h3>List Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach($patiens as $patien){
            echo'
                <tr>
                <td>'.$nomor.'</td>
                <td>'.$patien->kode.'</td>
                <td>'.$patien->nama.'</td>
                <td>'.$patien->gender.'</td>
                <td>'.$patien->tmp_lahir.'</td>
                <td>'.$patien->tgl_lahir.'</td>
                <td>'.$patien->email.'</td>
                <td><a href="'.base_url().'index.php/pasien/detail/'
                .$patien->id.'">view</a></td>
                </tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>

