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
            width: 600px;
            padding: 30px;
            border-radius: 15px; /* Rounded corners */
            background-color: #ffffff; /* White background */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
            border: 3px solid #ff66a3; /* Pink border */
        }

        /* Title Styling */
        h2 {
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Label Styling */
        label {
            display: inline-block;
            width: 200px;
            font-size: 16px;
            color: #495057; /* Neutral dark text */
            font-weight: bold;
            padding-bottom: 10px;
        }

        /* Input Field Styling */
        input[type='text'],
        input[type='number'],
        select,
        textarea {
            width: 100%; /* Full width */
            height: 45px;
            border-radius: 10px;
            border: 2px solid #ced4da; /* Light gray border */
            padding: 10px 15px;
            font-size: 16px;
            color: #495057;
            background-color: #f8f9fa; /* Light background */
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        textarea {
            height: 80px;
            resize: none;
        }

        input[type='text']:focus,
        input[type='number']:focus,
        select:focus,
        textarea:focus {
            border-color: #ff66a3; /* Pink focus border */
            outline: none;
            background-color: #ffffff; /* White background on focus */
            box-shadow: 0 0 8px rgba(255, 102, 163, 0.3); /* Glow effect */
        }

        /* Button Styling */
        .btn-success {
            width: 100%; /* Full width */
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            background-color: #28a745; /* Green button */
            border: none;
            color: white; /* White text */
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green on hover */
        }

        /* Image Styling */
        img {
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            width: 150px;
            height: auto;
        }
    </style>
  </head>
  <body>
    
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2>Update Product</h2>
                <div class="div_design">
                    <!-- Form Box -->
                    <div class="form_box">
                        <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}">
                            </div>

                            <div>
                                <label>Description</label>
                                <textarea name="description">{{$data->description}}</textarea>
                            </div>

                            <div>
                                <label>Price</label>
                                <input type="text" name="price" value="{{$data->price}}">
                            </div>

                            <div>
                                <label>Quantity</label>
                                <input type="number" name="quantity" value="{{$data->quantity}}">
                            </div>

                            <div>
                                <label>Category</label>
                                <select name="category">
                                    <option value="{{$data->category}}">{{$data->category}}</option>
                                    @foreach($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label>Current Image</label>
                                <img src="/products/{{$data->image}}" alt="Current Product Image">
                            </div>

                            <div>
                                <label>New Image</label>
                                <input type="file" name="image">
                            </div>

                            <div>
                                <input class="btn btn-success" type="submit" value="Update Product">
                            </div>
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
