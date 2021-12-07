<div class="container">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Quản lý hóa đơn</h1>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container"  style="background-color: #fff;">

                            <div class="row">
                                <div class="col-md-12">

                                  
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link btn <?=  $_GET['trangthai']=='0' ? 'active2' : '' ?>" href="?mod=invoice&xuly=list&trangthai=0">Chưa duyệt</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn <?= $_GET['trangthai']=='1' ? 'active2' : '' ?>" href="?mod=invoice&xuly=list&trangthai=1">Đã duyệt</a>
                                        </li>
    
                                    </ul>

                                </div>
                            </div>

                            <div class="row row1">
                                <div class="col-md-2">
                                    <b>Người nhận</b>
                                </div>
                                <div class="col-md-1">
                                    <b>Số điện thoại</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Địa chỉ</b>
                                </div>
                                <div class="col-md-1">
                                    <b>Tổng tiền</b>
                                </div>
                                
                                <div class="col-md-2">
                                    <b>Xét duyệt</b>
                                </div>
                                <div class="col-md-2">
                                    <b>Ngày đặt hàng</b>
                                </div>

                                <div class="col-md-2">
                                    <b>#</b>
                                </div>
                            </div>
                            <?php foreach($data as $row) : ?>
                            
                                <div class="row row2">

                                    <div class="col-md-2">
                                        <p class="cap_gh"><?= $row['NguoiNhan'] ?></p>
                                    </div>
                                    <div class="col-md-1">
                                        <p class="cap_gh"><?= $row['SDT'] ?></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="cap_gh"><?= $row['DiaChi'] ?></p>
                                    </div>
                                    <div class="col-md-1">
                                        <p class="cap_gh"><?= number_format($row['TongTien']) ?></p>
                                    </div>
                    
                                    <div class="col-md-2">
                                        <p class="cap_gh"><?= $row['TrangThai']==1 ? "Đã duyệt" : "Chưa duyệt" ; ?></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="cap_gh"><?= $row['NgayLap'] ?></p>
                                    </div>


                                    <div class="col-md-2">
                                    
                                     
                                        <a href="?mod=invoice&xuly=detail&id=<?= $row['MaHD']?>" class="btn" id="icon3" title="">Xem</a>

                                        <a  href="?mod=invoice&xuly=delete&id=<?= $row['MaHD'] ?>" onclick="return confirm('Bạn có chắc chắn không?');"><i class="fa fa-trash" id="icon2" ></i></a> 
                     

                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div style="margin-top: 30px" >
                                <ul class="pagination">
                                    <?php if($total_page>=2){ 
                                        if(isset($TrangThai)) { 
     
                                            if($page>1) { ?>
                                               <li class="page-item"><a class="page-link" href="?mod=invoice&xuly=list&trangthai=<?= $TrangThai ?>&page=<?= $page-1 ?>"><<</a></li>
                                        <?php } 

                                            for($i=1 ; $i<= $total_page ;$i++) {?>
                                               <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?mod=invoice&xuly=list&trangthai=<?= $TrangThai ?>&page=<?= $i ?>"><?php echo $i ?></a></li>

                                        <?php } 

                                            if($page<$total_page-1) { ?>
                                                <li class="page-item"><a class="page-link" href="?mod=invoice&xuly=list&trangthai=<?= $TrangThai ?>&page=<?= $page+1?>">>></a></li>
                                        <?php }

                                       }else { 
                                            if($page>1) { ?>
                                                <li class="page-item"><a class="page-link" href="?mod=invoice&xuly=list&page=<?= $page-1?>"><<</a></li>
                                        <?php } 
                                       
                                            for($i=1 ; $i<= $total_page ;$i++) {?>
                                                <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?mod=invoice&xuly=list&page=<?= $i ?>"><?php echo $i ?></a></li>
                                        <?php } 
                                             if($page<$total_page-1) { ?>
                                            <li class="page-item"><a class="page-link" href="?mod=invoice&xuly=list&page=<?= $page+1?>">>></a></li>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>

                                    
                                </ul>
                            </div>
                        
                             


                    
              
                        </div>
                        <div class="container-fluid" style="background-color: #f7f7fc;height: 30px" ></div>  