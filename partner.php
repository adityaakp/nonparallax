<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/19629e5fa7.js" crossorigin="anonymous"></script>
  <title>One page LegitCheck</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.html" class="logo-link">
            <img src="img/Desain tanpa judul (3).png" alt="Logo" class="logo">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- main -->
  <h2>Register As Partner</h2>

  <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
    <svg xmlns="http://www.w3.org/2000/svg">
      <symbol viewBox="0 0 24 24" id="expand-more">
        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
      </symbol>
      <symbol viewBox="0 0 24 24" id="close">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
      </symbol>
    </svg>
  </div>

  <div class="containerr">  
    <form id="contact" action="" method="post">
      <h3>Register</h3>
      <h4>fill in this form to register for LegitCheck</h4>
      <fieldset>
        <input placeholder="Company Email" type="email" tabindex="2" name="email" required>
      </fieldset>
      <fieldset>
        <input placeholder="Company Name" type="text" tabindex="1" name="companyName" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Company Address" type="text" tabindex="3" name="companyAdress" required>
      </fieldset>
      <fieldset>
        <input placeholder="Phone Number" type="tel" tabindex="4" name="phoneNumber" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Web Site starts with http://" type="url" tabindex="5" name="companyWebsite" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Details Brand" tabindex="6" name="detailbrandcompany" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
  </div>

  <!-- footer -->
  <footer class="text-center text-white" style="background-color: #000000">
    <div class="containers">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center pt-5">
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Products</a>
            </h6>
          </div>
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="FAQ.html" class="text-white">FAQ</a>
            </h6>
          </div>
        </div>
      </section>
      <hr class="my-5" />
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p style="color: white;">
              "Dalam setiap jejak produk, terkandung sebuah cerita autentisitas yang tak terbantahkan. Di LegitCheck, kami memahami betapa pentingnya keaslian bagi setiap merek dan konsumen. Dengan tekad yang kuat, kami berkomitmen untuk membangun fondasi yang kokoh, memastikan bahwa setiap produk yang melewati platform kami adalah bukti nyata dari integritas dan kepercayaan."
            </p>
          </div>
        </div>
      </section>
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class=""></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2024 Copyright:
      <a class="text-white" href="">LegitCheck</a>
    </div>
  </footer>

  <script>
    document.getElementById('contact').addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah pengiriman form secara default

      console.log('Form submitted'); 

      // Mengambil data dari form
      const email = document.querySelector('input[name="email"]').value;
      const companyName = document.querySelector('input[name="companyName"]').value;
      const companyAdress = document.querySelector('input[name="companyAdress"]').value;
      const phoneNumber = document.querySelector('input[name="phoneNumber"]').value;
      const companyWebsite = document.querySelector('input[name="companyWebsite"]').value;
      const detailbrandcompany = document.querySelector('textarea[name="detailbrandcompany"]').value;

      console.log('Data collected', { email, companyName, companyAdress, phoneNumber, companyWebsite, detailbrandcompany });

      // Membuat data dalam format x-www-form-urlencoded
      const data = email=${encodeURIComponent(email)}&companyName=${encodeURIComponent(companyName)}&companyAdress=${encodeURIComponent(companyAdress)}&phoneNumber=${encodeURIComponent(phoneNumber)}&companyWebsite=${encodeURIComponent(companyWebsite)}&detailbrandcompany=${encodeURIComponent(detailbrandcompany)};

      console.log('Sending data to API', data); 

      // Menggunakan XMLHttpRequest untuk mengirim permintaan ke proxy PHP
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'proxy.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
          console.log('Success:', JSON.parse(xhr.responseText));
          alert('Registration successful!');
        } else {
          console.error('Error:', xhr.statusText);
          alert('Registration failed!');
        }
      };

      xhr.onerror = function() {
        console.error('Error:', xhr.statusText);
        alert('Registration failed!');
      };

      xhr.send(data);
    });
  </script>
</body>
</html>