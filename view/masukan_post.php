<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            font-size: 20px;
            color: #000;
            font-weight: 400;
            justify-content: center;
        }

        .form-container {
            background: linear-gradient(270deg,
                    rgba(126, 167, 245, 0.36) 0%,
                    rgba(226, 226, 226, 0.6) 100%);
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            padding: 69px 60px;
        }

        .form-content {
            display: flex;
            flex-direction: column;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            overflow: hidden;
            position: relative;
            display: flex;
            min-height: 967px;
            margin-bottom: 14px;
            width: 100%;
            max-width: 1000px;
            align-items: center;
            padding: 76px 50px;
        }

        .background-img {
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .title {
            position: relative;
            text-align: center;
            margin-top: 14px;
            font: 700 50px Nunito, sans-serif;
        }

        .subtitle {
            position: relative;
            text-align: center;
            margin-top: 34px;
            font: 25px Nunito, sans-serif;
        }

        .divider {
            position: relative;
            border-color: rgba(228, 228, 228, 1);
            border-style: solid;
            border-width: 3px;
            background-color: #e4e4e4;
            align-self: stretch;
            margin-top: 44px;
            height: 3px;
        }

        .input-group {
            position: relative;
            display: flex;
            margin-top: 78px;
            width: 767px;
            max-width: 100%;
            gap: 20px;
            white-space: nowrap;
            justify-content: space-between;
        }

        .label {
            font-family: Nunito, sans-serif;
            margin: auto 0;
        }

        .input {
            border-radius: 10px;
            border-color: rgba(157, 157, 157, 1);
            border-style: solid;
            border-width: 1px;
            width: 541px;
            max-width: 100%;
            height: 56px;
        }

        .input-group-email {
            position: relative;
            display: flex;
            margin-top: 40px;
            width: 767px;
            max-width: 100%;
            gap: 20px;
            white-space: nowrap;
            justify-content: space-between;
        }

        .input-email {
            font-family: Nunito, sans-serif;
            margin: auto 0;
        }

        .input-email-box {
            border-radius: 10px;
            border-color: rgba(157, 157, 157, 1);
            border-style: solid;
            border-width: 1px;
            width: 541px;
            max-width: 100%;
            height: 60px;
        }

        .input-group-message {
            position: relative;
            display: flex;
            margin-top: 57px;
            width: 767px;
            max-width: 100%;
            gap: 20px;
            white-space: nowrap;
            justify-content: space-between;
        }

        .input-message {
            font-family: Nunito, sans-serif;
            align-self: start;
            margin-top: 26px;
        }

        .input-message-box {
            border-radius: 10px;
            border-color: rgba(157, 157, 157, 1);
            border-style: solid;
            border-width: 1px;
            width: 541px;
            max-width: 100%;
            height: 220px;
        }

        .submit-button {
            position: relative;
            font-family: Nunito, sans-serif;
            border-radius: 10px;
            background-color: #0b0535;
            margin-top: 89px;
            width: 400px;
            max-width: 100%;
            align-items: center;
            color: #fff;
            text-align: center;
            justify-content: center;
            padding: 23px 60px;
            cursor: pointer;
            margin-left: 200px;
        }

        #textboxid {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="form-content">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0b3c8efb3c80367f19fe461c7f47c3061c939407e508aed2e82b00cb27f0043?apiKey=09f5cd8609404beab30c1df22a82bd18&"
                    class="background-img" />
                <div class="title">Kirim Masukan</div>
                <div class="subtitle">
                    Masukan yang anda berikan sangat berarti untuk pengembangan kami
                </div>
                <div class="divider"></div>
                <form action="?c=Post&m=masukan_process" method="POST">
                    <div class="input-group">
                        <label class="label" for="name">Nama</label>
                        <input type="text" class="input" id="textboxid" name="nama" />
                    </div>

                    <div class="input-group-email">
                        <label class="input-email" for="email">Email</label>
                        <input type="email" class="input-email-box" id="textboxid" name="email" />
                    </div>

                    <div class="input-group-message">
                        <label class="input-message" for="message">Pesan</label>
                        <textarea class="input-message-box" id="textboxid" name="pesan"></textarea>
                    </div>
                    <button type="submit" class="submit-button">Kirim Masukan</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>