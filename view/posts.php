<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profil</title>
  <style>
    body {
      background-color: #c9d6ff;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    }

    .profile-container {
      display: flex;
      align-items: center;
      font-size: 20px;
      color: #000;
      font-weight: 400;
      justify-content: center;
      padding: 80px 60px;
    }

    .profile-edit {
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

    .profile-header {
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
    .div-11,
    .div-13,
    .div-15,
    .div-17 {
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
    .div-10,
    .div-12,
    .div-14,
    .div-16 {
      font-family: Nunito, sans-serif;
      margin-top: 44px;
      align-self: start;
    }

    .div-18{
      font-family: Nunito, sans-serif;
      border-radius: 10px;
      background-color: #140962;
      margin-top: 70px;
      margin-left: 200px;
      width: 500px;
      max-width: 100%;
      color: #ebd9d9;
      text-align: center;
      font-size: 20px;
      justify-content: center;
      padding: 21px 60px;
      cursor: pointer;
      border: none;
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

    #pilihan{
      font-size: 25px;
    }
  </style>

</head>

<body>
  <div class="profile-container">
    <div class="profile-edit">
      <div class="profile-header">Edit Profil</div>
      <form action="?c=Post&m=profil_process" method="POST">
        <div class="div-4" id="isi">Nama Depan</div>
        <input type="text" id="textboxid" name="nama_depan" class="div-5" required>

        <div class="div-6" id="isi">Nama Belakang</div>
        <input type="text" id="textboxid" name="nama_belakang" class="div-7" required>

        <div class="div-8" id="email-label">Email</div>
        <input type="email" id="textboxid" name="email" class="div-9" maxlength="100" required>

        <div class="div-10" id="isi">Alamat</div>
        <input type="text" id="textboxid" name="alamat" class="div-11" required>

        <div class="div-12" id="nomor-telepon-label">Nomor Telepon</div>
        <input type="text" id="textboxid" name="nomor_telepon" class="div-13" maxlength="15">

        <div class="div-14" id="jenis-kelamin-label">Jenis Kelamin</div>
        <select id="textboxid" name="jenis_kelamin" class="div-15" required>
          <option id="pilihan"value="Laki-laki">Laki-laki</option>
          <option id="textboxtid" value="Perempuan">Perempuan</option>
        </select>

        <div class="div-16" id="isi">Tanggal Lahir</div>
        <input type="text" id="textboxid" name="tanggal_lahir" class="div-17" required>


        <button type="submit" class="div-18"><strong>Update Profil</strong></button>
      </form>
    </div>
  </div>
</body>

</html>