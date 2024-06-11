<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareUnity - Welcome</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            font-family: Nunito, sans-serif;
            background-color: #f4f4f4;
            /* Light background color for contrast */
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .content {
            text-align: center;
            max-width: 837px;
            margin: auto;
            padding: 80px 60px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            /* Box shadow for depth */
            border-radius: 15px;
            background: linear-gradient(270deg, rgba(126, 167, 245, 0.36), rgba(226, 226, 226, 0.6));
            box-sizing: border-box;
        }

        .greeting {
            font-size: 64px;
            font-weight: 700;
            margin-bottom: 38px;
            color: #140962;
            /* Matching text color */
        }

        .message {
            font-size: 32px;
            margin-bottom: 51px;
        }

        .description {
            font-size: 20px;
            margin-bottom: 80px;
            line-height: 1.6;
            /* Improved readability */
        }

        .button {
            border-radius: 30px;
            border: none;
            background-color: #140962;
            color: #fff;
            padding: 18px 36px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Button shadow */
            text-decoration: none;
            /* Prevent underline on button */
        }

        .button:hover {
            background-color: #2a15c3;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            /* Enhanced shadow on hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <div class="content">
                <div class="greeting">
                    Hai, Teman CareUnity!
                </div>
                <div class="message">Selamat datang di CareUnity.</div>
                <div class="description">
                    CareUnity hadir sebagai bentuk kepedulian kita terhadap teman-teman
                    yang membutuhkan bantuan ketika mengalami kesulitan karena bencana
                    alam. Bergabunglah dengan komunitas CareUnity hari ini dan tunjukkan
                    kepedulian Anda. Bersama, kita bisa mengubah kepedihan menjadi
                    harapan, dan kesulitan menjadi kekuatan baru untuk bangkit.
                </div>
                <a href="index.php?c=Post&m=beranda_form" class="button">Mulai Berdonasi</a>
            </div>
        </div>
    </div>
</body>

</html>