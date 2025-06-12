<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thêm danh sách</h1>
    <form action="?action=editBookProcess&id=<?= $editBook['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="formControl">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="title" value="<?= $editBook['title'] ?>">
        </div>
        <div class="formControl">
            <label for="">Ảnh bìa</label>
            <input type="file" name="cover_image" value="<?= $editBook['cover_image'] ?>">
        </div>
        <div class="formControl">
            <label for="">Tác giả</label>
            <select name="author">
                <?php foreach ($authors as $author): ?>
                    <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="formControl">
            <label for="">Nhà sản xuất</label>
            <input type="text" name="publisher" value="<?= $editBook['publisher'] ?>">
        </div>
        <div class="formControl">
            <input type="submit" name="btn_edit" value="Sửa">
        </div>
    </form>
</body>

</html>