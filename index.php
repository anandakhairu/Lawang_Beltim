<?php
/* =========================================================================
   LAWANG BELTIM — Landing Page Pariwisata Kabupaten Belitung Timur
   =========================================================================
 
   ========================================================================= */

// ---------- DATA BERITA / KEGIATAN TERBARU ----------
$news = [
  [
    'id'         => 'berita-1',
    'tag'        => 'Disbudpar',
    'date'       => '2025-08-30',
    'title'      => 'Pawai Tahun Ini, Disbudpar Beltim Angkat Tema "Bersatu Memajukan Budaya, Jayakan Pariwisata dan Tingkatkan Ekraf untuk Rakyat"',
    'excerpt'    => 'Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur (Disbudpar Beltim) menjadi peserta pada pawai tahunan dengan menampilkan busana adat dan hiasan khas daerah.',
    'content'    => "Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur (Disbudpar Beltim) menjadi peserta pada pawai tahunan yang digelar di pusat kota. 
    Mengusung tema \"bersatu majukan budaya, jayakan pariwisata dan tingkatkan ekonomi kreatif (ekraf) untuk rakyat sejahtera Indonesia maju\", rombongan Disbudpar tampil dengan busana adat lengkap serta hiasan payung dan bunga khas Belitung Timur.
    \n\nKegiatan ini menjadi bagian dari upaya pemerintah daerah memperkenalkan kekayaan budaya sekaligus mendorong pertumbuhan ekonomi kreatif masyarakat melalui sektor pariwisata. Warga turut memadati sepanjang rute pawai untuk menyaksikan penampilan dari berbagai instansi dan komunitas.",
    'image'      => 'berita-1.jpg',
    'source_url' => 'https://disbudpar.beltim.go.id/content/pawai-tahun-ini-disbudpar-beltim-angkat-tema-bersatu-memajukan-budaya-jayakan-pariwisata-dan',
  ],
  [
    'id'         => 'berita-2',
    'tag'        => 'Wisata Sejarah',
    'date'       => '2025-08-29',
    'title'      => 'Situs Makam Raja Balok, Wisatawan Bisa Berwisata Sejarah Sekaligus Alam',
    'excerpt'    => 'Situs Makam Raja Balok terletak di Desa Balok, Kecamatan Dendang, Kabupaten Belitung Timur, menawarkan pengalaman wisata sejarah yang dipadukan dengan suasana hutan yang asri.',
    'content'    => "Situs Makam Raja Balok terletak di Desa Balok, Kecamatan Dendang, Kabupaten Belitung Timur. Di sini pengunjung bisa menelusuri jejak sejarah kerajaan lokal sambil menikmati suasana alam berupa pepohonan rindang dan gazebo peristirahatan di sekitar area makam.\n\nLokasi ini menjadi salah satu destinasi wisata sejarah unggulan Beltim karena memadukan nilai edukasi budaya dengan ketenangan alam, cocok untuk wisatawan yang mencari pengalaman lebih dari sekadar pemandangan.",
    'image'      => 'berita-2.jpg',
    'source_url' => 'https://disbudpar.beltim.go.id/content/situs-makam-raja-balokdisini-wisatawan-bisa-berwisata-sejarah-sekaligus-alam',
  ],
];

// ---------- DATA DESTINASI WISATA (7 kategori) ----------
$destinasi = [
  'air' => [
    'label' => 'Wisata Air',
    'icon'  => 'wave',
    'items' => [
      [
        'id' => 'air-1', 'title' => 'Pantai Serdang',
        'location' => 'Pantai serdang, Desa Baru, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Pantai serdang terletak di Desa Baru Kecamatan Manggar Kabupaten Belitung Timur, pantai ini berada didalam kawasan Kota Manggar, dengan jarak ± 72 km dari Bandara Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 15 menit perjalanan darat (sumber : google map) 
        Wisatawan atau pengunjung yang berkunjung kesini, bisa menikmati seafood dan panorama pantai dengan memanjakan mata melihat indahnya pasir putih nan panjang berpadu dengan laut biru yang indah serta warna warni perahu kater yang diparkir oleh nelayan disepanjang garis pantai. Contact : 0819 49017671/WA an. Toto - Pantai serdang is located in Baru Village, Manggar District East Belitung Regency with with a distance of ± 72 km from HAS Airport and ± 1 hour 15 minutes by road (google map). 
        This beach has special characteristics of white sandy beach, akasia tress combined with blue sea and colorful kater boats that mooring along the coastline.',
        'image' => 'pantai-serdang.jpg', 'cp' => '6281949017671',
      ],
      [
        'id' => 'air-2', 'title' => 'Geosite Pantai Burong Mandi',
        'location' => 'Pantai Burong Mandi, Desa Burong Mandi, Kecamatan Damar, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Pantai Burong Mandi terletak Desa Burong Mandi Kecamatan Damar Kabupaten Belitung Timur, dengan jarak ± 90 km dari Bandara HAS. 
        Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 22 menit dengan perjalanan darat (sumber : google map) Pantai Burong Mandi adalah salah satu geowisata di Kabupaten Belitung Timur yang memiliki daya tarik wisata berupa keindahan pantai burong mandi dengan karakteristik pantai berpasir putih berpadu dengan barisan warna warni perahu kater dan pohon-pohon akasia yang tumbuh disepanjang garis pantainya. serta kuliner tradisional seperti ikan bakar kerisi, gangan dan jajanan lokal lainnya yang juga merupakan daya tarik wisata utama disana. Contact : 0821 79315619/WA, IG : pokdarwisberage - 
        Burong Mandi beach is one of tourist destination that located in Burong Mandi Village Damar District East Belitung Regency, with a distance ± 90 km from HAS Hanandjoedin Airport and ± 1 hours 22 minutes by road (google map).',
        'image' => 'pantai-burong-mandi.jpg', 'cp' => '6282179315619',
      ],
      [
        'id' => 'air-3', 'title' => 'Geosite Tebat Rasau',
        'location' => 'Tebat Rasau, Desa Lintang Kecamatan Simpang Renggiang Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Geosite Tebat Rasau terletak di Desa Lintang Kecamatan Simpang Renggiang Kabupaten Belitung Timur, dengan jarak ± 46 km dari Bandara HAS. 
        Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 48 menit perjalanan darat (sumber : google map) Tebat rasau adalah salah satu geowisata di Kabupaten Belitung Timur yang memiliki daya tarik utama yaitu landscape sungai lenggang dan kearifan lokal masyarakat yang berdomisili disekitarnya. Tebat rasau merupakan sungai purba yang didalamnya memiliki kelengkapan berbagai jenis ikan endemik, salah satunya adalah ikan buntal air tawar serta tumbuhan rasau (tumbuhan sejenis pandan). Contact : 0859 24977735/WA an. Nasidi, Fb/IG tebat rasau lintang - 
        Tebat Rasau is one of the tourist destination based on nature that located in Lintang Village, Simpang Renggiang District, East Belitung Regency, with a distance ± 46 km from HAS Hanandjoedin Airport Belitung Regency and ± 48 minutes by road (google map).',
        'image' => 'tebat-rasau.jpg', 'cp' => '6285924977735',
      ],
      [
        'id' => 'air-4', 'title' => 'Pantai Punai',
        'location' => 'Pantai Punai Desa Tanjung Kelumpang Kecamatan Simpang Pesak - Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Pantai punai terletak di Desa Tanjung Kelumpang Kecamatan Simpang Pesak Kabupaten Belitung Timur, dengan jarak ± 73 km dari Bandara Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 18 menit dengan perjalanan darat (sumber : google map). 
        Pantai ini, memiliki karakhteristik berpasir putih berpadu dengan biru-nya air laut dan batu - batu granit berukuran besar dan kecil serta pepohonan akasia yang tersebar disepanjang pinggiran pantainya. Dipantai ini, pengunjung bisa merasakan sensasi ketenangan tinggal jauh dari keramaian kota serta menikmati sunset moment dan kuliner khas belitong yang dijual di warung makan minum. Terdapat juga fasilitas pendukung aktivitas kepariwisataan seperti shelter, musholla, toilet, taman bermain anak - anak dan bungalow. Contact : 0813 73415010/WA an. Erwan - Pantai punai is located in Tanjung Kelumpang Village, Simpang Pesak District - East Belitung Regency, with a distance of ± 73 km from HAS Airport and ± 1 hours 18 minutes by road (google map) 
        These beach has a special carachteristic of white sandy beach combined with blue sea, akasia trees, large and small granite stones scattered along the edge of the beach.',
        'image' => 'pantai-punai.jpg', 'cp' => '6281373415010',
      ],
      [
        'id' => 'air-5', 'title' => 'Pantai Nyiur Melambai',
        'location' => 'Desa Lalang Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Pantai nyiur melambai memiliki karakhteristik pantai berpasir putih nan panjang berpadu dengan biru-nya air laut dan deretan pepohonan akasia yang tumbuh disepanjang garis pantainya. 
        Pantai ini adalah destinasi wisata zero kilometer yang menjadi tempat ideal untuk masyarakat, terutama mereka yang berdomisili di Kota Manggar untuk relaksasi. Terdapat fasilitas pendukung aktivitas kepariwisataan di pantai nyiur melambai seperti panggung hiburan, taman bermain anak - anak, toilet, jogging track, kamar bilas, musholla, warung makan minum dan tempat duduk untuk pengunjung diarea pantai. Pantai nyiur melambai terletak di Desa Lalang Kecamatan Manggar Kabupaten Belitung Timur, dengan jarak tempuh ± 70 km dari Bandara Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 9 menit dengan perjalanan darat (sumber : google map) Contact : 0819 49193648/WA (Wira), IG : @DEWILALANG, Email DESAWISATALALANG@GMAIL.COM - Pantai nyiur melambai is located in Lalang Village, Manggar District, East Belitung Regency, with a distance ± 70 km from HAS Hanandjoedin Airport and ± 1 hours 9 minutes by road (google map) 
        This beach has a special characteristics of long white sandy beach combined with the blue sea water, rows of acacia trees that growing along the coastline and beautiful sunrise moment.',
        'image' => 'pantai-lalang.jpg', 'cp' => '6281949193648',
      ],
      [
        'id' => 'air-6', 'title' => 'Pulau Bukulimau',
        'location' => 'Pulau Buku Limau, Desa Buku Limau Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Desa Bukulimau (pulau bukulimau) terletak diseberang laut Kecamatan Manggar (Kota Manggar) Kabupaten Belitung Timur, 
        dengan jarak 72 km dari Bandara HAS Hanandjoedin Kabupaten Belitung ke-Pelabuhan ASDP Sungai Manggar 
        dan waktu tempuh 1 jam 19 menit perjalanan darat serta dilanjutkan dengan penyeberangan (perjalanan laut) ± 45 menit. 
        Wisata bahari merupakan potensi wisata yang ditawarkan kepada pengunjung di pulau bukulimau, 
        disekitar pulau ini banyak ditemukan terumbu karang yang menjadi rumah kehidupan biota laut dan warna warni ikan - ikan kecil maupun besar yang akan memanjakan mata bagi pengemar snorkeling dan selam. Pengujung juga bisa berinteraksi, melihat aktivitas kehidupan nelayan sehari - hari dan menikmati kuliner khas suku bugis serta panorama disekeliling pulau. 
        Contact : 0813 79055906/WA (Michelle) - Bukulimau Village (Bukulimau Island) is located across the sea from Manggar District (Manggar City) East Belitung Regency, with a distance of 72 km from HAS Hanandjoedin Airport, Belitung Regency to ASDP Port of the Manggar River and 1 hour 19 minutes by road and continues travel sea ± 45 minutes.',
        'image' => 'pulau-bukulimau.jpg', 'cp' => '6281379055906',
      ],
    ],
  ],
  'alam' => [
    'label' => 'Wisata Alam',
    'icon'  => 'mountain',
    'items' => [
      [
        'id' => 'alam-1', 'title' => 'Geosite Batu Begalang',
        'location' => 'Desa Kelubi, Kecamatan Manggar, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Sebuah batu besar disebut batu begalang terdapat dipuncak sebuah bukit, 
        batu tersebut memiliki posisi unik yang saling sanggah (begalang) atau saling tahan dengan batu lainnya yang berukuran lebih kecil, 
        sehingga bukit tersebut dinamakan bukit batu begalang oleh masyarakat setempat. Geosite batu begalang terletak di Desa Kelubi Kecamatan Manggar Kabupaten Belitung Timur, dengan jarak 59 km dari Bandara HAS. 
        Hanandjoedin Kabupaten Belitung dan jarak tempuh 1 jam 3 menit dengan perjalanan darat (sumber : google map) Geosite ini memiliki daya tarik wisata yaitu kekayaan geologis, aneka flora fauna, khasanah tradisi budaya, kuliner tradisional, produk ekonomi kreatif seperti kerajinan anyaman dan madu teran/trigona. CP : WA 0831 7508 4406 (Febri) 0878 9349 9618 (Rio) - Geosite batu begalang is located in Kelubi Village Manggar District - East Belitung, with a distance of 59 km from HAS Airport and the distance is 1 hour 3 minutes by road (google map) This geosite has a unique tourist attractions namely geological wealth, various flora and fauna, treasures of cultural traditions, traditional culinary, art, 
        creative economy such as woven crafts and trigona honey.',
        'image' => 'batu-begalang.jpg', 'cp' => '6283175084406',
      ],
      [
        'id' => 'alam-2', 'title' => 'Geosite Hutan Kerangas Desa Cendil',
        'location' => 'Desa Cendil, Kecamatan Kelapa Kampit, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Geosite hutan kerangas terletak di Desa Cendil Kec. Kelapa Kampit, dengan jarak ± 37 km dari bandara HanandjoedinKabupaten Belitung dan waktu tempuh ± 42 menit dengan perjalanan darat. 
        Hutan kerangas ditumbuhi spesies tumbuh-tumbuhan unik yang hidup diatas tanah pudsol/miskin unsur hara dan kadar oksigen rendah. 
        Beberapa jenis tumbuh-tumbuhan yang tumbuh di hutan tersebut juga bermanfaat untuk obat-obatan herbal. serta terdapat sarana dan prasarana pendukung aktivitas kepariswisataan disana seperti jalur trekking, gazebo, papan nama tumbuhan serta guide lokal yang akan memandu pengunjung yang datang. 
        The heath forest geosite is located in Cendil Village Kelapa Kampit District, with a distance of ± 37 km from Hanandjoedin airport, Belitung Regency and a travel time ± 42 minutes by road.',
        'image' => 'hutan-kerangas.jpg', 'cp' => '-',
      ],
      [
        'id' => 'alam-3', 'title' => 'Geosite Open Pit Nam Salu',
        'location' => 'Desa Senyubuk, Kecamatan Kelapa Kampit, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Geosite Open Pit Nam Salu terletak di Desa Senyubuk Kecamatan Kelapa Kampit Kabupaten Belitung Timur, dengan jarak ± 42 km dari Bandara HAS. 
        Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 8 menit perjalanan darat (sumber : google map) Pada 22 April 2022, Pulau Belitong telah ditetapkan menjadi UNESCO Global Geopark/UGG.
        Open pit nam salu adalah salah satu geowisata di Belitung Timur dengan daya tarik wisata yaitu kesejarahan penambangan timah, nilai – nilai kegeologian yang terkandung didalamnya, keunikan budaya (culture diversity) dan keanekaragan hayati (biodiversity). Contact : Tino Christian 0819 49412000/WA Yusyarnubi 0857 88954341/WA, namsalugeosite@gmail.com, IG : @openpitnamsalugeosite - Geosite open pit nam salu is located in Senyubuk village Kelapa Kampit District East Belitung Regency, with a distance with a distance of 42 km from HAS Hanandjoedin Airport Belitung Regency and 1 hour 8 minutes by road (google map) Open pit is a big hole of ex-tin underground mining area with beautiful blue lake an approximately 700 m underground tunel. 
        The tourist who visit there will welcoming and guided by local guide.',
        'image' => 'open-pit.jpg', 'cp' => '6281949412000',
      ],
      [
        'id' => 'alam-4', 'title' => 'Geosite Gunong Lumut',
        'location' => 'Desa Senyubuk, Kecamatan Kelapa Kampit, Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Sesuai namanya Gunung Lumut, dipuncaknya terdapat hamparan lumut nan luas sepanjang mata memandang, yang terdiri dari beberapa jenis lumut dengan warna dominan kekuningan. 
        Disamping itu, juga terdapat beberbagai jenis tumbuhan dan kayu-kayuan endemik Pulau Belitong. Kawasan Gunung lumut sudah ditetapkan menjadi destinasi wisata berbasiskan wisata minat khusus di Kabupaten Belitung Timur pada bulan April 2021 dan diakui oleh UNESCO menjadi Global Geopark (UNESCO Global Geopark). 
        Gunong lumut terletak di Desa Limbongan Kecamatan Gantung, dengan jarak ± 74 km dari Bandara HAS. Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 20 menit perjalanan darat (sumber : google map). Contact : 0812 74217922/WA, IG @gununglumut8 - Gunong lumut (belitong moss forest) is located in Limbongan Village, Gantung district - East Belitung Regency, with a distance of ± 74 km from HAS Hanandjoedin Airport and ± 1 hour 20 minutes by road (google map). 
        Hiking gunong lumut, the tourist or visitors can take picture with the stunning green yellowish overlay of the moss as the background, relax under the shady trees and enjoy the fresh mountain air.',
        'image' => 'gunong-lumut.jpg', 'cp' => '6281274217922',
      ],
    ],
  ],
  'sejarah' => [
    'label' => 'Sejarah',
    'icon'  => 'landmark',
    'items' => [
      [
        'id' => 'sejarah-1', 'title' => 'A2 - Rumah Dinas Bupati Belitung Timur',
        'location' => 'Desa Lalang Kecamatan Manggar Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Ingin melihat bangunan bersejarah yang dibangun oleh Belanda di Belitung Timur ? 
        A2 adalah nama dari salah satu bangunan rumah yang menjadi heritage atau warisan sejarah yang dibangun pada tahun 1916 oleh Perusahaan Tambang Swasta Belanda NV. 
        Biliton Maatschappij. Oleh Pemerintah Kabupaten Belitung Timur A2 menjadi rumah dinas Bupati Belitung Timur dan guest house yang sering menjadi tempat menginap untuk tamu Pemkab. Belitung Timur yang datang dari luar daerah. Rumah A2 terletak di Desa Lalang Kecamatan Manggar dengan jarak ± 70 km dari Bandara HAS. Hanandjoedin Kab. Belitung dan waktu tempuh ± 1 jam 8 menit perjalanan darat (sumber : google map) Contact : 0819 49193648/WA (Wira), IG : @DEWILALANG, Email DESAWISATALALANG@GMAIL.COM - Want to see the historical buildings A2 house that built by the Dutch on 1916 ? 
        You can explore Bukit Samak/samak hill located in Lalang Village Manggar Disrict East Belitung Regency, with a distance of ± 70 km from HAS Hanandjoedin Airport and ± 1 hour 8 minutes by road (google map)',
        'image' => 'rumah-dinas.jpg', 'cp' => '6281949193648',
      ],
      [
        'id' => 'sejarah-2', 'title' => 'Kelenteng Dewi Kwan Im',
        'location' => 'Desa Burong Mandi Kecamatan Damar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Kelenteng Dewi Kwan Im terletak di Desa Burong Mandi Kecamatan Damar Kabupaten Belitung Timur, dengan jarak ± 69 km dari bandara Hanandjoedin atau waktu tempuh 1 jam 22 menit perjalanan darat (sumber : google map) 
        Kelenteng ini adalah kelenteng terbesar dan tertua yang dibangun 300 tahun yang lalu di Pulau Belitung. Contact : 0821 79315619/WA, IG : pokdarwisberage - The monastery of Kwan Im Goddess is the biggest and the oldest monastery that built more than 300 years ago in Belitung Island. 
        It is located in Burong Mandi village Damar District, with a distance ± 69 Km away from Hanandjoedin Airport and a traveling time 1 hour 22 minutes by road (google map).',
        'image' => 'kelenteng-dewi-kwan-im.jpg', 'cp' => '6282179315619',
      ],
       [
        'id' => 'sejarah-3', 'title' => 'Galeri Maritim Belitung Timur',
        'location' => 'Desa Baru Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Galeri Maritim Belitung Timur terletak di Jalan Pegadaian Desa Baru Kecamatan Manggar Kabupaten Belitung Timur dengan jarak 71 km dari Bandara HAS. 
        Hanandjoedin Kabupaten Belitung dan waktu tempuh 1 jam 8 menit dengan perjalanan darat (sumber : google map) Galeri ini, 
        berisikan koleksi berupa artefak - artefak yang berasal dari muatan kapal tenggelam. 
        Dengan total koleksi berjumlah 878 artefak yang terdiri dari 779 buah dari Belitung Timur dan 100 buah lainnya merupakan hibah dari Kementerian Pendidikan dan Kebudayaan RI. 
        Saat ini, Galeri Maritim Belitung Timur dikelola oleh Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur, yang dibuka untuk umum Hari Kerja (Senin - Kamis : 07.30 WIB - 16.00 WIB & Jumat 07.30 WIB - 16.30 WIB) dan hari libur (Sabtu - Minggu : pukul 08.00 WIB s/d 15.00 WIB.). Contact : Telp/Fax (0719) 9220063, Email disbudpar@belitungtimurkab.go.id, FB east-east (inspiringbelitungtimur), IG inspiringbelitungtimur - Merine Heritage Galery of Belitung Timur is located in Pegadaian street Baru Village Manggar District East Belitung Regency, with a distance of 71 km from HAS Airport and 1 hour 8 minutes by road (google map) Galery open for public, Monday to Thursday (07.30 am - 16.00 pm), friday (7.30 am - 16.30 pm) and holiday (saturday - sunday 8.00 am - 15.00pm).',
        'image' => 'galeri-maritim-belitung-timur.jpg', 'cp' => '6281753131113',
      ],
      [
        'id' => 'sejarah-4', 'title' => 'OWUN, Objek Wisata Unik Ngenjungak',
        'location' => 'OWUN - Kantor Dinas Kebudayaan dan Pariwisata Belitung Timur Desa Padang Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'OWUN atau Objek Wisata Unik Ngenjungak, dibuka untuk publik sejak tahun 2017 setiap hari kerja dan hari libur, 
        wisatawan yang berkunjung kesana akan didampingi dan diberikan informasi mengenai pariwisata Belitung Timur. 
        OWUN terletak di Kantor Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur, dengan jarak 67 km dari Bandara HAS. Hanandjoedin Kabupaten Belitung dan waktu tempuh 1 jam 3 menit dengan perjalanan darat. 
        Di OWUN, terdapat beberapa koleksi benda - benda tradisi dan budaya, foto - foto destinasi wisata serta hewan - hewan endemik yang hidup di Kabupaten Belitung Timur. OWUN kian dikenal dan diakui sebagai destinasi wisata edukasi, hal ini dibuktikan dengan OWUN dijadikan sebagai tempat penelitian mahasiswa dari berbagai perguruan tinggi dalam bahkan luar negeri. 
        Contact : Telp/Fax (0719) 9220063, Email disbudpar@belitungtimurkab.go.id, FB east-east(inspiringbelitungtimur), IG inspiringbelitungtimur - OWUN or unique tourism ngenjungak (visiting to the place or tourist destinations for a while) is situated in the Office of Culture and Tourism of East Belitung Regency, 
        with with a distance of 67 km from HAS Airport and 1 hour 3 minutes by road The tourists who visiting here, will be guiding and given more information by local guide about the tourism potentials in East Belitung Regency.',
        'image' => 'galeri-maritim-belitung-timur.jpg', 'cp' => '07199220063',
      ],
      [
        'id' => 'sejarah-5', 'title' => 'Replika SD Laskar Pelangi',
        'location' => 'Replika SD Muhammadiyah Laskar Pelangi Desa Lenggang Kecamatan Gantung Kabupaten Belitung Timur, Provinsi Bangka Belitung',
        'description' => 'Masih ingat dengan Film Laskar Pelangi yang dirilis pada tahun 2008 ? 
        film laskar pelangi diangkat dari novel yang berjudul Laskar Pelangi, ditulis oleh Andrea Hirata. 
        Film ini sangat booming di Indonesia bahkan dunia. Film laskar pelangi menceritakan tentang perjuangan anak - anak di Desa Gantong Kabupaten Belitung Timur dalam menuntut ilmu dibangku sekolah dasar melawan keterbatasan yang ada pada waktu itu. 
        Pada 1970an di Desa Gantong, terdapat sebuah gedung sekolah SD dengan kondisi yang sangat memprihatinkan. Sekolah ini bernama SD Muhammadiyah Gantong dan menjadi satu-satunya tempat bersekolah anak-anak yang orang tuanya memiliki keterbatasan pada kemampuan ekonomi di desa tersebut. Bangunan Replika SD Laskar Pelangi terletak di Desa Lenggang Kecamatan Gantung Kabupaten Belitung Timur, dengan jarak ± 59 km dari Bandara HAS Hanandjoedin Kabupaten Belitung dan waktu tempuh ± 1 jam 1 menit dengan perjalanan darat (sumber : google map) Contact : 0822 69211223/WA an. Aisyah Puteri (Bumdes Lenggang) - 
        The replica building of SD Laskar Pelangi is located in Lenggang Village Gantung District East Belitung Regency, with a distance ± 59 km from HAS Hanandjoedin Airport, Belitung Regency and a travel time ± 1 hour 1 minute by road (google map)',
        'image' => 'laskar-pelangi.jpg', 'cp' => '6282269211223',
      ],
      [
        'id' => 'sejarah-6', 'title' => 'Situs Makam Raja Balok',
        'location' => 'Desa Balok Kecamatan Dendang Kabupaten Belitung Timur Provinsi Bangka Belitung-Indonesia',
        'description' => 'Situs Makam Raja Balok terletak di Desa Balok Kecamatan Dendang dengan jarak ± 41 km dari bandara HAS. Hanandjoedin Kabupaten Belitung dan waktu ditempuh ± 54 menit dengan perjalanan jalur darat (sumber : google map) 
        Situs ini adalah salah satu destinasi wisata sejarah yang ada di Belitung Timur, Ki Gede Yakub adalah raja pertama dan kerajaan balok merupakan kerajaan terbesar yang pernah ada di Pulau Belitong, wilayah kekuasaannya meliputi hampir seluruh Pulau tersebut. 
        Pengunjung bisa melakukan berbagai aktivitas menarik seperti berziarah, mendengarkan cerita tentang kerajaan balok langsung dari keturunannya/story teller dan menikmati kerindangan pepohonan yang terdapat disekitar situs. Contact : 0819 15055433/WA an. Agus Prastyo - 
        The king of Balok grave’s site is located in Balok village, Dendang District, ±41 Km away from Hanandjoedin airport Belitung Regency and a travel time of ± 54 minutes by road (google map)',
        'image' => 'makam-raja-balok.jpg', 'cp' => '6282269211223',
      ],
    ],
  ],
  'kuliner' => [
    'label' => 'Kuliner',
    'icon'  => 'utensils',
    'items' => [
      [
        'id' => 'kuliner-1', 'title' => 'Gangan',
        'location' => 'Kabupaten Belitung Timur',
        'description' => 'Gangan adalah kuliner khas masyarakat di Pulau Belitong dan Belitung termasuk didalamnya. 
        Pada tahun 2016, gangan dan gangan darat telah ditetapkan sebagai Warisan Budaya tak Benda (WBTB) dari Kabupaten Belitung Timur oleh Kementerian Pendidikan dan Kebudayaan RI atas usulan Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur Gangan Darat menggunakan daging sapi, kambing atau ayam sebagai bahan utamanya. 
        Sedangkan bumbu utamanya antara lain cabe, kunyit dan kemiri. Biasanya untuk menambahkan cita rasa digunakan pucuk daun nangka. Terdapat teknik yang digunakan untuk memasak Gangan, namun pada dasarnya tetap berdasarkan resep dasar seperti menghalusan bumbu dengan cara ditumbuk bukan diblender, dimasak dengan tungku api bukan dengan gas, karena dipercaya akan lebih mengeluarkan rasa. Untuk menghasilkan Gangan yang kental, singkong direbus bersama dengan bumbu maka akan menghasilkan Gangan yang liut (kental). Ciri khas Gangan liut ini dapat ditemukan di daerah pedalaman (darat). Sedangkan masyarakat melayu yang tinggal di Pesisir, lebih menyukai Gangan yang bercita rasa segar seperti Gangan Nanas. Gangan jenis ini tidak menggunakan Singkong. Kuah yang dihasilan berwarna kuning segar dan bercita rasa pedas asam sedikit manis. Gangan Darat dan Gangan hingga kini masih dikonsumsi oleh masyarakat di Pulau Belitung sebagai lauk-pauk sehari-hari. Sehingga kelestariannya masih terjaga. Selain itu kuliner ini juga digunakan untuk salah satu lauk dalam upacara adat seperti pernikahan yang disajikan secara tradisional dalam makan bedulang. 
        Seiring kemajuan pariwisata Pulau Belitong, wisatawan dapat menikmati gangan yang tersedia warung makan dan restoran di Belitung Timur',
        'image' => 'gangan.jpg', 'cp' => '-',
      ],
      [
        'id' => 'kuliner-2', 'title' => 'Begero atau Berego',
        'location' => 'Kabupaten Belitung Timur',
        'description' => 'Begero atau berego adalah kuliner khas belitong di Belitung Timur, berego terbuat dari tepung beras dan dicampur dengan sagu. 
        Kedua tepung tersebut digulung kemudian dimasak dengan cara di-tim (kukus). Dalam penyajiannya, kuliner yang memiliki tekstur kenyal ini dimakan dengan dicampur kuah kari ikan yang membuat rasanya menjadi nikmat. 
        Di Kabupaten Belitung Timur, berego dapat ditemukan diwarung - warung makan, walaupun tidak semua warung tersebut menyediakan berego sebagai menu kuliner yang dijual',
        'image' => 'begero.jpg', 'cp' => '-',
      ],
      [
        'id' => 'kuliner-3', 'title' => 'Lepat',
        'location' => 'Kabupaten Belitung Timur',
        'description' => 'Lepat adalah jajanan khas belitong dari Belitung Timur, lepat terbuat dari beras ketan yang dibungkus dengan daun lais (sejenis daun pandan) ditambah santan kemudian dimasak dengan cara di-tim. 
        Cita rasa lepat semakin enak jika ditambah dengan cocolannya seperti emping beras dan gula aren ditambah aroma durian. Lepat juga bisa dinikmati oleh masyarakat di Belitung Timur dengan lauk pauk. Oleh masyarakat Belitung Timur, lepat dijadikan menu wajib pada acara maras taun. Maras taun adalah sebuah tradisi tahunan yang diselenggarakan oleh masyarakat yang tinggal dikampung - kampung di Pulau Belitong sebagai wujud rasa syukur kepada Tuhan Yang Maha Esa atas hasil panen yang baik setelah didahului dengan masa tanam padi. Lepat mudah didapatkan oleh wisatawan di Belitung Timur, karena lepat dijual oleh masyarakat sebagai menu jajanan lokal seperti di warung - warung, warung kopi dan lainnya. 
        - Lepat is an authentic belitong snack from East Belitung Regency. lepat is made from glotinous rice warraped in lais leaves (a type of pandan leaf) added coconut milk and then steamed.',
        'image' => 'lepat.jpg', 'cp' => '-',
      ],
      [
        'id' => 'kuliner-4', 'title' => 'Kue Rintak',
        'location' => 'Kabupaten Belitung Timur',
        'description' => 'Kue Rintak adalah kue kering kecil yang merupakan camilan khas belitong yang sangat digemari oleh masyarakat di Belitung Timur. 
        Kue Rintak berbahan dasar sagu (tepung tapioka), gula pasir, dan santan kelapa yang diaduk menjadi satu adonan dan dicetak sesuai dengan bentuk yang diinginkan namun umumnya berbentuk bintang kemudian dipanaskan dengan mengunakan oven (alat pemanas/pemanggang untuk makanan). Kue kering ini rasanya manis, gurih, tidak bikin eneg dan kadang-kadang dicampur dengan jahe serta wijen untuk variasi. Rasanya yang enak, kue rintak sangat cocok menjadi buah tangan atau souvenir oleh para wisatawan yang berkunjung di Belitung Timur. 
        Di Belitung Timur, kue rintak bisa didapatkan oleh wisatawan digerai - gerai yang menjualnya didestinasi - destinasi wisata ataupun toko - toko souvenir di Belitung Timur.',
        'image' => 'kue-rintak.jpg', 'cp' => '-',
      ],
      [
        'id' => 'kuliner-5', 'title' => 'Warung Kopi Manggar',
        'location' => 'Manggar, East Belitung Regency, Bangka Belitung Province - Indonesia',
        'description' => 'Kota Manggar Ibukota Kabupaten Belitung Timur dikenal luas dengan Kota Seribu Satu Warung Kopi/1001. 
        Dikenal sebagai Kota dengan 1001 Warung Kopi, karena sebagian besar masyarakat terutama kaum pria disana suka minum kopi, mereka minum kopi sambil ngobrol dan bertukar informasi serta saling memper-erat siratuhrami antara sesama penikmat kopi. 
        Sehingga terdapat banyak warung kopi, yang keberadaannya sangat mudah ditemukan di Kota Manggar.',
        'image' => 'warkop.jpg', 'cp' => '-',
      ],
    ],
  ],
  'penginapan' => [
    'label' => 'Penginapan',
    'icon'  => 'bed',
    'items' => [
      [
        'id' => 'penginapan-1', 'title' => 'Guest Hotel',
        'location' => 'Desa Baru (Pasar Lipat Kajang - Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Guest Hotel memiliki klasifikasi bintang 2 (dua), dengan platform pemasaran hotel bisa diakses secara online atau menghubungi contact person (CP) (0719) 91528 - 
        Guest hotels has two star classification, with a hotel marketing platform that can be accessed online or by calling the contact person (CP) (0719) 91528',
        'image' => 'guest-hotel.jpg', 'cp' => '071991528',
      ],
      [
        'id' => 'penginapan-2', 'title' => 'Hotel Oasis',
        'location' => 'Desa Padang Kecamatan Manggar (Kota Manggar) Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Hotel Oasis memiliki klasifikasi hotel bintang I (satu), Platform pemasaran hotel ini bisa diakses secara online atau menghubungi contact person (CP) (0719) 91747 - 
        Oasis Hotel has a one star hotel classification. This hotel marketing platform can be accessed online or calling the contact person (CP) (0719) 91747',
        'image' => 'hotel-oasis.jpg', 'cp' => '071991747',
      ],
      [
        'id' => 'penginapan-3', 'title' => 'Hotel Simpang Empat',
        'location' => 'Desa Mekar Jaya (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Hotel Simpang Empat memiliki klasifikasi penginapan, informasi lebih lanjut bisa menghubungi Contact Person (CP) (0719) 91605 - 
        Simpang Empat Hotel has a lodging accommodation (penginapan) classification, for further information can contact the Contact Person (CP) (0719) 91605',
        'image' => 'hotel-simpang-empat.jpg', 'cp' => '071991605',
      ],
      [
        'id' => 'penginapan-4', 'title' => 'Omah Andini Hotel',
        'location' => 'Desa Lalang Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Omah Andini memiliki klasifikasi penginapan, dengan platform pemasaran bisa diakses secara online atau menghubungi contact person (CP) (0719) 91784, 0819684109, 081225050122. 
        - Omah Andini has a lodging accommodation (penginapan) classification, with a marketing platform that can be accessed online or by calling the contact person (CP) (0719) 91784, 0819684109, 081225050122.',
        'image' => 'hotel-andini.jpg', 'cp' => '071991784',
      ],
      [
        'id' => 'penginapan-5', 'title' => 'Penginapan Sederhana',
        'location' => 'Desa Baru (Pasar Lipat Kajang - Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Penginapan Sederhana, informasi lebih lanjut bisa menghubungi Contact Person (CP) (0719) 91286/91756 - 
        Penginapan Sederhana/lodging accommodation, more information can calling the Contact Person (CP) (0719) 91286/91756.',
        'image' => 'penginapan-sederhana.jpg', 'cp' => '071991286',
      ],
      [
        'id' => 'penginapan-6', 'title' => 'Homestay Keremunting',
        'location' => 'Desa Senyubuk Kecamatan Kelapa Kampit Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'PCP : Ibu Nunung HP. 0822 8230 6114 Bangunan homestay keremunting merupakan bangunan yang dibangun pada masa Kolonial Belanda, sehingga menjadikannya sangat spesial karena bangunannya adalah sebuah heritage. 
        Homestay keremunting adalah rumah tinggal dari Ibu Nunung bersama ibu dan ayahnya serta anggota keluarga lainnya Menginap disini, wisatawan dapat menikmati suasana rumah yang nyaman bergaya eropa/belanda yang dipadukan dengan arsitektur dan konsep lokal. 
        Wisatawan juga bisa berinteraksi langsung dengan pemilik homestay serta masyarakat mengenai kehidupan sehari - hari mereka. Geowisata Open Pit Nam Salu dan Pusat Informasi Geologi (PIG) Pulau Belitung adalah 2 destinasi wisata yang letaknya berdekatan dengan homestay keremunting. 
        Open Pit Nam Salu merupakan salah satu geowisata di Belitung Timur, dengan daya tarik wisata utamanya yaitu kesejarahan penambangan timah serta nilai - nilai kegeologian yang terkandung didalamnya. Geowisata ini juga mempunyai keunikan budaya (culture diversity) dan keanekaragaman hayati (biodiversity). 
        Dan Pusat Informasi Geologi (PIG), adalah sebuah gedung yang menjadi pusat penyebaran informasi tentang kegelogian di Pulau Belitong dan nasional dengan menampilkan tulisan, benda-benda kegeologian serta video kepada wisatawan yang datang berkunjung. Dengan menginap di homestay keremunting, wisatawan bisa mengexplore kedua destinasi wisata tersebut serta merasakan kenyamanan, menghirup udara segar jauh dari polusi udara dan hingar bingar kehidupan di kota-kota besar. 
        By staying at the homestay keremunting, the tourists can feeling comfortable, breathe the fresh air away from pollution and hustle and bustle life i big cities.',
        'image' => 'homestay-keremunting.jpg', 'cp' => '6282282306114',
      ],
      [
        'id' => 'penginapan-7', 'title' => 'Homestay Nek Nina',
        'location' => 'Desa Burong Mandi Kecamatan Damar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'CP : Jasima (Nek Nina) HP. 0878 9624 6373 Ingin merasakan kenyamanan dan aman, kemudian kamu bisa menghirup udara segar jauh dari polusi dan hingar bingar kehidupan di kota - kota besar, wisatawan bisa menginap di Homestay yang ada Desa Wisata Burong Mandi - Belitung Timur. 
        Homestay Nek Nina, adalah satu dari beberapa homestay yang ada disana, homestay ini sering menerima kunjungan wisatawan menginap terutama sebelum pandemi. 
        Terdapat 2 homestay lainnya di Desa Wisata Burong Mandi, yang juga aktif menerima wisatawan ataupun tamu menginap, namun pandemi telah membuatnya mati suri hanya homestay Nek Nina-lah yang masih aktif. 
        Menginap disana, wisatawan juga bisa berinteraksi dengan pemilik homestay dan masyarakat nelayan di pantai burong mandi dengan melihat langsung aktivitas keseharian mereka. Disamping itu, wisatawan juga bisa mengeksplore Desa Wisata Burong Mandi dengan berkunjung kebeberapa destinasi wisata seperti Pantai Burong Mandi, Vihara Dewi Kwan Im, Bukit Batu dan lainnya. 
        Di Pantai Burong Mandi, wisatawan juga bisa menikmati kuliner/jajanan khas belitong yang dijual diwarung - warung makan minum milik masyarakat. 
        Pantai burong mandi adalah salah satu destinasi wisata di Belitung Timur yang ramai dikunjungi oleh wisatawan, terutama sebelum pandemi. Pantai ini memiliki karakteristik pantai berpasir putih berpadu dengan laut biru, barisan warna warni perahu kater yang diparkir oleh nelayan dan pepohonan akasia yang tumbuh disepanjang garis pantainya. 
        You wanna feeling comfortable and safe, then you can breathe the fresh air away from pollution and hustle and bustle life in big cities, tourists can stay at Homestay Burong Mandi village - East Belitung Regency.',
        'image' => 'homestay-neknina.jpg', 'cp' => '6287896246373',
      ],
    ],
  ],
  'travel' => [
    'label' => 'Travel',
    'icon'  => 'bus',
    'items' => [
      [
        'id' => 'travel-1', 'title' => 'Ade Travelindo',
        'location' => 'Dusun Padang RT 03 RW 02 Desa Mentawak Kec. Kelapa Kampit Kabupaten Belitung Timur',
        'description' => 'Menyediakan berbagai layanan wisata pulau Belitung seperti paket wisata murah, Fieldtrip, Gathering, Honeymoon, Open trip, Private trip dan layanan rental Belitung terlengkap.',
        'image' => 'ade-travel.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-2', 'title' => 'Laskar Twin Belitung Tour',
        'location' => 'Jl. Tengah Dusun Pancur II RT. 001 RW.001 Desa Padang Kec. Manggar Kab. Belitung Timur',
        'description' => 'Merupakan salah satu jasa tour & travel di Kabupaten Belitung Timur. Kantor ini menyediakan berbagai macam paket liburan, wisata dan trip. 
        Paket sudah termasuk tiket pesawat/kapal, akomodasi, transfortasi, makan, penginapan dan tour guide / pemandu wisata',
        'image' => 'laskar-travel.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-3', 'title' => 'PT Mandiri Ane Sejahtera',
        'location' => 'Jl. Jend. Sudirman Dsn. Arab - I RT. 25 RW 08 Desa Kurnia Jaya Kecamatan Manggar Kabupaten Belitung Timur',
        'description' => 'Kami ingin membantu anda yang ingin berkunjung ke pulau Belitung yang terkenal dengan keindahan pantainya dan susunan batu geranit yang sangat unik.',
        'image' => 'pt-tour.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-4', 'title' => 'Angkasa Prima',
        'location' => 'Dusun Kebun Sayor RT 09 RW 05 Desa Mengkubang Kecamatan Damar Kabupaten Belitung Timur',
        'description' => 'Dalam paket hemat ke belitung ini kita menawarkan paket wisata belitung harga murah dengan konsep liburan hemat. 
        pada paket hemat ke belitung ini peserta juga dibebaskan dalam menentukan kuliner atau makan sesuai dengan selera sendiri dan kami siap membantu Anda.',
        'image' => 'angkasa-tour.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-5', 'title' => 'Levi Tour',
        'location' => 'Jl. Gajah Mada No. 54A Pangkallalang-Tanjungpandan-Belitung-Bangka Belitung',
        'description' => 'Biro Perjalanan Wisata yang mulai beroperasi pada 27 Mei 2007. Awal mulanya bergerak dibidang tour, khususnya perjalanan wisata di Pulau Belitung sejak pariwisata Belitung belum menggeliat seperti sekarang ini. 
        LEVI Tour sebagai pelopor Biro Perjalanan Wisata di Belitung. 
        Saat ini kami telah melayani banyak wisatawan, baik wisatawan nusantara maupun wisatawan mancanegara, serta sudah dipercaya oleh berbagai instansi dan perusahaan dalam melayani kebutahan perjalanannya.',
        'image' => 'levi-tour.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-6', 'title' => 'PT Manggar Delta Travelindo',
        'location' => 'Dusun Arab I RT. 13 RW.07 Desa Kurnia Jaya Kec. Manggar Kab. Belitung Timur',
        'description' => 'Agen Travel Resmi penyedia berbagai macam Paket Wisata Belitung dengan harga termurah.',
        'image' => 'pt-delta.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-7', 'title' => 'CV Barokah',
        'location' => 'Jalan Jendral Sudirman, Desa Kurnia Jaya, Kabupaten Belitung Timur, Provinsi Bangka Belitung - Indonesia',
        'description' => 'Merupakan salah satu jasa tour & travel di Kabupaten Belitung Timur. Kami menyediakan berbagai macam paket liburan, wisata dan trip.',
        'image' => 'cv-barokah.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-8', 'title' => 'Partner\'s Tour & Travel',
        'location' => 'Dusun Jawa RT 02 RW 01 Desa Senyubuk Kecamatan Kelapa Kampit Kabupaten Belitung Timur',
        'description' => 'Kami menyediakan jasa travel dan transportasi untuk anda yang ingin berwisata di pulau belitung dan kami siap melayani kebutuhan anda dengan kendaraan terbaru. 
        agar perjalanan selama anda berwisata di pulau belitung merasa nyaman.',
        'image' => 'partners-tour.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-9', 'title' => 'PT Mulia Anugerah Wisata',
        'location' => 'Jln. A. Yani RT.01/00 Pasar Gantung Kab. Belitung Timur',
        'description' => 'Penyedia paket tour Belitung, Pantai Tanjung Kelayang, Tour Pulau dan Hunting Foto, Info Paket Tour Wisata Belitung 2021 hubungi kami.',
        'image' => 'pt-mulia.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-10', 'title' => 'Galaxy Travel',
        'location' => 'Dusun Kurnia RT. 01A RW.01 Desa Kurnia Jaya Kec. Manggar Kab. Belitung Timur',
        'description' => 'Travel kami mendampingi Anda perjalanan di Belitung Timur, hingga wisata kuliner di Belitung.',
        'image' => 'galaxy-travel.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-11', 'title' => 'PBT Tour & Travel',
        'location' => 'Dusun Assalam RT 31 RW 14 Desa Baru Kecamatan Manggar Kabupaten Belitung Timur',
        'description' => 'Rencanakan liburan Anda dengan matang sesuai keinginan dan budget dan pastikan pilihan Anda berwisata dengan kami.',
        'image' => 'pbt-tour.jpg', 'cp' => '-',
      ],
      [
        'id' => 'travel-12', 'title' => 'Putera Belitong Tour',
        'location' => 'Putera Belitong Tour, Padang Village, East Belitung Regency, Bangka Belitung Province - Indonesia',
        'description' => 'Putera Belitong Tour berdiri sejak pada tanggal 7 Juli tahun 2011. Trip Standar hingga Layanan VIP telah kami berikan pada Customer.',
        'image' => 'putera-tour.jpg', 'cp' => '-',
      ],
    ],
  ],
  'oleh-oleh' => [
    'label' => 'Oleh - oleh',
    'icon'  => 'bag',
    'items' => [
      [
        'id' => 'oleholeh-1', 'title' => 'Asoka, pusat perbelanjaan',
        'location' => 'Desa Kurnia Jaya (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Asoka merupakan toko serba ada/swalayan pusat perbelanjaan masyarakat. Disamping menjual aneka barang, puncak juga menjual berbagai souvenir atau ole-ole khas Belitung Timur seperti abon ikan, keripik sukun, makanan ringan olahan dari ikan (kericu) dan lain sebagainya. 
        Informasi mengenai Puncak pusat perbelanjaan, bisa diakses secara online. 
        Puncak is a department store/supermarket for community shopping center. 
        Besides selling various goods, Puncak also sold various souvenirs of the typical of East Belitung such as fish floss, breadfruit chips, snacks made from fish (kericu) etc.',
        'image' => 'asoka.jpg', 'cp' => '-',
      ],
      [
        'id' => 'oleholeh-2', 'title' => 'Galeri dan workshop Tanjoeng Seloekat',
        'location' => 'Pantai Serdang Desa Baru (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Galeri dan workshop tanjoeng seloekat, disini pengunjung bisa menikmati kuliner lokal, kopi manggar serta berbelanja produk kerajinan, makanan ringan olahan dari ikan (kericu) dan lain sebagainya. 
        Contact : 0819 49017671/WA an. Toto - Tanjoeng Seloekat Galery, visitors can enjoy local culinary, manggars coffee and shopping handicraft products, snacks made from fish etc.',
        'image' => 'tanjoeng.jpg', 'cp' => '6281949017671',
      ],
      [
        'id' => 'oleholeh-3', 'title' => 'N\'fresh, toko ole-ole di Kota Manggar',
        'location' => 'Desa Mekar Jaya (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Di N\'fresh, Wisatawan yang berkunjung ke Kota Manggar Ibukota Kabupaten Belitung Timur bisa membeli aneka souvenir seperti makanan ringan dari olahan ikan (kericu), sambal terasi, kopi manggar dan lain sebagainya untuk dibawa pulang ke daerah dan negara asal masing-masing. 
        Toko ini, memiliki platform pemasaran yang bisa diakses secara online.. - At N\'fresh, tourists who visiting to Manggar City, the capital of East Belitung Regency, can buying various souvenirs such as snacks made from 
        fish (kericu), chili shrimp paste (sambal terasi), manggar\'s coffee etc, to take home to their regions and countries.',
        'image' => 'nfresh.jpg', 'cp' => '-',
      ],
      [
        'id' => 'oleholeh-4', 'title' => 'Gerai Kerajinan Daerah Kabupaten Belitung Timur',
        'location' => 'Pasar Lipat Kajang Desa Baru (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Gerai Kerajinan Daerah Kabupaten Belitung Timur, merupakan tempat yang tebat bagi pengunjung/wisatawan untuk membeli souvenir atau ole-ole guna dibawah pulang kerumah, daerah atau nergaranya masing-masing. 
        Gerai ini, menyediahkan berbagai souvenir menarik seperti produk kerajinan tangan berupa anyaman, batik, tikar, tas, piring, aneka makanan seperti terasi, kericu, kopi serta kerajinan produk keramik dan lain sebagainya 
        The Regional Handicraft Outlet of East Belitung Regency is a great place for visitors to buy souvenirs as gifts to bring back to their home, respective regions or countries.',
        'image' => 'kerajinan.jpg', 'cp' => '-',
      ],
      [
        'id' => 'oleholeh-4', 'title' => 'Puncak, pusat perbelanjaan',
        'location' => 'Desa Kurnia Jaya (Kota Manggar) Kecamatan Manggar Kabupaten Belitung Timur Provinsi Bangka Belitung',
        'description' => 'Puncak merupakan toko serba ada/swalayan pusat perbelanjaan masyarakat. Disamping menjual aneka barang, puncak juga menjual berbagai souvenir atau ole-ole khas Belitung Timur seperti abon ikan, keripik sukun, makanan ringan olahan dari ikan (kericu) dan lain sebagainya. 
        Informasi mengenai Puncak pusat perbelanjaan, bisa diakses secara online. Puncak is a department store/supermarket for community shopping center. 
        Besides selling various goods, Puncak also sold various souvenirs of the typical of East Belitung such as fish floss, breadfruit chips, snacks made from fish (kericu) etc.',
        'image' => 'puncak.jpg', 'cp' => '-',
      ],
    ],
  ],
];

// ---------- DATA KONTAK / SOSIAL MEDIA ----------
// Ganti isi di bawah ini untuk memperbarui info kontak dan link sosial media.
$contact = [
    'instansi'  => 'Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur',
    'address'   => 'Jalan Manggarawan, Padang, Manggar, Belitung Timur, Kep. Bangka Belitung 33512',
    'phone'     => '(0719) 92200123',
    'phone_tel' => '+071992200123', // 
    'email'     => 'disbudpar@belitungtimurkab.go.id',
    'instagram' => 'https://www.instagram.com/inspiringbeltim/',
    'facebook'  => 'https://www.facebook.com/visitbelitungtimur/',
    'youtube'   => 'https://www.youtube.com/@InspiringBelitungTimurofficial/',
];

// ---------- HELPER ----------
function img_or_placeholder($relPath, $alt, $ratioClass = '') {
    $abs = __DIR__ . '/assets/images/' . $relPath;
    if ($relPath && file_exists($abs)) {
        $src = 'assets/images/' . $relPath;
        echo '<img src="' . htmlspecialchars($src) . '" alt="' . htmlspecialchars($alt) . '" loading="lazy">';
    } else {
        echo '<div class="img-placeholder ' . $ratioClass . '"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="10" r="1.5"/><path d="M3 16l5-5 4 4 3-3 6 6"/></svg><span>Foto belum ditambahkan</span></div>';
    }
}
// Menampilkan logo Lawang Beltim. Taruh file logo di assets/images/branding/logo.png
function brand_mark($size = 36) {
    $abs = __DIR__ . '/assets/images/branding/logo.png';
    if (file_exists($abs)) {
        echo '<img src="assets/images/branding/logo.png" alt="Logo Lawang Beltim" class="brand-mark-img" style="height:' . $size . 'px;">';
    } else {
        $fontSize = round($size * 0.5);
        echo '<span class="brand-mark" style="width:' . $size . 'px;height:' . $size . 'px;font-size:' . $fontSize . 'px;">b</span>';
    }
}
function format_tanggal_id($ymd) {
    $bulan = ['01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni',
              '07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];
    [$y,$m,$d] = explode('-', $ymd);
    return intval($d) . ' ' . $bulan[$m] . ' ' . $y;
}

function icon_svg($name) {
    $icons = [
        'wave'     => '<path d="M2 15c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round"/><path d="M2 19c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" opacity=".5"/>',
        'mountain' => '<path d="M2 19l6-10 4 6 3-4 7 8" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linejoin="round" stroke-linecap="round"/><circle cx="17" cy="6" r="2" stroke="currentColor" stroke-width="1.6" fill="none"/>',
        'landmark' => '<path d="M3 21h18M4 21V10M20 21V10M12 3l9 5H3l9-5zM7 10v6M12 10v6M17 10v6" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>',
        'utensils' => '<path d="M6 2v8M4 2v5a2 2 0 002 2 2 2 0 002-2V2M6 12v10M18 2c-2 1-3 3-3 6s1 4 3 4v9" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>',
        'bed'      => '<path d="M2 18v-6a2 2 0 012-2h16a2 2 0 012 2v6M2 18v3M22 18v3M2 12V7a1 1 0 011-1h5a1 1 0 011 1v3M11 10h6a2 2 0 012 2v2" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>',
        'bus'      => '<rect x="3" y="5" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.6" fill="none"/><path d="M3 12h18M7 17v2M17 17v2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><circle cx="7.5" cy="21" r="1"/><circle cx="16.5" cy="21" r="1"/>',
        'bag'      => '<path d="M6 8h12l1 12H5L6 8z" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linejoin="round"/><path d="M9 8V6a3 3 0 016 0v2" stroke="currentColor" stroke-width="1.6" fill="none"/>',
        'pin'      => '<path d="M12 21s7-6.5 7-12a7 7 0 10-14 0c0 5.5 7 12 7 12z" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linejoin="round"/><circle cx="12" cy="9" r="2.3" stroke="currentColor" stroke-width="1.6" fill="none"/>',
        'whatsapp' => '<path d="M20 12a8 8 0 10-14.9 4L4 21l5.2-1a8 8 0 0010.8-8z" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linejoin="round"/><path d="M8.5 9.5c0 3.5 2.5 6 6 6 .6 0 1-.6.8-1.2l-.6-1.3c-.2-.4-.7-.5-1-.3l-.7.4a4.4 4.4 0 01-2.6-2.6l.4-.7c.2-.3.1-.8-.3-1l-1.3-.6c-.6-.2-1.2.2-1.2.8z" fill="currentColor"/>',
        'anchor'   => '<circle cx="12" cy="5" r="2" stroke="currentColor" stroke-width="1.6" fill="none"/><path d="M12 7v14M6 12H3a9 9 0 009 9 9 9 0 009-9h-3M9 12H6M18 12h-3" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round"/>',
        'instagram'=> '<rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6" fill="none"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6" fill="none"/><circle cx="17.2" cy="6.8" r="1.1" fill="currentColor"/>',
        'facebook' => '<path d="M14 9h3V5.5h-3c-2.2 0-4 1.8-4 4V12H8v3.5h2V21h3.5v-5.5H16l.5-3.5h-3V9.6c0-.4.3-.6.5-.6z" fill="currentColor"/>',
        'youtube'  => '<rect x="2.5" y="5.5" width="19" height="13" rx="4" stroke="currentColor" stroke-width="1.6" fill="none"/><path d="M10 9.5l5 2.5-5 2.5v-5z" fill="currentColor"/>',
        'phone'    => '<path d="M4.5 3.5h3l1.5 4-2 1.5a12 12 0 006 6l1.5-2 4 1.5v3a1.5 1.5 0 01-1.6 1.5A16 16 0 013 5.1 1.5 1.5 0 014.5 3.5z" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linejoin="round"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6" fill="none"/><path d="M3.5 6.5L12 13l8.5-6.5" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round"/>',
    ];
    return $icons[$name] ?? '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lawang Beltim — Pariwisata, Inspiring Beltim</title>
<meta name="description" content="Portal resmi pariwisata Kabupaten Belitung Timur — jalur rempah maritim, geosite, dan destinasi wisata Beltim.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,500&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  --navy:#0A3550;
  --navy-deep:#062537;
  --sea:#1C7293;
  --sea-light:#6FB6CE;
  --sand:#F4EFDC;
  --sand-deep:#E8DDB3;
  --coral:#E2572B;
  --coral-deep:#C24620;
  --tin:#8FA2AC;
  --ink:#11242E;
  --paper:#FBF8F0;
  --radius:14px;
  --shadow:0 20px 45px -20px rgba(6,37,55,.35);
  --font-display:'Fraunces', serif;
  --font-body:'Inter', sans-serif;
  --font-mono:'IBM Plex Mono', monospace;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  margin:0; background:var(--paper); color:var(--ink);
  font-family:var(--font-body); line-height:1.6;
  -webkit-font-smoothing:antialiased;
}
img{max-width:100%; display:block}
a{color:inherit}
.wrap{max-width:1180px; margin:0 auto; padding:0 28px}
.eyebrow{
  font-family:var(--font-mono); font-size:12px; letter-spacing:.16em;
  text-transform:uppercase; color:var(--coral); font-weight:500;
}
h1,h2,h3{font-family:var(--font-display); margin:0; color:var(--navy-deep); font-weight:600}
.btn{
  display:inline-flex; align-items:center; gap:8px; border:none; cursor:pointer;
  font-family:var(--font-body); font-weight:600; font-size:14.5px;
  padding:12px 22px; border-radius:999px; transition:transform .18s ease, box-shadow .18s ease;
  text-decoration:none;
}
.btn:hover{transform:translateY(-2px)}
.btn-primary{background:var(--coral); color:#fff; box-shadow:0 12px 24px -10px rgba(226,87,43,.55)}
.btn-primary:hover{background:var(--coral-deep)}
.btn-ghost{background:rgba(255,255,255,.12); color:#fff; border:1px solid rgba(255,255,255,.4)}
.btn-outline{background:transparent; color:var(--navy); border:1.5px solid var(--navy)}
.btn-outline:hover{background:var(--navy); color:#fff}
.btn-wa{background:#1F8A57; color:#fff}
.btn-wa:hover{background:#166A42}

/* ---------- NAV ---------- */
.nav{
  position:sticky; top:0; z-index:60; backdrop-filter:blur(10px);
  background:rgba(10,53,80,.78); border-bottom:1px solid rgba(255,255,255,.08);
}
.nav .wrap{display:flex; align-items:center; justify-content:space-between; height:72px}
.brand{display:flex; align-items:center; gap:10px; color:#fff; text-decoration:none}
.brand-mark{
  width:36px; height:36px; border-radius:10px; background:var(--coral);
  display:flex; align-items:center; justify-content:center; color:#fff;
  font-family:var(--font-display); font-weight:700; font-size:18px; flex-shrink:0;
}
.brand-mark-img{display:block; width:auto; flex-shrink:0}
.brand-name{font-family:var(--font-display); font-size:19px; font-weight:600; letter-spacing:.01em}
.nav-links{display:flex; align-items:center; gap:6px; list-style:none; margin:0; padding:0}
.nav-links a{
  color:rgba(255,255,255,.82); text-decoration:none; font-size:14.5px; font-weight:500;
  padding:9px 16px; border-radius:999px; transition:.18s;
}
.nav-links a:hover{color:#fff; background:rgba(255,255,255,.1)}
.nav-links a.active-link{color:#fff; background:rgba(255,255,255,.14)}
.nav-cta{margin-left:8px}
.nav-toggle{display:none; background:none; border:none; color:#fff; cursor:pointer}

/* ---------- HERO ---------- */
.hero{
  position:relative; min-height:78vh; display:flex; align-items:center;
  background:linear-gradient(120deg, #0A3550 0%, #145A7B 45%, #1C7293 100%);
  overflow:hidden;
}
.hero-photo{position:absolute; inset:0; z-index:0}
.hero-photo img{width:100%; height:100%; object-fit:cover; object-position:center 35%}
.hero-photo .img-placeholder{width:100%; height:100%; border-radius:0}

.hero-scrim{
  position:absolute; inset:0; z-index:1; pointer-events:none;
  background:radial-gradient(ellipse 70% 60% at 50% 50%,
    rgba(4,16,26,.6) 0%,
    rgba(4,16,26,.4) 45%,
    rgba(4,16,26,.1) 75%,
    rgba(4,16,26,0) 100%);
}
.hero-content{
  position:relative; z-index:2; padding:70px 0; color:#fff; max-width:760px;
  margin:0 auto; text-align:center;
}
.hero .eyebrow{color:var(--sand)}
.hero h1{
  font-size:clamp(38px, 6vw, 66px); line-height:1.03; margin:14px 0 18px; color:#fff;
  letter-spacing:-.01em;
}
.hero h1 em{font-style:italic; color:var(--coral)}
.hero-tagline{
  display:inline-flex; margin:0 auto 34px;
  font-family:var(--font-mono); font-size:13.5px; letter-spacing:.14em; text-transform:uppercase;
  color:var(--sand); border-left:2px solid var(--coral); padding-left:14px;
}
.hero-actions{display:flex; gap:14px; flex-wrap:wrap; justify-content:center}
 
/* Statistik dipindah keluar dari foto, jadi strip terang sendiri supaya
   kontras terjamin apa pun warna fotonya. */
.hero-stats-outer{background:var(--sand); border-bottom:1px solid var(--sand-deep)}
.hero-stats{
  display:grid; grid-template-columns:repeat(3,1fr);
}
.hero-stats .stat{
  padding:22px 24px; border-right:1px solid var(--sand-deep); color:var(--navy-deep);
  text-align:center;
}
.hero-stats .stat:last-child{border-right:none}
.hero-stats .stat b{
  display:block; font-family:var(--font-display); font-size:26px; margin-bottom:2px;
  color:var(--coral);
}
.hero-stats .stat span{font-size:12.5px; color:#4A5A63}

/* ---------- ROUTE DIVIDER (signature element) ---------- */
.route-divider{display:block; width:100%; height:64px; background:var(--paper)}
.route-divider svg{width:100%; height:100%}

/* ---------- SECTION HEADERS ---------- */
.section{padding:88px 0}
.section-alt{background:var(--sand)}
.section-head{
  display:flex; align-items:flex-end; justify-content:space-between; gap:24px;
  margin-bottom:42px; flex-wrap:wrap; border-bottom:1px solid var(--sand-deep); padding-bottom:22px;
}
.section-head h2{font-size:clamp(28px,3.4vw,40px)}
.section-head p{margin:8px 0 0; color:#4A5A63; max-width:480px; font-size:15px}

/* ---------- NEWS ---------- */
.news-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:26px}
.news-card{
  background:#fff; border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow);
  display:flex; flex-direction:column; border:1px solid rgba(15,50,70,.06);
}
.news-media{position:relative; aspect-ratio:16/10; background:var(--sand-deep); overflow:hidden}
.news-media img, .news-media .img-placeholder{width:100%; height:100%; object-fit:cover}
.news-date{
  position:absolute; top:14px; left:14px; background:var(--navy-deep); color:var(--sand);
  font-family:var(--font-mono); font-size:11.5px; letter-spacing:.06em; padding:6px 11px; border-radius:999px;
}
.news-body{padding:24px 26px 26px; display:flex; flex-direction:column; gap:12px; flex:1}
.news-tag{font-family:var(--font-mono); font-size:11.5px; letter-spacing:.1em; text-transform:uppercase; color:var(--coral); font-weight:600}
.news-body h3{font-size:20px; line-height:1.28}
.news-body p{margin:0; color:#4A5A63; font-size:14.5px; flex:1; text-align:justify; text-justify:inter-word}
.news-more{
  align-self:flex-start; background:none; border:none; cursor:pointer; font-family:var(--font-body);
  font-weight:600; font-size:14px; color:var(--navy); display:flex; align-items:center; gap:6px;
  padding:4px 0; border-bottom:1.5px solid var(--coral);
}
.news-more:hover{color:var(--coral)}

/* ---------- DESTINASI ---------- */
.dest-layout{display:grid; grid-template-columns:250px 1fr; gap:36px; align-items:start}
.dest-tabs{
  position:sticky; top:96px; display:flex; flex-direction:column; gap:6px;
  background:#fff; border-radius:var(--radius); padding:12px; box-shadow:var(--shadow);
}
.dest-tab{
  display:flex; align-items:center; gap:12px; padding:12px 14px; border-radius:10px;
  background:none; border:none; cursor:pointer; text-align:left; font-family:var(--font-body);
  font-size:14.5px; font-weight:500; color:var(--ink); transition:.16s;
}
.dest-tab svg{width:18px; height:18px; flex-shrink:0; color:var(--sea)}
.dest-tab:hover{background:var(--sand)}
.dest-tab.active{background:var(--navy); color:#fff}
.dest-tab.active svg{color:var(--coral)}
.dest-count{
  margin-left:auto; font-family:var(--font-mono); font-size:11px; color:var(--tin);
  background:var(--sand); border-radius:999px; padding:2px 8px;
}
.dest-tab.active .dest-count{background:rgba(255,255,255,.18); color:#fff}
 
.dest-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:24px}
.dest-panel{display:none}
.dest-panel.active{display:grid; grid-template-columns:repeat(3,1fr); gap:24px}
.dest-card{
  background:#fff; border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow);
  border:1px solid rgba(15,50,70,.06); display:flex; flex-direction:column;
}
.dest-media{aspect-ratio:4/3; background:var(--sand-deep); overflow:hidden}
.dest-media img, .dest-media .img-placeholder{width:100%; height:100%; object-fit:cover}
.dest-card-body{padding:20px 22px 22px; display:flex; flex-direction:column; gap:8px; flex:1}
.dest-card-body h3{font-size:18px; line-height:1.3}
.dest-loc{
  display:flex; gap:6px; align-items:flex-start; font-size:13px; color:#5A6970; margin:0;
}
.dest-loc svg{width:14px; height:14px; flex-shrink:0; margin-top:2px; color:var(--coral)}
.dest-more{
  margin-top:6px; align-self:flex-start; background:none; border:none; cursor:pointer;
  font-weight:600; font-size:14px; color:var(--navy); display:flex; align-items:center; gap:6px;
  border-bottom:1.5px solid var(--coral); padding:4px 0;
}
.dest-more:hover{color:var(--coral)}

/* ---------- IMG PLACEHOLDER ---------- */
.img-placeholder{
  display:flex; flex-direction:column; align-items:center; justify-content:center; gap:8px;
  background:repeating-linear-gradient(135deg, var(--sand-deep), var(--sand-deep) 10px, #EFE6C6 10px, #EFE6C6 20px);
  color:#8B7A4E; font-size:11.5px; font-family:var(--font-mono); text-align:center; padding:10px;
}

/* ---------- CTA STRIP ---------- */
.cta-strip{
  background:var(--navy-deep); color:#fff; padding:70px 0; text-align:center;
  background-image:radial-gradient(circle at 20% 30%, rgba(226,87,43,.18), transparent 45%);
}
.cta-strip h2{color:#fff; font-size:clamp(26px,3.6vw,38px); max-width:640px; margin:0 auto 14px}
.cta-strip p{color:rgba(255,255,255,.7); max-width:520px; margin:0 auto 28px; font-size:15px}

/* ---------- FOOTER ---------- */
footer{background:var(--navy-deep); color:rgba(255,255,255,.65); border-top:1px solid rgba(255,255,255,.08)}
.footer-top{
  padding:60px 0 44px; display:grid; grid-template-columns:1.3fr 1fr; gap:56px;
}
.footer-brand-head{display:flex; align-items:center; gap:12px; margin-bottom:14px}
.footer-brand p{font-size:14px; line-height:1.75; max-width:340px}
.footer-kontak{border-left:1px solid rgba(255,255,255,.1); padding-left:40px}
footer h4{color:#fff; font-family:var(--font-body); font-size:13.5px; letter-spacing:.06em; text-transform:uppercase; margin:0 0 16px}
footer ul{list-style:none; margin:0; padding:0; display:flex; flex-direction:column; gap:11px}
footer a{color:rgba(255,255,255,.65); text-decoration:none; font-size:14px}
footer a:hover{color:#fff}
.footer-bottom{
  border-top:1px solid rgba(255,255,255,.1); padding:20px 0; display:flex;
  justify-content:space-between; align-items:center; font-size:13px; flex-wrap:wrap; gap:10px;
}
.back-top{display:flex; align-items:center; gap:6px; color:#fff; text-decoration:none; font-weight:500}
.footer-contact-item{display:flex; align-items:flex-start; gap:9px}
.footer-contact-item svg{width:15px; height:15px; flex-shrink:0; margin-top:3px; color:var(--coral)}
.footer-social{display:flex; gap:10px; margin-top:20px}
.footer-social a{
  width:36px; height:36px; border-radius:50%; border:1px solid rgba(255,255,255,.25);
  display:flex; align-items:center; justify-content:center; transition:.18s;
}
.footer-social a svg{width:17px; height:17px}
.footer-social a:hover{background:var(--coral); border-color:var(--coral); color:#fff}

/* ---------- MODAL ---------- */
.modal-overlay{
  position:fixed; inset:0; background:rgba(6,26,40,.72); backdrop-filter:blur(3px);
  display:none; align-items:center; justify-content:center; z-index:100; padding:24px;
}
.modal-overlay.open{display:flex}
.modal{
  background:#fff; border-radius:18px; max-width:640px; width:100%; max-height:86vh; overflow-y:auto;
  box-shadow:0 40px 80px -20px rgba(0,0,0,.4); animation:pop .22s ease;
}
@keyframes pop{from{opacity:0; transform:translateY(14px) scale(.98)} to{opacity:1; transform:none}}
.modal-media{aspect-ratio:16/9; background:var(--sand-deep); position:relative}
.modal-media img, .modal-media .img-placeholder{width:100%; height:100%; object-fit:cover}
.modal-close{
  position:absolute; top:14px; right:14px; width:36px; height:36px; border-radius:50%;
  background:rgba(6,26,40,.65); color:#fff; border:none; cursor:pointer; font-size:18px;
  display:flex; align-items:center; justify-content:center; z-index:2;
}
.modal-close:hover{background:var(--coral)}
.modal-body{padding:30px 32px 34px}
.modal-body .news-tag, .modal-body .news-date-inline{font-family:var(--font-mono); font-size:12px}
.modal-date-row{display:flex; gap:14px; align-items:center; margin-bottom:10px; flex-wrap:wrap}
.modal-date-row .news-date-inline{color:var(--tin)}
.modal-body h3{font-size:24px; line-height:1.28; margin-bottom:14px}
.modal-body .modal-text p{
  margin:0 0 14px; color:#3D4B52; font-size:15px; line-height:1.75;
  text-align:justify; text-justify:inter-word; hyphens:auto;
}
.modal-loc{
  display:flex; gap:10px; align-items:flex-start; background:var(--sand); border-radius:12px;
  padding:14px 16px; margin:18px 0 22px; font-size:14.5px; color:var(--navy-deep);
}
.modal-loc svg{width:18px; height:18px; flex-shrink:0; color:var(--coral); margin-top:1px}
.modal-actions{display:flex; gap:12px; flex-wrap:wrap}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 900px){
  .nav-links{display:none}
  .nav-toggle{display:block}
  .news-grid{grid-template-columns:1fr}
  .dest-layout{grid-template-columns:1fr}
  .dest-tabs{
    position:static; flex-direction:row; overflow-x:auto; -webkit-overflow-scrolling:touch;
  }
  .dest-tab{flex-shrink:0}
  .dest-grid, .dest-panel.active{grid-template-columns:repeat(2,1fr)}
  .footer-top{grid-template-columns:1fr 1fr}
}
@media (max-width: 560px){
  .dest-grid, .dest-panel.active{grid-template-columns:1fr}
  .hero-actions{flex-direction:column; align-items:flex-start}
  .footer-top{grid-template-columns:1fr}
  .hero-stats{grid-template-columns:1fr}
  .hero-stats .stat{border-right:none; border-bottom:1px solid var(--sand-deep)}
  .hero-stats .stat:last-child{border-bottom:none}
}
@media (prefers-reduced-motion: reduce){
  html{scroll-behavior:auto}
  .modal{animation:none}
  .btn:hover{transform:none}
}
</style>
</head>
<body>

<!-- ===================== NAV ===================== -->
<nav class="nav">
  <div class="wrap">
    <a href="#" class="brand">
      <?php brand_mark(45); ?>
      <span class="brand-name">Lawang Beltim</span>
    </a>
    <ul class="nav-links">
      <li><a href="#beranda" class="active-link">Beranda</a></li>
      <li><a href="#berita">Berita</a></li>
      <li><a href="#destinasi">Destinasi</a></li>
      <li><a href="#" class="btn btn-primary nav-cta">Masuk</a></li>
    </ul>
    <button class="nav-toggle" aria-label="Menu">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/></svg>
    </button>
  </div>
</nav>

<!-- ===================== HERO ===================== -->
<header class="hero" id="beranda">
  <div class="hero-photo">
    <?php img_or_placeholder('hero/belitung-timur.jpg', 'Belitung Timur'); ?>
  </div>
  <div class="hero-scrim"></div>
  <div class="wrap hero-content">
    <span class="eyebrow">Kabupaten Belitung Timur · Kepulauan Bangka Belitung</span>
    <h1>Pariwisata, <em>Inspiring</em> Beltim</h1>
    <div class="hero-tagline">The Land of Maritime Spices Route</div>
    <div class="hero-actions">
      <a href="#destinasi" class="btn btn-primary">Jelajahi Destinasi</a>
      <a href="#berita" class="btn btn-ghost">Lihat Kegiatan Terbaru</a>
    </div>
  </div>
</header>
 
<div class="hero-stats-outer">
  <div class="wrap hero-stats">
    <div class="stat"><b>7</b><span>Kategori Destinasi</span></div>
    <div class="stat"><b>10</b><span>Geosite Pertambangan</span></div>
    <div class="stat"><b>7</b><span>Kecamatan</span></div>
  </div>
</div>
 
<div class="route-divider">
  <svg viewBox="0 0 1200 64" preserveAspectRatio="none">
    <path d="M0 32 Q150 8 300 32 T600 32 T900 32 T1200 32" fill="none" stroke="#8FA2AC" stroke-width="1.5" stroke-dasharray="1 10" stroke-linecap="round"/>
  </svg>
</div>

<!-- ===================== BERITA / KEGIATAN TERBARU ===================== -->
<section class="section" id="berita">
  <div class="wrap">
    <div class="section-head">
      <div>
        <span class="eyebrow">Kegiatan Terbaru</span>
        <h2>Kabar dari Disbudpar Beltim</h2>
        <p>Update kegiatan, agenda, dan cerita pariwisata terbaru dari Dinas Kebudayaan dan Pariwisata Kabupaten Belitung Timur.</p>
      </div>
    </div>
 
    <div class="news-grid">
      <?php foreach ($news as $n): ?>
      <article class="news-card">
        <div class="news-media">
          <span class="news-date"><?= htmlspecialchars(format_tanggal_id($n['date'])) ?></span>
          <?php img_or_placeholder('berita/' . $n['image'], $n['title']); ?>
        </div>
        <div class="news-body">
          <span class="news-tag"><?= htmlspecialchars($n['tag']) ?></span>
          <h3><?= htmlspecialchars($n['title']) ?></h3>
          <p><?= htmlspecialchars($n['excerpt']) ?></p>
          <button class="news-more" data-open-news="<?= htmlspecialchars($n['id']) ?>">
            Baca Selengkapnya
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== DESTINASI WISATA ===================== -->
<section class="section section-alt" id="destinasi">
  <div class="wrap">
    <div class="section-head">
      <div>
        <span class="eyebrow">Peta Jalur Rempah</span>
        <h2>Destinasi Wisata</h2>
        <p>Tujuh kategori destinasi untuk menyusun perjalananmu di Belitung Timur — dari pantai, geosite, sejarah, sampai oleh-oleh.</p>
      </div>
    </div>
 
    <div class="dest-layout">
      <div class="dest-tabs" role="tablist">
        <?php $first = true; foreach ($destinasi as $key => $cat): ?>
        <button class="dest-tab <?= $first ? 'active' : '' ?>" data-tab="<?= htmlspecialchars($key) ?>">
          <svg viewBox="0 0 24 24" fill="none"><?= icon_svg($cat['icon']) ?></svg>
          <?= htmlspecialchars($cat['label']) ?>
          <span class="dest-count"><?= count($cat['items']) ?></span>
        </button>
        <?php $first = false; endforeach; ?>
      </div>
 
      <div class="dest-panels">
        <?php $first = true; foreach ($destinasi as $key => $cat): ?>
        <div class="dest-panel <?= $first ? 'active' : '' ?>" data-panel="<?= htmlspecialchars($key) ?>">
          <?php foreach ($cat['items'] as $item): ?>
          <article class="dest-card">
            <div class="dest-media">
              <?php img_or_placeholder('destinasi/' . $key . '/' . $item['image'], $item['title']); ?>
            </div>
            <div class="dest-card-body">
              <h3><?= htmlspecialchars($item['title']) ?></h3>
              <p class="dest-loc">
                <svg viewBox="0 0 24 24" fill="none"><?= icon_svg('pin') ?></svg>
                <?= htmlspecialchars($item['location']) ?>
              </p>
              <button class="dest-more" data-open-dest="<?= htmlspecialchars($item['id']) ?>">
                Selengkapnya
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
        <?php $first = false; endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-strip">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sea-light)">Rencanakan Kunjunganmu</span>
    <h2>Belitung Timur menanti untuk dijelajahi</h2>
    <p>Hubungi pengelola destinasi langsung lewat WhatsApp untuk info lokasi, akses, dan jadwal kunjungan.</p>
    <a href="#destinasi" class="btn btn-primary">Lihat Semua Destinasi</a>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer>
  <div class="wrap footer-top">
    <div class="footer-brand">
      <div class="footer-brand-head">
        <?php brand_mark(50); ?>
        <span class="brand-name" style="color:#fff; font-size:20px">Lawang Beltim</span>
      </div>
      <p>Portal resmi pariwisata Kabupaten Belitung Timur, gerbang menuju jalur rempah maritim Pulau Belitung.</p>
      <div class="footer-social">
        <a href="<?= htmlspecialchars($contact['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none"><?= icon_svg('instagram') ?></svg></a>
        <a href="<?= htmlspecialchars($contact['facebook']) ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none"><?= icon_svg('facebook') ?></svg></a>
        <a href="<?= htmlspecialchars($contact['youtube']) ?>" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none"><?= icon_svg('youtube') ?></svg></a>
      </div>
    </div>
    <div class="footer-kontak">
      <h4>Kontak</h4>
      <ul class="footer-contact">
        <li><?= htmlspecialchars($contact['instansi']) ?></li>
        <li class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none"><?= icon_svg('pin') ?></svg>
          <span><?= htmlspecialchars($contact['address']) ?></span>
        </li>
        <li class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none"><?= icon_svg('phone') ?></svg>
          <a href="tel:<?= htmlspecialchars($contact['phone_tel']) ?>"><?= htmlspecialchars($contact['phone']) ?></a>
        </li>
        <li class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none"><?= icon_svg('mail') ?></svg>
          <a href="mailto:<?= htmlspecialchars($contact['email']) ?>"><?= htmlspecialchars($contact['email']) ?></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="wrap footer-bottom">
    <span>© <?= date('Y') ?> Pemerintah Kabupaten Belitung Timur</span>
    <a href="#beranda" class="back-top">Kembali ke Atas
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19V5M5 12l7-7 7 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
  </div>
</footer>

<!-- ===================== MODAL (dipakai bersama untuk berita & destinasi) ===================== -->
<div class="modal-overlay" id="modalOverlay">
  <div class="modal" id="modalBox" role="dialog" aria-modal="true"></div>
</div>
 
<script>
// Data dikirim dari PHP supaya modal berita & destinasi bisa dipakai ulang tanpa reload.
const NEWS_DATA = <?= json_encode($news, JSON_UNESCAPED_UNICODE) ?>;
const DEST_DATA = <?= json_encode($destinasi, JSON_UNESCAPED_UNICODE) ?>;
const NEWS_BY_ID = Object.fromEntries(NEWS_DATA.map(n => [n.id, n]));
const DEST_BY_ID = {};
Object.values(DEST_DATA).forEach(cat => cat.items.forEach(it => DEST_BY_ID[it.id] = it));
 
const overlay = document.getElementById('modalOverlay');
const modalBox = document.getElementById('modalBox');
 
function tanggalIndo(ymd){
  const bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  const [y,m,d] = ymd.split('-').map(Number);
  return `${d} ${bulan[m-1]} ${y}`;
}
 
function placeholderHTML(){
  return `<div class="img-placeholder" style="height:100%">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="10" r="1.5"/><path d="M3 16l5-5 4 4 3-3 6 6"/></svg>
    <span>Foto belum ditambahkan</span></div>`;
}
 
// Membuat elemen <img> lewat DOM (bukan string HTML) supaya tidak ada masalah
// escaping tanda kutip, lalu memasang fallback placeholder kalau file foto belum ada.
function hydrateMedia(container, src, alt){
  const img = document.createElement('img');
  img.alt = alt || '';
  img.addEventListener('error', () => { container.innerHTML = placeholderHTML(); }, { once: true });
  img.src = src;
  container.innerHTML = '';
  container.appendChild(img);
}
 
function openNewsModal(id){
  const n = NEWS_BY_ID[id];
  if(!n) return;
  const paragraphs = n.content.split('\n\n').map(p => `<p>${p}</p>`).join('');
  const sourceBtn = n.source_url
    ? `<a href="${n.source_url}" target="_blank" rel="noopener" class="btn btn-outline">Baca Berita Lengkap ↗</a>`
    : '';
  modalBox.innerHTML = `
    <div class="modal-media">
      <button class="modal-close" data-close>&times;</button>
      <div class="modal-media-slot"></div>
    </div>
    <div class="modal-body">
      <div class="modal-date-row">
        <span class="news-tag">${n.tag}</span>
        <span class="news-date-inline">${tanggalIndo(n.date)}</span>
      </div>
      <h3>${n.title}</h3>
      <div class="modal-text">${paragraphs}</div>
      <div class="modal-actions">${sourceBtn}</div>
    </div>`;
  hydrateMedia(modalBox.querySelector('.modal-media-slot'), 'assets/images/berita/' + n.image, n.title);
  openOverlay();
}
 
function openDestModal(id){
  const d = DEST_BY_ID[id];
  if(!d) return;
  const waText = encodeURIComponent(`Halo, saya ingin bertanya tentang ${d.title}.`);
  const catKey = Object.keys(DEST_DATA).find(k => DEST_DATA[k].items.some(i => i.id === id));
  modalBox.innerHTML = `
    <div class="modal-media">
      <button class="modal-close" data-close>&times;</button>
      <div class="modal-media-slot"></div>
    </div>
    <div class="modal-body">
      <h3>${d.title}</h3>
      <div class="modal-loc">
        <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.5 7-12a7 7 0 10-14 0c0 5.5 7 12 7 12z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="9" r="2.3" stroke="currentColor" stroke-width="1.6"/></svg>
        <span>${d.location}</span>
      </div>
      <div class="modal-text"><p>${d.description}</p></div>
      <div class="modal-actions">
        <a href="https://wa.me/${d.cp}?text=${waText}" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M20 12a8 8 0 10-14.9 4L4 21l5.2-1a8 8 0 0010.8-8z" stroke="currentColor" stroke-width="1.6"/></svg>
          Narahubung via WhatsApp
        </a>
      </div>
    </div>`;
  hydrateMedia(modalBox.querySelector('.modal-media-slot'), 'assets/images/destinasi/' + catKey + '/' + d.image, d.title);
  openOverlay();
}
 
function openOverlay(){ overlay.classList.add('open'); document.body.style.overflow = 'hidden'; }
function closeOverlay(){ overlay.classList.remove('open'); document.body.style.overflow=''; }
 
document.addEventListener('click', (e) => {
  const newsBtn = e.target.closest('[data-open-news]');
  const destBtn = e.target.closest('[data-open-dest]');
  const tabBtn = e.target.closest('[data-tab]');
  const closeBtn = e.target.closest('[data-close]');
 
  if (newsBtn) openNewsModal(newsBtn.dataset.openNews);
  if (destBtn) openDestModal(destBtn.dataset.openDest);
  if (closeBtn || e.target === overlay) closeOverlay();
 
  if (tabBtn) {
    document.querySelectorAll('.dest-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.dest-panel').forEach(p => p.classList.remove('active'));
    tabBtn.classList.add('active');
    document.querySelector(`.dest-panel[data-panel="${tabBtn.dataset.tab}"]`).classList.add('active');
  }
});
 
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeOverlay(); });

// Highlight nav link aktif saat scroll
const sections = ['beranda','berita','destinasi'].map(id => document.getElementById(id));
const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');
window.addEventListener('scroll', () => {
  let current = sections[0].id;
  sections.forEach(sec => { if (window.scrollY >= sec.offsetTop - 90) current = sec.id; });
  navLinks.forEach(a => a.classList.toggle('active-link', a.getAttribute('href') === '#' + current));
});
</script>
</body>
</html>
