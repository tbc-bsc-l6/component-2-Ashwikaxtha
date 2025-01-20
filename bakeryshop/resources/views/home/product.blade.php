<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="products/{{$products->image}}" alt="">
          </div>
          <div class="detail-box">
            <h6>{{$products->title}}</h6>
            <h6>Price
              <span>Rs{{$products->price}}</span>
            </h6>
          </div>
          <div style="padding:15px; text-align: center;">
            <a class="btn btn-pink" href="{{url('product_details',$products->id)}}">Details</a>
            <a class="btn btn-brown" href="{{url('add_cart',$products->id)}}">Add to cart</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<style>
.shop_section {
  padding: 60px 0; /* Add padding for better spacing */
  background-color: #f9f9f9; /* Light background color */
}

.heading_container {
  margin-bottom: 30px; /* Space below the heading */
}

.heading_container h2 {
  font-size: 2.5rem;
  font-weight: bold;
  color: #42200b; /* Match the theme's primary color */
  text-transform: uppercase;
  margin-bottom: 20px;
  position: relative;
}

.heading_container h2::after {
  content: "";
  width: 60px;
  height: 4px;
  background-color: #ffc135; /* Accent color for a stylish underline */
  display: block;
  margin: 10px auto 0 auto;
}

.box {
  background-color: #ffffff; /* White background for the product box */
  border-radius: 15px; /* Smooth curves on the box */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effect */
  overflow: hidden; /* Ensure content stays inside the curved box */
}

.box:hover {
  transform: translateY(-10px); /* Slight lift effect on hover */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhance shadow on hover */
}

.img-box img {
  width: 100%; /* Make the image responsive */
  height: 200px;
  object-fit: cover; /* Ensure the image covers the box area */
  border-top-left-radius: 15px; /* Match the box's top curves */
  border-top-right-radius: 15px;
}

.detail-box {
  padding: 15px;
  text-align: center;
}

.detail-box h6 {
  font-size: 1.2rem;
  color: #333; /* Darker color for text */
  margin-bottom: 10px;
}

.detail-box h6 span {
  color: #df1c1c; /* Price in red */
  font-weight: bold;
}

/* Pink button for Details */
.btn-pink {
  background-color:rgb(243, 147, 185); /* Pink color */
  color: white; /* White text */
  border-radius: 25px;
  padding: 10px 20px;
  font-size: 0.9rem;
  font-weight: bold;
  margin-right: 10px; /* Add margin between buttons */
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-pink:hover {
  background-color:rgb(237, 131, 175); /* Darker pink on hover */
  transform: scale(1.05); /* Slight zoom effect */
}

/* Brown button for Add to Cart */
.btn-brown {
  background-color:rgb(105, 54, 17); /* Brown color */
  color: white !important; /* White text */
  border-radius: 25px;
  padding: 10px 20px;
  font-size: 0.9rem;
  font-weight: bold;
  margin-top:10px;
  
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-brown:hover {
  background-color:rgb(108, 52, 14); /* Darker brown on hover */
  transform: scale(1.05); /* Slight zoom effect */
}
</style>
