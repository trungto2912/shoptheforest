<div class="container">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Quản lý danh mục</h1>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container"  style="background-color: #fff;">

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                                  
                                    <button class="btn" style="margin-top:15px;float: right" data-toggle="modal" data-target="#addDM">Thêm danh mục</button>
                                    <?php } ?>

                                </div>
                            </div>

                            <div class="row row1">

                                <div class="col-md-3">
                                    <b>ID</b>
                                </div>
                                <div class="col-md-5">
                                    <b>Tên danh mục</b>
                                </div>

                                <div class="col-md-4">
                                    <b>#</b>
                                </div>
                            </div>
                            <?php foreach($data as $row) : ?>
                            
                                <div class="row row2">

                                    <div class="col-md-3">
                                        <p class="cap_gh"><?= $row['cid'] ?></p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="cap_gh"><?= $row['cname'] ?></p>
                                    </div>


                                    <div class="col-md-4">
                                    
                                        <?php if(isset($_SESSION['isLogin_Admin'])) {  ?>
                                        <a href="?mod=category&xuly=edit&id=<?= $row['cid'] ?>"><i class="fa fa-edit" id="icon1"></i></a>

                                        <a  href="?mod=category&xuly=delete&id=<?= $row['cid'] ?>" onclick="return confirm('Bạn có chắc chắn không?');"><i class="fa fa-trash" id="icon2" ></i></a> 
                                        <?php } ?>
                     

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        
                             


                    
              
                        </div>
                        <div class="container-fluid" style="background-color: #f7f7fc;height: 30px" ></div>  