<html>
 <head>
  <title>
   Register - BLOCK-SOS
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .header {
            background-color: #2c3e50;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .header img {
            height: 50px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }
        .nav-links .btn {
            background-color: #34495e;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .main-content {
            text-align: center;
            margin-top: 50px;
        }
        .main-content h1 {
            font-size: 48px;
            color: #2c3e50;
        }
        .main-content h2 {
            font-size: 24px;
            color: #2c3e50;
        }
        .form-container {
            display: inline-block;
            border: 1px solid #2c3e50;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .form-container button {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ccc;
        }
        .footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .footer .social-icons a {
            color: #2c3e50;
            font-size: 24px;
            text-decoration: none;
        }
        .footer img {
            height: 50px;
        }
        .custom-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .custom-btn:hover {
            background-color: #34495e;
        }
  </style>
 </head>
 <body>
  <header class="header">
   <img alt="BLOCK-SOS logo" height="50" src="https://storage.googleapis.com/a1aa/image/LdyfdwEJQwRbQa16fl7wjx2bKts0peR8r65eLDNWe0DWGwOdC.jpg" width="50"/>
   
  </header>
  <main class="main-content">
   <h1>
    Registro
   </h1>
   <h2>
    BLOCK-SOS
   </h2>
   <div class="form-container">
    <form>
     <label for="email">
      Correo
     </label>
     <input id="email" name="email" type="text" value=""/>
     <label for="password">
      Contraseña
     </label>
     <input id="password" name="password" type="password" value=""/>
     
    
     <a href="{{ route('login') }}" class="custom-btn">Registrarse</a>
    </form>
   </div>
  </main>
  <footer class="footer">
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
   <img alt="BLOCK-SOS logo" height="50" src="https://storage.googleapis.com/a1aa/image/LdyfdwEJQwRbQa16fl7wjx2bKts0peR8r65eLDNWe0DWGwOdC.jpg" width="50"/>
  </footer>
 </body>
</html>