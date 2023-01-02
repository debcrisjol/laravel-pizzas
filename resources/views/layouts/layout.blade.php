<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- FontAwesome 6.2 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- Bootstrap 5.2 css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='./style.css'>

    <title>Cristinas Pizza Project</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .pizza1,.pizza2{position: absolute;
        width: 250px; margin:10px;
    border-radius: 20%;}
        .pizza1{left:2%;bottom:10%;}
        .pizza2{right:2%;bottom:10%}
        .pizza1:hover{filter:brightness(100%);}
        .imagine-centrale {
            position: absolute;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            bottom:10%;
        }
        .logo {margin-top:10px;
            display: flex;
            justify-content: center;
        }
        body {
            background-color: #C59849;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .pizza-page {
            position: absolute;
        }
        h1 {
            text-align: center;
            
        }
        p:hover {
            color: yellow;
        
        }
        p {
            text-align: center;
        }
        footer {
            display: flex;
            justify-content: center;
            position: fixed;
            align-items: center;
            bottom: 0px;
            background-color: #606c38;
            width: 100%;
            height: 7%;
        }
        ul{list-style: none;}
        h1 {
            color:  #606c38;
            font-size: 80px;
        }
        .back,a{font-style: oblique;
        text-decoration: none;
      color:#606c38;
    font-size: larger;
  text-align: center;}
  .back:hover{color:orangered;
  font-size: x-large;}
  .thanks{color:yellow;}



    </style>
</head>

<body>
    @yield('content')

    <footer>©Copyright 2022 Cristina Pizzas LTD</footer>
    <!-- Bootstrap 5 script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js' integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
    </script>


</body>

</html>
