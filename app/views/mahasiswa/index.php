<h1>Mahasiswa</h1>
<div class="row">
  <?php Session::flash(); ?>
</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createMahasiswa">
  Tambah Mahasiswa
</button>
<row>
  <col>
  <?php foreach ($data['mahasiswa'] as $key => $mahasiswa) : ?>
    <ul>
      <?php foreach ($mahasiswa as $key => $data) : ?>
        <li><?= $key . ' : ' . $data ?></li>
      <?php endforeach ?>
      <li>
        <a href="<?= BASEURL . 'mahasiswa/show/' . $mahasiswa['id'] ?>">
          detail
        </a>
        <a href="<?= BASEURL . 'mahasiswa/edit/' . $mahasiswa['id'] ?>">
          edit
        </a>
        <a href="<?= BASEURL . 'mahasiswa/delete/' . $mahasiswa['id'] ?>" onclick="return confirm('anda yakin?');">
          delete
        </a>
      </li>
    </ul>
  <?php endforeach ?>
  </col>
</row>

<div class="modal fade" id="createMahasiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createMahasiswaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createMahasiswaLabel">Tambah Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>mahasiswa/create" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama..." name="nama">
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="text" class="form-control" id="nrp" placeholder="NRP..." name="nrp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email..." name="email">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-control" id="jurusan" placeholder="Jurusan..." name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>