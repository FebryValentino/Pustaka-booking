<section>
    <p align="justify">Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter maenggunakan metode MVC. apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk lebih jauh dalam belajar codeigniter</p>
    <p> MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu Model, View, dan Controller.</p>

    <ol type="a">
        <li>Model</li>

        <p align="justify">Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau memanipulasi database. Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. semua instruksi atau fungsi yang berhubungan dengan pengolahan database di letakan di dalam model. sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model. <br>Sebagai catatan, Semua model harus disimpan di dalam folder application/models</p>


        <li>View</li>
        <p allign="justify">View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(browser).Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan website</p>

        <li>Controller</li>
        <p align="justify">Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database(model) di ambil controller dan kemudian controller pula yang menampilkan nya ke view. Jadi controller lah yang mengolah instruksi.</p>
        <p align="justify">Dari penjelasan tentang model view dan controller di atas dapat disimpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, Controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskan kepada view untuk ditampilkan. jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi lebih mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur</p>
</section>