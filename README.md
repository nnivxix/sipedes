# Sipedes
trouble shot [mysql](https://nicolasbouliane.com/blog/how-to-fix-the-1046-no-database-selected-error-in-phpmyadmin)

start using terminal
`php -S "localhost:8989"`


Join untuk Mendu
```sql
$sql_tampil = "SELECT * FROM tb_mendu JOIN tb_pdd ON (tb_mendu.id_pdd = tb_pdd.id_pend)";
```

- [x] ~~Surat Datang~~
- [x] ~~Surat Domisili~~
- [x] ~~Surat Lahir~~
- [x] ~~Surat Mati~~
- [x] ~~Surat Pindah~~


## Todo
- [x] ~~Tambah spek database pada table penduduk { kec. kab. provinsi}.~~
- [x] ~~Tambah spek database pada table pindah tujuan {desa, rt, rw, kec. , kab. , provinsi}.~~
- [ ] Perbaharui format surat pindah.
- [x] ~~hari dan tanggal pada surat.~~


## edit
- [ ] tampilakan data dari mysql (kepindah)
- [ ] cetak surat
- [ ] + anggota keluarga yang pindah


## Link Penyelamat
- [Insert Data Into MySQL Using PHP](https://www.studentstutorial.com/php/php-mysql-data-insert)
- [Insert Date in MySQL](https://www.ntchosting.com/encyclopedia/databases/mysql/insert-date/)
- [Cara membuat Tabel di phpMyAdmin dan Relasinya](https://kelasprogrammer.com/cara-membuat-tabel-di-phpmyadmin/#Memulai_membuat_tabel_di_phpMyAdmin)
