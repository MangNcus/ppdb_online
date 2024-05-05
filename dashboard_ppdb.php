<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo_SMK_Darunnadwah.png">
    <title>Pendaftaran Online - SMK Darun Nadwah Assalam</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background-color: #f0f0f0;
            margin-top: 60px;
            padding: 0;
        }

        header {
            background: linear-gradient(to right, green, darkgreen);
            /* Gradient background */
            color: lightblue;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Shadow effect */
            position: fixed;
            /* Mengubah posisi menjadi tetap */
            width: 100%;
            /* Menetapkan lebar 100% */
            top: 0;
            /* Menetapkan ke atas */
            left: 0;
            /* Menetapkan ke kiri */
            z-index: 999;
            /* Menetapkan urutan tumpukan tinggi */
        }


        h1 {
            font-size: 32px;
            /* Font size */
            font-weight: bold;
            /* Font weight */
        }

        h2 {
            font-size: 24px;
            /* Font size */
        }

        .logo-container {
            float: left;
        }

        .user-icon-container {
            float: right;
        }

        .logo {
            margin-left: 40px;
            width: 60px;
            height: auto;
        }

        .user-icon {
            margin-right: 40px;
            width: 40px;
            height: auto;
        }

        /* CSS lainnya tetap seperti sebelumnya */


        nav {
            background-color: #4CAF50;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .main-container {
            padding-top: 60px;
        }

        table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h3 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .section td {
            margin-bottom: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        td:first-child {
            border-left: 1px solid #ddd;
        }

        td:last-child {
            border-right: 1px solid #ddd;
        }

        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="logo_SMK_Darunnadwah.png" alt="Logo SMK Darun Nadwah Assalam" class="logo">
        </div>
        <div class="user-icon-container">
            <img src="user_icon.png" alt="User Icon" class="user-icon">
            <p class="user-icon">User</p>
        </div>
        <h1>Pendaftaran Online</h1>
        <h2>SMK Darun Nadwah Assalam</h2>
        <nav>
            <a href="#">Biodata Siswa</a>
            <a href="#">Biodata Orang Tua/Wali</a>
            <a href="#">Alamat</a>
            <a href="#">Informasi Pendaftaran</a>
            <a href="#">Kontak</a>
            <!-- Tambahkan menu lainnya -->
        </nav>
    </header>
    <main class="main-container">
        <div class="container">
            <table>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <img src="profile_icon.png" alt="Foto Calon Siswa" style="width: 150px; height: auto; border-radius: 50%; margin-bottom: 10px;">
                        <p>Agus Salim</p>
                    </td>
                </tr>

                <tr>
                    <th colspan="2">Biodata Pendaftaran</th>
                </tr>
                <tr>
                    <td>Data Pendaftaran</td>
                    <td>
                        <table>
                            <tr>
                                <td>Nomor Pendaftaran:</td>
                                <td>123456789</td>
                            </tr>
                            <tr>
                                <td>Tanggal Daftar:</td>
                                <td>01 Januari 2024</td>
                            </tr>
                            <tr>
                                <td>Status Daftar:</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Jurusan Dipilih:</td>
                                <td>Teknik Komputer Jaringan</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Identitas Calon Siswa</td>
                    <td>
                        <table>
                            <tr>
                                <td>Nama Lengkap:</td>
                                <td>Agus Salim</td>
                            </tr>
                            <tr>
                                <td>Nama Panggilan:</td>
                                <td>Agus</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin:</td>
                                <td>Laki-laki</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir:</td>
                                <td>Jakarta</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir:</td>
                                <td>01 Januari 2005</td>
                            </tr>
                            <tr>
                                <td>NIK:</td>
                                <td>1234567890123456</td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan:</td>
                                <td>170 cm</td>
                            </tr>
                            <tr>
                                <td>Berat Badan:</td>
                                <td>60 kg</td>
                            </tr>
                            <tr>
                                <td>Golongan Darah:</td>
                                <td>O</td>
                            </tr>
                            <tr>
                                <td>Cita-cita:</td>
                                <td>Menjadi Programmer</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Riwayat Pendidikan</td>
                    <td>
                        <table>
                            <tr>
                                <td>Sekolah Asal:</td>
                                <td>SMP Negeri 1 Jakarta</td>
                            </tr>
                            <tr>
                                <td>Alamat Sekolah:</td>
                                <td>Jl. Raya Jakarta No. 123</td>
                            </tr>
                            <tr>
                                <td>NPSN:</td>
                                <td>12345678</td>
                            </tr>
                            <tr>
                                <td>Tahun Lulus:</td>
                                <td>2023</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Wali</td>
                    <td>
                        <table>
                            <tr>
                                <td>Nama:</td>
                                <td>Roberto Salim</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir:</td>
                                <td>Bandung</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir:</td>
                                <td>10 Februari 1975</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan:</td>
                                <td>Wiraswasta</td>
                            </tr>
                            <tr>
                                <td>Pendidikan:</td>
                                <td>S1 Teknik Informatika</td>
                            </tr>
                            <tr>
                                <td>Penghasilan:</td>
                                <td>Rp 10.000.000/bulan</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Ayah</td>
                    <td>
                        <table>
                            <tr>
                                <td>Nama:</td>
                                <td>Roberto Salim</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir:</td>
                                <td>Jakarta</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir:</td>
                                <td>15 Mei 1970</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan:</td>
                                <td>PNS</td>
                            </tr>
                            <tr>
                                <td>Pendidikan:</td>
                                <td>D3 Teknik Elektro</td>
                            </tr>
                            <tr>
                                <td>Penghasilan:</td>
                                <td>Rp 15.000.000/bulan</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>
                        <table>
                            <tr>
                                <td>Nama:</td>
                                <td>Nur Salimah</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir:</td>
                                <td>Bandung</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir:</td>
                                <td>20 September 1975</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan:</td>
                                <td>Guru</td>
                            </tr>
                            <tr>
                                <td>Pendidikan:</td>
                                <td>S1 Pendidikan Bahasa Inggris</td>
                            </tr>
                            <tr>
                                <td>Penghasilan:</td>
                                <td>Rp 8.000.000/bulan</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 SMK Darun Nadwah Assalam</p>
    </footer>
</body>

</html>