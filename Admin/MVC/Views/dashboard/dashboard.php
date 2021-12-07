<div class="container px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Tông số sản phẩm</h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= $count_sp['tong'] ?></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Hóa đơn chưa duyệt</h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= $count_hd_cd['tong'] ?> <sup> Đơn</sup></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Nhân viên </h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= $count_nhanvien['tong'] ?> <sup>Người</sup></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Khách hàng</h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= $count_khachhang['tong'] ?> <sup>Người</sup></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Hóa đơn đã duyệt hôm nay</h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= $hd_daduyet_hn['tong']?> <sup>Đơn</sup></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Doanh thu hôm nay</h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= number_format($dtngay['tong']) ?> <sup>VNĐ</sup></h1>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Doanh thu tháng <?= $m?> </h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= number_format($dtthang['tong']) ?> <sup>VNĐ</sup></h1>
                                                   
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Doanh thu theo năm <?= $y ?></h5>
                                                    <h1 class="display-5 mt-1 mb-3"><?= number_format($dtnam['tong']) ?> <sup>VNĐ</sup></h1>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>


                                    </div>
                                </div>




                                


                            </div>

                        </div>