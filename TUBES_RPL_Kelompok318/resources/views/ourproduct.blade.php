<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="events-id" content="uRXCrJFKxYJdmoD763X7xZNa5dq1S1j5Ulk1u7Rn" />
  <title>Our Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
  <style>

    /* Custom CSS untuk menambahkan margin di atas dan bawah pada jumbotron */
    .jumbotron {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .container {
      width: 100%;
      margin: 0 auto;
      padding: 20px;
    }

    /* Custom CSS untuk memberikan margin atas dan bawah pada bagian Nutritions */
    .mb-nutritions {
      margin-top: 20px; /* Menambahkan margin atas */
      margin-bottom: 20px; /* Menambahkan margin bawah */
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
    <x-navbar/>

    <!-- Modal -->
    <x-modal />

    <!-- Jumbotron with Our Product title -->
<div class="jumbotron text-center">
  <h1 class="display-4" style="font-weight: bold; color: #FEA116;">Our Product</h1>
</div>

<!-- Search Engine -->
<div class="container mb-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="input-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Search for products...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button" onclick="searchProducts()" style="background-color: #FEA116; border-color: #FEA116;">Search</button>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<section class="container mb-ourproducts rounded" style="background-color: #0F172B">
  <!-- Konten lainnya -->
  <div class="row" id="productCards">

  <section class="container mb-ourproducts rounded" style="background-color: #0F172B"> <!-- Menambahkan kelas rounded untuk membuat container melengkung -->
      <div class="row justify-content-center mb-4"> <!-- Menambahkan kelas justify-content-center dan mb-4 untuk memberikan margin bawah -->
        <div class="col text-center">
          <h1 class="display-4 mt-4" style="color: #FEA116; font-weight: bold;">Weight Loss Program</h1> <!-- Menambahkan kelas mt-4 untuk memberikan margin atas -->
        </div>
      </div>

      <!-- Content -->
    <div class="container">
      <div class="row">
        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
          <img src="{{ asset('img/1.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Asado Chicken Breasts with Sautéed Garlic Spinach</h5>
              <p class="card-text"> A delightfully pan-seared chicken breast served on garlicky sauteed spinach.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/2.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">White Balsamic Vinaigrette — Living Lou</h5>
              <p class="card-text">This is a light and refreshing salad dressing made with honey, Italian seasoning and Dijon.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/3.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Salmon Avocado Salad</h5><br>
              <p class="card-text">This salmon avocado salad is layered with the juicy salmon and the freshest ingredients.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/4.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Grilled Garlic and Herb Chicken and Veggies</h5>
              <p class="card-text">This Garlic and Herb Grilled Chicken and Veggie – quick, easy, delicious and low-carb!</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->
      </div>
      <div class="row">
        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/5.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Salmon and Avocado Rice Bowl with Soy and Lemon</h5>
              <p class="card-text">This healthy salmon and avocado rice bowl is packed with superfoods and makes a nutritious, energising lunch.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/6.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Sweet Chili Salmon & Broccoli Quinoa Bowl</h5>
              <p class="card-text">Salmon is baked in a sweet chili sauce, then served over quinoa with broccoli and snap peas!.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/7.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Teriyaki Salmon Bowls</h5><br>
              <p class="card-text">This teriyaki salmon dish comes together quickly for a healthy and delicious weeknight meal.

              
              </p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->

        <!-- Cards -->
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="{{ asset('img/8.png') }}" class="card-img-top" alt="SOLD OUT">
            <div class="card-body">
              <h5 class="card-title">Grilled Chicken and Vegetables</h5>
              <p class="card-text">Easy grilled chicken breasts and vegetables are the perfect healthy dinner.</p>
              
            </div>
          </div>
        </div>
        <!-- Tambahkan card lainnya di sini -->
      </div>
    </div><br>

    </section>


    <!-- Nutritions section --> <br><br><br><br>
    <section class="container mb-nutritions rounded" style="background-color: #0F172B"> <!-- Menambahkan kelas rounded untuk membuat container melengkung -->
        <div class="row justify-content-center mb-4"> <!-- Menambahkan kelas justify-content-center dan mb-4 untuk memberikan margin bawah -->
          <div class="col text-center">
            <h1 class="display-4 mt-4" style="color: #FEA116; font-weight: bold;">Nutritions</h1> <!-- Menambahkan kelas mt-4 untuk memberikan margin atas -->
          </div>
        </div>
      
      
      <!-- Cards Nutritions -->
      <div class="container">
        <div class="row justify-content-center"> <!-- Menambahkan kelas justify-content-center -->
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/salmon.jpeg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Salmon</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">57% Vitamin B3<br>34% Protein<br>23% Vitamin A</p> <!-- Mengubah warna tulisan menjadi putih -->
            </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Chicken.png') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Chicken</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">70% Vitamin B3<br>41% Vitamin A<br>38% Total Fat</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Broccoli.jpeg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Broccoli</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">68% Vitamin C<br>23% Vitamin A<br>11% Calcium</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Spinach.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Spinach</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">46% Vitamin C<br>17% Copper<br>16% Iron</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
      
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Avocado.jpeg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Avocado</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">25% Copper<br>15% Vitamin C<br>10% Total Fat</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Cucumber.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Cucumber</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">14% Phosphor<br>4% Iron<br>3% Calcium</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Carrot.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Carrot</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">20% Vitamin C<br>11% Phosphor<br>8% Copper</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Lettuce.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Lettuce</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">13% Vitamin B2<br>9% Vitamin C<br>6% Dietary fiber</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Honey.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Honey</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">82.4g Carbohydrate<br>14% Energy<br>5% Copper</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Lemon.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Lemon</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">56% Vitamin C<br>13% Copper<br>12% Vitamin B2</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Paprika.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Paprika</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">117% Dietary fiber<br>96% Iron<br>13% Protein</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
          
          <!-- Cards -->
          <div class="col-lg-2 mb-4">
            <div class="card" style="background-color: #262D3F;"> <!-- Mengubah warna latar belakang card -->
              <img src="{{ asset('img/Peas.jpg') }}" class="card-img-top" alt="SOLD OUT">
              <div class="card-body text-center"> <!-- Menambahkan kelas text-center untuk memposisikan teks ke tengah -->
                <h5 class="card-title" style="color: orange;">Peas</h5> <!-- Mengubah warna tulisan menjadi oranye -->
                <p class="card-text" style="color: white;">43% Phosphor<br>38% Copper<br>6% Calcium</p> <!-- Mengubah warna tulisan menjadi putih -->
              </div>
            </div>
          </div>
          <!-- Tambahkan card lainnya di sini -->
        </div><br>
      </div>
  </div>
    </section>
    <script>
  const products = [
    {
      name: "Asado Chicken Breasts with Sautéed Garlic Spinach",
      image: "{{ asset('img/1.png') }}",
      description: "A delightfully pan-seared chicken breast served on garlicky sauteed spinach."
    },
    {
      name: "White Balsamic Vinaigrette — Living Lou",
      image: "{{ asset('img/2.png') }}",
      description: "This is a light and refreshing salad dressing made with honey, Italian seasoning and Dijon."
    },
    {
      name: "Salmon Avocado Salad",
      image: "{{ asset('img/3.png') }}",
      description: "This salmon avocado salad is layered with the juicy salmon and the freshest ingredients."
    },
    {
      name: "Grilled Garlic and Herb Chicken and Veggies",
      image: "{{ asset('img/4.png') }}",
      description: "This Garlic and Herb Grilled Chicken and Veggie – quick, easy, delicious and low-carb!"
    },
    {
      name: "Salmon and Avocado Rice Bowl with Soy and Lemon",
      image: "{{ asset('img/5.png') }}",
      description: "This healthy salmon and avocado rice bowl is packed with superfoods and makes a nutritious, energising lunch."
    },
    {
      name: "Sweet Chili Salmon & Broccoli Quinoa Bowl",
      image: "{{ asset('img/6.png') }}",
      description: "Salmon is baked in a sweet chili sauce, then served over quinoa with broccoli and snap peas!."
    },
    {
      name: "Teriyaki Salmon Bowls",
      image: "{{ asset('img/7.png') }}",
      description: "This teriyaki salmon dish comes together quickly for a healthy and delicious weeknight meal.."
    },
    {
      name: "Grilled Chicken and Vegetables",
      image: "{{ asset('img/8.png') }}",
      description: "Easy grilled chicken breasts and vegetables are the perfect healthy dinner."
    }
  ];

  function searchProducts() {
    const searchTerm = document.getElementById("searchInput").value.toLowerCase();
    const productCards = document.getElementById("productCards");
    productCards.innerHTML = ""; // Clear existing cards

    products.forEach(product => {
      if (product.name.toLowerCase().includes(searchTerm)) {
        const card = document.createElement("div");
        card.classList.add("col-lg-3", "mb-4");
        card.innerHTML = `
          <div class="card">
            <img src="${product.image}" class="card-img-top" alt="${product.name}">
            <div class="card-body">
              <h5 class="card-title">${product.name}</h5>
              <p class="card-text">${product.description}</p>
            </div>
          </div>
        `;
        productCards.appendChild(card);
      }
    });
  }
</script>

    <br><br><br><br>
    <!-- Footer -->
    <x-footer style="background-color: #262D3F;"></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://yellowfitkitchen.com/frontend/js/bootstrap.min.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/theme.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/tambahan.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/vendors/js/jquery/jquery.min.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/owl.carousel.min.js"></script>
</section>

<script>
<section class="container mb-ourproducts rounded" style="background-color: #0F172B">
  <div class="row" id="productCards">
    <!-- Konten lainnya -->
  </div>
</section>

    
  </body>
</html>
