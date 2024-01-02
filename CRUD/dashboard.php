<?php
include 'connection.php';
?>
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
    <div class="bg-gray-200 rounded-lg w-full">
        <div class="p-5">
            <div class="flex justify-between">
                <div class="flex flex-row">
                <img src="\PHPtest\CRUD\asset\Logo.jpg" alt="logo" class="rounded-full w-20 ">
                <h1 class="font-bold text-2xl pl-2.5 flex items-center">SPVCSHOP</h1>
                </div>
                <input type="button" value="Create New" class="inline-block rounded-full bg-indigo-600 px-6 pb-2 pt-2 text-xs font-medium uppercase leading-normal text-white" onclick="window.location='add.php'">
            </div>
            <div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                        <th scope="col" class="px-6 py-4">id</th>
                                        <th scope="col" class="px-6 py-4">CPU</th>
                                        <th scope="col" class="px-6 py-4">VGA</th>
                                        <th scope="col" class="px-6 py-4">Ram</th>
                                        <th scope="col" class="px-6 py-4">HDD</th>
                                        <th scope="col" class="px-6 py-4">Power</th>
                                        <th scope="col" class="px-6 py-4">Case</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM com_db";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                            $id = $row['id'];
                                            $cpu = $row['cpu']; 
                                            $vga = $row['vga']; 
                                            $ram = $row['ram']; 
                                            $hdd = $row['hdd'];
                                            $power = $row['power']; 
                                            $case = $row['casee'];  
                                            echo '<tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">'.$id.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$cpu.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$vga.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$ram.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$hdd.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$power.'</td>
                                            <td class="whitespace-nowrap px-6 py-4">'.$case.'</td>
                                            <td>
                                                <button type="button"
                                                class="inline-block rounded bg-sky-600 px-4 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white">
                                                <a href="update.php?updateid='.$id.'">Update</a>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button"
                                                class="inline-block rounded bg-rose-700 px-4 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white">
                                                <a href="delete.php?deleteid='.$id.'">Delete</a>
                                                </button>
                                            </td>
                                        </tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="main.js"></script>
</body>
</html>