<?php

 require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>
<html>
  <head>
    <div class="title" title="camera recomendation"></div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  
    
  </head>
<body>
<nav>
      <div class="nav">
        <img id="logo" src="image/logo.jpg" onclick="location.href='home.php';" src="IMAGE/logo.jpg" style="height: 50px;"/>
        <a id="menu" href="home.php"><b>HOME</b></a>
        <a id="menu" href="index.php"><b>CAMERA</b></a>
        <a id="menu" href="equipment.php"><b>EQUIPMENT</b></a>
        <a id="menu" href="aboutme.php"><b>ABOUT ME</b></a>
        <a id="menu" href="cart.php"><b>CART</b><span id="badge"><?php echo mysqli_num_rows($all_cart); ?></span></a>

      </div>
    </nav>
  <div id="main1info">


  </div>
  <div id="main1-content">
    <a style="font-size: 510%; padding-left: 0%; padding-bottom: 0; padding-top: 5%;"><b>CAMERA</b></a>
    <div id="textcontent" style="padding: 5%;padding-top: 0%;">
      <div id="main1-content">
        <div id="textcontent">
           <!--start ofROW-->
          <div id="cardrow" class="row">
            <div class="col-sm-6">
              <!--start of card-->
            <div class="card">
               <img src="image/camera/1.png" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title"><b>CANON R5</b></h5>
              <h6><b>kamera video</b></h6>
              <p class="card-text">EOS R5 sudah hadir dan dilengkapi dengan fitur perekaman video beresolusi 8K, pertama kalinya pada kamera Canon.<span id="dots">  ...</span>  <span id="more"> Dengan Animal Detection AF (AF Pendeteksian Hewan) yang -baru dan In-Body Image Stabilization yang dahsyat hingga 8 stop, kamera ini mampu menghasilkan gambar dan video berkualitas tinggi secara menyeluruh berkat dudukan RF yang dimilikinya, Anda dapat memperoleh pengalaman terbaik dari kamera seri mirrorless full-frame Canon pada model unggulan ini.<br>
                <b>spesifikasi</b><br>
                -Sensor CMOS full-frame sekitar 45MP<br>
                -Hingga 8-stop In-Body Image Stabilizer X Optical Image Stabilizer<br>
                -Hingga 20 FPS + Animal Detection AF<br>
                -Kapabilitas perekaman 8K DCI movie + 4K DCI 120 fps video
                </span></p>
               <button onclick="myFunction()" class="btn btn-primary" id="myBtn">Read more</button>
                          <p class="card-text item-price">Rp.58.999.000</p>
              <div id="btn" class="container">
                <div class="row">
                <div class="col text-center">
                 <a href="https://www.tokopedia.com/focus-nusantara/canon-eos-r5-body-only?extParam=ivf%3Dfalse%26src%3Dsearch&refined=true"class="btn btn-primary" type="button">buy</a>
                </div>
                </div>
              </div>
              </div>
            </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                
                 <img src="image/camera/sony-a7-iv-rumors.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b>SONY A7 IV.</b></h5>
                <h6><b>kamera foto</b></h6>
                <p class="card-text">Sony a7 IV adalah generasi keempat dari model kamera mirrorless full-frame core a7 perusahaan. Ini adalah yang paling canggih, <span id="dot2">...</span> <span id="moretwo"> membawa banyak perbaikan yang telah dilakukan Sony dalam hal fokus otomatis dan desain antarmuka sejak peluncuran a7 III, pada Februari 2018.<br>
                  <b>spesifikasi</b><br>
                  -33MP BSI CMOS full-frame sensor<br>
                  -Up to 10 fps shooting in lossy Raw with extensive buffer<br>
                  -In-body stabilization rated up to 5.5EV<br>
                  -Full-width oversampled 4K from 7K, up to 30p<br>
                  -4K/60p (from 4.6K capture) in Super35 / APS-C mode<br>
                  -10-bit video or HEIF stills capture<br>
                  -H.265 video, S-Cinetone color mode<br>
                  -3.69M dot OLED viewfinder<br>
                  -Twin card slots (1x CFe A/UHS-II, 1x UHS-II SD)<br>
                  -Full-time Bluetooth LE connection<br>
                </span></p>
                <button onclick="myFunction2()" class="btn btn-primary" id="Btntwo">Read more</button>
                            <p class="card-text item-price">Rp.33.499.000</p>
                <div id="Mybtn" class="container">
                  <div class="row">
                  <div class="col text-center">
                    <a href="https://ta.tokopedia.com/promo/v1/clicks/8a-xgVY2gmUEH_KaosrdHArRbm-xgVY789CBUsthbm-Orfua9fBjUstiHmUDUSoBrRo2QfNwq3ei6i-yyRB5rVUW8A-VzOgd8APF__zZQpuaqSBWoOViPjVeZJV5gjukyj2p6cxA8uPFe_uNzj2ZuIVb9OtOPBg2_uKh3uKfQcY0gsgd_Su7QOBOq3zq17h01mORP9xGrOPMHB21QRxoo9giPB2e3S2az7zhe9--3MxfQIgbZMH76crh1mUDUSz2Q31i6sJf6_eFosKpop1DUMoFyaUEH_nOHmFircYpq9z2Qfdi6sUDUMVDgaUEUSo7QuY0rfuS9fFp9fFa9fFhUiFiQSuWyMua9fYM9fVjraUEHsnDUMNOQ3-BrBYxgIowrMuhUstaHmFiyfV79fBjraUE3p1R6mFaHpJNbAHRHAPPbm-X9foxQMz2gcV7guYxgIHi6sUR6ZFiy3-wPcupPmUEUjdibm-FQRo79fVDgaUEUMoFyOYpqcYF9RuXrZUDUSgBrSo2Qfdi6i-fHiUDUMVj9RosQR-BUstOH_JX6A1FHAedHsJpopjRoZFirpowQcYSUstig9BGqMzUZMggQj2fgAo6QJBkQfBoe7BpZ3O6HcoD692qu7gN3_-Sq1Y2Z9P-q9P2y_-3o3ea69BqzsBE3_UN8u2_Z_g-qjV2_JoGP3Uao32q17jfZ32cQ1OEQcO6zcHh_VzzH7OJ_9z6zJg233jhqJN1u_-HuJ7a_uzSHJY9u_Voucz2_7o-r7BW69BxufzFyMFNqO2yeMgxuOV2_fB-P7B2PfBiH72F3s-DPuKpeSBiHBUh3_oZgMV913Bvq1BRZ3BRq3UpZSCqHMhO3Ao6QfUpeMgxuOV2_fB-P7B2PfBs3VgDyfNDgMzIzMNs81jfZ3OR83-I6_oMZIx11Buj_B-uouuyHchv1jgpQMHa69uB17-t_SBjgcgU8IoouRxfgAod6V1Fujx1uugvujyNzBz0gc-GHsVtyfOpgfVy33Ny3IKdu_C3ZVzuujY3zsBGucWZyjtaH3xsQ9oSyuxgQBxy8AxuHVgUuVu3_Ogc61g1qfziZso6PM-XqfPgucoX3Vxd6cJp_MhqHRKdyjz6gjOEyRP6HRKdypoZPcgU8c2gq1BpZ3N6qMUpZMhyHj2Nysoj8B2_Z_g-qjj7_1H78jY1z_-6zJBR_1z-81Y1192-q9P2yp-6PMoWuMgsHBgtyfO6Q7BkQfB6zJBN_c2Vo1YJ_9BozVud_32gHJO113BM1_7YUiFiyfhOrRzBrBY2gVYfHiUEo_JF6AJDUMoxPcuSQR-N9RoOgfPBrRzwy9z7rMBiP9zBUs2QUsHRHAri9ZFirI-2yfuwyMBjUsthHA1Fbm-SQfVD9fBjUstabm-Mq3NxQVYag3hay3N09fVjrfo5rM1i6srO6ZdaopURoAUO6AKd6A1pbm-hP3ua8uYag3hay3N09RosQR-BUstFbsKfH_rR6An7oAyh6AKFHpBY?dv=desktop&r=https%3A%2F%2Fwww.tokopedia.com%2Fastrafoto%2Fsony-a7iv-body-only-sony-a7-iv-sony-a7-mark-iv-a7iv-bo-sony-a7iv-body%3FextParam%3Divf%253Dfalse%26src%3Dtopads&ob=23&pub_unit=0&page=1&management_type=1&pub_domain=0&t=desktop&keywords=sony+a7+mark+iv&src=search&is_search=1&pub_id=0"class="btn btn-primary" type="button">buy</a>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                
                 <img src="image/camera/Fuji-X-T11-650x431.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b>Fujifilm X-T1</b></h5>
                <h6><b>kamera foto low budget</b></h6>
                <p class="card-text">Dengan sensor X-Trans CMOS II 16 MP yang sama, EXR Processor II yang sama, sistem fokus otomatis hybrid dan WiFi <span id="dot3">...</span> <span id="morethree"> seperti Fuji X-E2, X-T1 pada awalnya mungkin tidak terlihat jauh berbeda jika dibandingkan. Namun demikian, setelah Anda menggali lebih dalam mengenai apa yang ditawarkan X-T1 dengan EVF-nya yang sungguh menakjubkan dan memukau, autofokus beruntun yang cepat, konektivitas WiFi dengan remote control, opsi penyesuaian, intervalometer built-in, layar LCD miring dan desain retro yang ramping, Anda akan menyadari, bahwa X-T1 sesungguhnya merupakan suatu kemajuan yang sangat besar. Dalam ulasan ini, saya akan berbicara tentang pengalaman jangka panjang saya dengan X-T1 dan membandingkannya dengan E-M1, bersama dengan DSLR Nikon populer lainnya.<br>
                  <b>spesifikasi</b><br>
                  -Sensor: 16,3 MP (faktor krop 1,5x), ukuran piksel 4,8μ<br>
                  -Ukuran Sensor: 23,6 x 15,6 mm<br>
                  -Resolusi: 4896 x 3264<br>
                  -Sensitivitas ISO Asli: 200-6.400<br>
                  -Meningkatkan Sensitivitas ISO Rendah: 100 (khusus JPEG)<br>
                  -Meningkatkan Sensitivitas ISO Tinggi: 12.800-51.200 (khusus JPEG)<br>
                  -Sistem Pembersihan Sensor: Ya<br>
                  -Dudukan lensa: Dudukan FUJIFILM X<br>
                  -Penyegelan/Perlindungan Cuaca: Ya<br>
                  -Bentuk Tubuh: Paduan Magnesium Penuh<br>
                  -Rana Pencahayaan hingga 1/4000 dan 30 detik<br>
                  -Kontrol Rana: Rana Bidang Fokus<br>
                  -Penyimpanan Slot SD 1x (kompatibel dengan SD/SDHC/SDXC)<br>
                  -Jenis Jendela bidik: Jendela bidik warna OLED 2.360.000 titik<br>
                  -Kecepatan: 8 FPS<br>
                  -Pengukur Pencahayaan: Pengukuran TTL 256 zona<br>
                  -Lampu Kilat Internal: Tidak, Lampu Kilat Eksternal EF-X8 Disertakan<br>
                  -Fokus Otomatis: Ya<br>
                  -Fokus Manual: Ya<br>
                  -Layar LCD: 3,0 inci, 1.040.000 titik, LCD warna TFT yang dapat dimiringkan<br>
                  -Mode Film: Hingga 1080p HD penuh @ 60p, 30p<br>
                  -Batas Perekaman Film: 14 menit dalam 1080p, 27 menit dalam 720p<br>
                  -Keluaran Film: MOV (H.264)<br>
                  -GPS: Tidak<br>
                  -WiFi: Ya<br>
                  -Jenis Baterai: NP-W126<br>
                  -Daya Tahan Baterai: 350 kali pemotretan<br>
                  -Standar USB: 2.0<br>
               
               </span> </p>
               <button onclick="myFunction3()"  class="btn btn-primary" id="Btnthree">Read more</button>
                            <p class="card-text item-price">Rp.6.900.000</p>
                <div id="Btnthree" class="container">
                  <div class="row">
                  <div class="col text-center">
                    <a href="https://www.tokopedia.com/winnergrup874/fujifilm-x-t1-body-only-kamera-fujifilm-x-t1-body?extParam=ivf%3Dfalse%26src%3Dsearch&refined=true"class="btn btn-primary" type="button">buy</a>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                
                 <img src="image/camera/1dx.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b>CANON 1DX II</b> </h5>
                <h6><b>kamera foto</b></h6>
                <p class="card-text">Canon EOS-1D X adalah DSLR profesional unggulan perusahaan. Kamera ini dibuat dengan sensor full-frame 18MP yang mampu <span id="dot4">...</span> <span id="morefour"> memotret hingga 14 frame per detik (12fps dengan AF) dan menawarkan sensitivitas ISO maksimum 204.800, yang secara efektif menggantikan 1D Mark IV dan 1DS Mark III dalam jajaran kamera Canon. Meskipun terlihat sangat mirip dengan kamera seri 1D sebelumnya, namun X telah dikerjakan ulang secara ekstensif dan menyertakan lebih banyak fitur video profesional daripada DSLR Canon lainnya. <br>
                  <b>spesifikasi</b><br>
                  -Tipe bodi :SLR besar<br>
                  -Resolusi maksimum: 5184 x 3456<br>
                  -Piksel efektif :18 megapiksel<br>
                  -Ukuran sensor Bingkai penuh: (36 x 24 mm)<br>
                  -Jenis sensor: CMOS<br>
                  -ISO: 100, 200, 400, 800, 1600, 3200, 6400, 12800, 25600, 51200 (50, 102400 dan 204800 dengan peningkatan)<br>
                  -Dudukan lensa :Canon EF<br>
                  -Panjang fokus mult.:	1×<br>
                  -LCD yang diartikulasikan :Tetap<br>
                  -Ukuran layar: 3,2″<br>
                  -Titik layar :1.040.000<br>
                  -Kecepatan rana maksimum: 1/8000 detik<br>
                  -Format :MPEG-4, H.264<br>
                  -Jenis penyimpanan: Compact Flash (Tipe I atau II), kompatibel dengan UDMA<br>
                  -Dimensi :158 x 164 x 83 mm (6,22 x 6,46 x 3,27 inci)<br>
                  -GPS :Opsional<br>
                
                  </span></p>
                  <button onclick="myFunction4()"  class="btn btn-primary" id="Btnfour">Read more</button>
               <p class="card-text item-price">Rp.83.185.000</p>
                <div id="Btnfour" class="container">
                  <div class="row">
                  <div class="col text-center">
                    <a href="https://ta.tokopedia.com/promo/v1/clicks/8a-xgVY2gmUEH_j76AjaHsjabm-xgVY789CBUsthbm-Orfua9fBjUstiHmUDUSoBrRo2QfNwq3ei6iUagjWiZBCNy_-WzfWW1sum1cHazMr7HSxVquxW1ugy13-H33N1ZOg6HsJh9po2zOzaZfdRr1OxoAofq3gxopgp6uziQ71N8BPIg7oH1I2JbuVmH7eRrMBH61PhrszhZ3YkqR2R1pzb8jOp3_g93iO-PIVDgMgtejY7e_gygOjRbZUDUSz2Q31i6sJf6_ehoAJRo_rDUMoFyaUE6_1Fbm-FQRo2PcB5QiUEHZFiy3hSUstirRzW9fWpg3PwQAowQA-wQAJibm-XP3Oig9-wQfgwy3zpUstaHmFiQSuWyMua9fVjrOYag9Ji6sUFbm-sy9zwq3zpUs2Qo_rdbAUpH_jDHprFoB7DUMNwyfVXgcBjy9zB9fVjraUEopeDUMVi9RzBrRei6i-6UiFircYpPVYxQcri6i-srcowrfx5rVYOQSJibm-fg9-pq3YXUstiPsUibm-xgVYpyfYagZUEoAHNbsKdHAyfHpJRH_edoaFirpowQcYSUstig9BGqMzUZMggQj2fgAo6QJBkQfBoe7BpZ3O6HcoD692qu7gN3_-Sq1Y2Z9P-q9P2y_-3o3ea69BqzsBE3_UN8u2_Z_g-qjV2_JoGP3Uao32q17jfZ32S8uB1Qcx68jJO_VzuH7OkqRz6zJ-t_1HhqJNku92HuJOE332S81OEqchqQ12D_1o-r7BW69BxufzFyMFNqO2yeMgxuOV2_fB-P7B2PfBiH72F3s-DPuKpeSBiHBUh3_oZgMV913Bvq1BRZ3BRq3UpZSCqHMhO3Ao6QfUpeMgxuOV2_fB-P7B2PfBs3VgDyfNDgMzIzMNs81jfZ3OR83-I6_oMZIxp_uPdPMep8AxuHVgUuVu3_Ogc61g1qfziZS2cq7BUgfNy3IKdypoZPcgU8IooH_xE_S2CHMgU8I-sHBgXgjxdqBBX8AxuHVgUuVu3_Ogc6121qO-iZS2cq7BUgfNy17BpZ3N6qMUpZMhyHj2Nysoj8B2_Z_g-qjjO_uH7H1Nke9P6qjjF_1z-HJOku_C-q9P2yp-6PMoWuMgsHBgtyfO6Q7BkQfBo8BBN_c2S8jNJu_CozcPN_OzCHjNk1_C-QsnYUiFiyfhOrRzBrBY2gVYfHiUEH_KhHpJDUMoxPcuSQR-N9RoOgfPBrRzwy9z7rMBiP9zBUs2QUseFHA1ibmUOopribmUpopnfUB7DUSCaq3oB9f-2gmUE6_1Fbm-SQfVD9fBjUstabm-Mq3NxQVYag3hay3N09fVjrfo5rM1i6syF6mdNHpyfo_yNH_ndo_ehbm-hP3ua8uYag3hay3N09RosQR-BUstFbsyRHpy7oAKFopnRHpHao_BY?keywords=canon+eos+1d+x&t=desktop&pub_id=0&page=1&management_type=2&r=https%3A%2F%2Fwww.tokopedia.com%2Fmitrakamera-bdg%2Fkamera-canon-1d-x-mark-ii-body-only%3FextParam%3Divf%253Dfalse%26src%3Dtopads&src=find&pub_unit=0&pub_domain=0&ob=23&dv=desktop&is_search=1"class="btn btn-primary" type="button">buy</a>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                
                 <img src="image/camera/Canon_EOS_R-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b>CANON EOS R</b> </h5>
                <h6><b>kamera foto </b></h6>
                <p class="card-text">Canon EOS R adalah kamera mirrorless full-frame pertama yang menggunakan dudukan RF baru. Kamera ini dibuat dengan <span id="dot5">...</span> <span id="morefive"> sensor CMOS Dual Pixel 30 megapiksel yang sama dengan EOS 5D Mark IV tahun 2016, tetapi didesain untuk seri lensa RF yang baru. Canon mengatakan bahwa dudukan lensa RF yang lebih pendek akan memungkinkan mereka mendesain lensa yang lebih baik atau lebih kecil daripada dudukan EF yang sudah ada.<br>
                  Dengan EOS R, pada dasarnya, Anda mendapatkan kualitas gambar dan video dari 5D Mark IV pada kisaran harga 6D Mark II dengan filosofi kontrol yang baik dari kedua kamera tersebut dan juga seri EOS M. Sayangnya, meskipun kamera ini mampu menghasilkan kualitas gambar yang bagus, namun penanganan dan ergonomisnya masih kurang baik dan kemampuan video EOS R jauh tertinggal dari kompetitornya.<br>
                  <b>spesifikasi</b><br>
                  -30MP full-frame sensor with Dual Pixel autofocus<br>
                  -3.69M dot OLED viewfinder<br>
                  -Fully articulated rear LCD<br>
                  -Autofocus rated down to -6EV (with F1.2 lens)<br>
                  -Up to 8 fps shooting (5 fps with continuous AF, 3 fps 'Tracking Priority mode')<br>
                  -UHD 4K 30p video from a 1.8x crop of the sensor<br>
                  -Canon Log (10-bit 4:2:2 over HDMI or 8-bit 4:2:0 internal)<br>
                  -USB charging (with some chargers)<br>
                </span> </p>
                <button onclick="myFunction5()"  class="btn btn-primary" id="Btnfive">Read more</button>
                            <p class="card-text item-price">Rp.21.999.000</p>
                <div id="btn" class="container">
                  <div class="row">
                  <div class="col text-center">
                    <a href="https://www.tokopedia.com/focus-nusantara/canon-eos-r-body-body-only?extParam=ivf%3Dfalse%26src%3Dsearch"class="btn btn-primary" type="button">buy</a>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                
                 <img src="image/camera/a6400.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b>SONY A6400</b> </h5>
                <h6><b>kamera foto low budget</b></h6>
                <p class="card-text">Sony a6400 adalah kamera lensa mirrorless ringkas 24MP yang dapat diganti-ganti dengan sensor APS-C yang akan <span id="dot6">...</span> <span id="moresix"> melayani banyak fotografer, mulai dari dokumenter keluarga hingga fotografer profesional yang mencari kamera kedua yang ringan. Berita besarnya adalah kamera ini memiliki prosesor baru yang didasarkan pada prosesor yang digunakan pada kamera flagship sport-shooting Sony, a9, yang memungkinkan autofokus 'Pelacakan Waktu Nyata', yang merupakan salah satu implementasi autofokus paling efektif yang pernah kami lihat. Kamera ini juga termasuk yang paling mudah digunakan, setelah Anda menyiapkannya.<br>
                  <b>spesifikasi</b><br>
                  -24MP APS-C sensor<br>
                  -425-pt phase detection AF system with Real-Time Tracking<br>
                  -Tilting screen, 180° up, 90° down<br>
                  -2.36M-dot electronic viewfinder<br>
                  -New Bionz X processor<br>
                  -ISO range from 100-32000<br>
                  -11fps burst shooting (8fps with silent shutter)<br>
                  -Interval shooting option added<br>
                  -4K/30p video capture<br>
                  -Mic input, no headphone output<br>
                  -410 shots per battery charge (per CIPA)<br>
                  -Wi-Fi with NFC and Bluetooth<br>
                  </span></p>
                  <button onclick="myFunction6()"  class="btn btn-primary" id="Btnsix">Read more</button>
                            <p class="card-text item-price">Rp.13.199.000</p>
                <div id="btn" class="container">
                  <div class="row">
                  <div class="col text-center">
                    <a href="https://ta.tokopedia.com/promo/v1/clicks/8a-xgVY2gmUEo_ndopUOH_eDUMVj9RzNrc1i6sJDUSupg9-wq3ei6iUFUiFirfuprfB5QBY2gmUEUs-MZf-G1IBxHMOIqfOZo1-eyp-cgpea8Ju23cOzuBxzyjhgQBzbujdaH_VwHfBIuI-bQsPh_3J7HRg2gMJRoSHNuc-5z_BEu7PSe7he8jeW11UpzAPaq1FNzRVaoIV-Qf208SP_oJWE_9ogoBPqb1B7r3hMgMxm_RzCoBxS3_rWUiFiPcBWgZUEH_yNoAJ7oAUF6ZFiyRCsUstdo_nDUSC5rfB7q3YXUsthbm-0g9BRQR-j9fBjUst76_JRop1ao_KDUMVDgaUEUMW79fudy3o79RzWUiFiQSuWyMua9fYM9fVjraUEHsnDUMNOQ3-BrBYxgIowrMuhUstaHmFiyfV79fBjraUE3p1R6mFaHpJNbAHRHAPPbm-X9foxQMz2gcV7guYxgIHi6sUfHaFiy3-wPcupPmUEUjdibm-FQRo79fVDgaUEUMoFyOYpqcYF9RuXrZUDUSgBrSo2Qfdi6i-fHiUDUMVj9RosQR-BUstfHprXHpHRH_rhosJNopedHiFirpowQcYSUstig9BGqMzUZMggQj2fgAo6QJBkQfBoe7BpZ3O6HcoD692qu7gN3_-Sq1Y2Z_oHqBjO_32oP7NE3_uoqjOR_S2go1Oku3BHe72a3BxDHfUpZMWyH7NkysoGQJBkQfBoepzd_32z8jNEu3BHe72OysUOqB2_Z_g-qjg0_1PZQ1OW_9xHu7ON_1PVPJNJQcWg8_nO_BP-H1h1Z92ozJOE_BzuHJOJ3Mx6e7BpZ37N83V9gICiQAB03BxmgMV913Bvq1BRZ3BRq3UpZSCqHMhO3Aom83Ua1sVgHO-MyuPzq1Y2Z9P-q9P2ysoGrVtaQIuyH7N5ysomgMV913Bvq1BRZ3BRq3oyuMhsQMhMgJPcQMoNZ_g-QB-7gjxdrMzc63hBz7gkgJo-r7BX_M2iH72D3A-G83UpgI2q17jfZ32Cq1hAZS2gHsBN3ByN8B29zSBgHMP2_fB-H1Oku9u68jJa_1zS81OJypz6zJ7p_BoG6ZUDUMoxPcuSQR-N9RoOgfPBrRzwy9z7rMBiP9zBUs2QUsHRHAribmUO6_yibmUp6AnFUiFio_KFUiFioAnaoa-Pbm-ag3hBPMVXyfuwrfo5rM1i6snX6_JFHsHO6_rf6AnFHp1pbm-FrMBsguYiq3ei6sKOHmFigfYxQVY2gmUEHiFigMBXy3hwrMuDrMVXqOYxgIosQR-BUstNoAUXHAHNHAnFo_HOoprfHiFir9uBrSBwrMuDrMVXqOYpyfYagZUEHmddopyhopJOHsKNHpnRo_Jdwe?keywords=sony+a6400&management_type=1&dv=desktop&pub_unit=0&r=https%3A%2F%2Fwww.tokopedia.com%2Fsony%2Fsony-a6400-kit-16-50mm-sony-alpha-a6400-sony-alpha-6400-kit-silver-unit-only%3FextParam%3Divf%253Dfalse%2526whid%253D2211429%26src%3Dtopads&is_search=1&ob=23&page=1&t=desktop&pub_id=0&pub_domain=0&src=find"class="btn btn-primary" type="button">buy</a>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
  </body>
</html>
<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots2 = document.getElementById("dot2");
    var more2Text = document.getElementById("moretwo");
    var btn2Text = document.getElementById("Btntwo");
  
    if (dots2.style.display === "none") {
      dots2.style.display = "inline";
      btn2Text.innerHTML = "Read more"; 
      more2Text.style.display = "none";
    } else {
      dots2.style.display = "none";
      btn2Text.innerHTML = "Read less"; 
      more2Text.style.display = "inline";
    }
  } 
  
  
  function myFunction3() {
    var dots = document.getElementById("dot3");
    var moreText = document.getElementById("morethree");
    var btnText = document.getElementById("Btnthree");
  
    if (dot3.style.display === "none") {
      dot3.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dot3.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }


  } function myFunction4() {
    var dots = document.getElementById("dot4");
    var moreText = document.getElementById("morefour");
    var btnText = document.getElementById("Btnfour");
  
    if (dot4.style.display === "none") {
      dot4.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dot4.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  } function myFunction5() {
    var dots = document.getElementById("dot5");
    var moreText = document.getElementById("morefive");
    var btnText = document.getElementById("Btnfive");
  
    if (dot5.style.display === "none") {
      dot5.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dot5.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  } function myFunction6() {
    var dots = document.getElementById("dot6");
    var moreText = document.getElementById("moresix");
    var btnText = document.getElementById("Btnsix");
  
    if (dot6.style.display === "none") {
      dot6.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dot6.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>