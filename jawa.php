<?php
include 'koneksi.php';
$query = "SELECT * FROM destinasi_jawa";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>{$row['nama']}</h3>";
    echo "<img src='{$row['gambar']}' alt='{$row['nama']}' />";
    echo "<p>{$row['deskripsi']}</p>";
    echo "<p>{$row['detail']}</p>";
}
?>

INSERT INTO destinasi_jawa (nama, lokasi, gambar, deskripsi, detail) VALUES
-- Gunung Bromo
(
  'Gunung Bromo',
  'Probolinggo, Pasuruan, Lumajang, Malang - Jawa Timur',
  'img/trip/bromo.jpg',
  'Gunung api aktif dengan pemandangan golden sunrise yang menakjubkan.',
  'Gunung Bromo adalah destinasi unggulan di Taman Nasional Bromo Tengger Semeru, dengan suhu dingin, medan terjal, dan pemandangan negeri di atas awan. Disarankan mengenakan jaket tebal dan sepatu hiking.'
),

-- Candi Prambanan
(
  'Candi Prambanan',
  'Sleman, Yogyakarta dan Klaten, Jawa Tengah',
  'img/trip/candi prambanan.jpg',
  'Candi Hindu terbesar di Indonesia, dibangun pada abad ke-9.',
  'Candi ini dipersembahkan untuk Dewa Siwa, Brahma, dan Wishnu. Dekat dengan pertunjukan Sendratari Ramayana, dengan akses mudah dari Jogja-Solo.'
),

-- Kawah Ijen
(
  'Kawah Ijen',
  'Bondowoso & Banyuwangi, Jawa Timur',
  'img/trip/kawah ijen.jpg',
  'Gunung berapi aktif dengan danau kawah berwarna hijau toska dan blue fire.',
  'Kawah Ijen memiliki kedalaman 200m dan luas 5.466 ha. Menawarkan pemandangan sunrise dan fenomena langka blue fire. Medan pendakian terjal, disarankan masker dan sepatu hiking.'
),

-- Kebun Raya Bogor
(
  'Kebun Raya Bogor',
  'Bogor, Jawa Barat',
  'img/trip/kebun raya bogor.jpg',
  'Taman botani terbesar di Indonesia dengan ribuan jenis tumbuhan.',
  'KRB memiliki 15.000 jenis tumbuhan di lahan 87 ha. Cocok untuk edukasi, wisata sejarah, dan liburan keluarga. Banyak area bunga, pepohonan, serta bangunan bersejarah.'
);

<?php include 'header.php'; ?>
<div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3>Jawa Island</h3>
            <p>Popular Destination of Jawa Island</p>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-lg-12 col-md-12">
                    <div class="destination_info">
                        <h3>Gunung Bromo</h3>
                        <img src="img/trip/bromo.jpg" alt="Gunung Bromo" style="float: right; margin-left: 60px; width: 350px;">
                        <p>Gunung Bromo adalah salah satu gunung api yang masih aktif di Indonesia. Gunung yang memiliki ketinggian 2.392 meter di atas permukaan laut ini merupakan destinasi andalan Jawa Timur. Gunung Bromo berdiri gagah dikelilingi kaldera atau lautan pasir seluas 10 kilometer persegi.

                        <p> Wisatawan yang berkunjung ke Gunung Bromo akan disambut oleh pemandangan yang indah. Salah satu hal yang terkenal dari Gunung Bromo adalah golden sunrise-nya, pasalnya, Gunung Bromo dinobatkan sebagai tempat yang menawarkan pemandangan matahari terbit terbaik di Pulau Jawa.
                            Sesaat setelah momen matahari terbit berakhir, wisatawan akan kembali disuguhkan pemandangan yang tak kalah indanya, yaitu pemandangan negeri di atas awan.</p>
                            
                        
                        <p> Gunung Bromo masuk ke dalam kawasan Taman Nasional Bromo Tengger Semeru dimana wisatawan dapat mengunjungi destinasi lain seperti Gunung Semeru, Gunung Tengger, Gunung Batok, dan tentunya Gunung Bromo.
                            
                            Secara administratif, Gunung Bromo masuk ke dalam 4 kabupaten, yaitu Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang.</p>
                            
                        <p> Bagi Anda yang menginap di BATIQA Hotel Surabaya, Anda dapat mencapai Gunung Bromo setelah menempuh 3,5 jam perjalanan dara
                            Terdapat alternatif untuk mencapai Gunung Bromo melalui jalur darat, yaitu dengan cara transit di Kota Malang. Rute yang ditempuh menjadi Malang-Tumpang-Gubuklakah-Ngandas-Jemplang-Bromo. Perkiraan waktu tempuh adalah 2,5 jam perjalanan. Namun apabila memilih rute ini, bersiaplah menemukan medan yang cukup terjal.
                            
                            Saat tiba di Gunung Bromo, kemungkinan Anda akan berada di suhu di bawah 10 derajat celcius. Maka pastikan Anda telah mempersiapkan jaket tebal, syal, serta sarung tangan. Pastikan juga Anda telah mengemas kacamata dan masker untuk melindungi bagian wajah Anda.
                            
                        <p> Demi kenyamanan Anda dalam mengeksplor Gunung Bromo, ada baiknya apabila Anda mengenakan sepatu boot atau sepatu hiking dibandingkan menggunakan sepatu sneaker biasa. Hindari penggunaan sandal karena medan yang akan Anda temui memiliki kontur yang berbatu dan terjal. </p>
                        <div class="single_destination">
                            <h3>Candi Prambanan</h3>
                            <img src="img/trip/candi prambanan.jpg" alt="Candi Prambanan" style="float: right; margin-left: 60px; width: 350px;">
                            <p>Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Sebagian lokasi candi Prambanan berada di Kabupaten Sleman dan sebagian di Kabupaten Klaten. Lokasi candi Prambanan mudah untuk ditemukan karena dekat dengan jalan raya Jogja-Solo, sehingga akses transportasi juga mudah dijangkau.</p>

                            <p>Candi Prambanan diperkirakan dibangun pada pertengahan abad ke-9, pada masa pemerintahan Raja Balitung Maha Sambu dari Wangsa Sanjaya. Meskipun belum bisa dipastikan tahun pendiriannya dan siapa yang memerintahkan pembuatannya, dugaan tersebut didasarkan pada prasasti Syiwagrha yang ditemukan di Prambanan. Kini prasasti tersebut disimpan di Museum Nasional di Jakarta.</p>
                                
                            <P>Candi ini dibuat untuk memuja Trimutri, tiga dewa utama Hindu, yaitu Brahma, Wishnu dan Siwa. Namun berdasar denah candi, candi Siwa merupakan yang terbesar dengan tinggi 47 m, yang menunjukkan Siwa lebih diutamakan.</P>
                                
                            <p>Di dekat candi Prambanan terdapat tempat untuk menggelar pertunjukan Sendratari Ramayana. Ada dua lokasi yaitu indoor danoutdoor. Dua lokasi ini menawarkan pengalaman yang berbeda bagi penikmat pertunjukkan seni.
                                
                                Untuk menuju lokasi candi Prambanan bisa menggunakan transportasi pribadi ataupun umum. Dari arah Solo menuju ke barat (ke arah Yogyakarta) kurang lebih 53 km.</p>
                        </div>
                        <div class="single_destination">
                            <h3>Kawah Ijen</h3>
                            <img src="img/trip/kawah ijen.jpg" alt="Kawah Ijen" style="float: right; margin-left: 60px; width: 350px;">
                            <p>Terletak di wilayah Cagar Alam Taman Wisata Ijen Bondowoso, Jawa Timur, Kawah Ijen membentang di dua kabupaten, yaitu Bondowoso dan Banyuwangi. Selain itu, gunung berapi aktif ini memiliki ketinggian 2.443 meter di atas permukaan laut. Uniknya, kawah ini juga memiliki danau kawah yang sangat dalam, mencapai 200 meter, dan luasnya mencapai 5.466 hektar. Oleh karena itu, tidak mengherankan jika Kawah Ijen diklaim sebagai salah satu danau kawah terbesar di dunia.</p>

                            <p>Dengan panorama danau hijau toska yang dramatis dan suhu yang sejuk, Kawah Ijen menyajikan pemandangan yang unik dan memikat. Keindahan alam yang luar biasa, ditambah dengan kekayaan mineral seperti belerang, telah menjadikan kawah ini sebagai tujuan wisata populer bagi wisatawan lokal maupun mancanegara. Bahkan, keberadaan belerang ini telah menjadi sumber mata pencaharian utama bagi sebagian besar masyarakat sekitar yang bekerja sebagai penambang belerang.</p>
                            <P>Akses untuk menuju kawasan ini terbilang cukup layak, pengunjung dapat menggunakan kendaraan umum maupun kendaraan pribadi. Jalan beraspal dari Kota Bondowoso menuju Kawah Ijen, terbilang mulus dan sangat memadai.

                                Untuk mencapai ke puncak kawahnya, pengunjung harus berjalan kaki sejauh 3 km dan memulai pendakian dari Pos Paltidung di lereng Gunung Ijen selama kurang lebih 1,5 hingga 2 jam.</P>
                                
                            <P>Sesampainya di bibir kawah, sangat disarankan untuk menggunakan masker karena danau Kawah Ijen mengandung belerang yang sangat tinggi. Gas belerang yang terhirup dalam jumlah banyak dapat membahayakan kesehatan. Selain itu, pengunjung juga berkesempatan untuk menyaksikan langsung aktivitas para penambang belerang di dalam kawah. Namun, perlu diingat bahwa medan di sekitar kawah sangatlah terjal dan berbatu, sehingga pengunjung harus selalu berhati-hati untuk menghindari risiko kecelakaan.</P>
                                
                            <p>Kawah Ijen adalah destinasi wajib bagi para wisatawan yang berkunjung ke Jawa Timur. Selain menyuguhkan pemandangan matahari terbit yang memukau, kawah ini juga terkenal dengan fenomena alam langka yaitu blue fire atau api biru. Fenomena unik ini konon hanya dapat ditemukan di dua tempat di dunia, yaitu Indonesia dan Islandia.</P>
                        </div>
                        <div class="single_destination">
                            <h3>Kebun Raya Bogor</h3>
                            <img src="img/trip/kebun raya bogor.jpg" alt="Kebun Raya Bogor" style="float: right; margin-left: 60px; width: 350px;">
                            <p>Bogor disebut kota hujan dengan ribuan wisata cantik. Kota sejuk ini telah berkembang menjadi kawasan wisata dengan banyak pesona, salah satunya Kebun Raya Bogor atau KRB.</p>

                            <P>Selain menikmati keindahan alam ribuan tumbuhan dan pepohonan, Anda juga bisa belajar banyak tentang sejarah, flora dan fauna di sini.</P>
                                
                            <p>Kebun Raya Bogor merupakan sebuah kebun raya yang selain digunakan sebagai tempat untuk melindungi berbagai tumbuhan juga sering dijadikan sebagai tempat peristirahatan oleh wisatawan lokal di Bogor dan daerah lain di Indonesia.</p>
                            <p>Taman di Istana Bogor memiliki luas sekitar 87 hektar dan memiliki sekitar 15.000 jenis tumbuhan, akan menjadi tempat yang sangat luas dan menyenangkan untuk bersantai bersama keluarga.</p>
                            <p>Ada banyak hal yang bisa Anda lakukan di Kebun Raya Bogor ini. Meskipun sebagian besar kawasannya berisi taman-taman bunga dan pepohonan, jangan anggap Anda hanya bisa duduk-duduk sepanjang waktu dan hanya bisa memandang bunga atau pepohonan itu saja.</p>
                            <p>Selain itu, terdapat beberapa bangunan dan benda bersejarah yang dapat menambah pemahaman kita tentang peristiwa masa lalu sebelum kemerdekaan. Maka dari itu, bisa dikatakan Anda akan mendapatkan pengalaman liburan yang benar-benar lengkap di kebun raya ini.</p>
                        </div>
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Contact for join</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Phone no.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="" id="" cols="30" rows="10"placeholder="Message" ></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>