<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50 mt-4">
            <form action="" method="post" enctype="multipart/form-data">
                    <legend>Thêm mới sản phẩm</legend>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="ten" class="form-control" placeholder="Tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <input type="text" name="mo_ta" class="form-control" placeholder="Giá sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá sản phẩm</label>
                        <input type="number" name="gia" class="form-control" placeholder="Số lượng sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Hình ảnh</label>
                        <input class="form-control" name="anh" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số lượng sản phẩm</label>
                        <input type="number" name="gia" class="form-control" placeholder="Số lượng sản phẩm">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</body>

</html>