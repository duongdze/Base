
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách book</title>
    <style>
        table tr th{
            padding: 5px 20px;
            border-bottom:2px solid green;
            text-align:center;
        }
        table tr td{
            padding: 5px 20px;
            border-bottom:1px solid green;
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Danh sách books</h1>
    <a href="?action=addBook">Thêm sách</a>
    <table>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>cover_image</th>
            <th>author_id</th>
            <th>publisher</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach($listBooks as $book){
        ?>
            <tr>
                <td><?=$book['book_id']?></td>
                <td><?=$book['title']?></td>
                <td><?=$book['cover_image']?></td>
                <td><?=$book['name']?></td>
                <td><?=$book['pulisher']?></td>
                <td><a href="?action=deleteBook&id=<?=$book['book_id']?>">Xoá</a>|<a href="?action=editBook&id=<?=$book['book_id']?>">Sửa</a></td>
            </tr>
        <?php
        }
        ?>
       
    </table>
</body>
</html>