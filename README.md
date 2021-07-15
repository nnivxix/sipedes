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
- [ ] Tambah spek database pada table pindah tujuan {desa, rt, rw, kec. , kab. , provinsi}
- [ ] Perbaharui format surat pindah.
- [ ] hari dan tanggal pada surat.
