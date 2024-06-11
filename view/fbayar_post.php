<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      background-color: #c9d6ff;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    }

    .pd {
      display: flex;
      align-items: center;
      font-size: 20px;
      color: #000;
      font-weight: 400;
      justify-content: center;
      padding: 80px 60px;
    }

    .div-2 {
      border-radius: 20px;
      box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
      background-color: #fff;
      display: flex;
      margin-top: 36px;
      width: 957px;
      max-width: 100%;
      flex-direction: column;
      align-items: center;
      padding: 64px 77px;
      justify-content: center;
    }

    .div-3 {
      text-align: center;
      align-self: center;
      font: 600 40px Nunito, sans-serif;
    }

    .div-4 {
      font-family: Nunito, sans-serif;
      margin-top: 51px;
      align-self: start;
    }

    #isi {
      font-size: 20px;
    }

    .div-5,
    .div-7,
    .div-9,
    .div-11 {
      border-radius: 10px;
      border-color: rgba(157, 157, 157, 1);
      border-style: solid;
      border-width: 1px;
      width: 100%;
      height: 60px;
      padding: 10px;
      box-sizing: border-box;
      margin-top: 16px;
    }

    .div-6,
    .div-8,
    .div-10 {
      font-family: Nunito, sans-serif;
      margin-top: 44px;
      align-self: start;
    }

    .div-12 {
      font-family: Nunito, sans-serif;
      border-radius: 10px;
      border-color: #140962;
      background-color: #140962;
      margin-top: 70px;
      width: 500px;
      max-width: 100%;
      color: #ebd9d9;
      text-align: center;
      font-size: 20px;
      justify-content: center;
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
      align-content: center;
      margin-top: 30px;
      padding: 10px 0;
      text-align: left;
      width: 100%;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    #textboxid {
      font-size: 25px;
    }
  </style>
</head>

<body>
  <div class="pd">
    <div class="div-2">
      <div class="div-3">Pembayaran Donasi</div>
      <form action="index.php?c=Post&m=upload_process" method="POST" enctype="multipart/form-data">
        <div class="div-4" id="isi">Nama Donasi</div>
        <input type="text" id="textboxid" name="nama_donasi" class="div-5" required>
        <div class="div-6" id="isi">Metode Pembayaran</div>
        <input type="text" id="textboxid" name="metode_pembayaran" class="div-7" required>
        <div class="div-8" id="isi">Jumlah Nominal</div>
        <input type="number" id="textboxid" name="jumlah_nominal" class="div-9" required>
        <div class="div-10" id="isi">Pesan</div>
        <textarea id="textboxid" name="pesan" class="div-11"></textarea>


        <div class="detail-item">
          <div class="div-6">Upload Konfirmasi</div>
          <div>
            <input type="file" name="fileToUpload" id="upload" accept="image/*,.pdf" required />
          </div>
        </div>
        <button type="submit" class="div-12"><strong>Donasi Sekarang</strong></button>
      </form>
    </div>
  </div>
</body>

</html>
