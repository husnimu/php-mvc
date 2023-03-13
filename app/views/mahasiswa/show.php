<h1>Mahasiswa</h1>
<row>
  <col>
  <ul>
    <?php foreach ($data['mahasiswa'] as $mhs) : ?>
      <li>
        <?= $mhs ?>
      </li>
    <?php endforeach; ?>
    <li>
      <a href="<?= BASEURL ?>/mahasiswa">Back</a>
    </li>
  </ul>
  </col>
</row>