  <header>
        <h1>Thêm danh mục mới</h1>
    </header>

    <section>
        <form action="index.php?act=adddm" method="post">
        <label for="ma-loai">Mã loại:</label>
        <input type="text" id="ma-loai" name="maloai">

        <label for="ten-loai">Tên loại:</label>
        <input type="text" id="tenloai" name="tenloai">

        <div class="actions"><br>
            <input type="submit" name="themmoi" value="Thêm mới"><br><br>
            <input type="reset" value="Nhập lại" ><br><br>
            <a href="index.php?act=listdm">Danh sách</a>
        </div>
        <?php 
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>   
        </form>
    </section>
