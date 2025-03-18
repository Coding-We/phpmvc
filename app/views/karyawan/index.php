<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Daftar Karyawan</h1>
            <!-- Button trigger modal -->

            <div class="flash-data" data-flashdata=""><?= Flasher::flash(); ?></div>

            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Karyawan
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['karyawan'] as $karyawan) : ?>
                        <tr>
                            <th scope="row"><?= $karyawan['id']; ?></th>
                            <td><?= $karyawan['nama']; ?></td>
                            <td><?= $karyawan['jabatan']; ?></td>
                            <td><?= $karyawan['umur']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/karyawan/detail/<?= $karyawan['id']; ?>" class="btn btn-success float-right ml-2">Detail</a>
                
                                <a href="<?= BASEURL; ?>/karyawan/ubah/<?= $karyawan['id']; ?>" class="btn btn-warning float-right ml-2" data-bs-toggle="modal" data-bs-target="#UbahexampleModal" >Ubah</a>

                                <a href="<?= BASEURL; ?>/karyawan/hapus/<?= $karyawan['id']; ?>" class="btn btn-danger float-right ml-2" onclick="return confirm('Yakin Dek?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="fromModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="fromModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="<?= BASEURL; ?>Karyawan/tambah" method="post">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="UbahexampleModal" tabindex="-1" aria-labelledby="UbahexampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="UbahexampleModalLabel">Ubah Data Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="<?= BASEURL; ?>Karyawan/ubah" method="post">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['karyawan']['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data['karyawan']['jabatan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" value="<?= $data['karyawan']['umur']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
</div>


