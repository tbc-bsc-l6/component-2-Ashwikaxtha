<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        /* General Container Styling */
        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 30px;
        }

        /* Table Styling */
        .table_design {
            border-collapse: collapse;
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* White background for the table */
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #800000; 
            color: #ffffff; /* White text */
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border-bottom: 1px solid #ffe4ed; /* Light pink border */
            text-align: center;
            font-size: 16px;
            color: #495057; /* Neutral dark text */
            padding: 10px;
        }

        tr:hover {
            background-color: #ffe4ed; /* Light pink hover effect */
        }

        /* Input and Button Styling */
        input[type='search'] {
            width: 400px;
            height: 40px;
            border-radius: 20px;
            border: 2px solid #800000; 
            padding: 10px 15px;
            font-size: 16px;
            color: #495057;
            background-color: #fff5f8; /* Light pink background */
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        input[type='search']:focus {
            outline: none;
            border-color: #800000; 
            background-color: #ffffff; /* White background on focus */
            box-shadow: 0 0 8px rgba(255, 102, 163, 0.3);
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 20px;
            background-color: #007bff; /* Blue button */
            border: none;
            color: white;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue hover */
        }

        /* Button Styling */
        .btn-success {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 15px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #cc0000;
        }

        /* Image Styling */
        img {
            border-radius: 10px; /* Rounded corners for images */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        /* Pagination Styling */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            color: #007bff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            background-color: #f1f1f1;
            transition: all 0.3s ease;
        }

        .pagination .page-link:hover {
            background-color: #007bff;
            color: white;
        }

        .pagination .active .page-link {
            background-color: #007bff;
            color: white;
        }
    </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <!-- Centered Search Form -->
                <div class="div_design">
                    <form action="{{url('product_search')}}" method="get" style="display: flex; justify-content: center; align-items: center;">
                        @csrf
                        <input type="search" name="search" placeholder="Search Products...">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </form>
                </div>

                <!-- Table Section -->
                <div class="div_design">
                    <table class="table_design">
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($product as $products)
                        <tr>
                            <td>{{$products->title}}</td>
                            <td>{!! Str::words($products->description, 15) !!}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->quantity}}</td>
                            <td>
                                <img height="120" width="120" src="products/{{$products->image}}">
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ url('update_product', $products->id) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product', $products->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <!-- Pagination -->
                <div class="div_design">
                    {{$product->onEachSide(1)->links()}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Confirmation script -->
    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
  </body>
</html>
