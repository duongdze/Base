<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table tr th{
        padding: 10px 20px;
        border-bottom: 1px solid green;
        text-align: center;
    }
    table tr td{
        padding: 10px 20px;
        border-bottom: 1px solid green;
        text-align: center;
    }
</style>

<body>
    <h1>Danh sach sach</h1>
    <a href="?action=login">Đăng nhập</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sách</th>
            <th>Ảnh bìa</th>
            <th>Tên tác giả</th>
            <th>Nhà xuất bản</th>
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
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>