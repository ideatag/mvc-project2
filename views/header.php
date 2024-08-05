<?php
require("mysql.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this item?')) {
                window.location.href = url;
            }
        }
    </script>
</head>

<body>
    <div style="width: 100%; border-bottom: 1px solid #ccc; margin-bottom: 40px; padding: 10px 0; background-color: #f8f9fa;">
        <ul style="list-style-type: none; padding-left: 0; margin: 0; display: flex;">
            <li style="margin-right: 16px;">
                <a href="/home" style="padding: 8px; text-decoration: none; color: #007bff; font-family: Arial, sans-serif; font-size: 16px;">Home Page</a>
                <a href="/page/list" style="padding: 8px; text-decoration: none; color: #007bff; font-family: Arial, sans-serif; font-size: 16px;">Page List</a>
            </li>
        </ul>
    </div>