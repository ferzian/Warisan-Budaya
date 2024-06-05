<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Main/home');
});

Route::get('/galeri', function () {
    return view('Main/galeri');
});

Route::get('/about', function () {
    return view('Main/about');
});

Route::get('/login', function () {
    return view('Main/login');
});

Route::get('/bangunan', function () {
    return view('kategori/bangunan', ['bangunan' => [
        [
            'id' => 1,
            'bg-card' => url('assets/image/jakarta/gambar1.jpg'),
            'title' => 'Monumen Nasional, Jakarta',
            'desc' => 'Monas adalah ikon kota Jakarta, Indonesia. Monumen setinggi 132 meter ini didirikan untuk mengenang perjuangan bangsa Indonesia dalam merebut kemerdekaan dari penjajahan Belanda.'
        ],
        [
            'id' => 2,
            'bg-card' => url('assets/image/jawa tengah/gambar1.jpg'),
            'title' => 'Candi Borobudur, Jawa Tengah',
            'desc' => 'Situs Budaya Candi Borobudur merupakan salah satu keajaiban dunia yang terletak di Magelang, Jawa Tengah, Indonesia. Candi ini adalah salah satu peninggalan bersejarah dan keagamaan terpenting di Indonesia, serta salah satu situs Buddha terbesar di dunia.'

        ],
        [
            'id' => 3,
            'bg-card' => url('assets/image/bali/gambar1.jpg'),
            'title' => 'Pura Tanah Lot, Bali',
            'desc' => 'Monas adalah ikon kota Jakarta, Indonesia. Monumen setinggi 132 meter ini didirikan untuk mengenang perjuangan bangsa Indonesia dalam merebut kemerdekaan dari penjajahan Belanda.'
        ],
        [
            'id' => 4,
            'bg-card' => url('assets/image/aceh/gambar1.jpg'),
            'title' => 'Masjid Raya Baiturrahman, NAD',
            'desc' => 'Masjid Baiturrahman merupakan salah satu masjid yang memiliki makna dan sejarah penting di Surabaya, Jawa Timur, Indonesia.'
        ],
        [
            'id' => 5,
            'bg-card' => url('assets/image/banten/gambar1.jpg'),
            'title' => 'Keraton Surosowan, Banten',
            'desc' => 'Keraton Surosowan adalah situs yang terletak di Kota Serang, Provinsi Banten, Indonesia. Dibangun pada abad ke-16 oleh Sultan Maulana Hasanuddin, putra Sunan Gunung Jati, Keraton Surosowan merupakan pusat pemerintahan pada masa kejayaan Kesultanan Banten.'
        ],
        [
            'id' => 6,
            'bg-card' => url('assets/image/bangka belitung/gambar1.jpg'),
            'title' => 'Buang Jung, Bangka Belitung',
            'desc' => 'Buang Jung, juga dikenal sebagai Pulau Buang atau Pulau Bung, adalah sebuah pulau kecil yang terletak di Selat Karimata, di sebelah barat Kalimantan, Indonesia.'

        ]
    ]]);
});

Route::get('/bangunan/{id}', function ($id) {
    $bangunan = [
        [
            'id' => 1,
            'bg-card' => url('assets/image/jakarta/gambar1.jpg'),
            'title' => 'Monumen Nasional, Jakarta',
            'desc1' => 'Monas adalah ikon kota Jakarta, Indonesia. Monumen setinggi 132 meter ini didirikan untuk mengenang perjuangan bangsa Indonesia dalam merebut kemerdekaan dari penjajahan Belanda.',
            'desc2' => 'Pembangunan Monas dimulai pada tahun 1961 di bawah pemerintahan Presiden Soekarno dan diresmikan
            pada
            12
            Juli 1975 oleh Presiden Soeharto. Monas dikelilingi oleh taman luas yang sering digunakan
            sebagai
            tempat
            rekreasi dan olahraga oleh warga Jakarta.',
            'image1' => url('assets/image/jakarta/gambar2.jpg'),
            'desc3' => 'Di dasar Monas terdapat museum sejarah perjuangan Indonesia yang menggambarkan perjuangan rakyat
            Indonesia dari zaman pra-kolonial hingga kemerdekaan. Selain itu, terdapat ruang diorama yang
            menampilkan berbagai peristiwa penting dalam sejarah Indonesia. Pengunjung juga dapat naik ke
            puncak
            Monas menggunakan lift untuk menikmati pemandangan kota Jakarta dari ketinggian.',
            'desc4' => 'Lokasi: Candi Bahal terletak di Desa Padang Matinggi, Kecamatan Tanjung Morawa, Kabupaten Deli
            Serdang,
            Sumatera Utara. Meskipun lokasinya agak terpencil, candi ini sering dikunjungi oleh para
            wisatawan
            dan
            peneliti arkeologi yang tertarik dengan sejarah dan keunikan bangunan tersebut.',
            'image2' => url('assets/image/jakarta/gambar1.jpg'),
            'desc5' => 'Monas tidak hanya menjadi simbol nasionalisme, tetapi juga merupakan destinasi wisata populer
            bagi
            turis
            lokal maupun mancanegara. Monumen ini sering digunakan untuk berbagai acara kenegaraan, upacara,
            dan
            peringatan hari-hari besar nasional. Dengan keindahan arsitektur dan nilai sejarahnya, Monas
            tetap
            menjadi kebanggaan bangsa Indonesia.'
        ],
        [
            'id' => 2,
            'bg-card' => url('assets/image/jawa tengah/gambar1.jpg'),
            'title' => 'Candi Borobudur, Jawa Tengah',
            'desc' => 'Situs Budaya Candi Borobudur merupakan salah satu keajaiban dunia yang terletak di Magelang, Jawa Tengah, Indonesia. Candi ini adalah salah satu peninggalan bersejarah dan keagamaan terpenting di Indonesia, serta salah satu situs Buddha terbesar di dunia.'

        ],
        [
            'id' => 3,
            'bg-card' => url('assets/image/bali/gambar1.jpg'),
            'title' => 'Pura Tanah Lot, Bali',
            'desc' => 'Monas adalah ikon kota Jakarta, Indonesia. Monumen setinggi 132 meter ini didirikan untuk mengenang perjuangan bangsa Indonesia dalam merebut kemerdekaan dari penjajahan Belanda.'
        ],
        [
            'id' => 4,
            'bg-card' => url('assets/image/aceh/gambar1.jpg'),
            'title' => 'Masjid Raya Baiturrahman, NAD',
            'desc' => 'Masjid Baiturrahman merupakan salah satu masjid yang memiliki makna dan sejarah penting di Surabaya, Jawa Timur, Indonesia.'
        ],
        [
            'id' => 5,
            'bg-card' => url('assets/image/banten/gambar1.jpg'),
            'title' => 'Keraton Surosowan, Banten',
            'desc' => 'Keraton Surosowan adalah situs yang terletak di Kota Serang, Provinsi Banten, Indonesia. Dibangun pada abad ke-16 oleh Sultan Maulana Hasanuddin, putra Sunan Gunung Jati, Keraton Surosowan merupakan pusat pemerintahan pada masa kejayaan Kesultanan Banten.'
        ],
        [
            'id' => 6,
            'bg-card' => url('assets/image/bangka belitung/gambar1.jpg'),
            'title' => 'Buang Jung, Bangka Belitung',
            'desc' => 'Buang Jung, juga dikenal sebagai Pulau Buang atau Pulau Bung, adalah sebuah pulau kecil yang terletak di Selat Karimata, di sebelah barat Kalimantan, Indonesia.'

        ]
    ];
    $blogBangunan = Arr::first($bangunan, function ($blogBangunan) use ($id) {
        return $blogBangunan['id'] == $id;
    });

    return view('kategori/blogBangunan', ['blogBangunan' => $blogBangunan]);
});

Route::get('/monas', function () {
    return view('/Blog/jakarta/monas');
});

Route::get('/musium', function () {
    return view('/Main/halamanMusium');
});

Route::get('/bena', function () {
    return view('/Blog/ntt/BenaTraditionalVillage');
});
