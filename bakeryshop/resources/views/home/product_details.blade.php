<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    :root {
      --primary-color: #42200b;
      --secondary-color: #ffc135;
      --text-dark: #333;
      --white: #ffffff;
    }

    /* General Styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .hero_area {
      background-color: var(--white);
    }

    /* Logo Styling */
    .logo-img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 10px;
    }

    /* Centered Content */
    .div_center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    /* Box Styling */
    .box {
      background-color: var(--white);
      border-radius: 15px; /* Add smooth curves */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effects */
      overflow: hidden;
      padding: 20px;
    }

    .box:hover {
      transform: translateY(-10px); /* Slight lift on hover */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
    }

    /* Detail Box Styling */
    .detail-box {
      padding: 15px;
      text-align: center; /* Center-align the text */
    }

    .detail-box h6 {
      font-size: 1.5rem; /* Slightly bigger font for the title */
      font-weight: bold;
      color: var(--text-dark);
      margin-bottom: 10px;
    }

    .detail-box h6 span {
      color: var(--primary-color);
    }

    .detail-box p {
      font-size: 1.2rem; /* Increase description size */
      color: var(--text-dark);
      line-height: 1.6; /* Add line height for readability */
      text-align: center; /* Center-align the description */
    }

    /* Heading Styling */
    .heading_container h2 {
      font-size: 2.5rem;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 20px;
      text-transform: uppercase;
      text-align: center;
    }

    .heading_container h2::after {
      content: "";
      width: 80px;
      height: 4px;
      background-color: var(--secondary-color);
      display: block;
      margin: 10px auto;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>

  <!-- Product Details Start -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <!-- Product Image -->
            <div class="div_center">
              <img width="400" src="/products/{{$data->image}}" alt="">
            </div>
            <!-- Product Title and Price -->
            <div class="detail-box">
              <h6>{{$data->title}}</h6>
              <h6>Price
                <span>Rs{{$data->price}}</span>
              </h6>
            </div>
            <!-- Product Category and Quantity -->
            <div class="detail-box">
              <h6>Category: {{$data->category}}</h6>
              <h6>Available Quantity
                <span>{{$data->quantity}}</span>
              </h6>
            </div>
            <!-- Product Description -->
            <div class="detail-box">
              <p>{{$data->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Product Details End -->

  <!-- Footer Section -->
  @include('home.footer')
</body>

</html>
