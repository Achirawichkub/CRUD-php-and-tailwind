<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Shop</title>
    <link rel="shortcut icon" href="\PHPtest\CRUD\asset\Logo.jpg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="flex justify-center p-20">
  <div class="bg-gray-200 rounded-lg">
    <div class="p-10">
      <!-- login form -->
      <form action="" method="post">
        <div class="grid justify-items-center">
          <img src="\PHPtest\CRUD\asset\Logo.jpg" alt="logo" class="rounded-full w-20 ">
        </div>
        <br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required class="border-2 border-black rounded" ><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="border-2 border-black rounded"><br><br>
        <div class="grid justify-items-center">
          <input type="submit" value="Login" class="inline-block rounded-full bg-indigo-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white">
        </div>
      </form>
    </div>
  </div>
</div>
<?php
$username = "user001";
$password = "1234";
if (isset($_POST['username']) && isset($_POST['password'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  if($user === $username && $pass === $password){
    header("Location: dashboard.php");
    exit;
  } else {  
    echo '<script>
    Swal.fire({
      icon: "error",
      title: "Sorry",
      text: "Username or Password is not Correct!",
    });
  </script> ';
  }
}
?>
<script src="main.js"></script>
</body>
</html>