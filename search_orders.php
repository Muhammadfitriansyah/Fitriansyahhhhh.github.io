<?php
include 'connection.php';

$search = $_POST['search'];
$query = "SELECT * FROM orders WHERE name LIKE '%$search%'";
$result = mysqli_query($conn, $query);

$output = '';
while ($row = mysqli_fetch_assoc($result)) {
    $output .= "<tr>
                    <td style='border: 1px solid #ddd; padding: 8px;'>{$row['id']}</td>
                    <td style='border: 1px solid #ddd; padding: 8px;'>{$row['name']}</td>
                    <td style='border: 1px solid #ddd; padding: 8px;'>{$row['quantity']}</td>";

    if (!empty($row['file_path'])) {
        $output .= "<td style='border: 1px solid #ddd; padding: 8px;'>
                        <a href='{$row['file_path']}' target='_blank'>Download File</a>
                    </td>";
    } else {
        $output .= "<td style='border: 1px solid #ddd; padding: 8px;'>No File</td>";
    }

    $output .= "<td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>
                    <a href='edit_order.php?id={$row['id']}' style='text-decoration: none; color: blue; margin-right: 10px;'>Edit</a> | 
                    <a href='delete_order.php?id={$row['id']}' style='text-decoration: none; color: red; margin-left: 10px;'>Hapus</a>
                </td>
                </tr>";
}

echo $output;
?>
