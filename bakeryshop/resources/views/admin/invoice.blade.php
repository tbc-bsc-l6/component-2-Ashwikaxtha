<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"> <!-- Character encoding -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
  <title>Heavenly Bites - Order Details</title>

  <style>
    /* General Styling */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fffaf3; /* Light cream background */
      margin: 0;
      padding: 0;
    }

    /* Header Styling */
    .header {
      background-color: #ff66a3; /* Bright pink */
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 2.5rem;
      font-weight: bold;
      text-transform: uppercase;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    .header span {
      font-family: 'Courier New', Courier, monospace;
      font-size: 3rem;
    }

    /* Content Box Styling */
    .content-box {
      background-color: white;
      border: 2px solid #ff66a3; /* Pink border */
      border-radius: 20px;
      padding: 30px;
      width: 80%;
      max-width: 600px;
      margin: 30px auto;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
    }

    h2, h3 {
      margin: 15px 0;
      color: #343a40; /* Neutral dark text */
    }

    h2 {
      font-size: 1.8rem;
      font-weight: bold;
    }

    h3 {
      font-size: 1.5rem;
    }

    img {
      display: block;
      margin: 20px auto;
      border-radius: 10px; /* Rounded corners for the image */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    /* Footer Styling */
    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 1.2rem;
      color: #ff66a3; /* Pink text */
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Header Section -->
  <div class="header">
    <span>Heavenly Bites</span>
  </div>

  <!-- Content Section -->
  <div class="content-box">
    <h3>Customer Name: {{$data->name}}</h3>
    <h3>Customer Address: {{$data->rec_address}}</h3>
    <h3>Phone: {{$data->phone}}</h3>
    <h2>Product Title: {{$data->product->title}}</h2>
    <h2>Price: {{$data->product->price}}</h2>
    <img height="250" width="300" src="products/{{$data->product->image}}" alt="Product Image">
  </div>

  <!-- Footer Section -->
  <div class="footer">
    Thank you for shopping with us!
  </div>
</body>

</html>
