<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  .div {
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    padding: 80px;
    align-items: center;
 
  }

  .kolomdikanan {
    gap: 20px;
    display: flex;
  }
  .columndikanan {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 61%;
    margin-left: 0px;
  }

  .pindahkanan {
    display: flex;
    margin-top: 110px;
    flex-direction: column;
  }

  .judul {
    color: #140962;
    text-align: center;
    font: 700 50px Nunito, sans-serif;
    font-weight:bold;
  }

  #gambar {
  width: 752.82;
  }
  .rectdesc {
    border-radius: 15.323px;
    background-color: white;
    display: flex;
    margin-top: 57px;
    flex-direction: column;
    padding: 34px;
  }

  .deskripsi{
    border-radius: 3.831px;
    background-color: #140962;
    align-items: center;
    color: white;
    white-space: nowrap;
    text-align: center;
    justify-content: center;
    padding: 24px 60px;
    font: 700 19px Nunito, sans-serif;
    font-weight :bold;
  }

  .isidesc{
    color: #000;
    text-align: justify;
    margin-top: 17px;
    font: 500 14px Nunito, sans-serif;
  }


  .komendibawahdana{
    display: flex;
    margin-top: 183px;
    flex-direction: column;
    width: 550px;
  }

  .kumpulantabel{
    border-radius: 20px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    background-color: white;
    display: flex;
    flex-direction: column;
    font-size: 25px;
    color: #fff;
    font-weight: 700;
    padding: 49px 26px 31px;
  }

  .danakumpul{
    font: 30px Nunito, sans-serif;
    font-weight :bold;
  }

  .nominal{
    margin-top: 24px;
    font: 50px Nunito, sans-serif;
    font-weight:bold;
  }

  .range {
    border-radius: 10px;
    background-color: #140962;
    margin-top: 16px;
    height: 28px;
  }

  .ketdonasi {
    align-self: center;
    display: flex;
    margin-top: 33px;
    gap: 20px;
    text-align: center;
    justify-content: space-between;
  }
  .isiket {
    font-family: Nunito, sans-serif;
    margin: auto 0;
  }
  .div-15, .div-17 {
    border-color: #140962;
    border-style: solid;
    border-width: 1px;
    background-color: black;
    width: 1px;
    height: 60px;
  }
  .div-16 {
    font-family: Nunito, sans-serif;
  }
  .div-18 {
    font-family: Nunito, sans-serif;
  }
  .div-19 {
    font-family: Nunito, sans-serif;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    background-color: #f9c929;
    white-space: nowrap;
    margin: 55px 16px 0 15px;
    padding: 10px 30px;
  }

  .div-20 {
    font-family: Nunito, sans-serif;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    background-color: #f9c929;
    white-space: nowrap;
    margin: 17px 16px 0 15px;
    padding: 10px 30px;
  }

  .profilyayasan{
    display: flex;
    margin-top: 38px;
    gap: 17px;
  }

  .namayayasan{
    font-family: Nunito, sans-serif;
    flex-grow: 1;
    flex-basis: auto;
    margin: auto 0;
    
  }
  .commentsection{
    border-radius: 20px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    border-color: rgba(0, 0, 0, 1);
    border-style: solid;
    border-width: 1px;
    background-color: #fff;
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    font-weight: 400;
    line-height: 120%;
    padding: 36px 35px 70px;
  }

  .rectcomment {
    display: flex;
    width: 100%;
    align-items: start;
    gap: 20px;
    justify-content: space-between;
  }
  .marginform {
    display: flex;
    margin-top: 7px;
    gap: 19px;
    font-size: 17px;
    color: #000;
  }


  #btn-donasi{
      background-color: #140962;
      color: white;
      font-size: 27px;
      font-weight: 800;
      border: none;
      padding: 10px 20px;
      border-radius: 6.833px;
      cursor: pointer;
      align-self: center;
      margin-top: 20px;
      width:403px ;
      height:54px ;

    }
    #btn-donasi2{
      background-color: #140962;
      color: white;
      font-size: 15px Nunito, sans-serif;
      font-weight: 800;
      border: none;
      padding: 5px 5px;
      border-radius: 6.833px;
      cursor: pointer;
      align-self: left;
      margin-top: 20px;
      width: 70px ;
      height:30px ;
      text-decoration: none;
      font: Nunito, sans-serif;

    }
    #isikomen{
    border-radius: 3.831px;
    background-color: #e9b507;
    align-items: center;
    color: #1e1e1e;
    white-space: nowrap;
    text-align: center;
    justify-content: center;
    padding: 24px 60px;
    font: 700 19px Nunito, sans-serif;
    }

    #textboxid1{
      width: 400px;
      height: 200px;
    }
    .form {
      justify-content: right;
    }
    
    .kumpulantabel{
      color: black;
    }

    .marginform >h1{
      font: 30px Nunito, sans-serif;
    font-weight :bold;
    }

  
</style>

</head>
<body>
<div class="div">
  <div class="kolomdikanan">
    <div class="columndikanan">
      <div class="pindahkanan">
        <div class="judul">Donasi Bencana Banjir untuk Demak!</div>
        <img src="view/content/content/kontendetail.jpg" id="gambar"alt="">
        <div class="rectdesc">
          <div class="deskripsi">Deskripsi</div>
          <div class="isidesc">
            Tiga pekan berlalu, banjir di Demak belum surut. Pengeringan wilayah
            tergenang jadi fokus pemerintah kabupaten dan pemerintah Kabupaten Demak
            memutuskan untuk memperpanjang masa tanggap darurat, hal ini
            dilakukan karena karena masih ada daerah yang terendam dengan
            ketinggian mencapai 1 meter. Banjir Demak 2024 ini terjadi 3 pekan
            yang lalu di hampir seluruh kecamatan di kabupaten Demak , dan
            jumlah warga yang terdampak bencana banjir ini lebih dari 1.292
            pengungsi. Sekarang, para keluarga korban bencana tersebut hidup
            dalam kondisi memprihatinkan. Mereka masih banyak mengalami
            kelangkaan bahan pokok, seperti sembako, obat-obatan, popok bayi,
            dan pembalut wanita. Rumah tempat mereka tinggal pun masih berupa
            tenda sementara. Akan tetapi, bantuan dari masyarakat sudah sangat
            berkurang, karena sudah bebrapa pekan berlalu sejak banjir terjadi.
            Padahal, keadaan hidup para korban tersebut belum banyak membaik.
            <br />
            <br />
            Komunitas kami pernah menggalang dana saat banjir baru terjadi.
            Namun mengingat keadaan hidup korban yang masih belum layak, dan
            bantuan dari donatur sudah berkurang, kami mengalami kesulitan untuk
            terus membantu para korban bencana ini. Oleh karena itu saya
            berharap orang-orang baik berkenan menyisihkan rejekinya untuk
            berdonasi ke korban banjir Demak.Oleh karena itu, kami membutuhkan bantuan dari orang-orang baik,
            Adapun total biaya yang dibutuhkan adalah sebesar Rp10.000.000.
            Nantinya dana tersebut akan kami gunakan untuk memenuhi kebutuhan
            pokok penyintas banjir Demak seperti makanan, pakaian, pembalut &
            popok, dan obat-obatan dengan total Rp. 10.000.000. Kami sangat mengharapkan terkumpulnya dana agar para pengungsi
            banjir Demak dapat memiliki kualitas hidup yang lebih baik.
          </div>
        </div>
      </div>
    </div>

      <div class="komendibawahdana">
        <div class="kumpulantabel">
          <div class="danakumpul">Dana Terkumpul</div>
          <div class="nominal">Rp 5.690.000</div>
          <div class="range"></div>
          <div class="ketdonasi">
            <div class="isiket">
              10
              <br />
              Donasi
            </div>
            <div class="div-15"></div>
            <div class="div-16">
              2
              <br />
              Bagikan
            </div>
            <div class="div-17"></div>
            <div class="div-18">
              100
              <br />
              Hari Lagi
            </div>
          </div>
          <!-- <button id="btn-donasi">Donasi</button> -->
          <button id="btn-donasi" onclick="window.location.href='index.php?c=Post&m=bayar_form'">Donasi</button>
          <button id="btn-donasi" >Bagikan</button>
          <div class="profilyayasan">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/efbf2e645367582d7e97ed8f3e3b94fa883bbb0a60393a1722e6e1f56f635c4d?apiKey=f96b3501f0e64450a308809d4c15451b&"

            />
          </div>
        </div>
        <div class="commentsection">
          <div class="rectcomment">
            <div class="marginform">
            <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d337cc0d5bb28eae7cf5fc8be0c36155cfc66f0321c44171629a28d353bc3917?apiKey=09f5cd8609404beab30c1df22a82bd18&"
                class="img-3"
              />
            <h1>Berikan Pesan!</h1>
              </div>
            </div>
           
             <!-- Form Komentar -->
             <form action="?c=Post&m=informasi_process" method="POST">
              <input type ="text" id="textboxid" name ="nama_pengguna" placeholder ="Nama Anda"required>

                <input type="text"name="komentar_pengguna" placeholder="Komentar Anda"id="textboxid" required>

                <a href="index.php?c=Post&m=kirim_form" id="btn-donasi2" class="button">Kirim</a>
              </div>


 </body>
</html>