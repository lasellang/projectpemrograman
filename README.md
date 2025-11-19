## Perubahan Projects Blade Template

### Integrasi Controller ke View

**Sebelum:**
- Data portfolio di-hardcode langsung di HTML
- Setiap project item ditulis manual satu per satu

**Sesudah:**
- Menggunakan loop `@foreach($projects as $index => $project)` untuk iterasi data dari controller
- Data project (image, category, title, link) ditampilkan secara dinamis menggunakan sintaks Blade `{{ }}`
- Link class ditentukan secara conditional:
  - `popup-youtube` → untuk video
  - `work-popup` → untuk gambar (.jpg, .png)
  - Link biasa → untuk halaman HTML
- Grid layout menyesuaikan otomatis berdasarkan index item

**Keuntungan:**
- Lebih mudah menambah/mengedit project (cukup edit di controller)
- Kode lebih clean dan maintainable
- Menghindari duplikasi code


**Kesimpulan:**
- Semua routing halaman statis pada proyek ini dipindahkan dari closure ke Controller (`PageController`) untuk menjaga kerapian dan struktur kode.
- Controller menangani pemuatan data dan pengiriman ke view Blade yang sesuai.
- Routing di `routes/web.php` kini menggunakan sintaks array `[Controller::class, 'method']`, sehingga mudah dibaca dan dikembangkan.
- Penggunaan controller sesuai prinsip MVC Laravel membuat logika aplikasi terorganisir dan menjaga maintainability.
- Pada halaman projects, contoh data proyek dikirim dari controller ke view melalui variabel `$projects`. Ini memudahkan perubahan data secara dinamis di masa depan.