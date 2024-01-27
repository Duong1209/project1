
<?php
include "header.php";
include "slider.php";
include "brand_class.php";
?>

<?php
$brand = new brand();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cartegory_id = $_POST['cartegory_id'];
        $brand_name = $_POST['brand_name'];
       $insert_brand = $brand->insert_brand($cartegory_id,$brand_name);
}
?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory-add">
        <h1>Thêm danh mục</h1> <br>
        <form action="" method="post">
            <select name="cartegory_id" id="">
                <option value="#">--Chọn Danh mục</option>
                <?php 
                $show_cartegory = $brand ->show_cartegory();
                if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
               
                ?>
                <option value="<?php echo $result['cartegory_id']  ?>"><?php echo $result['cartegory_name']  ?></option>
                <?php 
                 }}
                ?>
            </select> <br>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sách">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
</html>