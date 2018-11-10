Seleksi Grandboot Camp Arkademy 2018

Kebutuhan 
1. Composer dikarenakan menggunakan framework Laravel
2. Node.js

Petunjuk Penggunaan
1. Clone projek
2. Setelah itu jalankan perintah <code>composer update</code>
3. Setelah itu jalankan perintah <code>npm install</code>
3. Ubah file .env.example menjadi .env serta pada bagian konfigurasi MySQL pada file .env ubahlah menjadi seperti berikut 
<code>
DB_CONNECTION=mysql
</code>
<code>
DB_HOST=127.0.0.1
</code>
<code>
DB_PORT=3306
</code>
<code>
DB_DATABASE=arkademy
</code>
<code>
DB_USERNAME=root
</code>
<code>
DB_PASSWORD=
</code>


4. Jalankan perintah <code>php artisan migrate</code>
5. Jalankan seeder table dengan perintah <code>composer dump-autoload</code> serta <code>php artisan db:seed</code>
6. Apabila perintah seeder gagal, saya telah menyediakan backup sql di dalam github ini
7. Setelah selesai, lakukan perintah <code>php artisan serve</code> untuk menjalankan projek


