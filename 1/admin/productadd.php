
<?php
include "header.php";
include "slider.php";
include "product_class.php"

?>

<?php 
$product = new product();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST,$_FILES);
    echo '<pre>';
    echo print_r($_POST)
    echo '<pre>';
       $insert_product = $product->insert_product($_POST,$_FILES);
}
?>
<div class="admin-content-right">
<div class="admin-content-right-product-add">
                <h1>Thêm sách</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span> </label>
                    <input name="product_name" require type="text">
                    <label for="">Chọn danh mục <span style="color: red;">*</span> </label>
                    <select name="cartegory_id" id="">
                    <option value="#">--Chọn--</option>
                        <?php
                        $show_cartegory = $product -> show_cartegory();
                        if($show_cartegory) {while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                        
                    </select>
                    <label for="">Chọn loại sách <span style="color: red;">*</span> </label>
                    <select name="brand_id" id="">
                        <option value="#">--Chọn--</option>
                        <?php
                        $show_cartegory = $product -> show_brand();
                        if($show_cartegory) {while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Nhập giá <span style="color: red;">*</span> </label>
                    <input name="price" require type="text">
                    <label for="">Nhập tên tác giả <span style="color: red;">*</span> </label>
                    <input name="author" require type="text">
                    <label for="">Nhập ngày xuất bản <span style="color: red;">*</span> </label>
                    <input name="publish_date" require type="text">
                    <label for="">Nhập kích thước<span style="color: red;">*</span> </label>
                    <input name="book_size" require type="text">
                    <label for="">Nhập tên NXB <span style="color: red;">*</span> </label>
                    <input name="publisher" require type="text">
                    <label for="">Nhập số trang <span style="color: red;">*</span> </label>
                    <input name="pages" require type="text">
                    <label for="">Hình thức bìa <span style="color: red;">*</span> </label>
                    <select name="book_cover" id="">
                        <option value="#">Bìa cứng</option>
                        <option value="#">Bìa mềm</option>
                    </select>
                    <label for="">Nhập mô tả <span style="color: red;">*</span> </label>
                    <textarea require name="describe" id="" cols="30" rows="10"></textarea>
                    <label for="">Ảnh đại diện <span style="color: red;">*</span> </label>
                    <input name="main_photo" require type="file">
                    <label for="">Ảnh mô tả<span style="color: red;">*</span> </label>
                    <input name="support_photo" require multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
</div>
</section>
</body>
</html>
