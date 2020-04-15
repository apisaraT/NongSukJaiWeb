  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RESER PASSWORD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
  <style>
    /* ________________________________LOGIN_______________________________________ */
    .card {
      width: 93%;
      border-radius: 8px;
      border: none;
      box-shadow: 3px 3px 3px #A0A0A0;
      padding:2%;
      margin:4%;
      display: grid;
      grid-template-columns: auto auto;
      align-items: center;
    }
    body{
        background: linear-gradient(to bottom, #01c6b2 0%, #fff 100%);
        font-family: 'Mitr', sans-serif;
    }
    .hospital{
        width:60%;
        height:60%;
        margin-left:5%;

    }
    .logo{
        width:120px;
        height:120px;
    }
    h1{
        font-size:1.8vw;
    }
    .login{
        margin-top:10%;
        border-radius:4px;
        background:#F6F6F6;
        text-align:center;
        width:150px;
    }
    .login-2{
      width: 100%;
      height: 15%;
      background: #F6F6F6;
      border-radius: 8px;
      margin-top: 8%;
      padding: 10px;
    }
    .form-control{
      border-bottom: 1px solid #707070;
      border-top-color: transparent;
      border-left-color: transparent;
      border-right-color: transparent;
      background-color: transparent;
      border-radius: 0;
      width: 100%;
      height:20px;
      
    }
    .text{
      font-family: 'Manrope', sans-serif;
      font-size: 1vw;
    }
    .btn{
      background: #01c6b2;
      color:#fff;
      font-family: 'Manrope', sans-serif;
      font-size: 1vw;
      margin-top: 5px;
    }

    
  </style>
</head>

<body>
    <div class="card">
      <div class="left">
        <img class="hospital" src="images/lo.png">
      </div>
      <div class="right">
        <img class="logo" src="images/unknown.png">
        <div class="login"> 
            <h1>LOGIN</h1>
        </div>
        <div class="login-2">
          <form>
            <p class="text">E-MAIL</p>
            <input type="email" class="form-control" id="email">
          </form>
        </div>
        <div>
        </div>
        <br>
        <a href="main" class="btn" role="button">LOGIN</a>
      </div>
      
    </div>
  

</body>

</html> 