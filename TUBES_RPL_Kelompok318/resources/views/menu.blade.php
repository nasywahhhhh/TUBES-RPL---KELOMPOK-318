<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
      /* Custom CSS untuk memberikan margin bawah pada navbar */
      .mb-navbar {
        margin-bottom: 20px;
      }

      /* Custom CSS untuk menambahkan margin di atas dan bawah pada jumbotron */
      .jumbotron {
        margin-top: 20px;
        margin-bottom: 20px;
      }
      .jumbotron {
        margin-top: 100px; /* Adjust this value as needed */
      }
      body {
        background-color: #262D3F;
      }
    </style>
  </head>
  
  <body>
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Modal -->
    <x-modal />

    <!-- Jumbotron with Our Menu title -->
    <div class="jumbotron text-center">
      <h1 class="display-4" style="font-weight: bold; color: #FEA116;">Our Menu</h1>
      <h5 class="display-4" style="font-weight: bold; font-size: 14px; color: #FFFFFF;">Menu yang disediakan Feater Catering rendah kalori, rendah lemak dan tinggi protein. Rasanya juga tidak hambar dan bervariasi yang bisa buat diet kamu menyenangkan</h5>
    </div><br>

      <!-- Cards Nutritions -->
      <div class="container">
        <div class="row justify-content-center"> <!-- Menambahkan kelas justify-content-center -->
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/90sotobetawi.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Soto Betawi Authentic</h5> <!-- Mengubah warna tulisan menjadi oranye -->
            </div>
            </div>
          </div>
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/35lontongsayur.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Lontong Kari Ayam</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/37nasibali.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Nasi Ayam Bali Special</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/32nasiudukkomplit.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Nasi Uduk Komplit</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/13Rendangwellington.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Rendang Wellington</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/28Macdietayam.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Nasi Merah Ayam Krispi</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/12ChikenKatsuSando.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Vegetable Sandwich</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
          <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/41Spaghettiayamgeprek.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Spaghetti Ayam Geprek</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/74Salmonredthai.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Salmon Red Thailand</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/56Breadpizza.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Bread Pizza Italiano</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/43Cheesychickenmushroom.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Cheesy Chicken Mushroom</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #000000;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/11healthyjapanesesushiroll.jpg') }}" class="card-img-top" alt="READY STOCK">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Sushi Roll With Katsu</h5> <!-- Mengubah warna tulisan menjadi oranye -->
              </div>
            </div>
          </div>
        </div><br>
      </div>
    </section>

    <br><br><br><br>
    <!-- Footer -->
    <x-footer style="background-color: #0F172B;"></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
