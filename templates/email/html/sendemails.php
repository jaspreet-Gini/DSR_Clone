<!-- In src/Template/Dsr/sendemails.php -->
<html>
<head>
    <style>
        table { border-collapse: collapse; width: 100%; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h3>Daily Status Report</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Task No</th>
            <th>Task Description</th>
            <th>Hour</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
        
        <?php foreach ($value as $dataItem): ?>
        <tr>
            <td><?= h($dataItem->id) ?></td>
            <td><?= h($dataItem->project_name) ?></td>
            <td><?= h($dataItem->task_no) ?></td>
            <td><?= h($dataItem->task_description) ?></td>
            <td><?= h($dataItem->hour) ?></td>
            <td><?= h($dataItem->status) ?></td>
            <td><?= h($dataItem->date) ?></td>
        </tr>
       
        <?php endforeach; ?>
    </table>
    <p>This email was sent from Ginilytics IT Solutions. All rights reserved.</p>
</body>
</html>
