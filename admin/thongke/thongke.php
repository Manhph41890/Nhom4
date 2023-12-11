<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê sản phẩm theo loại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin_top: 60px ;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions button {
            padding: 8px;
            cursor: pointer;
        }

        .table-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .table-actions button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    

    <section><header>
        <h1>Thống kê sản phẩm theo loại</h1>
    </header>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Loại Hàng</th>
                    <th>Số Lượng</th>
                    <th>Giá Cao Nhất</th>
                    <th>Giá Nhỏ Nhất</th>
                    <th>Giá Trung Bình</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo'<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxprice.'$</td>
                        <td>'.$minprice.'$</td>
                        <td>'.$avgprice.'$</td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>

