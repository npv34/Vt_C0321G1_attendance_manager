
<div class="card">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group list-group-flush">
        <form action="" method="post">
            Ngay diem danh: <input type="date" name="day_attendance">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ten hoc vien</th>
                    <th scope="col">Co mat</th>
                    <th scope="col">Di muon</th>
                    <th scope="col">Nghi phep</th>
                    <th scope="col">Nghi hoc</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($studentsGroup as $key => $student): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $student['name'] ?></td>
                        <td>
                            <input type="radio" value="1" name="status[<?php echo $student['id'] ?>]">
                        </td>
                        <td>
                            <input type="radio" value="2" name="status[<?php echo $student['id'] ?>]">
                        </td>
                        <td>
                            <input type="radio" value="3" name="status[<?php echo $student['id'] ?>]">
                        </td>
                        <td>
                            <input type="radio" value="4" name="status[<?php echo $student['id'] ?>]">
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <button class="btn btn-primary">Luu</button>
        </form>
    </ul>
</div>