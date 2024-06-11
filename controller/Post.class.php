<?php
class Post extends Controller
{
    public function index()
    {
        $postModel = $this->loadModel('PostModel');
        $posts = $postModel->getAll();
        $this->loadView('posts', ['posts' => $posts]);
    }

    public function register_form()
    {
        $this->loadView('register');
    }

    public function login_form()
    {
        $this->loadView('login');
    }


    public function create_form()
    {
        $this->loadView('insert_post');
    }

    public function detail_form()
    {
        $this->loadView('detail_post');
    }

    public function beranda_form()
    {
        $this->loadView('beranda_posts');
    }

    public function profil_form()
    {
        $this->loadView('profil');
    }

    public function bayar_form()
    {
        $this->loadView('fbayar_post');
    }

    public function tampil_form()
    {
        $this->loadView('fhasil_post');
    }

    public function masukan1_form()
    {
        $this->loadView('masukan_post');
    }

    public function kirim_form()
    {
        $this->loadView('detail_post');
    }

    public function terimakasih_form()
    {
        $this->loadView('beranda_posts');
    }

    public function masukan_form()
    {
        $this->loadView('masukan');
    }

    public function profil_process()
    {
        $postModel = $this->loadModel('PostModel');

        $nama_depan = addslashes($_POST['nama_depan']);
        $nama_belakang = addslashes($_POST['nama_belakang']);
        $email = addslashes($_POST['email']);
        $alamat = addslashes($_POST['alamat']);
        $nomor_telepon = addslashes($_POST['nomor_telepon']);
        $jenis_kelamin = addslashes($_POST['jenis_kelamin']);
        $tanggal_lahir = addslashes($_POST['tanggal_lahir']);

        $postModel->insertProfil($nama_depan, $nama_belakang, $email, $alamat, $nomor_telepon, $jenis_kelamin, $tanggal_lahir);

        $this->redirect("?c=Post&m=profil_success&nama_depan=$nama_depan&nama_belakang=$nama_belakang&email=$email&alamat=$alamat&nomor_telepon=$nomor_telepon&jenis_kelamin=$jenis_kelamin&tanggal_lahir=$tanggal_lahir");
    }

    public function profil_success()
    {
        $nama_depan = $_GET['nama_depan'] ?? '';
        $nama_belakang = $_GET['nama_belakang'] ?? '';
        $email = $_GET['email'] ?? '';
        $alamat = $_GET['alamat'] ?? '';
        $nomor_telepon = $_GET['nomor_telepon'] ?? '';
        $jenis_kelamin = $_GET['jenis_kelamin'] ?? '';
        $tanggal_lahir = $_GET['tanggal_lahir'] ?? '';

        $this->loadView('insert_post', [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir
        ]);
    }



    // mvc 4
    public function informasi_process()
    {
        $postModel = $this->loadModel('PostModel');

        $nama_pengguna = addslashes($_POST['nama_pengguna']);
        $komentar_pengguna = addslashes($_POST['komentar_pengguna']);

        $postModel->insertInformasiDonasi($nama_pengguna, $komentar_pengguna);

        $this->redirect("?c=Post&m=informasi_success&nama_pengguna=$nama_pengguna&komentar_pengguna=$komentar_pengguna");
    }

    // mvc 5
    public function masukan_process()
    {
        $postModel = $this->loadModel('PostModel');
        $nama = addslashes($_POST['nama']);
        $email = addslashes($_POST['email']);
        $pesan = addslashes($_POST['pesan']);

        $postModel->insertMasukan($nama, $email, $pesan);

        $this->redirect("?c=Post&m=masukan_success&nama=$nama&email=$email&pesan=$pesan");
    }

    public function masukan_success()
    {
        $nama = $_GET['nama'] ?? '';
        $email = $_GET['email'] ?? '';
        $pesan = $_GET['pesan'] ?? '';

        $this->loadView('terimakasih_posts', [
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan
        ]);
    }

    public function register_process()
    {
        $postModel = $this->loadModel('PostModel');
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $email = addslashes($_POST['email']);

        if ($postModel->register($username, $password, $email)) {
            $this->redirect("?c=Post&m=login_form");
        } else {
            $error = "Registration failed. Please try again.";
            $this->loadView('register', ['error' => $error]);
        }
    }

    public function login_process()
    {
        $postModel = $this->loadModel('PostModel');
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        if ($user = $postModel->login($username, $password)) {
            session_start();
            $_SESSION['user'] = $user;
            $this->redirect("?c=Post&m=index");
        } else {
            $error = "Login failed. Please check your credentials.";
            $this->loadView('login', ['error' => $error]);
        }
    }

    public function upload_form()
    {
        $this->loadView('upload');
    }
    public function upload_process()
    {
        $postModel = $this->loadModel('PostModel');
        $data = [
            'nama_donasi' => $_POST['nama_donasi'] ?? '',
            'metode_pembayaran' => $_POST['metode_pembayaran'] ?? '',
            'jumlah_nominal' => $_POST['jumlah_nominal'] ?? '',
            'pesan' => $_POST['pesan'] ?? '',
            'error' => '',
            'success' => '',
            'file' => []
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

            if ($check !== false || $fileType == "pdf") {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
                $data['error'] = "File bukan gambar atau PDF.";
            }

            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                $uploadOk = 0;
                $data['error'] = "Ukuran file terlalu besar.";
            }

            if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "pdf") {
                $uploadOk = 0;
                $data['error'] = "Hanya file JPG, JPEG, PNG & PDF yang diperbolehkan.";
            }

            if ($uploadOk == 1) {
                $fileData = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
                if ($postModel->insertDonasi($data['nama_donasi'], $data['metode_pembayaran'], $data['jumlah_nominal'], $data['pesan'], $fileData)) {
                    $data['success'] = "File dan data donasi berhasil diupload.";
                    // Tambahkan entri fileData dalam array $data
                    $data['fileData'] = $fileData;
                    $this->redirect("?c=Post&m=tampil_form&nama_donasi=" . urlencode($data['nama_donasi']) . "&metode_pembayaran=" . urlencode($data['metode_pembayaran']) . "&jumlah_nominal=" . urlencode($data['jumlah_nominal']) . "&pesan=" . urlencode($data['pesan']));
                    exit;
                } else {
                    $data['error'] = "Ada kesalahan saat mengupload file atau menyimpan data donasi.";
                }
            }
        }

        $this->loadView('fhasil_post', $data);
    }
}
