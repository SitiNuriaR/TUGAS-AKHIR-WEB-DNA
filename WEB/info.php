<?php phpinfo(); ?>

/* simpan di htdocs dengan format info.php
download laravel di laravel.com instalasi via composer
laravel/com -> instalation -> download -> Composer-Setup.exe 
cek di cmd. jika composer sudah ter install akan muncul tulisan composer
download laravel dengan cara arahkan dulu lokasi yang akan kita gunakan untuk menyimpan
di cmd : cd Downloads
-> paste  kan alamat terminal yang kita dapat di via composer create project ("composer create-project --prefer-dist laravel/laravel blog")
-> enter, tunggu instalasi

masuk ke folder laravel tadi
->cd folder
-> php artisan serve (untuk menjalankan), untuk stop Ctrl+C


cara cek laravel versi berapa : php artisan -V

menge push dari laravel ke github
buat repo di akun github kita, clone, copy kan file yang ada di folder laravel tadi, track file untracked, commit, push, cek di github

kalo clone lagi ke folder lain, clone file, ketikkan composer install
-> copy kan isi yang ada di file .env example kemudian paste kan di file .env
-> di cmd ketikkan php artisan key:generate
-> php artisan config:clear
-> php artisan serve
*/