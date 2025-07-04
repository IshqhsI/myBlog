# Blog Pribadi Saya

![Blog Pribadi Saya](https://placehold.co/1200x600/6F4E37/F5E6D8?text=Blog+Pribadi+Saya)

Selamat datang di repositori untuk blog pribadi saya! Blog ini adalah platform di mana saya berbagi pemikiran, pengalaman, tutorial, dan wawasan tentang berbagai topik yang saya minati, seperti pengembangan web, teknologi, produktivitas, dan kehidupan sehari-hari.

## 🌟 Deskripsi Proyek

Blog ini dibangun dengan tujuan untuk:
* Menjadi wadah pribadi untuk mendokumentasikan perjalanan belajar dan proyek-proyek saya.
* Berbagi pengetahuan dan pengalaman dengan komunitas yang lebih luas.
* Membangun portofolio tulisan dan proyek teknis saya.
* Menyediakan platform yang cepat, responsif, dan mudah diakses untuk konten.

## ✨ Fitur Utama

* **Desain Responsif:** Tampilan yang optimal di berbagai perangkat (desktop, tablet, mobile).
* **Navigasi Intuitif:** Mudah menemukan artikel dan kategori yang relevan.
* **Pencarian Artikel:** Fungsi pencarian untuk menemukan konten dengan cepat.
* **Kategori & Tag:** Organisasi konten yang rapi untuk penjelajahan yang mudah.
* **Mode Gelap/Terang (Opsional):** Pilihan tema visual untuk kenyamanan membaca.
* **Optimasi SEO:** Struktur yang ramah mesin pencari untuk visibilitas.
* **Integrasi Komentar (Opsional):** Memungkinkan interaksi pembaca (misalnya, Disqus, Utterances).
* **Feed RSS:** Berlangganan pembaruan artikel terbaru.

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun menggunakan tumpukan teknologi berikut:

* **Frontend:**
    * Blade (Laravel)
    * Tailwind CSS
    * JavaScript
* **Backend:**
    * Laravel (PHP)
    * MySQL

## 🚀 Instalasi & Penggunaan (Lokal)

Untuk menjalankan proyek blog ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Kloning Repositori:**
    ```bash
    git clone [https://github.com/IshqhsI/myBlog.git](https://github.com/IshqhsI/myBlog.git)
    cd myBlog
    ```

2.  **Instal Dependensi PHP (Composer):**
    ```bash
    composer install
    ```

3.  **Instal Dependensi Node.js (untuk Tailwind CSS):**
    ```bash
    npm install # atau yarn install
    ```

4.  **Konfigurasi Lingkungan:**
    Buat salinan file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
    Kemudian, buat kunci aplikasi:
    ```bash
    php artisan key:generate
    ```
    Edit file `.env` dan konfigurasikan detail database MySQL Anda:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda # Sesuaikan dengan nama database yang Anda buat di MySQL
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda
    ```

5.  **Migrasi Database:**
    Jalankan migrasi database untuk membuat tabel:
    ```bash
    php artisan migrate
    ```

6.  **Kompilasi Aset Frontend (Tailwind CSS):**
    ```bash
    npm run dev # Untuk pengembangan
    # atau
    npm run build # Untuk produksi
    ```

7.  **Jalankan Aplikasi:**
    ```bash
    php artisan serve
    ```
    Aplikasi akan berjalan di `http://localhost:8000` (atau port lain yang ditentukan).


## 🤝 Kontribusi

Meskipun ini adalah blog pribadi, saya terbuka untuk saran atau perbaikan. Jika Anda menemukan bug atau memiliki ide untuk fitur, silakan:
1.  Fork repositori ini.
2.  Buat branch baru (`git checkout -b feature/nama-fitur-baru`).
3.  Lakukan perubahan Anda.
4.  Commit perubahan Anda (`git commit -m 'Tambahkan fitur baru'`).
5.  Push ke branch Anda (`git push origin feature/nama-fitur-baru`).
6.  Buka Pull Request.

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## 📧 Kontak

Jika Anda memiliki pertanyaan, saran, atau ingin terhubung, jangan ragu untuk menghubungi saya:

* **Nama:** Muhammad Ridhwan
* **Email:** me@muhammadridhwan.com
* **GitHub:** https://github.com/IshqhsI
