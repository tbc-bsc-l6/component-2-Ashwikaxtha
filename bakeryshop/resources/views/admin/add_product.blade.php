<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        /* Page Background */
        body {
            background-color: #f8f9fa; /* Light background */
        }

        /* Page Title */
        h1 {
            color: #ffffff; /* White text for heading */
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px; /* Add some spacing below the title */
        }

        /* Centered Form Box */
        .div_design {
            margin: 0 auto;
            margin-top: 20px; /* Space below the title */
            padding: 30px;
            background-color: #ffffff; /* White background for the form */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 500px; /* Fixed width */
        }

        /* Input Labels */
        label {
            display: inline-block;
            width: 200px;
            font-size: 16px;
            color: #495057; /* Neutral dark color */
            font-weight: bold;
        }

        /* Input Fields */
        input[type='text'],
        input[type='number'],
        select,
        textarea {
            width: 100%;
            height: 45px;
            border-radius: 10px;
            border: 2px solid #ced4da;
            padding: 10px 15px;
            font-size: 14px;
            color: #495057;
            background-color: #f8f9fa; /* Light background for inputs */
            transition: all 0.3s ease;
        }

        /* Input Focus */
        input[type='text']:focus,
        input[type='number']:focus,
        select:focus,
        textarea:focus {
            border-color: #007bff; /* Blue focus border */
            outline: none;
            background-color: #ffffff; /* White background on focus */
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        /* Textarea Styling */
        textarea {
            height: 80px;
            resize: none;
        }

        /* Form Input Design */
        .input_design {
            padding: 15px 0;
        }

        /* File Input Styling */
        input[type='file'] {
            font-size: 16px;
        }

        /* Submit Button */
        .btn-success {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            background-color: #007bff; /* Blue button */
            color: white; /* White text */
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Select Dropdown */
        select {
            height: 45px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .div_design {
                width: 90%; /* Full width for smaller screens */
            }

            label {
                font-size: 14px;
                width: 100%;
                text-align: left;
                margin-bottom: 10px;
            }

            input,
            textarea,
            select {
                width: 100%;
            }

            .input_design {
                padding: 10px 0;
            }
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h1>Add Product</h1> <!-- Title remains at the top -->
          <div class="div_design">
            <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
              @csrf
              <div class="input_design">
                <label>Product Title</label>
                <input type="text" name="title" placeholder="Enter product title" required>
              </div>
              <div class="input_design"> 
                <label>Description</label>
                <textarea name="description" placeholder="Enter product description" required></textarea>
              </div>
              <div class="input_design">
                <label>Price</label>
                <input type="text" name="price" placeholder="Enter price">
              </div>
              <div class="input_design">
                <label>Quantity</label>
                <input type="number" name="quantity" placeholder="Enter quantity">
              </div>
              <div class="input_design">
                <label>Product Category</label>
                <select name="category" required>
                  <option>Select a Category</option>
                  @foreach($category as $category)
                  <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="input_design">
                <label>Product Image</label>
                <input type="file" name="image">
              </div>
              <div class="input_design">
                <input class="btn-success" type="submit" value="Add Product">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- JavaScript files -->
    <script src="{{ asset('admncss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admncss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admncss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admncss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admncss/js/front.js') }}"></script>
  </body>
</html>
