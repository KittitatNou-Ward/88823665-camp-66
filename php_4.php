<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /*กรอบฟอร์ม*/
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-container .btn {
            margin-top: 30px;
        }
        .form-container .col-md-2.text-center {
            display: flex;
            align-items: flex-end; 
            justify-content: center; /* จัดปุ่มให้อยู่ตรงกลาง */
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h1 class="text-center my-4">แสดงข้อมูลเลขคู่-เลขคี่</h1>
        <form method="GET" class="my-4">
            <div class="row g-3">
                <div class="col-md-5 col-sm-12">
                    <label for="start" class="form-label">ตัวเลขเริ่มต้น (start)</label>
                    <input type="number" name="start" id="start" class="form-control" placeholder="ระบุตัวเลขเริ่มต้น" required>
                </div>
                <div class="col-md-5 col-sm-12">
                    <label for="end" class="form-label">ตัวเลขสิ้นสุด (end)</label>
                    <input type="number" name="end" id="end" class="form-control" placeholder="ระบุตัวเลขสิ้นสุด" required>
                </div>
                <div class="col-md-2 col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary w-100">แสดงผล</button>
                </div>
            </div>
        </form>

        <?php 
        // ตรวจสอบการส่งค่า start และ end
        if (isset($_GET['start'], $_GET['end']) && is_numeric($_GET['start']) && is_numeric($_GET['end'])): 
            $start = intval($_GET['start']);
            $end = intval($_GET['end']);
            if ($start <= $end): 
        ?>
            <h2 class="text-center">แสดงข้อมูลเลขคู่-เลขคี่จาก <?php echo htmlspecialchars($start); ?> ถึง <?php echo htmlspecialchars($end); ?></h2>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">ตัวเลข</th>
                        <th scope="col">เลขคู่-เลขคี่</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = $start; $i <= $end; $i++): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($i); ?></td>
                            <td>
                                <?php 
                                // เช็คเลขคู่เลขคี่
                                if ($i % 2 == 0) {
                                    echo "เลขคู่";
                                } else {
                                    echo "เลขคี่";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center text-danger">กรุณาระบุค่าเริ่มต้นให้น้อยกว่าหรือเท่ากับค่าจบ</p>
        <?php endif; endif; ?>
    </div>
</body>
</html>