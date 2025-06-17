<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thêm tác giả</h1>
    <form action="?action=addAuthorProcess" method="post" enctype="multipart/form-data">
        <div class="formControl">
            <label for="">Tên tác giả</label>
            <input type="text" name="name" placeholder="Nhập tên tác giả">
        </div>
        <div class="formControl">
            <input type="submit" name="btn_add" value="Thêm mới">
        </div>
    </form>
</body>

</html>