<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<body>
    <h1>Danh sach sach</h1>
    <a href="?action=addBook">Thêm sản phẩm</a>
    <a href="?action=addAuthor">Thêm tác giả</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sách</th>
            <th>Ảnh bìa</th>
            <th>Tên tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $stt =1;
        foreach ($listBooks as $book) {
        ?>
            <tr>
                <td><?=$stt++ ?></td>
                <td><?=$book['title'] ?></td>
                <td><img src="<?=BASE_ASSETS_UPLOADS.$book['cover_image']?>" width="100"></td>
                <td><?=$book['name'] ?></td>
                <td><?=$book['publisher'] ?></td>
                <td><a href="?action=deleteBook&id=<?=$book['id']?>">Xóa</a>|<a href="?action=editBook&id=<?=$book['id']?>">Sửa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>