<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        if (!$user) {
            return;
        }

        $images = [
            'articles/1766833284_ea38c90649d9fbdd5719f4b895be2a9e.jpg',
            'articles/1766831206_DSC9912UbMq9.jpg',
            'articles/1766831197_e28127358c1205df9c178507d44a1d97.jpg',
            'articles/1766831150_eb65bdec28014d7f7f058802f54f7515.jpeg',
            'articles/1766831134_203b8bc1d5a95bc07ce7d6d2175fbde8.jpeg',
            'articles/PR64X9nmTWM0bMZDUHltgurp5Xg0zeo64fVx6Ys0.jpg',
            'articles/ErIMH2sjpdK2QNd9R49wEuRxqYf0XAjQPXLQWB4s.png',
            'articles/bngAMbUZ9ULRfvAdWEpzRDb2DeN2Yy74G3Jno8JS.jpg',
        ];

        $articles = [
            [
                'title' => 'Warga Tanean Gelar Pasar Pangan Murah untuk Sambut Akhir Pekan',
                'excerpt' => 'Pasar pangan murah dibuka untuk membantu warga mendapatkan bahan pokok dengan harga terjangkau.',
                'content' => "Pasar pangan murah digelar di halaman balai desa sejak pagi. Warga datang membawa daftar belanja kebutuhan pokok seperti beras, telur, minyak goreng, dan sayur segar.\n\nPanitia menyiapkan alur antrean sederhana agar proses pembelian tetap tertib. Selain belanja, warga juga mendapat informasi singkat tentang pengelolaan stok pangan keluarga.\n\nKegiatan ini direncanakan menjadi agenda rutin jika respons masyarakat tetap tinggi.",
                'category' => 'warta',
            ],
            [
                'title' => 'Komunitas Pemuda Menghidupkan Lagi Perpustakaan Kampung',
                'excerpt' => 'Rak lama dibersihkan, buku disusun ulang, dan kelas membaca anak kembali dibuka setiap sore.',
                'content' => "Perpustakaan kampung yang sempat sepi mulai ramai kembali setelah komunitas pemuda setempat melakukan kerja bakti. Mereka mengecat rak, memilah buku, dan membuat sudut baca anak.\n\nSetiap sore, relawan membuka kelas membaca ringan untuk anak-anak sekolah dasar. Orang tua menyambut baik kegiatan ini karena anak-anak memiliki ruang belajar yang aman.\n\nKomunitas juga membuka donasi buku layak baca untuk menambah koleksi.",
                'category' => 'warita',
            ],
            [
                'title' => 'Suara Pedagang Kecil: Bertahan Lewat Layanan Pesan Antar',
                'excerpt' => 'Pedagang rumahan mulai memakai layanan pesan antar sederhana melalui grup warga.',
                'content' => "Beberapa pedagang kecil di lingkungan Tanean mulai memanfaatkan grup pesan singkat untuk menerima pesanan. Cara ini membantu mereka menjangkau pelanggan tanpa harus membuka lapak lebih lama.\n\nMenu yang ditawarkan beragam, mulai dari nasi bungkus, kue basah, hingga minuman tradisional. Pembeli cukup mengirim pesan lalu mengambil pesanan di titik yang disepakati.\n\nModel sederhana ini dinilai efektif karena tidak membutuhkan aplikasi tambahan.",
                'category' => 'swara',
            ],
            [
                'title' => 'Lensa Tanean: Senja di Pematang Sawah Setelah Hujan',
                'excerpt' => 'Cahaya senja memantul di petak sawah dan menghadirkan suasana tenang setelah hujan reda.',
                'content' => "Langit sore berubah jingga setelah hujan reda. Di pematang sawah, beberapa petani masih memeriksa aliran air sebelum pulang.\n\nPantulan cahaya di permukaan sawah membuat lanskap desa terlihat hangat dan tenang. Anak-anak tampak bermain di jalan kecil sambil menunggu orang tua mereka selesai bekerja.\n\nMomen sederhana ini menjadi pengingat tentang ritme hidup desa yang pelan namun kuat.",
                'category' => 'lensa',
            ],
            [
                'title' => 'Sekolah Desa Mulai Terapkan Kebun Belajar untuk Siswa',
                'excerpt' => 'Siswa belajar menanam cabai, kangkung, dan tomat sebagai bagian dari kegiatan praktik lingkungan.',
                'content' => "Sekolah desa membuka kebun belajar kecil di belakang ruang kelas. Guru mengajak siswa mengenal bibit, media tanam, dan cara merawat tanaman secara bergiliran.\n\nKegiatan ini dibuat sederhana agar anak-anak memahami proses pangan dari dekat. Hasil panen pertama nantinya akan digunakan untuk kegiatan memasak bersama.\n\nPihak sekolah berharap kebun belajar dapat menumbuhkan kebiasaan merawat lingkungan sejak dini.",
                'category' => 'warta',
            ],
            [
                'title' => 'Kelompok Ibu Membuat Pelatihan Daur Ulang Kain Perca',
                'excerpt' => 'Kain perca disulap menjadi tas kecil dan hiasan rumah bernilai jual.',
                'content' => "Kelompok ibu di Tanean mengadakan pelatihan pemanfaatan kain perca. Peserta belajar memotong pola, menjahit sederhana, dan mengemas produk agar menarik.\n\nPelatihan ini bertujuan mengurangi limbah kain sekaligus membuka peluang pendapatan tambahan. Beberapa produk awal langsung dipajang di meja bazar kampung.\n\nPendamping pelatihan mendorong peserta mulai menjual produk melalui jaringan warga terlebih dahulu.",
                'category' => 'warita',
            ],
            [
                'title' => 'Catatan Warga: Jalan Kecil yang Jadi Ruang Bertemu',
                'excerpt' => 'Di antara rumah-rumah, jalan kecil menjadi tempat warga saling menyapa dan bertukar kabar.',
                'content' => "Setiap pagi, jalan kecil di tengah permukiman menjadi jalur ramai bagi anak sekolah, pedagang sayur, dan warga yang berangkat kerja. Di sana, sapaan singkat sering berubah menjadi percakapan panjang.\n\nRuang sederhana ini memperlihatkan kuatnya hubungan sosial warga. Meski tidak dirancang sebagai tempat berkumpul, jalan kecil itu menyimpan banyak cerita sehari-hari.\n\nBagi warga, kedekatan seperti ini adalah bagian penting dari kehidupan kampung.",
                'category' => 'swara',
            ],
            [
                'title' => 'Lensa Tanean: Aktivitas Pagi di Pasar Tradisional',
                'excerpt' => 'Pasar bergerak cepat sejak subuh, dari bongkar muat sayur hingga tawar-menawar pembeli.',
                'content' => "Pasar tradisional mulai hidup sebelum matahari naik. Pedagang menata sayur, ikan, dan bumbu dapur sambil menyapa pelanggan tetap.\n\nDi sudut pasar, buruh angkut membantu memindahkan barang dari kendaraan kecil ke lapak. Suasana ramai namun akrab menjadi wajah pasar yang khas.\n\nFoto-foto pagi ini merekam kerja banyak orang yang sering luput dari perhatian.",
                'category' => 'lensa',
            ],
        ];

        foreach ($articles as $i => $article) {
            Article::updateOrCreate(
                ['title' => $article['title']],
                $article + [
                    'user_id' => $user->id,
                    'image' => $images[$i],
                    'author' => $user->name,
                    'is_published' => true,
                    'published_at' => now()->subDays($i),
                    'approved_by' => $user->id,
                    'approved_at' => now()->subDays($i),
                ]
            );
        }
    }
}
