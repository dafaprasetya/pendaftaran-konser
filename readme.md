# Aplikasi Pendaftaran Tiket Konser Online

## Deskripsi

Aplikasi ini adalah sistem pendaftaran tiket konser online yang dikembangkan menggunakan CodeIgniter 3, Bootstrap, dan MySQL. Aplikasi menyediakan fungsionalitas pendaftaran pengguna, penampilan daftar konser, serta proses pemesanan dan pembayaran tiket.

## Daftar Isi

- [PENDAHULUAN](#pendahuluan)
  - [Deskripsi Singkat Aplikasi](#deskripsi-singkat-aplikasi)
  - [Ruang Lingkup](#ruang-lingkup)
- [PEMBAHASAN](#pembahasan)
  - [Analisa Kebutuhan](#analisa-kebutuhan)
    - [Analisa Kebutuhan User](#analisa-kebutuhan-user)
    - [Analisa Kebutuhan Sistem](#analisa-kebutuhan-sistem)
  - [Desain](#desain)
  - [Implementasi](#implementasi)
  - [Pengujian Unit](#pengujian-unit)
- [PENUTUP](#penutup)
  - [Kesimpulan](#kesimpulan)
  - [Saran](#saran)

## PENDAHULUAN

### Deskripsi Singkat Aplikasi

Aplikasi pendaftaran tiket konser online yang menggunakan CodeIgniter 3, Bootstrap, dan MySQL. Tujuan aplikasi adalah memberikan pengguna kemudahan dalam melakukan pendaftaran tiket konser secara online.

### Ruang Lingkup

Aplikasi mencakup proses pendaftaran pengguna, penampilan daftar konser, serta proses pemesanan dan pembayaran tiket. Data-data pengguna, daftar konser, dan informasi tiket disimpan dalam database MySQL dengan tiga tabel utama: "user," "konser," dan "daftar."

## PEMBAHASAN

### Analisa Kebutuhan

#### Analisa Kebutuhan User

Pengguna aplikasi meliputi pengunjung, pengguna terdaftar, dan admin. Masing-masing memiliki hak akses dan fungsi yang berbeda.

#### Analisa Kebutuhan Sistem

- Pendaftaran Pengguna (User): Fitur ini memungkinkan pengguna untuk membuat akun, melakukan login, dan melihat profil mereka.
- Daftar Konser: Menampilkan informasi tentang konser yang tersedia, termasuk detail konser, harga tiket, dan jumlah tiket yang tersedia.
- Pemesanan Tiket: Pengguna dapat memilih konser, memilih jumlah tiket, dan melakukan pembayaran.
- Manajemen Konser: Admin dapat menambah, mengedit, atau menghapus konser yang akan diadakan.

### Desain

Desain aplikasi melibatkan struktur database dengan tiga tabel utama: "user," "konser," dan "daftar". Hubungan antara tabel tersebut dirancang agar mendukung fungsionalitas pendaftaran dan pemesanan tiket.

### Implementasi

Implementasi menggunakan CodeIgniter 3 sebagai kerangka kerja utama. Front-end dikembangkan menggunakan Bootstrap untuk memastikan antarmuka yang responsif dan menarik.

### Pengujian Unit

Setiap bagian aplikasi, termasuk pendaftaran pengguna, penampilan daftar konser, dan proses pemesanan tiket, akan diuji secara terpisah untuk memastikan fungsionalitas yang tepat.

## PENUTUP

### Kesimpulan

Aplikasi pendaftaran tiket konser online menggunakan CodeIgniter 3, Bootstrap, dan MySQL berhasil dikembangkan dengan memenuhi kebutuhan pengguna. Pengguna dapat dengan mudah mendaftar, melihat konser, dan memesan tiket secara online.

### Saran

Untuk meningkatkan aplikasi ini, beberapa saran yang dapat dipertimbangkan adalah:
- Menambahkan fitur notifikasi untuk memberi tahu pengguna tentang konser terbaru atau perubahan.
- Mengoptimalkan antarmuka pengguna untuk pengalaman yang lebih intuitif.
- Meningkatkan sistem keamanan untuk melindungi data pengguna.
