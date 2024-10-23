<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Sparepart Motor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="light-mode">
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Order Sparepart Motor</h1>
            <nav>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li>
                        <label class="switch">
                            <input type="checkbox" id="theme-toggle" />
                            <span class="slider"></span>
                        </label>
                    </li>
                </ul>
                <button class="hamburger" id="hamburger">&#9776;</button>
            </nav>
        </div>
    </header>

    <!-- CRUD Table -->
    <section class="crud">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 20px;">Daftar Pemesanan</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">ID</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Nama</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Jumlah Pesanan</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">File</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connection.php';
                    $query = "SELECT * FROM orders";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['id']}</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['name']}</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['quantity']}</td>";

                        // Check if file exists in database
                        if (!empty($row['file_path'])) {
                            echo "<td style='border: 1px solid #ddd; padding: 8px;'>
                                <a href='{$row['file_path']}' target='_blank'>Download File</a>
                              </td>";
                        } else {
                            echo "<td style='border: 1px solid #ddd; padding: 8px;'>No File</td>";
                        }

                        echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>
                            <a href='edit_order.php?id={$row['id']}' style='text-decoration: none; color: blue; margin-right: 10px;'>Edit</a> | 
                            <a href='delete_order.php?id={$row['id']}' style='text-decoration: none; color: red; margin-left: 10px;'>Hapus</a>
                          </td>
                          </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


    <section class="crud">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 20px;">Daftar Pemesanan</h2>
            <input type="text" id="search" placeholder="Cari Nama..." style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 5px;">

            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">ID</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Nama</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Jumlah Pesanan</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">File</th>
                        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Aksi</th>
                    </tr>
                </thead>
                <tbody id="orderTableBody">
                    <?php
                    include 'connection.php';
                    $query = "SELECT * FROM orders";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['id']}</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['name']}</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$row['quantity']}</td>";

                        if (!empty($row['file_path'])) {
                            echo "<td style='border: 1px solid #ddd; padding: 8px;'>
                                <a href='{$row['file_path']}' target='_blank'>Download File</a>
                              </td>";
                        } else {
                            echo "<td style='border: 1px solid #ddd; padding: 8px;'>No File</td>";
                        }

                        echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>
                            <a href='edit_order.php?id={$row['id']}' style='text-decoration: none; color: blue; margin-right: 10px;'>Edit</a> | 
                            <a href='delete_order.php?id={$row['id']}' style='text-decoration: none; color: red; margin-left: 10px;'>Hapus</a>
                          </td>
                          </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


    <!-- Footer -->
    <footer style="text-align: center; padding: 20px 0; background-color: #f1f1f1; margin-top: 30px;">
        <p>&copy; 2024 Toko Sparepart Motor. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>