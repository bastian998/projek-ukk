# 🧺 Aplikasi Laundry

Aplikasi Laundry ini dirancang untuk memberikan kemudahan dan kenyamanan bagi pengguna dalam mengakses layanan laundry **tanpa perlu datang langsung ke tempat**.  
Dengan aplikasi ini, layanan laundry dapat dipesan secara **praktis, efisien, dan nyaman**.

---

## 📌 Fitur Utama
- **Pilihan Layanan Laundry**
  - Cuci kering + setrika
  - Cuci kering
- **Jadwal Penjemputan & Pengantaran**
  - Atur waktu penjemputan sesuai kebutuhan
  - Opsi pengantaran pakaian setelah selesai
- **Tracking Proses Laundry**
  - Pemantauan status real-time *(dijemput → dicuci → disetrika → siap dikirim)*
- **Metode Pembayaran**
  - Tunai
  - Transfer Bank
  - E-Wallet (OVO, GoPay, Dana, dll.)
- **Riwayat Pemesanan**
  - Melihat transaksi sebelumnya
  - Memudahkan pemesanan ulang

---

## 👥 Role & Fungsi
### 👨🏻‍💼 Admin
- Mengelola layanan (jenis laundry, harga, estimasi waktu)
- Mengelola data pengguna & pesanan
- Memperbarui status proses laundry
- Mengatur metode pembayaran
- Membuat laporan transaksi & pendapatan

### 💰 Kasir
- Menerima dan memverifikasi pesanan dari pengguna
- Mengelola pembayaran (tunai, transfer, e-wallet)
- Mencatat transaksi ke sistem
- Memberikan konfirmasi pembayaran kepada pengguna
- Membuat laporan keuangan harian

### 🙍🏻‍♂️ Pengguna (User)
- Registrasi & login aplikasi
- Memilih layanan laundry
- Menjadwalkan penjemputan & pengantaran
- Melacak status laundry secara real-time
- Melakukan pembayaran
- Melihat riwayat transaksi & memesan ulang

---

## 🛠️ Teknologi yang Digunakan
- **Backend** : PHP  
- **Frontend** : HTML, CSS, Bootstrap  
- **Database** : MySQL
- flowchart TD
    A[Pengguna Registrasi/Login] --> B[Pilih Layanan Laundry]
    B --> C[Jadwalkan Penjemputan]
    C --> D[Konfirmasi Pesanan]
    D --> E[Penjemputan oleh Kurir]
    E --> F[Proses Laundry (Cuci & Setrika)]
    F --> G[Update Status oleh Admin]
    G --> H[Pembayaran oleh Pengguna]
    H --> I[Pengantaran Pakaian]
    I --> J[Pesanan Selesai]
    J --> K[Riwayat Pemesanan Tersimpan]
