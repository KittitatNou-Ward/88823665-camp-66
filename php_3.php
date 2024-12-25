
<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container my-5">
            <h1 class="text-center">แสดงตารางสูตรคูณ</h1>
            <form method="GET" class="my-4">
                <div class="input-group">
                    <input type="number" name="my_var" class="form-control" placeholder="ระบุแม่สูตรคูณ" required>
                    <button type="submit" class="btn btn-primary">แสดงผล</button>
                </div>
            </form>

            <?php if (isset($_GET['my_var']) && is_numeric($_GET['my_var'])): ?>
                <?php $my_var = intval($_GET['my_var']); ?>
                <h2 class="text-center">สูตรคูณแม่ <?php echo $my_var; ?></h2>
                <div class="row mt-4">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <div class="col-6 text-end h5">
                            <?php echo "$i x $my_var = "; ?>
                        </div>
                        <div class="col-6 text-start h5">
                            <?php echo $i * $my_var; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php elseif ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
                <p class="text-center text-danger">กรุณาระบุแม่สูตรคูณที่ถูกต้อง</p>
            <?php endif; ?>
        </div>
    </body>
</html>