<div class="container">
    <div class="row"></div>
        <div class="col-6">
            <h1 class="mt-4">Detail Karyawan</h1>
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Umur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                        <th scope="row"><?= $data['karyawan']['id']; ?></th>
                        <td><?= $data['karyawan']['nama']; ?></td>
                        <td><?= $data['karyawan']['jabatan']; ?></td>
                        <td><?= $data['karyawan']['umur']; ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?= BASEURL; ?>karyawan" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>