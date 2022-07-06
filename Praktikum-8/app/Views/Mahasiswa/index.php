<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Daftar Mahasiswa</h1>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach($list_mhs as $mhs):
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $mhs->nim?></td>
      <td><?= $mhs->nama?></td>
      <td><?= $mhs->ipk?></td>
      <td><?= $mhs->predikat()?></td>
    </tr>
  </tbody>
  <?php
    $no++;
    endforeach;
  ?>
    </table>
    </div>
</body>
</html>