
<!DOCTYPE html>
<html>
<head>
  <style>

    /* Full-width input fields */
    input[type=text], input[type=phoneno] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: brown;
      color: white;
      padding: 14px 20px;
      margin: 25px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      font-size: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 35%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
    
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
     }
     .cancelbtn {
       width: 100%;
     }
   }

   .widewrapper {
    width:100%;
  }

  .widewrapper > img {
    width:100%;
  }

  div.container {
    width: 90%;
    border: transparent;
  }

  header {

    color: white;
    background-color:transparent;
    clear: left;
    text-align: center;

  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: brown;
    text-align: center;
    padding: none;
    text-decoration: none;
  }

  li a:hover {
    background-color:transparent;
  }
  table {
    border: 5px white;
    text-align: left;
    font-size: 20px;
    color: brown;
  }

  th {
    text-align: left;
    padding: 15px;
    color: white;
    font-size: 200%;
    border: 1px white;
    border-collapse: collapse;
    background-color: black;
  }

  img{
    width: 100%;
    height: 100%;
  }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>  
 <div class="widewrapper">
   {{Html::image('img/1.png','Picture')}}
 </div>

 <ul>
  <li><a href="{{url('/menu')}}">{{Html::image('img/2.png')}}</a></li>
  <li style="float:right"><a href="{{url('/buy')}}">{{Html::image('img/4.png')}}</a></li>
  <li style="float:right"><a href="{{url('/menu')}}">{{Html::image('img/3.png')}}</a></li>
  <li style="float:right"><a href="{{url('/intro')}}"><br/><br/>Home</a></li>
</ul>

<table style="width:100%">
  <tr>
    <th>DRINKS</th>
  </tr>
</table>
<h2><i>Specially handcrafted, and brewed just for you!</i></h2>

<center><table style="width:65%">
  @foreach($drinks as $drink)
  <tr>
    <td><img src="pic/{{ $drink->id }}" style="width:150px;height:150px;"></td>
    <td>
      <b>{{$drink->name}}</b>
      <br/><br/>{{$drink->description}}</td> 
      <td><br/><br/><br/><br/>RM{{$drink->price}}</td>
    </tr>
    @endforeach

  </table>
</center>

<table style="width:100%">
  <tr>
    <th>EAT</th></tr>
  </table>
  <h2><i>We bake fresh bread everyday for you!</i></h2>
  <center><table style="width:65%">
    @foreach($eats as $eat)
    <tr>
      <td><img src="pic/{{ $eat->id }}" style="width:150px;height:150px;"></td>
      <td>
        <b>{{$eat->name}}</b>
        <br/><br/>{{$eat->description}}</td> 
        <td><br/><br/><br/>RM{{$eat->price}}</td>
      </tr>
      @endforeach
    </table>
    <br/><br/>
  </center>
    </body>

    </html>