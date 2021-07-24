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
- [x] Perbaharui format surat pindah.
- [x] ~~hari dan tanggal pada surat.~~


## edit
- [ ] tampilakan data dari mysql (kepindah) => nokk, nama kepala keluarga , alasan
- [x] cetak surat
- [x] + anggota keluarga yang pindah
- [x] ambil nama untuk get anggota dari `tb_kk`
- [x] POST id_pend && POST id_kk


## Link Penyelamat
- [Insert Data Into MySQL Using PHP](https://www.studentstutorial.com/php/php-mysql-data-insert)
- [Insert Date in MySQL](https://www.ntchosting.com/encyclopedia/databases/mysql/insert-date/)
- [Cara membuat Tabel di phpMyAdmin dan Relasinya](https://kelasprogrammer.com/cara-membuat-tabel-di-phpmyadmin/#Memulai_membuat_tabel_di_phpMyAdmin)
- [SQL JOIN - w3schools](https://www.w3schools.com/sql/sql_join.asp)
- [Get selected value in dropdown list using JavaScript](https://stackoverflow.com/questions/1085801/get-selected-value-in-dropdown-list-using-javascript)
- [JavaScript change Event](https://www.javascripttutorial.net/javascript-dom/javascript-change-event/)
- [thanks for this repo - Chain Select](https://github.com/agitnaeta/chainselect/blob/master/app.js#L6-L30)


## Testing
```bash
http://localhost:8989/anggota?kk=1&anggota=1
# untuk mencari id_kk = 1 dan anggota dengan id_kk=1
```
