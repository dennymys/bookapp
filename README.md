# Tugas Pemrograman Integrasi Bookapp

Nama : Denny Manuel Yeremia Sinurat
NIM : 185150707111004

Pada praktikum ini percobaan yang dilakukan:
1. Instalasi projek lumen dengan nama bookapp
2. Membuat Database pada phpmyadmin dengan nama bookapp_lumen
3. Sesuaikan environment pada projek bookapp, pastikan data databasenya sesuai dengan database yang sudah dibuat
4. Membuat table books dengan cara Migration, dan buat kolom tabel pada migration.
5. Jalankan perintah php artisan migrate agar tabel books dimasukan ke database.
6. Membuat seeder untuk mengisi tabel books dengan data sesuai kolom, untuk memasukan ke database gunakan perintah "php artisan db:seed"
7. Membuat model untuk mendefinisikan atribut tabel. kemudian memanggil data melalui model, lalu membuat function dengan nama index untuk mengambil data semua buku.
8. Membuat route baru untuk memanggil function pada controller untuk memdapatkan data buku.
9. Menjalankan aplikasi dengan perintah "php -S localhost:8000 -t public" pada terminal dan akses localhost:8000/books untuk melihat isi database.
9. Lalu pada tugas praktikum dapat menampilkan detail buku sesuai dengan id dan memberikan pesan "Book Not Found" dan status code 404.
