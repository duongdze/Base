<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
    <style>
        .formControl{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h1>Thêm sách</h1>
    <form action="?action=addBookProcess" method="POST">
        <div class="formControl">
            <label for="">Tên sách</label>
            <input type="text" name="title">
        </div>
        <div class="formControl">
            <label for="">Ảnh sách</label>
            <input type="file" name="cover_image">
        </div>
        <div class="formControl">
            <label for="">tên tác giả</label>
            <select name="author_id" id="">
                <option value="">--Chọn--</option>
                <?php
                foreach($listAuthor as $author){
                ?>
                 <option value="<?=$author['author_id']?>"><?=$author['name']?></option>
                <?php
                }
                ?>
               
            </select>
        </div>
        <div class="formControl">
            <label for="">Nhà xuất bản</label>
            <input type="text" name="pulisher">
        </div>
        <div class="formControl">
            <input type="submit" name="btn_add" value="Thêm">
        </div>
    </form>
</body>
</html>