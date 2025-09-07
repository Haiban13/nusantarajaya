# 🌏 Menjaga Budaya melalui Inovasi Digital  
> **Platform Digital untuk Melestarikan Budaya Nusantara**  
> Menghubungkan masyarakat, pemerintah, dan penggiat budaya melalui inovasi teknologi.

---

## 📌 Deskripsi Proyek
**Menjaga Budaya melalui Inovasi Digital** adalah sebuah platform berbasis web yang bertujuan untuk **melestarikan dan mempromosikan budaya Indonesia** melalui pendekatan teknologi modern.  
Website ini menyediakan berbagai fitur interaktif seperti **berita budaya, acara budaya, permainan edukatif, dan sistem publikasi artikel**.

Proyek ini dibangun menggunakan pendekatan **multi-user role**, di mana setiap pengguna memiliki hak akses berbeda sesuai perannya.

---

## 👥 Peran Pengguna (User Roles)

| Role        | Deskripsi | Fitur Utama |
|------------|-----------|-------------|
| **Super Admin** | Pemilik website | - CRUD Acara <br> - CRUD Artikel <br> - CRUD Kategori <br> - Melihat laporan acara dari pengguna <br> - Approval artikel buatan user <br> - Dashboard analytics lengkap |
| **Admin** | Kementerian Budaya | - CRUD Acara <br> - CRUD Artikel <br> - Dashboard analytics terbatas |
| **User** | Masyarakat umum | - Membuat artikel (butuh approval Super Admin) <br> - Melaporkan acara (report acara) <br> - Akses halaman Home, Berita, Acara, dan Games |

---

## 🗂️ Fitur Utama Website

### **Halaman Publik**
- 🏠 **Home** — Informasi umum dan highlight budaya.
- 📰 **Berita** — Berita dan artikel tentang kebudayaan.
- 🎉 **Acara** — Daftar acara budaya dengan tombol **"Steering Committee"** untuk check-in atau booking.
- 🎮 **Games** — Permainan edukasi berbasis budaya.

### **Dashboard**
Dashboard dibedakan sesuai peran pengguna:

#### **Super Admin Dashboard**
- CRUD Acara, Artikel, dan Kategori.
- Melihat laporan acara dari pengguna.
- Approval artikel yang dibuat oleh user.
- Statistik & analitik lengkap: jumlah artikel, acara, laporan, dan pengguna.

#### **Admin Dashboard**
- CRUD Acara dan Artikel.
- Statistik & analitik terbatas.

#### **User Dashboard**
- Membuat artikel budaya (status menunggu persetujuan).
- Melaporkan acara dengan dokumentasi.
- Melihat status artikel yang diajukan.

---

## 🛠️ Teknologi yang Digunakan

| **Teknologi**    | **Kegunaan**                 |
|------------------|-------------------------------|
| **Laravel**      | Backend & REST API            |
| **MySQL**        | Database                      |
| **Blade / React / Vue** | (Opsional) Tampilan UI             |
| **TailwindCSS**  | Desain antarmuka              |
| **Filament**     | Dashboard Admin & Manajemen Data |

---

## 🚀 Instalasi & Setup

Ikuti langkah berikut untuk menjalankan project ini secara lokal:

### **1. Clone Repository**
```bash


<h1 >Budaya Nusantara</h1>



<h2>Tech Stack</h2>
<ul>
    <li>laravel 12</li>
    <li>filament 3.3</li>
    <li>tailwind 4.1.11</li>
    <li>node js 24.5</li>
    <li>vite 7.0.4</li>
</ul>
