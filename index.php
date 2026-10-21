<?php

$domain = 'http://localhost/zakaria-travel-cianjur.web.id/';
$domain = 'https://zakaria-travel-cianjur.web.id/';
$brand = 'Zakaria Travel Cianjur';
$logoShared = 'src/img/harga-travel.jpg';
$logo = 'src/img/logo.avif';
$logoPanjang = 'src/img/logo.avif';
$title = $brand . " - Travel di Cianjur dan Sukabumi";
$desc = $brand . " melayani travel dari Cianjur dan Sukabumi tujuan seluruh Jabodetabek, Bandara Soetta, Bandung, Semarang, Surabaya, hingga Bali";
$telp = '0838-9222-6762';
// $telp2 = '0857-9190-4615';
$alamat = 'Perum Arwinda Asri, Kec. Karangtengah, Kab. Cianjur, Jawa Barat';

$iframe = 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.7020244635473!2d107.1220278!3d-6.806055599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNDgnMjEuOCJTIDEwN8KwMDcnMTkuMyJF!5e0!3m2!1sid!2sid!4v1789303685859!5m2!1sid!2sid';

function res_telp(string $telp)
{
  $telp = str_replace('-', '', $telp);
  $telp = preg_replace('/^0/', '62', $telp, 1);
  return $telp;
}
$res_telp = res_telp($telp);
$res_telp2 = isset($telp2) ? res_telp($telp2) : null;
$link_telp = 'tel:' . $res_telp;
$link_telp2 = isset($telp2) ? 'tel:' . $res_telp : null;
$link_whatsapp = 'https://wa.me/' . res_telp($telp) .
  '?text=' . urlencode('Halo admin ' . $domain);

$link_whatsapp2 = isset($telp2)
  ? 'https://wa.me/' . res_telp($telp2) .
  '?text=' . urlencode('Halo admin ' . $domain)
  : null;

$menu = [
  [
    'Home',
    '#',
  ],
  [
    'Rute Travel',
    '#rute-travel',
  ],
  [
    'Galeri',
    '#galeri',
  ],
  [
    'Kontak',
    '#kontak',
  ],
];



$rute = [

  [
    'tujuan' => 'Jakarta',
    'rute' => [
      ['Travel Cianjur Jakarta', 0],
      ['Travel Sukabumi Jakarta', 0],
      ['Travel Jakarta Cianjur', 0],
      ['Travel Jakarta Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Bandara Soetta',
    'rute' => [
      ['Travel Cianjur Bandara Soetta', 0],
      ['Travel Sukabumi Bandara Soetta', 0],
      ['Travel Bandara Soetta Cianjur', 0],
      ['Travel Bandara Soetta Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Bandung',
    'rute' => [
      ['Travel Cianjur Bandung', 0],
      ['Travel Sukabumi Bandung', 0],
      ['Travel Bandung Cianjur', 0],
      ['Travel Bandung Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Bogor',
    'rute' => [
      ['Travel Cianjur Bogor', 0],
      ['Travel Sukabumi Bogor', 0],
      ['Travel Bogor Cianjur', 0],
      ['Travel Bogor Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Depok',
    'rute' => [
      ['Travel Cianjur Depok', 0],
      ['Travel Sukabumi Depok', 0],
      ['Travel Depok Cianjur', 0],
      ['Travel Depok Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Tangerang',
    'rute' => [
      ['Travel Cianjur Tangerang', 0],
      ['Travel Sukabumi Tangerang', 0],
      ['Travel Tangerang Cianjur', 0],
      ['Travel Tangerang Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Bekasi',
    'rute' => [
      ['Travel Cianjur Bekasi', 0],
      ['Travel Sukabumi Bekasi', 0],
      ['Travel Bekasi Cianjur', 0],
      ['Travel Bekasi Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Cikarang',
    'rute' => [
      ['Travel Cianjur Cikarang', 0],
      ['Travel Sukabumi Cikarang', 0],
      ['Travel Cikarang Cianjur', 0],
      ['Travel Cikarang Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Bali',
    'rute' => [
      ['Travel Cianjur Bali', 0],
      ['Travel Sukabumi Bali', 0],
      ['Travel Bali Cianjur', 0],
      ['Travel Bali Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Denpasar',
    'rute' => [
      ['Travel Cianjur Denpasar', 0],
      ['Travel Sukabumi Denpasar', 0],
      ['Travel Denpasar Cianjur', 0],
      ['Travel Denpasar Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Semarang',
    'rute' => [
      ['Travel Cianjur Semarang', 0],
      ['Travel Sukabumi Semarang', 0],
      ['Travel Semarang Cianjur', 0],
      ['Travel Semarang Sukabumi', 0],
    ],
  ],
  [
    'tujuan' => 'Surabaya',
    'rute' => [
      ['Travel Cianjur Surabaya', 0],
      ['Travel Sukabumi Surabaya', 0],
      ['Travel Surabaya Cianjur', 0],
      ['Travel Surabaya Sukabumi', 0],
    ],
  ],


];

$kota = [
  [
    'cianjur',
    'cianjur.jpg',
  ],
  [
    'sukabumi',
    'sukabumi.jpg',
  ],
  [
    'jakarta',
    'jakarta.jpg',
  ],
  [
    'bogor',
    'bogor.jpg',
  ],
  [
    'depok',
    'depok.jpg',
  ],
  [
    'semarang',
    'semarang.jpg',
  ],
  [
    'surabaya',
    'surabaya.jpg',
  ],
  [
    'bali',
    'bali.jpg',
  ],
];

$galeri = [
  // '1.jpeg',
  // '2.jpeg',
  // '3.jpeg',
  // '4.jpeg',
  // '5.jpeg',
  // '6.jpeg',
];

// $harga = [
//   '3.jpeg',
//   '1.jpeg',
//   '2.jpeg',
// ];


$keunggulan = [
  [
    '🚗',
    'Armada Bersih, Nyaman & Terawat',
    'Kami selalu memastikan setiap armada dalam kondisi bersih, nyaman, dan siap digunakan. Perawatan dilakukan secara rutin untuk menjaga keamanan dan kenyamanan Anda selama perjalanan.'
  ],

  [
    '👨‍✈️',
    'Driver Berpengalaman & Profesional',
    'Perjalanan Anda didampingi oleh pengemudi yang berpengalaman, ramah, dan memahami berbagai rute perjalanan. Keselamatan dan kenyamanan penumpang menjadi prioritas kami.'
  ],

  [
    '🏠',
    'Layanan Antar Jemput Door to Door',
    'Nikmati kemudahan layanan ' . $brand . ' dengan sistem antar jemput langsung dari alamat Anda hingga ke tujuan. Tanpa perlu datang ke terminal, perjalanan menjadi lebih praktis, nyaman, dan menghemat waktu.'
  ],

  [
    '🗺️',
    'Pilihan Rute Luas & Strategis',
    $desc . ' Didukung dengan pilihan rute yang beragam dan strategis, kami siap membantu memenuhi kebutuhan perjalanan Anda antar kota dengan lebih mudah dan nyaman.'
  ],
];


$testimonial = [
  [
    "Saya sudah beberapa kali menggunakan layanan travel ini untuk perjalanan Cianjur ke Jakarta. Armada selalu bersih dan nyaman, AC terasa sejuk, serta driver juga ramah selama perjalanan. Proses penjemputannya pun berjalan sesuai jadwal, sehingga saya bisa bepergian dengan lebih tenang.",
    "Andi Pratama",
    "Pelanggan Setia"
  ],
  [
    "Perjalanan dari Cianjur ke Bali terasa nyaman dari awal hingga sampai tujuan. Pemesanan melalui WhatsApp cukup mudah, admin cepat merespons, dan informasi keberangkatan disampaikan dengan jelas. Driver juga mengemudi dengan baik sehingga perjalanan terasa lebih aman.",
    "Rina Maharani",
    "Karyawan Swasta"
  ],
  [
    "Saya cukup sering melakukan perjalanan bisnis ke berbagai kota di Jawa Timur dan memilih menggunakan layanan $brand. Armada yang nyaman, jadwal keberangkatan yang teratur, serta driver yang berpengalaman membuat perjalanan jarak jauh terasa lebih nyaman. Pelayanannya juga cukup konsisten setiap kali saya bepergian.",
    "Dedi Saputra",
    "Pengusaha"
  ],
  [
    "Pengalaman menggunakan layanan ini cukup memuaskan, mulai dari proses pemesanan sampai tiba di tujuan. Admin memberikan informasi dengan baik, penjemputan berjalan sesuai jadwal, dan driver juga memperhatikan keselamatan selama perjalanan. Secara keseluruhan, saya merasa nyaman menggunakan layanan ini.",
    "Siti Aisyah",
    "Mahasiswa"
  ],
  [
    "Menurut pengalaman saya, layanan ini cocok untuk perjalanan antar kota seperti Cianjur, Garut, Jabodetabek, Bandung, Semarang, Surabaya, hingga Denpasar. Armada cukup nyaman, driver berpengalaman, dan proses keberangkatan berjalan dengan baik. Saya akan mempertimbangkan menggunakan layanan ini kembali untuk perjalanan berikutnya.",
    "Budi Hartono",
    "Pelanggan"
  ],
];


$faq = [
  [
    "question" => "Rute apa saja yang dilayani?",
    "answer" => "$brand melayani perjalanan dari Cianjur dan Sukabumi menuju berbagai wilayah Jabodetabek, Bandara Soetta, Bandung, Semarang, Surabaya, hingga Bali. Ketersediaan rute dan jadwal dapat disesuaikan dengan tujuan perjalanan."
  ],
  [
    "question" => "Bagaimana cara melakukan pemesanan?",
    "answer" => "Pemesanan dapat dilakukan dengan menghubungi admin melalui WhatsApp $telp atau telepon. Silakan informasikan nama, tanggal keberangkatan, lokasi penjemputan, tujuan perjalanan, dan jumlah penumpang agar proses reservasi dapat dilakukan dengan lebih cepat."
  ],
  [
    "question" => "Apakah tersedia layanan antar jemput?",
    "answer" => "Ya, $brand menyediakan layanan antar jemput dengan sistem door to door untuk area yang termasuk dalam jangkauan layanan. Penumpang dapat dijemput dari lokasi yang telah disepakati dan diantar langsung ke tujuan."
  ],
  [
    "question" => "Armada apa yang digunakan?",
    "answer" => "$brand menggunakan armada yang bersih, nyaman, ber-AC, dan dirawat secara berkala. Kondisi kendaraan selalu diperhatikan agar perjalanan jarak dekat maupun jauh tetap nyaman."
  ],
  [
    "question" => "Bagaimana metode pembayarannya?",
    "answer" => "Pembayaran dapat dilakukan melalui transfer bank maupun secara tunai sesuai dengan ketentuan yang berlaku. Informasi mengenai metode pembayaran akan disampaikan oleh admin saat proses pemesanan."
  ],
  [
    "question" => "Apakah tersedia jadwal keberangkatan setiap hari?",
    "answer" => "Ya, $brand menyediakan jadwal keberangkatan setiap hari untuk rute tertentu. Untuk mendapatkan informasi jadwal terbaru, ketersediaan kursi, dan waktu keberangkatan sesuai tujuan, silakan hubungi admin sebelum melakukan pemesanan."
  ],
];




function rupiah(int $harga)
{
  return "Rp " . number_format($harga, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html
  lang="id"
  class="scroll-smooth">

<head>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MQ6NC6L7');
  </script>
  <!-- End Google Tag Manager -->


  <meta name="author" content="Dion Zebua" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

  <title>
    <?= $title ?>
  </title>
  <meta name="description" content="<?= $desc ?>" />

  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:description" content="<?= $desc ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= $domain ?>" />
  <meta property="og:image" content="<?= $domain . ($logoShared ?? $logo) ?>" />

  <link rel="apple-touch-icon" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="16x16" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="32x32" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="180x180" href="<?= $domain . $logo ?>" />
  <link rel="shortcut icon" href="<?= $domain . $logo ?>" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:site_name" content="<?= $brand ?>" />
  <link rel="canonical" href="<?= $domain ?>" />


  <link
    href="<?= $domain ?>src/css/output.css"
    rel="stylesheet" />

  <link
    rel="preload"
    href="src/css/swiper-bundle.min.css"
    as="style"
    onload="this.rel='stylesheet'" />

  <link
    rel="preload"
    fetchpriority="high"
    as="image" type="image/jpeg"
    href="<?= $domain ?>src/img/background-hero-section.webp">

</head>

<body class="font-poppins text-slate-700 overflow-x-hidden">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ6NC6L7"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="">
    <div class="container !py-4">
      <div class="flex justify-between">
        <div class="grid place-items-center">
          <a href="<?= $domain ?>">
            <img
              src="<?= $domain . $logoPanjang ?>"
              class="w-16 rounded m-auto"
              alt="logo" />
          </a>
        </div>
        <div class="flex items-center">
          <nav>
            <button
              title="open nav"
              id="openNav"
              class="my-gradient hover:!bg-none hover:!bg-primary-hover p-1 rounded md:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-8 stroke-slate-100 hover:stroke-slate-200">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>

            <!-- laptop -->
            <ul
              class="hidden md:flex flex-col md:flex-row gap-8 lg:gap-11 [&_li]:flex [&_li]:items-center [&_li_a]:font-medium [&_li_a]:text-slate-700 hover:[&_li_a]:text-primary-hover hover:[&_li]:scale-110 hover:[&_li]:transition-all">
              <?php if (count($menu) > 0) : ?>
                <?php foreach ($menu as $item) : ?>
                  <li><a href="<?= $item[1] ?>"><?= $item[0] ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>
              <a
                href="<?= $link_whatsapp ?>"
                target="_blank"
                class="flex gap-2 px-5 py-2 my-gradient hover:!bg-none hover:!bg-primary-hover text-slate-200 rounded-lg w-min">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Pesan
              </a>
            </ul>
            <!-- laptop -->

            <!-- mobile -->
            <ul
              class="fixed h-screen inset-0 py-20 px-5 z-20 bg-slate-950/90 md:hidden !hidden"
              id="popupNav">
              <div
                class="bg-white h-full rounded flex p-5 flex-col md:flex-row gap-5 [&_li]:flex [&_li]:items-center [&_li_a]:font-medium [&_li_a]:text-slate-700 hover:[&_li_a]:text-primary-hover hover:[&_li]:transition-all hover:[&_li_a]:scale-110 relative">
                <button
                  title="close nav"
                  id="closeNav"
                  class="absolute right-5 top-5 my-gradient hover:!bg-none hover:!bg-primary-hover p-1 rounded md:hidden">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6 stroke-slate-100 hover:stroke-slate-200">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>

                <?php if (count($menu) > 0) : ?>
                  <?php foreach ($menu as $item) : ?>
                    <li><a href="<?= $item[1] ?>"><?= $item[0] ?></a></li>
                  <?php endforeach; ?>
                <?php endif; ?>
                <a
                  href="<?= $link_whatsapp ?>"
                  target="_blank"
                  class="flex gap-2 px-5 py-2 my-gradient hover:!bg-none hover:!bg-primary-hover text-slate-200 rounded-lg w-min">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                  </svg>
                  Pesan
                </a>
              </div>
            </ul>
            <!-- mobile -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main class="overflow-x-hidden">

    <!-- <?php if (isset($logoShared)): ?>
      <div class="container !mb-5 lg:!mb-10">
        <a href="<?= $link_whatsapp ?>" target="_blank" rel="nofollow">
          <img src="<?= $domain . $logoShared ?>" class="mx-auto rounded-lg w-full" alt="Harga Travel">
        </a>
      </div>
    <?php endif; ?> -->



    <!-- Hero Section -->
    <section class="container !pb-10">
      <div
        style="background-image: url(<?= $domain ?>src/img/background-hero-section.avif)"
        class="py-10 lg:py-7 bg-fixed bg-contain bg-center rounded-lg relative">
        <div
          class="absolute rounded-lg inset-0 bg-[radial-gradient(rgb(0_0_0_/_0.9),rgb(0_0_0_/_0.7))] md:bg-[radial-gradient(rgb(0_0_0_/_0.6),rgb(0_0_0_/_0.7))] from-0% via-50% to-100%">
        </div>
        <div
          class="grid grid-cols-12 [&>div]:col-span-full items-center gap-y-6">
          <div class="md:!col-span-7 p-5 md:p-10 md:-top-10 lg:p-20 z-10 sm:max-w-[600px] lg:max-w-full">
            <h1
              class="max-w-[400px] mb-3 text-white text-3xl leading-[40px] md:text-[40px] md:leading-[50px] lg:text-5xl lg:leading-[70px] font-bold text-left">
              <?= $title ?>
            </h1>
            <p class="desc text-[17px] leading-7 !text-slate-300 !mb-5"><?= $desc; ?>.</p>
            <div class="flex gap-x-5 mt-7">
              <a
                href="<?= $link_whatsapp ?>"
                target="_blank"
                class="flex gap-2 px-5 py-2 border-2 border-primary hover:border-primary-hover my-gradient hover:!bg-none hover:!bg-primary-hover text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Pesan
              </a>
              <a
                href="#rute-travel"
                class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-primary-hover bg-slate-200 hover:bg-primary-hover text-slate-800 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                Rute
              </a>
            </div>
          </div>
          <div class="md:!col-span-5 p-5 md:p-10 md:-top-10 lg:p-20 z-10">
            <div
              class="bg-white rounded-2xl border-b-8 border-primary shadow-lg p-5 px-7">
              <p class="flex gap-x-2 font-medium">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>

                <span class="">Info Pemesanan</span>
              </p>
              <div class="w-full bg-slate-200 h-[1px] my-5"></div>
              <form
                class="grid grid-cols-2 gap-5"
                id="booking-form">
                <div class="col-span-full text-sm">
                  <label
                    for="nama"
                    class="block cursor-pointer font-medium">Nama anda</label>
                  <div class="mt-1">
                    <input
                      type="text"
                      required
                      name="nama"
                      id="nama"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50" />
                  </div>
                </div>

                <div class="col-span-full grid grid-cols-2 gap-x-3">
                  <div class="text-sm">
                    <label
                      for="asal"
                      class="block cursor-pointer font-medium">Asal</label>
                    <div class="mt-1">
                      <input
                        type="text"
                        required
                        name="asal"
                        id="asal"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div>
                  <div class="text-sm">
                    <label
                      for="tujuan"
                      class="block cursor-pointer font-medium">Tujuan</label>
                    <div class="mt-1">
                      <input
                        type="text"
                        required
                        name="tujuan"
                        id="tujuan"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div>
                </div>

                <div class="col-span-full text-sm">
                  <label
                    for="jumlah"
                    class="block cursor-pointer font-medium">Jumlah Penumpang</label>
                  <div class="mt-1">
                    <select
                      id="jumlah"
                      name="jumlah"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50">
                      <option>1 Orang</option>
                      <option>2 Orang</option>
                      <option>3 Orang</option>
                      <option>4 Orang</option>
                      <option>5 Orang</option>
                      <option>6 Orang</option>
                      <option>7 Orang</option>
                      <option>8 Orang</option>
                    </select>
                  </div>
                </div>

                <!-- <div class="col-span-full text-sm">
                    <label
                      for="nomor"
                      class="block cursor-pointer font-medium">Nomor Whatsapp</label>
                    <div class="mt-1">
                      <input
                        min="08"
                        type="number"
                        required
                        name="nomor"
                        id="nomor"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div>

                  <div class="col-span-full text-sm">
                    <label
                      for="jadwal"
                      class="block cursor-pointer font-medium">Jadwal Keberangkatan</label>
                    <div class="mt-1">
                      <input
                        type="datetime-local"
                        required
                        name="jadwal"
                        id="jadwal"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-primary placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div> -->

                <button
                  class="col-span-full px-5 py-2 border-2 border-primary hover:border-primary-hover my-gradient hover:!bg-none hover:!bg-primary-hover text-slate-200 rounded-lg transition-all relative"
                  type="submit">
                  Pesan Sekarang
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- CTA -->
    <section class="container my-20">
      <div class="w-full">
        <div
          class="bg-gradient-to-tr from-primary to-primary-hover rounded-3xl p-8 text-center sm:p-16 md:px-24 md:py-20 lg:px-28">
          <div class="max-w-2xl mx-auto">
            <h2 class="text-white text-4xl">
              Ingin menjadwalkan Travel bersama <?= $brand ?>?
            </h2>
            <p
              class="max-w-lg text-base text-indigo-100 mx-auto mt-4 sm:text-lg">
              Silakan menghubungi kami untuk berkonsultasi mengenai kebutuhan perjalanan Anda. Kami siap memberikan informasi dan solusi layanan travel yang sesuai dengan kebutuhan, dengan mengutamakan kenyamanan, keamanan, serta efisiensi perjalanan. </p>
          </div>
          <div
            class="flex justify-center gap-4 mt-8 sm:flex-row sm:items-center sm:gap-5">
            <a
              href="<?= $link_whatsapp ?>"
              class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-primary-hover bg-white hover:bg-primary-hover text-slate-700 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
              Kontak
            </a>
            <a
              href="#rute-travel"
              class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-primary-hover bg-transparent hover:bg-primary-hover text-slate-200 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
              Rute
            </a>
          </div>
          <ul
            class="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm font-medium text-white mt-8">
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Harga murah
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Bayar ditempat
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Support 24 jam
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Mobil ber-ac
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Door to door
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- CTA -->


    <!-- Jadwal -->
    <!-- <div class="container my-10">
      <a href="<?= $link_whatsapp ?>" target="_blank" rel="nofollow">

        <img src="<?= $domain ?>src/img/Dua-Cahaya-Utama-Trans.webp" class="rounded-xl shadow-md w-full aspect-[16/9] md:aspect-[16/7]" alt="<?= $title ?>">
      </a>
    </div> -->



    <!-- Rute Travel -->
    <section class="container my-20 mt-10" id="rute-travel">
      <div class="">
        <div class="text-center inner-container">
          <h2 class="line-h2">Daftar Rute dan Harga Travel</h2>
          <p class="desc">
            <?= $desc; ?>
          </p>
        </div>
        <div
          class="grid grid-cols-12 gap-x-6 gap-y-8 [&>div]:col-span-12 [&>div]:sm:col-span-6 [&>div]:md:col-span-4 [&>div]:lg:col-span-3 [&>div]:rounded-xl [&>div]:border-b-8 [&>div]:border-primary [&>div]:shadow-xl [&>div]:overflow-hidden [&>div]:bg-white [&>div]:relative [&>div>a]:absolute [&>div>a]:inset-0 [&_img]:border-b [&>div_div]:p-4 [&>div_div]:md:px-5 [&>div_div]:lg:px-6 [&_h3]:line-clamp-3 [&_h3]:text-[15px] [&_h3]:font-semibold [&_h3]:text-slate-700 [&_h3]:z-10 [&_h3]:relative [&_h3]:cursor-pointer">
          <?php if (count($rute) > 0) : ?>
            <?php foreach ($rute as $item) : ?>

              <div class="rute">
                <img
                  src="<?= $domain ?>src/img/rute.avif"
                  width="100%"
                  height="100%"
                  loading="lazy"
                  alt="travel Cianjur/Sukabumi - <?= $item['tujuan'] ?>"
                  class="brightness-75" />
                <div class="">
                  <h3 class="!line-clamp-1 block whitespace-nowrap !z-1">
                    Cianjur/Sukabumi - <?= $item['tujuan'] ?>
                  </h3>
                  <p class="text-[15px] opacity-80 my-2 !line-clamp-3">
                    Jasa Travel dari Cianjur dan Sukabumi ke <?= $item['tujuan'] ?> atau sebaliknya:
                  </p>
                  <ul class="text-[15px] opacity-80 !list-disc ml-5">
                    <?php foreach ($item['rute'] as $r) : ?>
                      <li class="mb-1">
                        <b class="!line-clamp-1 inline-block text-pr"><?= $r[0] ?></b>
                        <!-- <i class="harga-travel"><?= rupiah($r[1]) ?> / kursi</i> -->
                      </li>
                    <?php endforeach; ?>

                  </ul>
                  <a target="_blank" title="Booking tiket travel Cianjur/Sukabumi - <?= $item['tujuan'] ?> via whatsapp" href="<?= $link_whatsapp ?>" class="my-gradient hover:!bg-none hover:!bg-primary-hover text-slate-100 block text-center text-sm mt-3 rounded p-2 relative">Booking Tiket</a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="text-center mt-6">
          <!-- <button id="loadMoreBtn"
            class="bg-primary text-white px-6 py-2 rounded hover:!bg-primary-hover">
            Muat Rute
          </button> -->
        </div>

      </div>
    </section>
    <!-- Rute Travel -->


    <!-- Kota Populer -->
    <section class=" mt-20 bg-blue-50">
      <div class="container ">
        <div class="py-20">
          <div class="text-center inner-container">
            <h2 class="line-h2">Lokasi Travel Populer</h2>
            <p class="desc">
              Kunjungi lokasi-lokasi travel populer bersama <?= $brand ?> dan rasakan pengalaman perjalanan yang seru, nyaman, serta penuh momen tak terlupakan!
            </p>
          </div>
          <div
            class="grid grid-cols-8 gap-x-6 gap-y-10 [&>*]:col-span-full [&>*]:sm:col-span-4 [&>*]:md:!col-span-2 [&>*]:border [&>*]:relative [&>*]:min-h-96 md:[&>*]:min-h-80 [&>*]:rounded-xl [&>*]:shadow-xl [&>*]:cursor-pointer [&>*]:overflow-hidden [&>*]:before:absolute [&>*]:before:content-[''] [&>*]:before:z-[2] [&>*]:before:inset-0 [&>*]:before:bg-slate-950/55 [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:absolute [&_img]:inset-0 [&_img]:scale-100 [&_img]:transition-all [&_img]:duration-500 [&>div>div]:z-10 [&>div>div]:relative [&>div>div]:p-5 [&>div>div]:text-center [&>div>div]:flex-col [&>div>div]:flex [&>div>div]:justify-between [&>div>div]:h-full [&_h3]:text-slate-50 [&_a]:col-span-full [&_a]:px-5 [&_a]:py-2 [&_a]:border-2 [&_a]:border-primary hover:[&_a]:border-primary-hover [&_a]:bg-primary hover:[&_a]:bg-primary-hover [&_a]:text-slate-200 [&_a]:rounded-lg [&_a]:transition-all [&_a]:relative">
            <?php if (count($kota) > 0) : ?>
              <?php foreach ($kota as $item) : ?>
                <div class="group">
                  <img
                    src="<?= $domain . 'src/img/place/' . $item[1] ?>"
                    class="group-hover:scale-125"
                    loading="lazy"
                    alt="<?= $item[0] ?>" />
                  <div class="">
                    <h3><?= $item[0] ?></h3>
                    <a
                      href="<?= $link_whatsapp ?>"
                      target="_blank" class="my-gradient hover:!bg-none hover:!bg-primary-hover">
                      Pesan Sekarang
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Kota Populer -->

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="bg-gradient-to-tr from-primary to-primary-hover py-20">
      <div class="container">
        <div class="grid grid-cols-1 md:!grid-cols-2 gap-8">
          <div class="col-span-full md:!col-span-1  ">
            <div class="w-full md:max-w-[400px]">
              <img loading="lazy" src="<?= $domain . $logo ?>" class="w-full rounded-lg aspect-square bg-yellow-100" alt="tentang <?= $title ?>">
            </div>
          </div>
          <div class="col-span-full md:!col-span-1  ">
            <div class="text inner-container">
              <h2 class="line-h2 left-12 text-slate-50 before:!bg-blue-300 after:!bg-blue-300"><?= $brand ?></h2>
              <p class="desc text-justify !text-slate-300 !mb-5">
                <?= $brand ?> hadir dengan pelayanan terbaik, khususnya dalam menyediakan layanan
                <a class="underline" href="https://jasatravel.web.id/" target="_blank">travel antar kota</a>.
                Kami melayani perjalanan dengan sistem antar jemput langsung dari rumah maupun dari titik penjemputan sesuai dengan kebutuhan Anda.
              </p>

              <p class="desc text-justify !text-slate-300 !mb-5">
                Salah satu rute yang banyak diminati adalah
                <a href="https://biotrans.id/rute/travel-cianjur-surabaya/" class="underline" target="_blank">Travel Cianjur Surabaya</a>,
                termasuk perjalanan dari Surabaya menuju Cianjur. Untuk memastikan perjalanan tetap nyaman dan aman, setiap keberangkatan didukung oleh sopir berpengalaman serta armada yang berkualitas.
              </p>

              <p class="desc text-justify !text-slate-300 !mb-5">
                Selain menyediakan layanan <?= $brand ?> dengan sistem door to door, kami juga menyediakan berbagai pilihan layanan perjalanan lainnya yang dapat disesuaikan dengan kebutuhan perjalanan Anda, seperti:
              </p>


              <ul class="!list-item !list-disc text-slate-300 ml-5">
                <li>Travel Reguler</li>
                <li>Carter Drop Off</li>
                <li>Carter Drop Bandara</li>
                <li>Carter Drop Pelabuhan</li>
                <li>Carter PP</li>
                <li>Pariwisata</li>
                <li>City Tour</li>
                <li>Ziarah</li>
                <li>Hajatan</li>
                <li>Perjalanan Bisnis</li>
                <li>Private</li>
                <li>Kirim Paket</li>
              </ul>

            </div>
            <!-- <div class="grid grid-cols-2">
                <div class="col-span-full">
                  <p></p>
                </div>
              </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Kami -->


    <!-- Galeri -->
    <section class="bg-blue-50 py-20"
      id="galeri">
      <div class="container">
        <div class="">
          <div class="text-center inner-container">
            <h2 class="line-h2">Galeri Mobil Travel </h2>
            <p class="desc">
              Galeri ini menghadirkan berbagai koleksi foto unit, aktivitas, serta momen berkesan yang menjadi bagian dari perjalanan dan perkembangan kami.
            </p>
          </div>
          <div
            class="grid grid-cols-12 sm:gap-x-6 gap-y-8 [&>*]:overflow-hidden [&>img]:cursor-pointer [&>img]:w-full [&>img]:object-cover [&>img]:rounded-xl [&>img]:shadow-lg [&>img]:h-72 [&>img]:transition-all [&>img]:duration-700 [&>img]:brightness-50 hover:[&>img]:brightness-90 [&>img]:col-span-full">
            <?php if (count($galeri) > 0) : ?>
              <?php foreach ($galeri as $key => $item) : ?>
                <img
                  onclick="window.open('<?= $domain . 'src/img/galeri/' . $item ?>', '_blank')"
                  width="100"
                  height="100"
                  loading="lazy"
                  src="<?= $domain . 'src/img/galeri/' . $item ?>"
                  class="<?php
                          if ($key == 0) {
                            echo 'sm:!col-span-12 !h-auto';
                          } elseif ($key == 2 || $key == 3) {
                            echo 'sm:!col-span-4';
                          } elseif ($key == 1 || $key == 4) {
                            echo 'sm:!col-span-8';
                          }
                          ?> [backdrop-filter:drop-shadow(2px_4px_6px_black)]"
                  alt="galeri <?= $key + 1 ?>" />
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Galeri -->

    <!-- Keunggulan -->
    <section class="bg-gradient-to-tr from-primary to-primary-hover mb-20 py-20"
      id="keunggulan">
      <div class="container">
        <div class="">
          <div class="text-center inner-container">
            <h2 class="line-h2 text-white">Keunggulan memilih Travel Kami</h2>
            <p class="desc !text-slate-300 !mb-5">
              Nikmati keunggulan layanan <?= $brand ?> yang mengutamakan kenyamanan, keamanan, dan ketepatan waktu di setiap perjalanan. Kami hadir dengan armada terawat, driver profesional, serta pelayanan ramah untuk memastikan pengalaman perjalanan yang lebih praktis, aman, dan menyenangkan bagi Anda.
            </p>
          </div>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-x-6 gap-y-8 [&>*]:overflow-hidden [&>img]:cursor-pointer [&>img]:w-full [&>img]:object-cover [&>img]:rounded-xl [&>img]:shadow-lg [&>img]:h-72 [&>img]:transition-all [&>img]:duration-700 [&>img]:brightness-50 hover:[&>img]:brightness-90 [&>img]:col-span-full">
            <?php if (count($keunggulan) > 0) : ?>
              <?php foreach ($keunggulan as $key => $item) : ?>
                <div class="rounded-3xl border border-gray-100 group relative bg-slate-100 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                  <div class="relative space-y-8 py-12 p-8">
                    <span class="text-5xl"><?= $item[0] ?></span>
                    <div class="space-y-2">
                      <h5 class="text-xl font-semibold transition group-hover:text-secondary">
                        <?= $item[1] ?>
                      </h5>
                      <p class="">
                        <?= $item[2] ?>
                      </p>
                    </div> <a href="<?= $link_whatsapp ?>" class="underline flex items-center justify-between group-hover:text-secondary"> <span class="text-sm">Hubungi Kami</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                      </svg> </a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>
    <!-- Galeri -->

    <!-- Testimoni -->
    <section class="container my-20">
      <div class="">
        <div class="text-center inner-container">
          <h2 class="line-h2">Testimoni Pelanggan</h2>
          <p class="desc">
            Setiap testimoni merupakan bukti komitmen kami untuk memberikan
            yang terbaik. Terima kasih atas kepercayaan Anda kepada kami!
          </p>
        </div>
        <div
          class="[&>div]:h-full [&>div]:px-10 [&>div]:pb-10 containerSwipper [&_.itemSlider]:shadow-2xl [&_.itemSlider]:p-5 [&_.itemSlider]:border [&_.itemSlider]:rounded-xl [&_.itemSlider]:col-span-full [&_.itemSlider]:sm:col-span-6 [&_.itemSlider]:lg:col-span-4 first:[&_.itemSlider>div]:flex [&>img]:first:[&_.itemSlider>div]:w-4 [&_.testimoni]:text-slate-500 [&_.testimoni]:text-[15px] [&_.testimoni]:my-5 [&_.testimoni]:testimoni-text [&_.user-testimoni]:flex [&_.user-testimoni]:gap-x-4 [&_.user-testimoni_img]:w-10 [&_.user-testimoni_img]:border [&_.user-testimoni_img]:rounded-3xl [&_.user-testimoni_img]:p-1 [&_.user-testimoni_img]:bg-primary [&_.user-testimoni_img]:from-primary-hover [&_.user-testimoni_img]:to-primary [&_.user-testimoni_div]:flex [&_.user-testimoni_div]:flex-col [&_.user-testimoni_div]:justify-center first:[&_.user-testimoni_div_p]:font-semibold first:[&_.user-testimoni_div_p]:text-sm last:[&_.user-testimoni_div_p]:text-slate-500 last:[&_.user-testimoni_div_p]:text-xs">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <?php foreach ($testimonial as $item) : ?>
                <div class="swiper-slide">
                  <div class="itemSlider">
                    <div class="">
                      <?php for ($i = 0; $i < 5; $i++) : ?>
                        <img
                          src="./src/img/star.png"
                          loading="lazy"
                          width="16"
                          height="16"
                          alt="bintang" />
                      <?php endfor; ?>
                      <img
                        src="./src/img/star.png"
                        loading="lazy"
                        width="16"
                        height="16"
                        alt="bintang" />

                    </div>
                    <p class="testimoni">
                      <?= $item[0] ?>
                    </p>
                    <div class="user-testimoni">
                      <img
                        src="./src/img/group.png"
                        alt="testimoni" />
                      <div>
                        <p><?= $item[1] ?></p>
                        <p><?= $item[2] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni -->

    <!-- tanya Jawab -->
    <section id="tanya-jawab" class="bg-gradient-to-tr from-primary to-primary-hover py-20">
      <div class="container">
        <div class="text-center inner-container">
          <h2 class="line-h2 text-white">Tanya Jawab Seputar Travel</h2>
          <p class="desc !text-slate-300 !mb-5">
            Kami telah merangkum beberapa pertanyaan yang sering ditanyakan oleh calon penumpang beserta jawabannya, yang mungkin dapat membantu Anda:
          </p>
        </div>
        <div class="grid grid-cols-1 md:!grid-cols-2 gap-8">
          <?php foreach ($faq as $item) : ?>

            <div class="rounded-xl border border-gray-200 bg-white p-6">
              <h3 class="text-lg font-semibold text-gray-900">
                <?= $item['question'] ?>
              </h3>
              <div class="flex gap-5 mt-2">
                <span class="text-xl text-slate-600">&#8618;</span>
                <p class="text-gray-600 leading-7">
                  <?= $item['answer'] ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- Tentang Kami -->

    <!-- Kontak -->
    <section class="bg-blue-50 py-20"
      id="kontak">
      <div class="container">
        <div class="">
          <div class="text-center inner-container">
            <h2 class="line-h2">Kontak</h2>
            <p class="desc">
              Hubungi kami sekarang juga, kami siap bantu 24 jam.
            </p>
          </div>
          <div class="grid grid-cols-12 text-center sm:gap-y-6">
            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-b-2 sm:border-b-0 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                aria-hidden="true"
                role="img"

                viewBox="0 0 384 512"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-primary"
                  d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
              </svg>
              <h3>Alamat</h3>
              <p class="text-slate-600">
                <?= $alamat ?>
              </p>
            </div>

            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-t-2 border-b-2 sm:border-t-0 sm:border-b-0 sm:border-l-2 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                viewBox="0 0 612 612"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-primary"
                  d="M586.923 256.013c-7.959-8.24-16.655-13.074-24.53-15.916 10.798-62.807 8.812-97.901-246.643-178.322C55.771-20.07 26.688 13.85 5.274 81.869L1.622 93.471c-5.794 18.406 4.43 38.025 22.836 43.82l83.405 26.257c18.407 5.794 38.025-4.43 43.82-22.836l3.652-11.602c16.587-52.69 97.773-28.905 143.76-14.428 45.986 14.477 126.155 41.49 109.568 94.18l-3.653 11.601c-5.794 18.406 4.43 38.025 22.836 43.82l83.405 26.257c18.406 5.795 38.025-4.429 43.82-22.835l2.369-8.038c4.933 2.036 10.229 5.149 15.123 10.215 17.553 18.182 23.378 53.308 16.842 101.589-11.335 83.657-44.21 113.537-79.221 123.481v-14.553c0-14.775-3.693-29.4-11.181-42.179-34.94-59.797-84.556-112.856-147.598-159.626v-35.34c0-2.745-2.246-4.992-4.991-4.992h-51.862a4.975 4.975 0 0 0-4.992 4.992v35.139h-59.199v-35.139a5.007 5.007 0 0 0-4.992-4.992H173.46a5.007 5.007 0 0 0-4.992 4.992v35.139C105.326 325.264 55.661 378.322 20.67 438.22c-7.487 12.778-11.18 27.403-11.18 42.177v32.894c0 46.87 37.985 84.855 84.854 84.855h330.984c46.136 0 83.581-36.824 84.745-82.679 56.115-13.143 87.95-58.928 99.111-141.316 7.497-55.335.005-95.082-22.261-118.138zM346.544 481.271l-33.304-11.858c3.533-7.12 5.57-15.115 5.57-23.606 0-29.35-23.809-53.159-53.208-53.159-29.35 0-53.209 23.81-53.209 53.159 0 29.4 23.859 53.21 53.209 53.21a52.961 52.961 0 0 0 29.386-8.859l18.266 30.026c-13.76 8.835-30.087 14.022-47.652 14.022-48.817 0-88.349-39.582-88.349-88.398 0-48.767 39.533-88.349 88.349-88.349s88.399 39.583 88.399 88.349c0 12.621-2.69 24.6-7.457 35.463z"></path>
              </svg>
              <h3>Telpon</h3>
              <p class="text-slate-600"><?= $telp ?></p>
              <?php echo isset($telp2) ? '<p class="text-slate-600">' . $telp2 . '</p>' : '' ?>
            </div>

            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-t-2 sm:border-t-0 sm:border-l-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                aria-hidden="true"
                role="img"

                viewBox="0 0 448 512"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-primary"
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
              </svg>
              <h3>Whatsapp</h3>
              <p class="text-slate-600"><?= $telp ?></p>
              <?php echo isset($telp2) ? '<p class="text-slate-600">' . $telp2 . '</p>' : '' ?>

            </div>

            <!-- <a href="https://www.instagram.com/traveldenpasarsingaraja?igsh=MWVlc3NrbnN4bnlpdw==" target="_blank"
              class="p-5 py-8 col-span-full sm:col-span-4 border-b-2 sm:border-b-0 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">


              <svg class="size-10" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-primary" d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"></path>
                <path class="fill-primary" d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28zM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112z"></path>
              </svg>


              <h3>Instagram</h3>
              <p class="text-primary underline line-clamp-1 break-all">
                @traveldenpasarsingaraja
              </p>
            </a> -->

            <!-- <div
              class=" col-span-full sm:col-span-4 sm:border-t-0 sm:border-b-0 sm:border-l-2 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">
            </div> -->

            <!-- <a target="_blank" href="https://www.facebook.com/trvel.singaraja.dps"
              class="p-5 py-8 col-span-full sm:col-span-4 border-t-2 sm:border-t-0 sm:border-l-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                aria-hidden="true"
                role="img"

                viewBox="0 0 448 512"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path class="fill-primary" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
              </svg>
              <h3>Facebook</h3>
              <p class="text-primary underline line-clamp-1 break-all" target="_blank" href="https://www.facebook.com/trvel.singaraja.dps">@trvel.singaraja.dps</p>

            </a> -->
          </div>
        </div>
        <?php if ($iframe) :  ?>
          <iframe
            title="alamat" loading="lazy"
            src="<?= $iframe ?>"
            allowfullscreen=""
            class="w-full h-60 border-4 brightness-75 hover:brightness-100 transition-all duration-700 shadow-lg rounded-lg border-primary"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <?php endif ?>
      </div>
    </section>
    <!-- Kontak -->
  </main>

  <footer class="!py-5 container">
    <a
      title="whatsapp"
      href="<?= $link_whatsapp ?>"
      target="_blank"
      class="fixed right-5 bottom-5 bg-green-700 hover:bg-green-600 transition-all duration-700 z-[99] rounded-full p-2">
      <span class="hidden">Whatsapp</span>
      <svg
        aria-hidden="true"
        role="img"
        height="1em"
        width="1em"
        viewBox="0 0 448 512"
        xmlns="http://www.w3.org/2000/svg"
        class="size-10">
        <path
          class="fill-slate-200"
          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
      </svg>
    </a>
    <?php echo isset($telp2) ?
      '<a
        href="' . $link_whatsapp2 . '"
        target="_blank"
        class="fixed right-5 !mb-[73px] bottom-5 bg-green-700 hover:bg-green-600 transition-all duration-700 z-[99] rounded-full p-2">
        <svg
          aria-hidden="true"
          role="img"
          height="1em"
          width="1em"
          viewBox="0 0 448 512"
          xmlns="http://www.w3.org/2000/svg"
          class="size-10">
          <path
            class="fill-slate-200"
            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
        </svg>
      </a>'
      : null ?>
    <p class="text-center text-sm text-slate-500">
      &#169; copyright - web dikembangkan oleh
      <a
        href="https://dionzebua.com"
        class="underline text-blue-500"
        target="_blank">Dion Zebua</a>
    </p>
  </footer>

  <script src="<?= $domain ?>src/js/swiper-bundle.min.js" defer></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {

      const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        breakpoints: {
          755: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1100: {
            slidesPerView: 3,
          },
          1400: {
            slidesPerView: 4,
          },
        },
        loop: true,
        grabCursor: true,
        centeblueSlides: true,
        spaceBetween: 20,
        freeMode: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    })
  </script>

  <script src="<?= $domain ?>src/js/script.js" defer></script>
  <script>
    const bookingForm = document.querySelector('#booking-form')

    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault()

      const data = {
        'nama': e.target[0].value,
        'asal': e.target[1].value,
        'tujuan': e.target[2].value,
        'jumlah': e.target[3].value,
      }
      console.log(data);

      const text = `Saya ingin memesan travel!%0A%0A*Nama* : ${data.nama}%0A*Asal* : ${data.asal}%0A*Tujuan* : ${data.tujuan}%0A*Jumlah* : ${data.jumlah}%0A%0A${window.location.href}`
      window.open(`https://wa.me/<?= $res_telp ?>/?text=${text}`, '_blank')
    })
  </script>
</body>

</html>