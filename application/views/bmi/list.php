<div class="col-md-12">
    <h3>List BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status BMI</th>
                <th>Catatan</th>
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
                <td>'.$patien->tanggal.'</td>
                <td>'.$patien->berat.'</td>
                <td>'.$patien->tinggi.'</td>
                <td>'.$patien->bmi.'</td>
                <td>'.$patien->status_bmi.'</td>
                <td>'.$patien->catatan.'</td>
                <td><a href="'.base_url().'index.php/bmi/detail/'
                .$patien->id.'">view</a></td>
                </tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>