<div class="container">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Quản lý sản phẩm</h1>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container"  style="background-color: #fff;">

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if(isset($quaylai)) { ?>
                                    <a href="?mod=product" class="btn" style="margin-top:15px;float: left;">Quay lai</a>
                                    <?php } ?>

                                    <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                                    <button class="btn" style="margin-top:15px;float: right" data-toggle="modal" data-target="#addSP">Thêm sản phẩm</button><?php } ?>

                                </div>
                            </div>

                            <div class="row row1">

                                <div class="col-md-1">
                                    <b>ID</b>
                                </div>
                                <div class="col-md-3">
                                    <b>Tên</b>
                                </div>
                                <div class="col-md-3">
                                    <b>Ảnh</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Giá</b>
                                </div>

                                <div class="col-md-3">
                                    <b>#</b>
                                </div>
                            </div>
                            <?php foreach($data as $row) : ?>
                        
                                <div class="row row2">

                                    <div class="col-md-1">
                                        <p class="cap_gh"><?= $row['ID'] ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="cap_gh"><?= $row['Name'] ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="../public/images/<?= $row['Image'] ?>" alt="" id="anh_gh">
                                    </div>

                                    <div class="col-md-2">
                                        <p class="cap_gh"><?= number_format($row['Price']) ?> VNĐ</p>
                                    </div>


                                    <div class="col-md-3">
                                        <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                                     
                                        <a href="?mod=product&xuly=edit&id=<?= $row['ID'] ?>"><i class="fa fa-edit" id="icon1"></i></a>

                                        <a  href="?mod=product&xuly=delete&id=<?= $row['ID'] ?>" onclick="return confirm('Bạn có chắc chắn không?');"><i class="fa fa-trash" id="icon2" ></i></a> 
                                        <?php } ?>   
                                        <a href="?mod=product&xuly=detail&id=<?= $row['ID']?>" class="btn" id="icon3" <?php if(!isset($_SESSION['isLogin_Admin'])) echo 'style="margin-top: 35px"' ?> title="">Xem</a>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        
                            <div style="margin-top: 30px" >
                                <ul class="pagination">
                                    <?php if($total_page>=2){ ?>
                                        <?php if($page>1) { ?>
                                            <li class="page-item"><a class="page-link" href="?mod=product&xuly=list&page=<?= $page-1?>"><<</a></li>
                                        <?php } ?>
                                       
                                        <?php for($i=1 ; $i<= $total_page ;$i++) {?>
                                            <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?mod=product&xuly=list&page=<?= $i ?>"><?php echo $i ?></a></li>
                                        <?php } ?>
                                        <?php if($page<$total_page) { ?>
                                            <li class="page-item"><a class="page-link" href="?mod=product&xuly=list&page=<?= $page+1?>">>></a></li>
                                        <?php } ?>
                                    <?php } ?>

                                    
                                </ul>
                            </div>

                    
              
                        </div>
                        <div class="container-fluid" style="background-color: #f7f7fc;height: 30px" ></div>  