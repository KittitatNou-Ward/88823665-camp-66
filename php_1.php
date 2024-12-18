<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container my-5">
            <?php
            $my_var = 2;
            ?>
            <h1 class="text-center">สูตรคูณแม่ <?php echo $my_var; ?></h1>
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
        </div>
    </body>
</html>
