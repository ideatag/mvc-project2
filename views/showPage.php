<table style="width:100%; border: 1px solid #ddd; border-collapse: collapse; margin: 20px 0; font-family: Arial, sans-serif;">
    <thead>
        <tr style="background-color: #f8f9fa;">
            <th style="text-align: center; padding: 12px; border: 1px solid #ddd;">ID</th>
            <th style="text-align: center; padding: 12px; border: 1px solid #ddd;">Name</th>
            <th style="text-align: center; padding: 12px; border: 1px solid #ddd;">Continut</th>
            <th style="text-align: center; padding: 12px; border: 1px solid #ddd;">Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center; padding: 12px; border: 1px solid #ddd;"><?= $page['id']; ?></td>
            <td style="text-align: center; padding: 12px; border: 1px solid #ddd;"><?= $page['name']; ?></td>
            <td style="text-align: center; padding: 12px; border: 1px solid #ddd;"><?= $page['continut']; ?></td>
            <td style="text-align: center; padding: 12px; border: 1px solid #ddd;"><?= date('F j, Y', strtotime($page['data'])); ?></td>
        </tr>
    </tbody>
</table>