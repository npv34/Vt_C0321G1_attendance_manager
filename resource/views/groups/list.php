<div class="card">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group list-group-flush">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ten</th>
                <th scope="col">So luong hoc sinh</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($groups as $key => $group): ?>
            <tr>
                <th scope="row"><?php echo $key + 1 ?></th>
                <td><?php echo $group['name'] ?></td>
                <td><?php echo $group['total_student'] ?></td>
                <td><a href="index.php?page=attendances&action=create&group_id=<?php echo $group['id'] ?>" class="btn btn-success">Diem danh</a></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </ul>
</div>