<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admncss/img/anya.jpeg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Ashwika Shrestha</h1>
            <p>Admin</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add Product</a></li>
                    <li><a href="{{url('view_product')}}">View Product</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Orders</a></li>
                
        </ul>
      </nav>
      <style>
        .avatar {
    width: 100px; /* Adjust the size of the circle */
    height: 100px;
    border-radius: 50%; /* Perfect circle */
    overflow: hidden; /* Ensures the image stays within the circle */
    display: flex;
    justify-content: center; /* Horizontally centers the image */
    align-items: center; /* Vertically centers the image */
    background-color: #f0f0f0; /* Optional: Background color in case of no image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Shadow effect */
    margin: auto; /* Center the avatar container */
  }

  .avatar img {
    width: 100%; /* Ensures the image covers the circle */
    height: 100%; /* Ensures the image covers the circle */
    object-fit: cover; /* Keeps the image aspect ratio and fills the circle */
  }

      </style>
      <!-- Sidebar Navigation end-->