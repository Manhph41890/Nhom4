
    <header>
        <h1>Trang Home Admin</h1>
    </header>

    <section>
        <h2>Sản phẩm mới nhất</h2>
        <table>
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $newest_products = loadall_sanpham_home();
                $count = 0;
                foreach ($newest_products as $product) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>Majestic 0{$product['id']}</td>
                    <td>{$product['name_sp']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Sản phẩm nhiều lượt xem nhất</h2>
        <table>
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $popular_products = loadall_sanpham_top10();
                $count = 0;
                foreach ($popular_products as $product) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>Majestic 0{$product['id']}</td>
                    <td>{$product['name_sp']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Bình luận mới</h2>
        <table>
            <thead>
                <tr>
                    <th>Nội Dung Bình Luận</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $latest_comments = loadall_binhluan($idpro = 0);
                $count = 0;
                foreach ($latest_comments as $comment) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr><td>{$comment['noi_dung']}</td></tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Đơn hàng mới</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên Khách Hàng</th>
                    <th>Thời Gian Đặt Hàng</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $new_orders = loadall_bill($kyw = "", $iduser = 0);
                $count = 0;
                foreach ($new_orders as $order) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>{$order['bill_name']}</td> 
                    <td>{$order['ngaydathang']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Biểu đồ thống kê</h2>
        <table>
            <thead>
                <tr>
                    <th>Danh Mục</th>
                    <th>Số Lượng Sản Phẩm</th>
                    <th>Giá Thấp Nhất</th>
                    <th>Giá Cao Nhất</th>
                    <th>Giá Trung Bình</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
                $statistics = loadall_thongke();
                foreach ($statistics as $category) {
                    echo "<tr>";
                    echo "<td>{$category['tendm']}</td>";
                    echo "<td>{$category['countsp']}</td>";
                    echo "<td>{$category['minprice']}</td>";
                    echo "<td>{$category['maxprice']}</td>";
                    echo "<td>{$category['avgprice']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

