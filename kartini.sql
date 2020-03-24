-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kartini
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `isi` longtext,
  `date_created` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (41,'12 Arti Kesemutan di Kaki, Bisa Tandakan Penyakit Serius','&lt;p&gt;&lt;strong&gt;Liputan6.com, Jakarta&lt;/strong&gt; &lt;a href=&quot;https://hot.liputan6.com/read/4103172/penyebab-tangan-sering-kesemutan-tanda-masalah-kesehatan-serius?source=search&quot;&gt;Kesemutan&lt;/a&gt; bisa dirasakan oleh siapa saja dan sangat umum terjadi. Kondisi ini bisa terjadi jika adanya tekanan saraf ketika berada dalam satu posisi di waktu yang lama. Kesemutan kerap dirasakan pada bagian kaki.&nbsp;&lt;/p&gt;&lt;p&gt;Kebanyakan orang merasa &lt;a href=&quot;https://hot.liputan6.com/read/4059670/5-penyakit-yang-ditandai-dengan-kesemutan-waspadai?source=search&quot;&gt;kesemutan&lt;/a&gt; di kaki atau tangan mereka sesekali. Biasanya kesemutan ini dapat hilang dengan sendirinya dan bukanlah sesuatu yang mengkhawatirkan. Misalnya, jika seseorang duduk atau tidur dalam posisi yang tidak biasa, itu dapat menekan saraf dan menyebabkan sensasi kesemutan di kaki.&lt;/p&gt;&lt;p&gt;Namun jika kondisi ini terjadi berulan setiap waktu, bisa jadi merupakan tanda masalah. Seseorang mungkin akan merasakan merasakan mati rasa, kebas, dan nyeri saat kesemutan. Kondisi ini bisa menjadi tanda tertentu yang perlu diwaspadai. Beberapa masalah kesehatan ditandai dengan kesemutan.&lt;/p&gt;&lt;p&gt;Meski memerlukan pemeriksaan dan diagosis lebih lanjut, ada baiknya untuk memerhatikan arti &lt;a href=&quot;https://hot.liputan6.com/read/4011741/penyebab-kesemutan-dan-gejalanya-yang-harus-diketahui-jangan-anggap-sepele?source=search&quot;&gt;kesemutan&lt;/a&gt; ini. Berikut arti kesemutan di kaki yang berhasil Liputan6.com rangkum dari berbagai sumber, Jumat(6/12/2019).&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Kondisi yang tidak perlu dikhawatirkan&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/wB5iOPWjxYu-vBYz7rmBGEMfWdE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1016453/original/040088400_1444464376-kaki-4.jpg&quot; alt=&quot;Ilustrasi Kaki&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kehamilan&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Tidak jarang seseorang mengalami kesemutan di kaki selama kehamilan. Saat rahim tumbuh, ia dapat memberi tekanan pada saraf yang mengalir di kaki. Ini menyebabkan sensasi kebas dan kesemutan pada kaki. Ibu hamil bisa menghilangkan kesemutan di kaki dengan beristirahat, sering mengubah posisi kaki, dan banyak minum air putih.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pengobatan tertentu&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Obat-obatan tertentu dapat menyebabkan kesemutan di kaki sebagai salah satu efek sampingnya. Obat paling umum yang menyebabkan kesemutan ini adalah yang digunakan untuk melawan kanker (kemoterapi) dan HIV dan AIDS. Obat lain yang dapat menyebabkan kesemutan juga rernasuj obat kejang, jantung, dan darah tinggi.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;3 dari 7 halaman&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Kekurangan vitamin dan infeksi&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/fbailGsJ3I9376NzHkCWdikbH68=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2740038/original/083388200_1551332750-Perawatan_Rambut-1.jpg&quot; alt=&quot;Vitamin rambut&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kekurangan vitamin&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Tidak mendapatkan cukup vitamin tertentu, terutama vitamin B, dapat menyebabkan kesemutan pada kaki. Kekurangan vitamin dapat disebabkan oleh pola makan yang buruk atau kondisi yang mendasarinya. Kekurangan vitamin dapat diobati dengan makan makanan sehat atau dengan suplemen makanan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Infeksi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Infeksi tertentu menyebabkan saraf meradang. Peradangan ini dapat menyebabkan kesemutan di kaki. Infeksi yang dapat menyebabkan kesemutan di kaki antaranya HIV/AIDS, hepatitis B dan C, kusta, Penyakit Lyme, dan cacar.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Saraf terjepit dan keracunan&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/uqQ05Ok616fzQuZexcLSguDM6-M=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1529213/original/040229900_1488879357-beti.jpg&quot; alt=&quot;Betis seperti Ketarik Saat Ngulet? Waspada Saraf Terjepit&quot;&gt;&lt;/figure&gt;&lt;p&gt;&lt;strong&gt;Saraf terjepit&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Saraf terjepit di punggung bisa menyebabkan kesemutan di kaki. Saraf terjepit bisa terjadi karena cedera atau pembengkakan. Gejala lain dari saraf terjepit termasuk rasa sakit dan gerakan terbatas.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Paparan racun&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Paparan bahan kimia dan racun tertentu dapat menyebabkan kesemutan pada kaki. Mereka juga dapat menyebabkan rasa sakit, mati rasa, lemah, dan kesulitan berjalan. Beberapa racun yang dapat menyebabkan kesemutan pada kaki jika tertelan atau diserap melalui kulit adalah arsenik, air raksa, talium, insektisida organik, alkohol, dan beberapa obat herbal.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Diabetes dan ginjal&lt;/strong&gt;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn0-production-images-kly.akamaized.net/XYUGRerJEbjz8jhrixyYCPj2fcA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1701772/original/038749200_1504684136-Senam-Kaki-Diabetes-Lancarkan-Sirkulasi-Darah.jpg&quot; alt=&quot;Senam Kaki Diabetes Lancarkan Sirkulasi Darah&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Diabetes&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Diabetes adalah penyakit yang terjadi ketika glukosa darah, juga disebut gula darah, terlalu tinggi. Diabetes adalah salah satu penyebab paling umum untuk kesemutan di kaki.&lt;/p&gt;&lt;p&gt;Diabetes menyebabkan gula darah tinggi, yang dapat menyebabkan kerusakan saraf. Kondisi ini disebut neuropati diabetik. Gejala lain diabetes bisa meliputi sering buang air kecil, haus ekstrim, mulut kering, kulit yang gatal, sering lapar dan nafas berbau.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Gagal ginjal&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Gagal ginjal terjadi ketika ginjal kehilangan kemampuan untuk cukup menyaring limbah dari darah. Gagal ginjal dapat menyebabkan kesemutan pada kaki. Gejala kaki kesemutan yang disebabkan oleh gagal ginjal meliputi rasa sakit, kesemutan, dan mati rasa di tungkai dan kaki, kram dan otot berkedut, serta kelemahan otot.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Penyakit autoimun dan Multiple sclerosis&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/GehaUnVmNKbYlLLxkz3w9ENQR8M=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1833764/original/086480500_1516094637-5-Penyakit-Autoimun-yang-Sering-Menyerang-Perempuan-By-nelzajamal-shutterstock_531832807.jpg&quot; alt=&quot;5 Penyakit Autoimun yang Sering Menyerang Perempuan (Nelzajamal/Shutterstock)&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Penyakit autoimun dan Multiple sclerosis (Nelzajamal/Shutterstock)&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Penyakit autoimun&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Penyakit autoimun terjadi ketika kekebalan tubuh menyerang dirinya sendiri. Sejumlah penyakit autoimun dapat menyebabkan kesemutan pada kaki. Kondisi ini termasuk lupus, Sindrom Sjogren, Sindrom Guillain-Barr&eacute;, Penyakit celiac, dan rheumatoid arthritis (RA).&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Multiple sclerosis&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Multiple sclerosis adalah kondisi jangka panjang yang memengaruhi otak dan sumsum tulang belakang. Menurut National Multiple Sclerosis Society mati rasa atau kesemutan pada kaki adalah gejala awal Multiple sclerosis.&lt;/p&gt;&lt;p&gt;Gejala Multiple sclerosis diantaranya masalah penglihatan rasa sakit, kejang, kelelahan, pusing, kesulitan menyeimbangkan tubuh, masalah kandung kemih, disfungsi seksual, hingga masalah kognitif.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Masalah jantung&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/y4yLyzVA13LxIRAqLHBam1G2lJc=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2707935/original/072295100_1547862276-anlene_4_673x373.jpg&quot; alt=&quot;Ilustrasi jantung&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Penyakit arteri perifer&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Penyakit arteri perifer atau PAD memengaruhi sistem peredaran darah, menyebabkan pembuluh darah menjadi lebih sempit.&lt;/p&gt;&lt;p&gt;Ini dapat menyebabkan sirkulasi yang buruk, yang dapat menyebabkan kesemutan pada kaki atau tangan. PAD dapat menyebabkan stroke atau serangan jantung karena penumpukan plak di arteri jika tidak ditangani.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Stroke&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Kesemutan di kaki mungkin merupakan tanda stroke. Gejala stroke datang tiba-tiba dan mungkin termasuk pada mati rasa atau kelemahan di wajah, lengan, atau kaki, terutama di satu sisi, kebingungan, kesulitan berbicara, kesulitan memahami, penglihatan kabur, kesulitan berjalan, pusing, kehilangan keseimbangan, dan kehilangan koordinasi.&lt;/p&gt;','1575640697','kesemutan.jpg'),(42,'Yuk, Bijak dalam Menggunakan Listrik!','&lt;p&gt;&lt;strong&gt;Liputan6.com, Jakarta&lt;/strong&gt; Tak dapat dipungkiri bahwa permintaan tenaga listrik dari tahun ke tahun semakin meningkat, karena menyesuaikan kebutuhan masyarakat. Meski mengalami peningkatan, tapi tahukah Anda bahwa tarif listrik di Indonesia termasuk murah?&nbsp;&lt;/p&gt;&lt;p&gt;Ya, ternyata Indonesia masuk dalam deretan 10 negara dengan tarif listrik termurah di dunia. Bahkan jika dibandingkan dengan Malaysia, Thailand, dan Filipina, Indonesia tarif listrik Indonesia jauh lebih murah.&nbsp;&lt;/p&gt;&lt;p&gt;Namun di balik tarif yang tergolong murah itu, Anda tetap harus hemat-hemat dalam penggunaannya agar Indonesia tak kekurangan ketersediaan pasokan listrik. Dengan menjaga ketersediaannya, artinya Anda ikut menyelamatkan ekonomi negari ini.&nbsp;&lt;/p&gt;&lt;p&gt;Enggak percaya? Jadi, listrik diukur dengan satuan kapasitas konsumsi daya elektrik dalam kilo watt hour (KWH). Tarif 1 KWH untuk pelanggan 1300 VA, ditetapkan sebesar Rp1.467.&nbsp;&lt;/p&gt;&lt;p&gt;Jika dikonversi dengan kebutuhan sehari-hari, 1KWH setara dengan harga secangkir kopi (kurang lebih 10 KWH) dan 1 tiket bioskop kurang lebih 20 KWH.&nbsp;&lt;/p&gt;','1575641015','listrik.jpg'),(44,'Suami Tolak Belikan Jagung Untuk Istrinya yang Sedang Mengidam','&lt;p&gt;&lt;strong&gt;Liputan6.com, Jakarta -&lt;/strong&gt; Kehidupan &lt;a href=&quot;https://www.liputan6.com/showbiz/read/4123241/rumah-tangga-syahrini-dan-reino-barack-diramalkan-awet&quot;&gt;rumah tangga&lt;/a&gt; tak lepas dari masalah. Masalah tersebut bisa besar, bisa juga persoalan sederhana, seperti makanan.&lt;/p&gt;&lt;p&gt;Kisah seorang &lt;a href=&quot;https://www.liputan6.com/bola/read/4124188/istri-cantik-ungkap-rahasia-ketajaman-robert-lewandowski-sering-makan-ikan&quot;&gt;istri&lt;/a&gt; yang sedah hamil di Malaysia ini pun tentang makanan. Dilansir dari &lt;i&gt;World of Buzz&lt;/i&gt;, Jumat (6/12/2019), seorang istri yang sedang hamil curhat ke akun Facebook Kisah Rumah Tangga.&lt;/p&gt;&lt;p&gt;Ia mengungkapkan suaminya yang egois dan pelit menolak membelikan secangkir jagung seharga dua Ringgit Malaysia atau Rp6 ribu yang ia idamkan. Lelaki itu malah menghabiskan uangnya untuk sepeda motor kesayangannya.&lt;/p&gt;&lt;p&gt;&quot;Saya seorang istri berusia 18 tahun yang telah menikah dengan suami saya selama 5 bulan dan saya hamil 4 bulan. Suami saya tertarik pada sepeda motor. Saya mendambakan jagung yang hanya RM2 (dua Ringgit Malaysia), tapi dia mengatakan pada saya untuk menghemat uang,&quot; ungkap sang istri.&lt;/p&gt;&lt;p&gt;Setelah &lt;a href=&quot;https://hot.liputan6.com/read/4127038/7-potret-hiroaki-kato-suami-arina-mocca-asal-jepang-yang-berkiprah-di-indonesia&quot;&gt;suami&lt;/a&gt; mengantarnya pulang, sang istri memeriksa teleponnya. Ternyata, ia telah membeli komponen sepeda motor. &quot;Saya biasanya mengidam jagung dalam cangkir, tapi dia tak pernah memberi saya sedikit pun,&quot; ungkap sang istri.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Takut Dimintai Uang&lt;/strong&gt;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/cdbeW8TlKpwVosvuePbMSFjgF2I=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1545557/original/035806100_1490265942-Pertengkaran11.jpg&quot; alt=&quot;Pertengkaran&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Hal yang juga sangat tak dapat dipercaya adalah bahwa suaminya mengendalikan keuangannya dan memegang kartu banknya. Sang istri tak diizinkan untuk mengakses uang warisan almarhum ayahnya.&lt;/p&gt;&lt;p&gt;&quot;Saya tak pernah menghabiskan uang untuk hal-hal yang tak berguna, biasanya hanya makanan. Sekarang saya harus minta izin untuk menggunakan uang saya sendiri,&quot; ujarnya.&lt;/p&gt;&lt;p&gt;Saat istri menanyakan bisakah membeli pakaian baru, suaminya justru memintanya untuk menabung untuk tagihan anak dan rumah sakit.&lt;/p&gt;&lt;p&gt;&quot;Saya bahkan tak membeli pakaian mahal, tapi dia meminta saya untuk menggunakan uang almarhum ayah saya yang susah payah untuk membelikannya pelek baru dan telepon, &rdquo;katanya.&lt;/p&gt;&lt;p&gt;Si istri dulunya bekerja, tapi kemudian berhenti untuk menjadi ibu rumah tangga. Semua itu atas permintaan suaminya. Awalnya, ia juga suka membeli makeup, tapi semua itu ditinggalkannya setelah berhenti bekerja karena suaminya tak mengizinkannya.&lt;/p&gt;&lt;p&gt;Saat istri menanyakan bisakah membeli pakaian baru, suaminya justru memintanya untuk menabung untuk tagihan anak dan rumah sakit.&lt;/p&gt;&lt;p&gt;&quot;Saya bahkan tak membeli pakaian mahal, tapi dia meminta saya untuk menggunakan uang almarhum ayah saya yang susah payah untuk membelikannya pelek baru dan telepon, &rdquo;katanya.&lt;/p&gt;&lt;p&gt;Ia juga rupanya tak lagi mengunjungi ibunya sendiri, takut bila ibunya meminta uang. Sebelumnya, sang istri juga sebulan sekali mengunjungi ibunya sebelum menikah, tapi sekarang sang suami tak bersedia jika diajak ke rumah mertuanya, takut ibu mertuanya meminta uang.&lt;/p&gt;&lt;p&gt;&quot;Saya seperti pengemis, tapi saya tak pernah mengeluh,&quot; katanya.&lt;/p&gt;','1575641429','jagung.jpg'),(45,'Amarah Cemburu Bikin Gelap Mata, Kekasih Tega Aniaya hingga Bunuh Pujaan Hati','&lt;p&gt;&lt;strong&gt;Liputan6.com, Jakarta -&lt;/strong&gt; Seseorang yang &lt;a href=&quot;https://www.liputan6.com/ramadan/read/3968134/wanita-baca-doa-ini-saat-cemburu-berlebihan&quot;&gt;cemburu&lt;/a&gt; buta, kerap kali tidak bisa berfikir yang dilakukannya benar atau tidak. Karena cemburu, aksi penganiayaan hingga pembunuhan bisa saja terjadi.&lt;/p&gt;&lt;p&gt;Alih-alih mencintai pujaan hati, si pacar atau suami justru tega menganiaya agar wanitanya tak berpaling pada pria lain. Tanpa mendengar penjelasan, &lt;a href=&quot;https://www.liputan6.com/health/read/3986362/meski-tidak-enak-cemburu-pertanda-kita-manusia&quot;&gt;cemburu&lt;/a&gt; membutakan segalanya.&lt;/p&gt;&lt;p&gt;Belum lama ini terjadi pembakaran dua warga Rembang, Jawa Tengah. Sang pelaku berinisial SM (50) mengaku nekat membakar hidup-hidup Sukarno (39) dan Ivan Agus Setiyarno (34) pada Jumat, 29 November 2019 karena sakit hati sang istri selalu digoda Sukarno.&lt;/p&gt;&lt;p&gt;Menurut SM, sebetulnya tindakan pembakaran hanya ingin dilakukannya kepada korban bernama Sukarno. Karena posisi Ivan Agus berdekatan dengan Sukarno, dirinya juga ikut terbakar.&lt;/p&gt;&lt;p&gt;Rupanya tak hanya itu, sebelumnya ada pula seseorang yang tega menganiya sang kekasih hingga sekarat. Vence tega menganiaya kekasihnya bernama Salomina Friskilia Samloi (23), yang juga mahasiswi di kampus STAKEN, Kupang, NTT.&lt;/p&gt;&lt;p&gt;Berikut rentetan kisah asmara dibumbui &lt;a href=&quot;https://www.liputan6.com/health/read/3986387/agar-cemburu-tidak-berujung-masalah-lakukan-4-hal-ini&quot;&gt;cemburu&lt;/a&gt; buta hingga tega membunuh pujaan hati dihimpun &lt;strong&gt;Liputan6.com&lt;/strong&gt;:&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Kisah Remaja di Tegal&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn1-production-images-kly.akamaized.net/YC9xYQjI0Dus4V3Pn7eAtIAwEh0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/690595/original/ilustrasi-pemerkosaan-2-140612-andri.jpg&quot; alt=&quot;Ilustrasi Penganiayaan (2)&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Ilustrasi Penganiayaan&lt;/p&gt;&lt;p&gt;Warga Desa Cerih, Kecamatan Jatinegara, Kabupaten &lt;a href=&quot;https://www.liputan6.com/news/read/4037974/tragis-remaja-di-tegal-bunuh-temannya-karena-cemburu&quot;&gt;Tegal&lt;/a&gt;, Jawa Tengah digegerkan dengan penemuan karung yang berisikan tulang-belulang pada Jumat 9 Agustus 2019 lalu.&lt;/p&gt;&lt;p&gt;Polres Tegal bergerak cepat menyelidiki kasus tersebut. Hingga kini lima orang ditetapkan sebagai tersangka.&lt;/p&gt;&lt;p&gt;Kapolres Tegal AKBP Dwi Agus Priyanto menjelaskan, jasad Nurkhikmah alias Iik (16) pertama kali ditemukan oleh seorang warga di sebuah rumah yang sudah lama kosong. Kala itu, dia datang untuk beberes.&lt;/p&gt;&lt;p&gt;&quot;Pemilik rumah sedang membersihkan tercium bau tidak sedap. Di cari ternyata sumbernya ada di satu ruangan di situ ada tumpukan karung. Setelah dibuka dilihat ada tulang belulang. Di dalamnya ada mayat kemudian dilaporkan ke kepala desa di kepala desa laporkan ke polisi,&quot; papar Dwi Agus saat dihubungi Liputan6.com, Rabu, 14 Agustus 2019.&lt;/p&gt;&lt;p&gt;Belakangan diketahui, jasad itu adalah Nurkhikmah alias Iik (16) yang kurang lebih satu bulan terakhir dicari-cari pihak keluarga.&lt;/p&gt;&lt;p&gt;&quot;Ada seorang warga yang memberitahukan putri belum pulang. Kemudian diperlihatkan baju sebagainya yang bersangkutan mengenali itu baju korban (Nurkhikmah),&quot; ujar dia.&lt;/p&gt;&lt;p&gt;Dwi mengatakan, pihaknya menduga korban tewas karena dibunuh. Indikasi itu berdasarkan hasil autopsi dan posisi jenazah ketika ditemukan.&lt;/p&gt;&lt;p&gt;&quot;Dari hasil autopsi kita lihat sudah bentuk tengkorak tulang belulang waktu dibuka karungnya juga terikat dengan rapiah kemudian posisinya ditelungkupkan dan diikat kaki dan tangan. Ini indikasi, kita menduga korban pembunuhan,&quot; ucap Kapolres Tegal.&lt;/p&gt;&lt;p&gt;Dwi menerangkan, pihaknya bergerak cepat meringkus para pelaku. Lima orang ditetapkan sebagai tersangka.&lt;/p&gt;&lt;p&gt;&quot;Tiga orang berjenis kelamin laki-laki dan dua orang berjenis perempuan. Pelaku yang perempuan seumuran dengan korban. Sementara yang laki-laki lebih tua,&quot; ujar dia.&lt;/p&gt;&lt;p&gt;Dwi menuturkan, motif pelaku membunuh korban. Diduga karena cemburu. Hal itu berdasarkan pemeriksaan terhadap tersangka dan sejumlah saksi.&lt;/p&gt;&lt;p&gt;&quot;Tersangka cemburu dengan korban. Karena korban banyak yang suka. Banyak ganti-ganti teman deket,&quot; tutup dia.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Emosi Pria Gorontalo Aniaya Kekasih&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn0-production-images-kly.akamaized.net/lq2qB-9HkI92d8ICZMKAdwEFsjk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/679259/original/ilustrasi-penganiayaan-140520-andri.jpg&quot; alt=&quot;Ilustrasi Penganiayaan&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Ilustrasi Penganiayaan (Liputan6.com/Andri Wiranuari)&lt;/p&gt;&lt;p&gt;JMP alias Jul (30), harus berurusan dengan polisi lantaran telah melakukan tindak &lt;a href=&quot;https://www.liputan6.com/regional/read/4082025/cemburu-buta-pria-di-gorontalo-hajar-kekasih-hingga-babak-belur&quot;&gt;kekerasan&lt;/a&gt; terhadap kekasihnya Vr (25). JMP memukuli wajah sang kekasih hingga babak belur hanya karena terbakar api cemburu.&lt;/p&gt;&lt;p&gt;JMP dilaporkan Vr ke Polres Gorontalo Kota, Selasa, 8 Oktober 2019. Di hadapan petugas, gadis asal Kecamatan Gentuma Raya, Kabupaten Gorontalo Utara itu mengaku mengalami penganiayan yang dilakukan JMP, kekasihnya sendiri.&lt;/p&gt;&lt;p&gt;Peristiwa itu terjadi pada Minggu, 6 Oktober 2019 pukul 03.30 Wita di Kelurahan Dulomo Selatan, Kecamatan Kota Utara, Kota Gorontalo.&lt;/p&gt;&lt;p&gt;Kejadian bermula ketika Vera dijemput JMP di rumah temannya. JMP merasa cemburu dan kesal saat melihat Vr berada di rumah temannya itu. Ketika bertemu di lokasi tersebut, JMP dan Vr sempat cekcok. Pasangan itu kemudian beranjak dari lokasi.&lt;/p&gt;&lt;p&gt;JMP lalu mengantar Vr ke tempat kosnya yang terletak di Kelurahan Dulomo Selatan, Kecamatan Kota Utara. Tiba di tempat Kos, JMP dan Vr kembali cekcok.&lt;/p&gt;&lt;p&gt;Tak mampu membendung emosi, JMP lantas melayangkan pukulan ke arah wajah Vr berkali-kali. Pukulan tersebut mengakibatkan wajah perempuan berparas menarik itu babak belur. Luka lebam terdapat di berapa bagian seperti pipi dan mata.&lt;/p&gt;&lt;p&gt;&quot;Saya tidak mengetahui apa kesalahan saya. Saya hanya dijemput di rumah teman saya. Di jalan saja saya ditampar. Lalu kemudian saya diantar di kos. Saat itu kami sempat cekcok, tiba-tiba dia langsung memukuli saya tanpa sebab,&quot; tutur Verawati.&lt;/p&gt;&lt;p&gt;Kasat Reskrim AKP Deni Muhtamar membenarkan tindak kekerasan tersebut. Ia menjelaskan saat ini kasus itu masih ditangani oleh pihak penyidik Polres Gorontalo Kota.&lt;/p&gt;&lt;p&gt;&quot;Saat ini kasus tersebut sudah masuk di Polres Gorontalo Kota. Namun saat ini pihak kami masih melakukan proses lebih lanjut dan korban juga sudah diambil keterangan bersama saksi untuk keperluan penyidikan lebih lanjut,&quot; jelasnya.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Lelaki di Kupang Buat Kekasih Sekarat&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn0-production-images-kly.akamaized.net/plmHwUss7w6y2OREMK3or-Nb4tM=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1953488/original/026877400_1519978350-1.jpg&quot; alt=&quot;penganiayaan&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Ilustrasi kekerasan (iStockPhoto)&lt;/p&gt;&lt;p&gt;Seorang mahasiswa Fakultas Biologi Universitas Artha Wacana (UKAW) Kupang, Vence Dejetro Benu (26) harus berurusan dengan polisi lantaran menganiaya &lt;a href=&quot;https://www.liputan6.com/regional/read/4105532/cembura-buta-mahasiswa-kupang-aniaya-kekasih-hingga-sekarat&quot;&gt;kekasih&lt;/a&gt;nya hingga sekarat.&lt;/p&gt;&lt;p&gt;Vence tega menganiaya kekasihnya bernama Salomina Friskilia Samloi (23), yang juga mahasiswi di kampus STAKEN Kupang hanya karena cemburu. Akibatnya, tiga jari Salomina nyaris patah dan bagian tubuh lainnya mengalami luka lebam.&lt;/p&gt;&lt;p&gt;Kasus penganiayaan sejoli yang telah 11 bulan menjalin hubungan asmara ini terjadi di kos milik tersangka, di Jalan Dalek Esa, Kelurahan Oesapa, Kecamatan Kelapa Lima, pada Rabu, 6 November 2019.&lt;/p&gt;&lt;p&gt;&quot;Saat lagi berduaan di kos pelaku, ada pesan whatsApp masuk ke handphone korban. Pesan itu dari teman PPL korban. Namun, karena cemburu, terjadi pertengkaran hingga berujung penganiayaan,&quot; ujar Kasat Reskrim Polres Kupang Kota, Iptu Bobby Jacob Mooynafi, Kamis, 7 November 2019.&lt;/p&gt;&lt;p&gt;Setelah dianiaya, korban sempat berupaya melarikan diri namun dikejar dan dikunci di kamar kos.&lt;/p&gt;&lt;p&gt;Keesokan harinya pada Selasa, 6 November 2019, korban sempat ke kampus, namun penganiayaan itu menyebabkan korban jatuh pingsan dan dilarikan ke Puskesmas. Setelah sadar, korban langsung melaporkan kejadian itu ke Polres Kupang Kota.&lt;/p&gt;&lt;p&gt;&quot;Setelah dapat laporan, kita langsung bergerak amankan pelaku,&quot; katanya.&lt;/p&gt;&lt;p&gt;Atas perbuatannya, pelaku dijerat pasal 351 ayat 2 KUHP tentang tindak pidan penganiyaan berat dengan ancaman hukum 5 tahun penjara.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Pria Habisi Nyawa Anak Kekasih&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn0-production-images-kly.akamaized.net/Y88M6Qb1Vj8mK0IMlIrVHKW4dqo=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2975194/original/003179100_1574424869-Bunuh.jpg&quot; alt=&quot;Pelaku pembunuhan&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Sebelum menghabisi nyawa anak pacarnya itu, pelaku sempat memandikan, mengganti pakaian, lalu menidurkannya. Pelaku kemudian keluar kios dan merokok. Pelaku terbayang, ibu kandung korban lebih sayang kepada korban dibandingkan dengan dirinya&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://www.liputan6.com/regional/read/4117360/dibakar-api-cemburu-pria-di-medan-tega-habisi-nyawa-anak-kekasihnya&quot;&gt;Kematian&lt;/a&gt; seorang balita di Kios Pangkas Rapi, Dusun II Desa Ujung Labuhan, Kecamatan Namorambe, Deli Serdang, Sumatera Utara (Sumut) pada Kamis, 21 November 2019, sempat menimbulkan tanda tanya.&lt;/p&gt;&lt;p&gt;Dorlida Simamora, ibu korban, merasa curiga karena saat meninggalkan buah hatinya untuk pergi bekerja sekitar pukul 11.00 WIB tidak merasakan hal aneh.&lt;/p&gt;&lt;p&gt;Saat wanita berusia 35 tahun itu pulang bekerja, sekitar pukul 13.30 WIB, anaknya, Aliando Saragih, ditemukan sudah dalam kondisi tak bernyawa.&lt;/p&gt;&lt;p&gt;Dorlida sempat berusaha memberikan pertolongan dengan membawa anaknya ke rumah sakit. Namun, nyawa Aliando tidak bisa diselamatkan. Pihak rumah sakit yang curiga dengan kematian balita itu menghubungi Polsek Namorambe.&lt;/p&gt;&lt;p&gt;&quot;Anggota kita mendapatkan laporan sekitar pukul 15.00 WIB di hari itu juga,&quot; kata Kapolsek Namorambe, AKP Binsar Naibaho, Jumat, 22 November 2019.&lt;/p&gt;&lt;p&gt;Polisi kemudian datang ke rumah sakit untuk melakukan penyelidikan dan memeriksa lokasi kejadian. Sedangkan, jasad balita berusia 4 tahun itu diautopsi di Rumah Sakit Bhayangkara Polda Sumut, Jalan KH Wahid Hasyim, Kota Medan.&lt;/p&gt;&lt;p&gt;&quot;Hasil autopsi diketahui penyebab kematian. Korban dicekik atau dibekap,&quot; ucap Binsar.&lt;/p&gt;&lt;p&gt;Kapolsek menerangkan, di tubuh balita malang itu juga ditemukan sejumlah luka, seperti di pipi kanan dan kiri. Sedangkan pada bagian lehernya ditemukan luka memar. Polisi kemudian melakukan penyelidikan.&lt;/p&gt;&lt;p&gt;Tidak butuh waktu lama, Aliando diketahui meninggal dunia akibat dibunuh oleh pacar ibunya lantaran cemburu pada korban. Pembunuhan dilakukan oleh Alisaba Nazara (41), warga Jalan Luku I Gang Kali, Kwala Bekala, Medan Johor.&lt;/p&gt;&lt;p&gt;Pria yang berprofesi sebagai tukang pangkas ini merupakan pacar dari Dorlida, ibu Aliando. Dorlida yang bekerja sebagai tukang setrika tinggal bersama Alisaba di Kios Pangkas Rapi sejak dua pekan lalu.&lt;/p&gt;&lt;p&gt;Sebelumnya Dorlida dan anaknya tinggal di Pasar Serong, Desa Ujung Labuhan, Namorambe. Setelah berpisah dengan suaminya, Ansarih Saragih (45), sekitar setahun lalu, Dorlida menjalin kasih dengan Alisaba.&lt;/p&gt;&lt;p&gt;&quot;Awalnya pelaku membantah membunuh korban. Setelah interogasi panjang, sekitar 6 jam, tersangka akhirnya mengaku,&quot; Binsar menerangkan.&lt;/p&gt;&lt;p&gt;Sebelum menghabisi nyawa anak kekasihnya itu, pelaku sempat memandikan, mengganti pakaian, lalu menidurkannya.&lt;/p&gt;&lt;p&gt;Pelaku kemudian keluar kios dan merokok. Pelaku terbayang, ibu kandung korban lebih sayang kepada korban dibandingkan dengan dirinya.&lt;/p&gt;&lt;p&gt;&quot;Padahal, uang tersangka sudah habis membiayai korban dan ibunya, sehingga pelaku merasa cemburu dan muncul niat membunuh korban saat tidur,&quot; ungkap Kapolsek.&lt;/p&gt;&lt;p&gt;Atas perbuatannya, Alisaba dikenakan Pasal 338 KUHPidana dan atau Pasal 80 ayat (3) Undang-Undang 35 Tahun 2014 tentang Perubahan Undang-Undang 23 Tahun 2002 tentang Perlindungan Anak. &quot;Tersangka terancam hukuman 15 tahun penjara,&quot; Binsar menandaskan.&lt;/p&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Tega Bakar Teman&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn0-production-images-kly.akamaized.net/0XUISVtgv2p3QhRdNeIpKYflSU8=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2988111/original/079285900_1575599457-IMG-20191205-WA0012.jpg&quot; alt=&quot;Pelaku Pembakaran Hidup-Hidup di Rembang&quot;&gt;&lt;/figure&gt;&lt;p&gt;&nbsp;&lt;/p&gt;&lt;p&gt;Polisi Mapolres Rembang akhirnya berhasil menangkap pelaku pembakaran dua warga Rembang yang sempat menjadi misteri. (Liputan6.com/ Ahmad Adirin)&lt;/p&gt;&lt;p&gt;Polisi Mapolres Rembang akhirnya berhasil menangkap pelaku &lt;a href=&quot;https://www.liputan6.com/regional/read/4127669/cemburu-buta-jadi-motif-pembakaran-hidup-hidup-2-warga-rembang&quot;&gt;pembakaran&lt;/a&gt; dua warga Rembang yang sempat menjadi misteri.&lt;/p&gt;&lt;p&gt;Saat diinterogasi, pelaku berinisial SM (50) mengaku nekat membakar hidup-hidup Sukarno (39) dan Ivan Agus Setiyarno (34) pada Jumat, 29 November 2019 lalu, lantaran sakit hati dan menaruh dendam kepada kedua korban.&lt;/p&gt;&lt;p&gt;SM mangku dirinya sakit hati karena istrinya selalu digoda oleh korban yang bernama Sukarno.&lt;/p&gt;&lt;p&gt;Dia mengungkapkan, sebetulnya tindakan pembakaran hanya ingin dilakukannya kepada korban bernama Sukarno. Karena posisi Ivan Agus berdekatan dengan Sukarno, dirinya juga ikut terbakar.&lt;/p&gt;&lt;p&gt;&quot;Temennya bersebelahan, dia ikut terbakar,&quot; ujar SM di Mapolres Rembang, Kamis (5/12/2019).&lt;/p&gt;&lt;p&gt;Kepada pihak kepolisian SM mengaku tidak menyesali apa yang telah dilakukannya. Itu dilakukannya semata-mata karena sayang kepada istrinya.&lt;/p&gt;&lt;p&gt;SM juga beberapa kali membuntuti korban. Dia mengaku pernah memergoki Sukarno berduaan bersama istrinya.&lt;/p&gt;&lt;p&gt;&quot;Pernah memergoki di hotel. Saya spontan membakar korban karena sakit hati dan gak mau ruwet,&quot; ucap pria yang keseharian sebelumnya bekerja sebagai tukang tambal ban di Rembang.&lt;/p&gt;&lt;p&gt;Kapolres Rembang AKBP Dolly A Primanto menjelaskan, awal mula kasus pembakaran dapat terungkap setelah korban kondisinya bisa diperiksa dan dimintai keterangan, ternyata dapat mengenali pelakunya.&lt;/p&gt;&lt;p&gt;Tanpa menunggu lama, setelah itu pihaknya melalui tim Satreskrim Polres Rembang kemudian melakukan penyelidikan dan menyesuaikan dengan barang bukti yang ada. Kata dia, termasuk keterangan para saksi.&lt;/p&gt;&lt;p&gt;&quot;Di perkuat keterangan 10 orang saksi, kemudian alat bukti yang lainnya sebagai petunjuk. Persesuaian keadaan mengarah kepada yang bersangkutan,&quot; terangnya.&lt;/p&gt;&lt;p&gt;&quot;Pelaku sendiri juga telah mengakuinya,&quot; imbuh Dolly.&lt;/p&gt;&lt;p&gt;Atas perbuatan SM tersebut, dirinya dijerat pasal 187 KUHP dengan ancaman hukuman paling lama 15 tahun penjara.&lt;/p&gt;&lt;p&gt;Sebelumnya diberitakan, dua orang warga Rembang, menjadi korban tindak kejahatan dengan cara dibakar hidup-hidup oleh orang tak dikenal.&lt;/p&gt;&lt;p&gt;Akibatnya, Ivan Agus Setiyarno warga Desa Sumberjo Kecamatan Kota Rembang, berdasarkan keterangan pihak RSUD Rembang luka bakar 40 persen disekujur tubuh. Sedangkan Sukarno warga Desa Seren, Kecamatan Sulang dengan luka bakar 70 persen.&lt;/p&gt;','1575641570','amarah.jpg');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nig` varchar(5) DEFAULT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `role_id` varchar(1) DEFAULT NULL,
  `walas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES (7,'00118','HATAKE KAKAHSI','3','01'),(8,'00218','MINATO NAMIKAZE','3','NULL'),(9,'00318','JIRAIYA','3','02'),(10,'00420','HIRUZEN SARUTOBI','3',NULL),(11,'00520','IRUKA UMINO','3',NULL),(12,'00620','TSUNADE SENJU','3',NULL),(13,'00720','SHIKAMARU NARA','3',NULL),(14,'00820','HAYATE GEKKO','3',NULL),(15,'00920','IBIKI MORINO','3',NULL),(16,'01020','MIGHT GUY','3',NULL),(17,'01120','ASUMA SARUTOBI','3',NULL),(18,'01220','YAMATO','3',NULL),(19,'01320','TOBIRAMA SENJU','3',NULL),(20,'01420','SHIKAKU NARA','3',NULL),(21,'01520','SHIZUNE','3',NULL),(22,'01620','ITACHI UCHIHA','3','NULL');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES ('01','IPA'),('02','IPS');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapel`
--

DROP TABLE IF EXISTS `mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapel` (
  `id_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(256) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `id_guru` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel`
--

LOCK TABLES `mapel` WRITE;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` VALUES ('MP001','PENDIDIKAN AGAMA','UMUM','00520'),('MP002','BAHASA INDONESIA','UMUM','00520'),('MP003','MATEMATIKA','UMUM','00118'),('MP004','PENDIDIKAN PANCASILA','UMUM','00420'),('MP005','SENI BUDAYA','UMUM','00318'),('MP006','KEWIRAUSAHAAN','UMUM','00620'),('MP007','BAHASA JEPANG','UMUM','00820'),('MP008','BAHASA INGGRIS','UMUM','00720'),('MP009','PENJASKES','UMUM','01020'),('MP010','TI','UMUM','01420'),('MP011','FISIKA','IPA','01620'),('MP012','BIOLOGI','IPA','01220'),('MP013','EKONOMI','IPS','00420'),('MP014','GEOGRAFI','IPS','01320');
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `nilai_sikap` int(10) NOT NULL,
  `nilai_tugas` int(10) NOT NULL,
  `nilai_uts` int(10) NOT NULL,
  `nilai_uas` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai`
--

LOCK TABLES `nilai` WRITE;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` VALUES (1,'18001','01','MP001',90,80,80,100),(2,'18002','02','MP002',70,80,90,60),(3,'18002','02','MP003',90,80,50,40),(4,'18001','01','MP003',90,80,70,90),(12,'11111','02','MP005',0,0,0,0),(13,'18001','01','MP009',90,70,60,90),(14,'18001','01','MP010',20,20,23,23);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(5) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `role_id` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (9,'18001','Ade Muhammad Nur Fauzi','IPA','2'),(11,'18002','Shikamaru Nara','IPA','2'),(12,'18003','Naruto Uzumaki','IPS','2'),(13,'18004','Sasuke Uchiha','IPA','2'),(14,'18005','Kiba Inuzuka','IPS','2'),(15,'18006','Shino Aburame','IPA','2'),(16,'18007','Chozi Akimichi','IPS','2'),(17,'18008','Sakura Hanuro','IPA','2'),(18,'18009','Ino Yamanaka','IPS','2'),(19,'18010','Rock Lee','IPS','2');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `nomor_induk` varchar(5) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nomor_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('00118','HATAKE KAKASHI','$2y$10$RXHuAD2mgA2XwxVvzMcwBee3LKv5DtJS00yyv7Es1HIFRM08QJtv2','3'),('00218','MINATO NAMIKAZE','$2y$10$X0ygk15Ucv5BK2pOwnd7qu4jwYzhboFSX5Ui2lw2oltmYUVhW/ao.','3'),('00318','JIRAIYA','$2y$10$JHzih9JXIvTy4PRGzpircO1vI/38c4879148tZgnwcpb/1N8CIVzy','3'),('01620','ITACHI UCHIHA','$2y$10$yiCk8FCXqekc3FLQ1NZ2a.MnfCXfAdZmZJRm3aFqmKp8r9m/5bLMW','3'),('18001','Ade Muhammad Nur Fauzi','$2y$10$nWZwSzvq.GBZDhpLFVOIb.4ekKEOaF5zI.R4iKbp2dFzPPoeELYLi','2'),('admin','Admin','$2y$10$/eyIQXPiL5YjOAE6VkUiMOXcas.hlc.PSPMHqwar6V7uJUEvguoGG','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_access_menu`
--

DROP TABLE IF EXISTS `user_access_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_access_menu`
--

LOCK TABLES `user_access_menu` WRITE;
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` VALUES (2,1,1),(4,2,2),(5,3,3);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_menu`
--

DROP TABLE IF EXISTS `user_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_menu`
--

LOCK TABLES `user_menu` WRITE;
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` VALUES (1,'Admin'),(2,'Siswa'),(3,'Guru');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'Admin'),(2,'Siswa'),(3,'Guru');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_sub_menu`
--

DROP TABLE IF EXISTS `user_sub_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_sub_menu`
--

LOCK TABLES `user_sub_menu` WRITE;
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` VALUES (1,1,'Dashboard Admin','admin','fas fa-fw fa-tachometer-alt',1),(4,1,'Daftar Siswa','admin/daftar_siswa','fas fa-fw fa-address-card',1),(5,1,'Daftar Guru','admin/daftar_guru','fas fa-fw fa-id-card-alt',1),(8,1,'Sub Menu Baru','admin/sub_menu','fas fa-fw fa-bars',1),(9,2,'Dashboard Siswa','siswa','fas fa-fw fa-tachometer-alt',1),(10,1,'Berita','admin/berita','far fa-fw fa-newspaper',1),(11,1,'MATA PELAJARAN','admin/mapel','fas fa-fw fa-book',1),(12,3,'Dashboard Guru','guru','fas fa-fw fa-tachometer-alt',1),(13,3,'Input Nilai','guru/input_nilai','fas fa-fw fa-sort-numeric-up-alt',1),(14,2,'Nilai Siswa','siswa/nilai','fas fa-fw fa-user',1),(15,2,'Change Password','siswa/change_password','fas fa-fw fa-key',1),(16,3,'Change Password','guru/change_password','fas fa-fw fa-key',1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-21 18:39:30
