<?php
echo '<a href="http://localhost/mvc-project2/page/add" style="display: block; width: 100px; margin: 20px 0; padding: 10px; background-color: #28a745; color: #fff; text-align: center; text-decoration: none; border-radius: 5px; font-family: Arial, sans-serif;">Add Page</a>';
?>

<?php if ($pages->num_rows > 0) : ?>
    <table style="width:80%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif; border: 1px solid #ccc;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 12px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 12px; border: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $pages->fetch_assoc()) : ?>
                <tr>
                    <td style="padding: 12px; border: 1px solid #ddd;">
                        <a href="http://localhost/mvc-project2/page/show/<?= $row['id']; ?>" style="text-decoration: none; color: #007bff;"><?= htmlspecialchars($row['name']); ?></a>
                    </td>
                    <td style="text-align: center; padding: 12px; border: 1px solid #ddd;">
                        <a href="http://localhost/mvc-project2/page/edit/<?= $row['id']; ?>" style="border: 1px solid #ccc; background-color: #f8f9fa; padding: 4px; border-radius: 4px; margin-right: 8px; text-decoration: none; color: #ffc107; display: inline-block;">Edit</a>
                        <a href="javascript:void(0);" onclick="confirmDelete('http://localhost/mvc-project2/page/delete/<?= $row['id']; ?>')" style="border: 1px solid #ccc; background-color: #f8f9fa; padding: 4px; border-radius: 4px; text-decoration: none; color: #dc3545; display: inline-block;">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else : ?>
    <p style="margin-top: 48px; padding: 4px; text-align: center; font-size: 16px; font-family: Arial, sans-serif; color: #666;">No pages found</p>
<?php endif; ?>

<?php
require "views/footer.php";
?>