<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Nunito, sans-serif;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      background-color: #140962;
      border-radius: 23.21px;
      padding: 20px;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
    }

    .card-title {
      margin-top: 20px;
      font-weight: bold;
      font-size: 24px;
    }

    .card-progress {
      background-color: white;
      height: 32px;
      border-radius: 11.44px;
      margin: 20px 0;
    }

    .card-fund {
      font-size: 21px;
    }

    .card-donasi {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    .card-donasi img {
      width: 47px;
      height: 47px;
      margin-right: 10px;
    }

    .card-donasi div {
      flex-grow: 1;
    }

    .donate-button {
      background-color: white;
      color: black;
      font-size: 27px;
      font-weight: 800;
      border: none;
      padding: 10px 20px;
      border-radius: 6.833px;
      cursor: pointer;
      align-self: center;
      margin-top: 20px;
    }

    #judul{
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-family: Nunito, sans-serif;
      color: #271a85;

    }
  </style>
</head>
<body>
  <h1 id="judul">Beranda Donasi Careunity</h1>
  <div class="container">
    <div class="card">
      <img src="view/content/content/banjirdemak.jpg" alt="banjir demak">
      <div class="card-title">Donasi Banjir Demak!</div>
      <div class="card-progress"></div>
      <div class="card-fund">Rp 5.960.000 Terkumpul dari Rp 10.000.000</div>
      <div class="card-donasi">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/250a5c5d7d0d45b26cb47888ed5aaf6fffe8cca11b27c1cda6d14b26a73f5fcd?apiKey=f96b3501f0e64450a308809d4c15451b&" alt="Yayasan Peduli Alam">
        <div>Yayasan Peduli Alam</div>
      </div>
      <button class="donate-button" onclick="window.location.href='index.php?c=Post&m=detail_form'">Donasi</button>
    </div>
    <div class="card">
      <img src="view/content/content/longsor 1.jpg" alt="tanah longsor">
      <div class="card-title">Bantu Korban Tanah Longsor!</div>
      <div class="card-progress"></div>
      <div class="card-fund">Rp 500.000.000 Terkumpul dari Rp 3.000.000</div>
      <div class="card-donasi">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fdd0c9e517dc268b81bd1979b4cd806df5f2d8e6584d4e241d0fe6e7480f4910?apiKey=f96b3501f0e64450a308809d4c15451b&" alt="Yayasan Peduli Alam">
        <div>Yayasan Peduli Alam</div>
      </div>
      <button class="donate-button">Donasi</button>
    </div>
    <div class="card">
      <img src="view/content/content/longsor sumbar.jpg" alt="banjir sumbar">
      <div class="card-title">Bantu Kawan Kita di Sumbar!</div>
      <div class="card-progress"></div>
      <div class="card-fund">Rp 1.000.000 Terkumpul dari Rp 8.000.000</div>
      <div class="card-donasi">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fdd0c9e517dc268b81bd1979b4cd806df5f2d8e6584d4e241d0fe6e7480f4910?apiKey=f96b3501f0e64450a308809d4c15451b&" alt="Yayasan Peduli Alam">
        <div>Yayasan Peduli Alam</div>
      </div>
      <button class="donate-button">Donasi</button>
    </div>
  </div>
</body>
</html>
