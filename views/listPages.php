<?php if ($pages->num_rows > 0) : ?>
    <table style="width:80%; margin: 0 auto; border-collapse: collapse; font-family: Arial, sans-serif; border: 1px solid #ccc;">
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
                        <a href="/page/show/<?= $row['id']; ?>" style="text-decoration: none; color: #007bff;"><?= $row['name']; ?></a>
                    </td>
                    <td style="text-align: center; padding: 12px; border: 1px solid #ddd;">
                        <a href="/page/edit/<?= $row['id']; ?>" style="border: 1px solid #ccc; background-color: #f8f9fa; padding: 4px; border-radius: 4px; margin-right: 8px; text-decoration: none; color: #ffc107; display: inline-block;">Edit</a>
                        <a href="javascript:void(0);" onclick="confirmDelete('/page/delete/<?= $row['id']; ?>')" style="border: 1px solid #ccc; background-color: #f8f9fa; padding: 4px; border-radius: 4px; text-decoration: none; color: #dc3545; display: inline-block;">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else : ?>
    <p style="margin-top: 48px; padding: 4px; text-align: center; font-size: 16px; font-family: Arial, sans-serif; color: #666;">No pages found</p>
<?php endif; ?>