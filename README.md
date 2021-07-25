# Sipedes

Jika menggunakan terminal saya menggunakan server berikut.
`php -S "localhost:8989"`

- [x] ~~Surat Datang~~
- [x] ~~Surat Domisili~~
- [x] ~~Surat Lahir~~
- [x] ~~Surat Mati~~
- [x] ~~Surat Pindah~~


## Todo
- [x] ~~Tambah spek database pada table penduduk { kec. kab. provinsi}.~~
- [x] ~~Tambah spek database pada table pindah tujuan {desa, rt, rw, kec. , kab. , provinsi}.~~
- [x] ~~Perbaharui format surat pindah.~~
- [x] ~~hari dan tanggal pada surat.~~


## edit
- [x] ~~tampilakan data dari mysql (kepindah) => nokk, nama kepala keluarga , alasan.~~
- [x] ~~cetak surat.~~
- [x] ~~+ anggota keluarga yang pindah.~~
- [x] ~~ambil nama untuk get anggota dari `tb_kk`.~~
- [x] ~~`POST id_pend && POST id_kk.`~~


## Link Penyelamat
- [import mysql](https://nicolasbouliane.com/blog/how-to-fix-the-1046-no-database-selected-error-in-phpmyadmin)
- [Insert Data Into MySQL Using PHP](https://www.studentstutorial.com/php/php-mysql-data-insert)
- [Insert Date in MySQL](https://www.ntchosting.com/encyclopedia/databases/mysql/insert-date/)
- [Cara membuat Tabel di phpMyAdmin dan Relasinya](https://kelasprogrammer.com/cara-membuat-tabel-di-phpmyadmin/#Memulai_membuat_tabel_di_phpMyAdmin)
- [SQL JOIN - w3schools](https://www.w3schools.com/sql/sql_join.asp)
- [Get selected value in dropdown list using JavaScript](https://stackoverflow.com/questions/1085801/get-selected-value-in-dropdown-list-using-javascript)
- [JavaScript change Event](https://www.javascripttutorial.net/javascript-dom/javascript-change-event/)
- [Repository Chain Select](https://github.com/agitnaeta/chainselect/blob/master/app.js#L6-L30)



## Penggunaan
1. Edit Server koneksinya di `inc/koneksi.php` dan `anngota/index.php`.
2. Edit semua url localhostnya sesuai server kalian masing-masing pada url `scripts/suket-pdh.js` karena itu adalah RestAPI.

