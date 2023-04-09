<?php
session_start();
include_once "cek-sesi.php";
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navbar section -->
    <div data-theme="dark" class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Latihan Login</a>
        </div>
        <div class="flex-none">
            <!-- Menu section -->
            <ul class="menu menu-horizontal px-1">
                <li><a>Item 1</a></li>
                <li tabindex="0">
                    <a>
                        Parent
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>

<!-- Dropdown User section -->
<div class="dropdown dropdown-end">
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <img src="./assets/images/orang.jpg" />
        </div>
    </label>
    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li>
            <a>
                Profile <?= $_SESSION["login"]["sesiFullname"] ?>
            </a>
        </li>
        <li><a href="./logout.php">Logout</a></li>
    </ul>
</div>

        </div>
    </div>

<!-- Main content section -->
<div class="md:container md:mx-auto">
    <?php
    echo "Selamat Datang " . $_SESSION["login"]["sesiFullname"];
    ?>
    
    <?= "Selamat Datang " . $_SESSION["login"]["sesiFullname"] ?>
</div>
</body>

</html>