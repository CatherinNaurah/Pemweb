<?php
$nama_donasi = $_GET['nama_donasi'] ?? '';
$metode_pembayaran = $_GET['metode_pembayaran'] ?? '';
$jumlah_nominal = $_GET['jumlah_nominal'] ?? '';
$pesan = $_GET['pesan'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <script>
    function redirect() {
      window.location.href = "index.php?c=Post&m=masukan1_form";
    }
  </script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Donasi</title>
  <style>
    body {
      margin: 0;
      font-family: Nunito, sans-serif;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding-top: 100px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      height: 100%;
      width: 100%;
    }

    .card {
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
      max-width: 900px;
      width: 100%;
      padding: 40px;
      text-align: center;
    }

    .title {
      font-size: 36px;
      font-weight: 600;
      color: #140962;
      margin-bottom: 20px;
    }

    .instruction {
      text-align: justify;
      margin-top: 20px;
      margin-bottom: 60px;
    }

    .instruction ol {
      padding-left: 20px;
    }

    .instruction li {
      margin-bottom: 15px;
      font-size: 18px;
      color: #333;
    }

    .detail-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
      text-align: left;
    }

    .label {
      flex-basis: 30%;
      font-weight: 600;
      color: #140962;
    }

    .value {
      flex-basis: 65%;
      color: #666;
      background-color: #f0f0f0;
      padding: 10px 15px;
      border-radius: 10px;
    }

    .file-input-container {
      flex-basis: 65%;
      display: flex;
      align-items: center;
    }

    .file-input-container input[type="file"] {
      width: 100%;
      padding: 10px;
    }

    .button {
      background-color: #140962;
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 15px 30px;
      margin-top: 40px;
      cursor: pointer;
      font-size: 20px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #120843;
    }

    #instruksi {
      text-align: center;
    }

    .uploaded-image {
      margin-top: 20px;
    }

    .uploaded-image img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="title">Instruksi</div>
      <div class="instruction">
        <p id="instruksi"><strong>Untuk melakukan donasi melalui transfer bank, ikuti langkah-langkah berikut</strong></p>
        <ol>
          <li>Pilih bank yang akan Anda gunakan untuk transfer dan pastikan bank tersebut mendukung transfer ke rekening tujuan donasi.</li>
          <li>Masukkan nomor rekening tujuan donasi yang telah disediakan di halaman ini dan pastikan nomor rekening yang Anda masukkan sudah benar untuk menghindari kesalahan transfer.</li>
          <li>Tentukan jumlah donasi yang ingin Anda berikan dan sesuaikan jumlah donasi dengan kemampuan Anda, dengan jumlah minimum donasi adalah Rp. 15.000.</li>
          <li>Periksa kembali semua informasi yang telah Anda masukkan dan jika sudah benar, lakukan konfirmasi dan lanjutkan dengan proses transfer sesuai dengan prosedur yang berlaku di bank Anda.</li>
        </ol>
      </div>
      <div class="title">Rincian Donasi</div>
      <div class="detail-item">
        <div class="label">Nama Donasi</div>
        <div class="value"><?php echo $nama_donasi; ?></div>
      </div>
      <div class="detail-item">
        <div class="label">Metode Pembayaran</div>
        <div class="value"><?php echo $metode_pembayaran; ?></div>
      </div>
      <div class="detail-item">
        <div class="label">Jumlah Nominal</div>
        <div class="value"><?php echo $jumlah_nominal; ?></div>
      </div>
      <div class="detail-item">
        <div class="label">Pesan</div>
        <div class="value"><?php echo $pesan ?></div>
      </div>
      <?php if (isset($error) && !empty($error)) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
      <?php endif; ?>
      <?php if (isset($success) && !empty($success)) : ?>
        <p style="color: green;"><?php echo htmlspecialchars($success); ?></p>
      <?php endif; ?>

      <button type="submit" class="button" onclick="redirect()">Konfirmasi Donasi</button>


    </div>
  </div>
</body>

</html>