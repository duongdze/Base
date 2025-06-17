<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thêm danh sách</h1>
    <form action="?action=addBookProcess" method="post" enctype="multipart/form-data">
        <div class="formControl">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="title" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="formControl">
            <label for="">Ảnh bìa</label>
            <input type="file" name="cover_image">
        </div>
        <div class="formControl">
            <label for="">Tác giả</label>
            <select name="author">
                <option value="">----</option>
                <?php foreach ($listAuthors as $author): ?>
                    <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="formControl">
            <label for="">Nhà sản xuất</label>
            <input type="text" name="publisher">
        </div>
        <div class="formControl">
            <input type="submit" name="btn_add" value="Thêm mới">
        </div>
    </form>
</body>

</html>