<?php

 require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>                                                      
<html>
  <head>
   <title>Rekomendasi Kamera</title>
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
        <a id="menu1" href="login-new.php" id="login" role="button" >
          <b>LOGIN</b> 
         </a>
      </div>
    </nav>
    <div id="main1info">
		
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

	   <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		   <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="image/carousel/wildlife.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"id="font">
            <h5>Wild Life Fotografi</h5>
            <p>Genre fotografi yang objek utamanya adalah hewan atau satwa liar yang berada di habitat alami mereka</p>
          </div>
        </div>
		<div class="carousel-item">
		  <img src="image/carousel/wedding.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"id="font">
            <h5>Wedding Fotografi</h5>
           <p>Genre fotografi yang objek utamanya mengabadikan momen atau event spesial pada saat pernikahan</p>
          </div>
        </div>
		<div class="carousel-item">
		  <img src="image/carousel/street.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"id="font">
            <h5>Street Fotografi</h5>
            <p>Genre fotografi yang umumnya memuat karya foto yang diambil diruang publik yang terbuka dan bersifat candid (tanpa arahan) </p>
          </div>
        </div>
		  <div class="carousel-item">
		  <img src="image/carousel/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"id="font">
            <h5>Product Fotografi</h5>
            <p>Genre fotografi yang objek utamanya adalah produk atau barang</p>
          </div>
        </div>
        <div class="carousel-item">
            <img src="image/carousel/portrait.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"id="font">
                <h5>Portrait Fotografi</h5>
                <p>Genre fotografi yang objek utamanya adalah manusia</p>
              </div>
            </div>
          <div class="carousel-item">
            <img src="image/carousel/Landscape-photography-example.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"id="font">
                <h5>Landscape Fotografi</h5>
                <p>Genre fotografi yang memuat karya foto yang diambil di alam bebas</p>
              </div>
            </div>
          <div class="carousel-item">
            <img src="image/carousel/food-photography-101.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"id="font">
                <h5>Food Fotografi</h5>
                <p>Genre fotografi yang objek utamanya adalah makanan</p>
              </div> 
            </div>
          <div class="carousel-item">
            <img src="image/carousel/fashion-photography1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"id="font">
                <h5>Fashion Fotografi</h5>
                <p>Genre fotografi yang objek utamanya adalah pakaian dan barang-barang fashion</p>
              </div>
          </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
		
	</div>
	</div>
                
                <div id="main1-content">
                    <a style="font-size: 510%; padding-left: 0%; padding-bottom: 0; padding-top: 5%;"><b>GENRE</b></a>
                    <div id="textcontent" style="padding: 5%;padding-top: 0%;">
                      <div id="main1-content">
                        <div id="textcontent">
                       
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5  id="genrecap" class="card-title"><B>WILD LIFE FOTOGRAFI</B></h5>
                      <p class="card-text">	
                        Wildlife photography atau fotografi satwa liar adalah genre foto yang objek utamanya adalah hewan atau satwa liar yang berada di habitat alami mereka. Selain kesabaran dalam menunggu momen serta kecekatan, seorang fotografer wildlife juga harus memiliki keberanian terutama saat akan memfoto hewan-hewan buas yang berbahaya bagi manusia.</p>
                    </div>
                 </div> 
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/Best-Surrey-wedding-photographer_0215.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5  id="genrecap" class="card-title"><b>WEDDING FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Sesuai dengan namanya, wedding photography adalah genre fotografi yang objek utamanya mengabadikan momen atau event spesial pada saat pernikahan. Keahlian dalam menangkap momen-momen sakral dan romantis, serta kemampuan mengarahkan gaya bagi pasangan yang akan difoto menjadi skill penting yang harus dimiliki oleh para wedding photographer.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/architecture-buildings-city-548084.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>STREET FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Street photography atau fotografi jalanan adalah genre fotografi yang umumnya memuat karya foto yang diambil diruang publik yang terbuka dan bersifat candid (tanpa arahan). Karakteristik dari street photography adalah mengambil objek foto secara real time atau apa adanya. Objek dalam street photography dapat berupa manusia, tempat, maupun peristiwa-peristiwa spontan dalam ruang publik.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/20170103125558_IMG_9901 (2).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>PORTRAIT FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Portrait photography atau fotografi potret adalah genre fotografi yang objek utamanya adalah manusia. Foto-foto portrait kebanyakan menampilkan ekspresi atau suasana hati manusia. Fokus utama pada objek foto portrait adalah wajah manusia, oleh karena itu biasanya foto ini diambil dengan shot jarak dekat atau close up.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/wp3305861.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>LANDSCAPE FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Landscape photography atau fotografi lanskap adalah genre fotografi yang memuat karya foto yang diambil di alam bebas. Pemandangan alam, tanaman, dan kehidupan alam liar menjadi objek utama dalam genre ini. Keindahan alam menjadi fokus utama dalam fotografi lanskap.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/appetizer-bowl-delicious-1640772.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>FOOD FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Food photography atau fotografi makanan adalah genre fotografi yang objek utamanya adalah makanan. Food photography bertujuan untuk membangkitkan selera makan dan menarik konsumen untuk membeli makanan dalam objek foto tersebut. Teknik plating, pencahayaan, sampai penggunaan makanan artifisial sering dilakukan dalam genre ini guna menghasilkan foto makanan yang estetis dan menarik.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/6.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>FASHION FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Fashion photography atau fotografi fashion adalah genre fotografi yang objek utamanya adalah pakaian dan barang-barang fashion. Fashion photography dibantu oleh seorang model. Selain keahlian dalam menangkap gaya dan ekspresi wajah sang model, fashion photographer juga dituntut bisa mengarahkan pose model dengan baik.</p>
                    </div>
                 </div>
                 <div class="card mb-3">
                    <img class="card-img-top" src="image/imgcap/dsc0047-crop.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 id="genrecap" class="card-title"><b>HUMAN INTEREST FOTOGRAFI</b></h5>
                      <p class="card-text">	
                        Human interest photography adalah jenis fotografi dengan obyek utama manusia melalui wajah atau pose tubuh dan menggambarkan suasana hati, biasanya tujuannya untuk membangkitkan simpati dari orang yang melihatnya.</p>
                    </div>
                 </div>
                </div>
            </div>
          </div>
       </div>            
</body>
</html>

