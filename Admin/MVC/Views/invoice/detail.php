<div class="container">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Chi tiết hóa đơn</h1>
                                        <a class="btn" href="?mod=invoice" style="float: right;color:#fff;" >Quay lại</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container"  style="background-color: #fff;">

                            <div class="row">
                                <div class="col-md-12">

                                    <?php if($data_hd['TrangThai'] == 0) { ?>
                                    <a href="?mod=invoice&xuly=xetduyet&id=<?= $data_hd['MaHD'] ?>&email=<?= $data_hd['Email'] ?>" title="" class="btn" onclick="return confirm('Bạn có chắc chắn không?');">Duyệt hóa đơn</a>
                                    <?php } ?>
                                   <a href="?mod=invoice&xuly=delete&id=<?= $data_hd['MaHD'] ?>" title="" class="btn" onclick="return confirm('Bạn có chắc chắn không?');" >Xóa</a>

                                </div>
                            </div>
                            <div class="row row1">

                                <div class="col-md-1">
                                    <b>Mã HĐ</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Người nhận</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Số điện thoại</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Địa chỉ</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Tổng tiền</b>
                                </div>
                                
                                <div class="col-md-3">
                                    <b>Ngày đặt hàng</b>
                                </div>

                                
                            </div>
                            
                            <div class="row row2">

                                <div class="col-md-1">
                                    <p class="cap_gh"><?= $data_hd['MaHD'] ?></p>
                                </div>
                                <div class="col-md-2">
                                    <p class="cap_gh"><?= $data_hd['NguoiNhan'] ?></p>
                                </div>
                                <div class="col-md-2">
                                    <p class="cap_gh"><?= $data_hd['SDT'] ?></p>
                                </div>
                                <div class="col-md-2">
                                    <p class="cap_gh"><?= $data_hd['DiaChi'] ?></p>
                                </div>
                                <div class="col-md-2">
                                    <p class="cap_gh"><?= number_format($data_hd['TongTien']) ?> VNĐ</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="cap_gh"><?= $data_hd['NgayLap'] ?></p>
                                </div>
                    
                                    


                            </div>
                            <hr class="hror">
                        

                            <div class="row row1">
                                <div class="col-md-3">
                                    <b>Tên sản phẩm</b>
                                </div>
                                <div class="col-md-3">
                                    <b>Giá</b>
                                </div>
                                <div class="col-md-3">
                                    <b>Số lượng</b>
                                </div>
                                <div class="col-md-3">
                                    <b>Đơn Giá</b>
                                </div>


                            </div>
                            <?php foreach($data_ct as $row) : ?>
                            
                                <div class="row row3">
                                    
                                    <div class="col-md-3">
                                        <p class="cap_gh"><?= $row['TenSP'] ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="cap_gh"><?= number_format($row['Gia']) ?> VNĐ</p>
                                    </div>
                                    <div class="col-md-3">
                                         <p class="cap_gh">x <?= $row['SoLuong'] ?></p>
                                    </div>
                                    <div class="col-md-3">
                                         <p class="cap_gh"><?= number_format($row['DonGia']) ?> VNĐ</p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        
                             


                    
              
                        </div>

                        <div class="container-fluid" style="background-color: #f7f7fc;height: 30px" ></div>  