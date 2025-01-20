<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        /* Centering and Box Styling */
        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        .form_box {
            width: 500px;
            padding: 30px;
            border-radius: 15px; /* Rounded corners */
            background-color: #ffffff; /* White background */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
            border: 3px solid #ff66a3; /* Pink border */
        }

        /* Title Styling */
        h1 {
            color: #ff66a3; /* Bright pink */
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Input Field Styling */
        input[type='text'] {
            width: 100%; /* Full width */
            height: 50px;
            border-radius: 10px;
            border: 2px solid #ced4da; /* Light gray border */
            padding: 10px 15px;
            font-size: 16px;
            color: #495057; /* Neutral dark text */
            background-color: #f8f9fa; /* Light background */
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        input[type='text']:focus {
            border-color: #ff66a3; /* Pink focus border */
            outline: none;
            background-color: #ffffff; /* White background on focus */
            box-shadow: 0 0 8px rgba(255, 102, 163, 0.3); /* Glow effect */
        }

        /* Button Styling */
        .btn-primary {
            width: 100%; /* Full width */
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            background-color: #007bff; /* Blue button */
            border: none;
            color: white; /* White text */
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
  </head>
  <body>
    
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Update Category</h1>
                <div class="div_design">
                    <!-- Form Box -->
                    <div class="form_box">
                        <form action="{{url('update_category', $data->id)}}" method="post">
                            @csrf
                            <input type="text" name="category" value="{{$data->category_name}}" placeholder="Enter category name">
                            <input class="btn btn-primary" type="submit" value="Update Category">
                        </form>
                    </div>
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
