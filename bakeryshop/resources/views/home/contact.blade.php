<section class="contact_section">
  <style>
    .contact_section {
      background-color: #f8f9fa;
      padding: 50px 0;
      font-family: 'Arial', sans-serif;
    }

    .contact_section .heading_container h2 {
      text-align: center;
      font-size: 2.5rem;
      color: #333;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .contact_section .container-bg {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 20px;
    }

    .contact_section .map_container,
    .contact_section form {
      flex: 1; /* Equal width for both map and form */
      max-width: 500px; /* Restrict maximum width */
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact_section .map_container iframe {
      width: 100%;
      height: 500px;
      border: 20px;
    }

    .contact_section form {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact_section form input,
    .contact_section form .message-box {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
      color: #333;
      transition: border-color 0.3s ease;
    }

    .contact_section form input:focus,
    .contact_section form .message-box:focus {
      border-color: #ff6f61;
      outline: none;
    }

    .contact_section form button {
      background-color: #ff6f61;
      color: #fff;
      border: none;
      padding: 12px 25px;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact_section form button:hover {
      background-color: #e85750;
    }

    @media (max-width: 768px) {
      .contact_section .container-bg {
        flex-direction: column;
        align-items: center;
      }

      .contact_section .map_container,
      .contact_section form {
        max-width: 100%;
      }
    }
  </style>

  <div class="container px-0">
    <div class="heading_container">
      <h2>Contact Us</h2>
    </div>
  </div>
  <div class="container container-bg">
    <div class="map_container">
      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Kathmandu+Nepal" 
              allowfullscreen></iframe>
    </div>
    <form action="#">
      <div>
        <input type="text" placeholder="Your Name" />
      </div>
      <div>
        <input type="email" placeholder="Your Email" />
      </div>
      <div>
        <input type="text" placeholder="Your Phone" />
      </div>
      <div>
        <textarea class="message-box" rows="5" placeholder="Your Message"></textarea>
      </div>
      <div class="d-flex">
        <button type="submit">
          SEND
        </button>
      </div>
    </form>
  </div>
</section>
