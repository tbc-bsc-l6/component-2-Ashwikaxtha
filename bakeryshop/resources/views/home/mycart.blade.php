<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_design {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    table {
      border-collapse: collapse;
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
      text-align: center;
      background-color: #f9f9f9;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    th,
    td {
      padding: 15px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #343a40;
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 14px;
    }

    td {
      font-size: 14px;
      color: #555;
    }

    td img {
      border-radius: 5px;
    }

    .cart_value {
      text-align: center;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ddd;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      max-width: 400px;
    }

    .cart_value h3 {
      font-size: 20px;
      color: #343a40;
      font-weight: bold;
      margin: 0;
    }

    .cart_value h3 span {
      color: #e74c3c;
    }

    .order_design{
      padding-right:100px;
      margin-top:-50px;
    }

    label{
      display:inline-block;
      width:150px;
    }

    .div_gap{
      padding:20px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  <div class="div_design">
    <div class="order_design">
      <form action="{{url('confirm_order')}}" method="Post">
        @csrf
        <div class="div_gap">
          <label>Receiver Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="div_gap">
          <label>Receiver Address</label>
          <textarea name="address">{{Auth::user()->address}}</textarea>
        </div>
        <div class="div_gap">
          <label>Receiver Phone</label>
          <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>
        <div class="div_gap">
          
          <input class="btn btn-primary" type="submit" value="Place Order">
        </div>
      
      </form>
    </div>
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Remove</th>
      </tr>
      <?php
      $value=0;
      ?>
      @foreach($cart as $cart)
      <tr>
        <td>{{ $cart->product->title ?? 'Product Not Found' }}</td>
        <td>{{ $cart->product->price ?? 'N/A' }}</td>
        <td>
          @if(isset($cart->product->image))
          <img width="150" src="/products/{{ $cart->product->image }}">
          @else
          <p>No Image Available</p>
          @endif
        </td>
        <td>
          <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remove</a>
        </td>
      </tr>
      <?php
      $value= $value + $cart->product->price;
      ?>
      @endforeach
    </table>
  </div>
  <div class="cart_value">
    <h3>Total value is: Rs{{$value}}</h3>
  </div>

  @include('home.footer')
</body>

</html>
