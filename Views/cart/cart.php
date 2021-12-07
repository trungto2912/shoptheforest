<div class="container" style="margin-top:30px">
            <p><a href="?act=home" title="" id="chidan"> Trang chủ</a> >  <span id="chidan1"> Giỏ hàng</span></p>
            <div class="row row1_GH">
                <div class="col-md-3">
                    <b>Ảnh</b>
                </div>
                <div class="col-md-2">
                    <b>Tên sản phẩm</b>
                </div>
                <div class="col-md-2">
                    <b>Giá</b>
                </div>
                <div class="col-md-2">
                    <b>Số lượng</b>
                </div>
                <div class="col-md-2">
                    <b>Thành tiền</b>
                </div>
                <div class="col-md-1">
                    <b>Xóa</b>
                </div>
            </div>
                <?php
                if (isset($_SESSION['sanpham'])) {
                    foreach ($_SESSION['sanpham'] as $row) { ?>

                <div class="row row1_GH">
                    <div class="col-md-3">
                        <img src="public/images/<?= $row['Image'] ?>" alt="" id="anh_gh">
                    </div>
                    <div class="col-md-2">
                        <p class="cap_gh"><?= $row['Name'] ?></p>
                    </div>
                    <div class="col-md-2">
                        <p class="cap_gh"><?= number_format($row['Price'] )?> VNĐ</p>
                    </div>
                    <div class="col-md-2">
                        <div class="cap_gh">
                            <a href="?act=cart&xuly=delete&id=<?= $row['ID'] ?>"><button class="btnSub">-</button></a>
                            <strong><?= $row['Quantity'] ?></strong>
                            <a href="?act=cart&xuly=update&id=<?= $row['ID'] ?>"><button class="btnAdd ">+</button></a>
                            <label><?= $row['cateID']==3 ? "Cây" : "Kg" ?></label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="cap_gh"><?= number_format($row['ThanhTien'] ) ?> VNĐ</p>
                    </div>
                    <div class="col-md-1">
                        <p><a href="?act=cart&xuly=deleteall&id=<?= $row['ID'] ?>" onclick="return confirm('Bạn có chắc chắn không?');"><i class="fa fa-trash"></i></a></p>
                    </div>
                </div>
            <?php } } ?>
            
    


            <div class="sum_tien">
                <p>Tổng tiền : <B><?= number_format($total) ?> VNĐ</B></p>
                <a href="?act=cart&xuly=checkout" class="btn" >Tiến hành đặt hàng</a>
            </div>