<h3>Seleksi Grandboot Camp Arkademy 2018</h3>

Di sini saya menggunakan Framework Laravel

Kebutuhan 
1. Composer dikarenakan menggunakan framework Laravel
2. Node.js

Petunjuk Konfigurasi
1. Clone projek
2. Setelah itu jalankan perintah <code>composer update</code>
3. Setelah itu jalankan perintah <code>npm install</code>
3. Ubah file <code>.env.example</code> menjadi <code>.env</code> serta pada bagian konfigurasi MySQL pada file .env
4. Jalankan perintah <code>php artisan migrate</code>
5. Jalankan seeder table dengan perintah <code>composer dump-autoload</code> serta <code>php artisan db:seed</code>
6. Apabila perintah seeder gagal, saya telah menyediakan backup sql di dalam github ini
7. Setelah selesai, lakukan perintah <code>php artisan serve</code> untuk menjalankan projek
8. Setelah dijalankan, silakan buka projek dengan url <code>http://localhost:8000</code>

Kumpulan jawaban
1. Apabila projek telah berjalan dengan normal, maka akan masuk ke halaman Daftar Isi, di situ saya telah sediakan daftar jawaban soal yang telah saya kerjakan beserta urlnya.
2. Untuk file kodingnya sendiri dapat ditemukan di 
	-. Soal No. 1 dan 3 pada direktori <code>App/Http/Controllers/Api/ApiController</code>
	-. Soal No. 2, 6 serta 7 pada direktori <code>App/Http/Controllers/HomeController</code>


<h3>Terima kasih</h3>