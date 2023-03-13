<h1>Mahasiswa</h1>
<row>
  <col>
  <?php foreach ($data['mahasiswa'] as $key => $mahasiswa) : ?>
    <ul>
      <?php foreach ($mahasiswa as $key => $data) : ?>
        <li><?= $key . ' : ' . $data ?></li>
      <?php endforeach ?>
      <li>
        <a href="<?= BASEURL . '/mahasiswa/show/' . $mahasiswa['id'] ?>">
          detail
        </a>
      </li>
    </ul>
  <?php endforeach ?>
  </col>
</row>