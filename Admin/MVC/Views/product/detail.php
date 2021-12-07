<div class="container">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">

                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Chi tiết sản phẩm</h1>
                                        <a class="btn" href="?mod=product" style="float: right;color:#fff;" >Quay lại</a>
                                    </div>
                                   

                                </div>
                            </div>
                            
				           
                        </div>
                        <div class="container" style="background-color: #fff;">
                        	<img src="../public/images/<?= $data_ct['Image'] ?>" id="anh_chitiet" >

                            <hr>
				            <label><b>Tên sản phẩm :</b></label> <?= $data_ct['Name'] ?>
				            <br>
				            <label><b>Giá :</b></label> <?= $data_ct['Price'] ?> Đ
				            <br>
				            <label><b>Trạng thái :</b></label> <?= $data_ct['Note'] ?>
				            <br>
				            <label><b>CategoryID :</b></label> <?= $data_ct['cateID'] ?>
				            <br>
				            <label><b>Mô tả:</b></label> <?= $data_ct['Des'] ?>
	
                        </div>
                        </div>
                        <div class="container-fluid" style="background-color: #f7f7fc;height: 30px" ></div> 
			
				
				
		