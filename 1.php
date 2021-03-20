Analisis:
1. Input jam1, mnt1, dtk1, jam2, kecepatan, interval_wkt1, interval_wkt2
2. waktu_awal, waktu_akhir

Algoritma:
1. Masukkan nilai jam awal (jam1, mnt1, dtk1), jam2 dan kecepatan
2. Maka waktu_awal = jam1 * 3600 + mnt1 * 60 + dtk1
        waktu_akhir = jam2 * 3600
        interval_wkt1 = interval_wkt1 * 60
        interval_wkt2 = interval_wkt2 * 60
3. Untuk mencari jumlah keseluruhan waktu yaitu waktu = (waktu_akhir - waktu_awal)
4. Maka waktu = waktu - interval_wkt1
        waktu = waktu div interval_wkt2
5. Kecepatan = waktu + kecepatan
6. Selesai
