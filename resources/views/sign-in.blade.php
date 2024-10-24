<html>
 <head>
  <title>
   Sign In - BLOCK-SOS
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #2c3e50;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .navbar img {
            height: 50px;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        .navbar ul li {
            margin: 0 10px;
        }
        .navbar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .navbar ul li a:hover {
            background-color: #34495e;
        }
        .navbar ul li a.active {
            background-color: #34495e;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        .container h1 {
            font-size: 48px;
            color: #2c3e50;
        }
        .container h2 {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 40px;
        }
        .login-box {
            display: inline-block;
            padding: 20px;
            border: 1px solid #2c3e50;
            border-radius: 5px;
            background-color: white;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background-color: #34495e;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer .social-icons {
            margin-bottom: 10px;
        }
        .footer .social-icons a {
            color: #2c3e50;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
        }
        .footer img {
            height: 50px;
        }
  </style>
 </head>
 <body>
  <div class="navbar">
   <img alt="BLOCK-SOS logo" height="50" src="https://storage.googleapis.com/a1aa/image/v3VblTtv4uojNVFaIp8OzCZrfdW1cfXA1ZpemYdi02n86rTnA.jpg" width="50"/>
   <ul>
    <li>
     <a href="#">
      Comunidad
     </a>
    </li>
    <li>
     <a href="#">
      Nosotros
     </a>
    </li>
    <li>
     <a href="#">
      Donaciones
     </a>
    </li>
    <li>
     <a href="#">
      Contacto
     </a>
    </li>
    <li>
     <a class="active" href="#">
      Sign in
     </a>
    </li>
    <li>
     <a href="#">
      Register
     </a>
    </li>
   </ul>
  </div>
  <div class="container">
   <h1>
    Sign in
   </h1>
   <h2>
    BLOCK-SOS
   </h2>
   <div class="login-box">
    <form>
     <label for="username">
      Username
     </label>
     <input id="username" name="username" type="text" value="Value"/>
     <label for="password">
      Password
     </label>
     <input id="password" name="password" type="password" value="Value"/>
     <input type="submit" value="Submit"/>
    </form>
   </div>
  </div>
  <div class="footer">
   <div class="social-icons">
    <a href="#">
     <i class="fab fa-x-twitter">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-instagram">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-youtube">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-linkedin">
     </i>
    </a>
   </div>
   <img alt="BLOCK-SOS logo" height="50" src="https://storage.googleapis.com/a1aa/image/v3VblTtv4uojNVFaIp8OzCZrfdW1cfXA1ZpemYdi02n86rTnA.jpg" width="50"/>
  </div>
 </body>
</html>