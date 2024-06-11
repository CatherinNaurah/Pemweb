<?php
class PostModel extends Model
{
    public function getAll()
    {
        $sql = 'SELECT * FROM post ORDER BY id DESC';
        return $this->mysqli->query($sql);
    }

    public function insertProfil($nama_depan, $nama_belakang, $email, $alamat, $nomor_telepon, $jenis_kelamin, $tanggal_lahir)
    {
        $sql = "INSERT INTO profil (nama_depan, nama_belakang, email, alamat, nomor_telepon, jenis_kelamin, tanggal_lahir) 
                 VALUES ('$nama_depan', '$nama_belakang', '$email', '$alamat', '$nomor_telepon', '$jenis_kelamin', '$tanggal_lahir')";

        $this->mysqli->query($sql);
    }
    //mvc 2
    public function insertDonasi($nama_donasi, $metode_pembayaran, $jumlah_nominal, $pesan, $fileData)
    {
        $sql = "INSERT INTO pembayaran_donasi (nama_donasi, metode_pembayaran, jumlah_nominal, pesan, file_data) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->mysqli->prepare($sql);
        $null = NULL;
        $stmt->bind_param("ssdsb", $nama_donasi, $metode_pembayaran, $jumlah_nominal, $pesan, $null);
        $stmt->send_long_data(4, $fileData);
        return $stmt->execute();
    }
    //mvc 3
    public function insertInformasiDonasi($nama_pengguna, $komentar_pengguna)
    {
        $sql = "INSERT INTO informasidonasi (nama_pengguna, komentar_pengguna) 
            VALUES ( '$nama_pengguna', '$komentar_pengguna')";

        $this->mysqli->query($sql);
    }
    //mvc 5
    public function insertMasukan($nama, $email, $pesan)
    {
        $sql = "INSERT INTO masukan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
        $this->mysqli->query($sql);
    }

    public function register($username, $password, $email)
    {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('sss', $username, $passwordHash, $email);
        return $stmt->execute();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_object();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}
