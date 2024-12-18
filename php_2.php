<!DOCTYPE html>
<html>
    <head>
        <title>Even and Odd Numbers</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">แสดงข้อมูลเลขคู่-เลขคี่ ตัวเลข 1-100</h1>
            <div class="row mt-4">
                <?php for ($i = 1; $i <= 100; $i++): ?>
                    <div class="col-6 text-end h5">
                        <?php echo "$i = "; ?>
                    </div>
                    <div class="col-6 text-start h5">
                        <?php 
                        // เช็คเลขคู่เลขคี่
                        if($i % 2 == 0){
                            echo "เลขคู่";
                        }else{
                            echo "เลขคี่";
                        }
                        ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </body>
</html>
