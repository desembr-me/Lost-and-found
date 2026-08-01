<h3 align="center">Sistem Informasi Pelaporan Barang Hilang dan Ditemukan</h3>

---
## Role dan Fitur

### User
- Registrasi & Login
- Melapor barang hilang & ditemukan 
- Melihat daftar barang hilang & ditemukan 
- Mengklaim barang ditemukan 
- Melihat riwayat laporan pribadi(opsional)

### Staff
- Login
- Melihat semua laporan barang hilang & ditemukan
- Verifikasi laporan barang (hilang/ditemukan)
- Verifikasi klaim barang
- Mengelola status barang 

### Admin
- Login
- Mengelola akun Staff
- Mengelola akun User
- Melihat semua laporan dan klaim
- Melihat semua aktivitas sistem

---

## Tabel Database

### Tabel `users`
| Field         | Tipe Data   | Keterangan          |
|---------------|-------------|---------------------|
| id            | BIGINT      | Primary Key         |
| nama          | STRING     | Nama lengkap        |
| email         | STRING     | Email unik          |
| password      | STRING     | Password |
| role          | ENUM        | user, staff, admin  |
| timestamps    | TIMESTAMP   | created_at, updated_at |

### Tabel `profiles`
| Field         | Tipe Data   | Keterangan          |
|---------------|-------------|---------------------|
| id            | BIGINT      | Primary Key         |
| user_id          | BIGINT     | FK ke `users.id`        |
| alamat         | TEXT     |  Alamat Lengkap          |
| no_telepon      | STRING     | Nomor Telepon |
| timestamps    | TIMESTAMP   | created_at, updated_at |

### Tabel `items`
| Field         | Tipe Data   | Keterangan          |
|---------------|-------------|---------------------|
| id            | BIGINT      | Primary Key         |
| nama_barang          | STRING     | Nama barang        |
| warna         | STRING     |  Warna dominan         |
| ciri_khusus      | TEXT     | Deskripsi/ciri unik |
| foto         | STRING     | Path gambar (opsional)         |
| type          | ENUM        | 'hilang', 'ditemukan'                |
| timestamps    | TIMESTAMP   | created_at, updated_at |

### Tabel `reports`
| Field         | Tipe Data   | Keterangan                     |
|---------------|-------------|--------------------------------|
| id            | BIGINT      | Primary Key                    |
| user_id       | BIGINT      | FK ke `users.id`               |
| item_id       | BIGINT      | FK ke `items.id`               |
| lokasi      | STRING     | Lokasi ditemukan/hilang        |
| tanggal          | DATE        | Tanggal kejadian               |
| status        | ENUM        | 'pending', 'disetujui', 'ditolak' |
| timestamps    | TIMESTAMP   | created_at, updated_at         |

### Tabel `claims`
| Field         | Tipe Data   | Keterangan                         |
|---------------|-------------|------------------------------------|
| id            | BIGINT      | Primary Key                        |
| user_id       | BIGINT      | FK ke `users.id`                   |
| report_id     | BIGINT      | FK ke `reports.id`                 |
| deskripsi_klaim | TEXT        | Alasan/keterangan mengklaim / bukti      |
| status_verifikasi        | ENUM        | 'pending', 'disetujui', 'ditolak' |
| timestamps    | TIMESTAMP   | created_at, updated_at             |

### Tabel `user_items`
| Field         | Tipe Data   | Keterangan                         |
|---------------|-------------|------------------------------------|
| id            | BIGINT      | Primary Key                        |
| user_id       | BIGINT      | FK ke `users.id`                   |
| item_id     | BIGINT      | FK ke `items.id`                 |
| role     | ENUM      | 'pelapor','penemu','pemilik'                 |
| timestamps    | TIMESTAMP   | created_at, updated_at             |
---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

- `users` ↔ `profiles`: One to one (Satu pengguna memiliki satu profil)  
- `users` ↔ `reports`: One to Many (Satu pengguna dapat melaporkan banyak barang hilang atau ditemukan)  
- `users` ↔ `claims`: One to Many (Satu pengguna dapat mengklaim lebih dari satu barang ditemukan)
- `items` ↔ `reports`: One to Many (Satu barang dapat dilaporkan beberapa kali)  
- `reports` ↔ `claims`: One to Many (Satu laporan barang ditemukan dapat diklaim oleh beberapa pengguna)  
- `users` ↔ `items`: Many to Many ()

--- 
