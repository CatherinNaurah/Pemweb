<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran Donasi</title>
  <style>
    body {
      background-color: #c9d6ff;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
      font-family: Nunito, sans-serif;
    }

    .pd {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 80px 60px;
    }

    .div-2 {
      border-radius: 20px;
      box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 64px 77px;
      width: 957px;
      max-width: 100%;
    }

    .div-3 {
      text-align: center;
      font-weight: 600;
      font-size: 40px;
    }

    .div-4, .div-6, .div-8, .div-10 {
      margin-top: 44px;
      align-self: start;
    }

    .input-label {
      font-size: 20px;
    }

    .input-field {
      border-radius: 10px;
      border: 1px solid rgba(157, 157, 157, 1);
      width: 100%;
      height: 60px;
      padding: 10px;
      box-sizing: border-box;
      margin-top: 16px;
    }

    .textarea-field {
      border-radius: 10px;
      border: 1px solid rgba(157, 157, 157, 1);
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      margin-top: 16px;
      font-size: 20px;
      height: 100px;
    }

    .div-12 {
      border-radius: 10px;
      background-color: #140962;
      color: #ebd9d9;
      text-align: center;
      font-size: 20px;
      margin-top: 70px;
      width: 500px;
      max-width: 100%;
      padding: 21px 60px;
      cursor: pointer;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .detail-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin-top: 44px;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
  </style>
</head>

<body>
  <div class="pd">
    <div class="div-2">
      <div class="div-3">Pembayaran Donasi</div>
      <form action="index.php?c=Post&m=upload_process" method="POST" enctype="multipart/form-data">
        <div class="div-4">
          <label for="nama_donasi" class="input-label">Nama Donasi</label>
          <input type="text" id="nama_donasi" name="nama_donasi" class="input-field" required>
        </div>
        <div class="div-6">
          <label for="metode_pembayaran" class="input-label">Metode Pembayaran</label>
          <input type="text" id="metode_pembayaran" name="metode_pembayaran" class="input-field" required>
        </div>
        <div class="div-8">
          <label for="jumlah_nominal" class="input-label">Jumlah Nominal</label>
          <input type="number" id="jumlah_nominal" name="jumlah_nominal" class="input-field" required>
        </div>
        <div class="div-10">
          <label for="pesan" class="input-label">Pesan</label>
          <textarea id="pesan" name="pesan" class="textarea-field"></textarea>
        </div>
        <div class="detail-item">
          <label for="upload" class="input-label">Upload Konfirmasi</label>
          <input type="file" name="fileToUpload" id="upload" accept="image/*,.pdf" required />
        </div>
        <button type="submit" class="div-12"><strong>Donasi Sekarang</strong></button>
      </form>
    </div>
  </div>
</body>

</html>
