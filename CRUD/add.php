<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="\PHPtest\CRUD\asset\Logo.jpg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form class="max-w-sm mx-auto" method="post">
    <div class="mb-5 pt-10 flex justify-start">
        <img src="\PHPtest\CRUD\asset\Logo.jpg" alt="logo" class="rounded-full w-10 m-2">
        <h1 class="font-bold flex items-center">SPVCSHOP</h1>
    </div>
    <div class="mb-5">
        <label for="CPU" class="block mb-2 text-sm font-medium text-black">CPU</label>
        <input type="text" id="cpu" name="cpu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="CPU Name" required>
    </div>
    <div class="mb-5">
        <label for="VGA" class="block mb-2 text-sm font-medium text-black">Graphics card</label>
        <input type="text" id="vga" name="vga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Graphics card name" required>
    </div>
    <div class="mb-5">
        <label for="RAM" class="block mb-2 text-sm font-medium text-black">Ram</label>
        <input type="text" id="ram" name="ram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ram name" required>
    </div>
    <div class="mb-5">
        <label for="HDD" class="block mb-2 text-sm font-medium text-black">Memory card/Harddisk</label>
        <input type="text" id="hdd" name="hdd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Memory card/Harddisk name" required>
    </div>
    <div class="mb-5">
        <label for="POWER" class="block mb-2 text-sm font-medium text-black">Power supply</label>
        <input type="text" id="power" name="power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Power supply name" required>
    </div>
    <div class="mb-5">
        <label for="CASE" class="block mb-2 text-sm font-medium text-black">Case</label>
        <input type="text" id="case" name="case" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Case name" required>
    </div>
    <button name="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
<script src="main.js"></script>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $cpu = $_POST['cpu'];
    $vga = $_POST['vga'];
    $ram = $_POST['ram'];
    $hdd = $_POST['hdd'];
    $power = $_POST['power'];
    $case = $_POST['case'];

    $sql = "INSERT INTO com_db (cpu,vga,ram,hdd,power,casee) VALUE('$cpu','$vga','$ram','$hdd','$power','$case')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<script>
        Swal.fire({
          icon: "success",
          title: "Successfully !",
          text: "Inserted successfully !!",
          showCancelButton: false,
          confirmButtonText: "OK"
        }).then((result) => {
            if (result.isConfirmed) {
              location = "dashboard.php"
            }
          });
      </script> ';
    }else{
        die("connection failed". $conn->connect_error);
    }
}
?>

</body>
</html>