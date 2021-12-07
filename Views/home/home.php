<div class="container" style="margin-top:30px">
			<div class="row">
				<div class="col-sm-3">
					<div class="">
	                    <h5><b>DANH MỤC SẢN PHẨM</b></h5>
	                    <hr class="hr1">
	                    <ul class="list-group list-group-flush">
	                    	
				        	<?php foreach($data_danhmuc as $row): ?>
						
                                <li class="list-group-item "><a href="?act=shop&cateID=<?= $row["cid"] ?>" ><?= $row['cname'] ?> </a></li>
                            <?php endforeach; ?>                   
          
	                    </ul>
	                </div><br>
	                <div class="">
	                    <h5><b>THONG TIN</b></h5>
	                    <hr class="hr1">
	                    <ul class="list-group list-group-flush">
	                        <li class="list-group-item"><a href="?act=contact" title="">Thông tin liên hệ</a></li>
	                        <li class="list-group-item"><a href="?act=introduce" title="">Giới thiệu cửa hàng</a></li>
	     
	                    </ul>
	                </div>
				</div>
				<div class="col-sm-9">
					<div id="slides" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
							<?php foreach($data_banner as $row) : ?>
							
							<li data-target="#slides" data-slide-to="$row" class="active"></li>
				
					        <?php endforeach ; ?>
						</ul>
						<div class="carousel-inner">
							<?php foreach($data_banner as $row) : ?>
							<div class="carousel-item <?php if($row['id']==4) echo 'active'?>">
								<img src="public/images/<?= $row['image']?>" alt="">
								<div class="carousel-caption">
									<h2>RAU CỦ QỦA TƯƠI SẠCH THE FOREST</h2>
									<h5>Cung cấp hoa quả ,cây giống và hạt giống chất lượng</h5><br>
									<a href="?act=contact" class="btn">Liên hệ ngay</a>
								</div>
							</div>
						    <?php endforeach ; ?>
					
						</div>
					</div>
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="public/images/bg1.jpg" alt="" id="hinh1">
					<div class=" carousel-caption" id="cap1">
						<h3>Rau củ tươi</h3>
						<h5>đươc kiểm định rỏ ràng</h5>
					</div>
				</div>
				<div class="col-md-4">
					<img src="public/images/bg4.jpg" alt="" id="hinh1">
					<div class=" carousel-caption" id="cap1">
						<h3>Thực phẩm sạch</h3>
						<h5>quy trình sản xuất kín</h5>
					</div>

				</div>		
		        <div class="col-md-4">
					<img src="public/images/bg5.jpg" alt="" id="hinh1">
					<div class=" carousel-caption" id="cap1"> 
						<h3>Trái cây tươi</h3>
						<h5>Nhập khẩu và trong nước</h5>
					</div>

				</div>
				
			</div>
			<h4 class="tit1">TRÁI CÂY MỖI NGÀY</h4>
			<div class="row">
				<?php foreach($data_top4_1 as $row): ?>
		    	<div class="col-md-3">
		    		<div class="sanpham">		
					    <img src="public/images/<?= $row['Image']?>" alt="" id="hinh2">
				    	<div id="cap2">
					    	<a href="?act=detail&id=<?= $row['ID']?>" ><?= $row['Name']?></a>
					        <p id="gia"><?= $row['Price']?><sup>đ</sup></p>
				     	</div>
				     	<form class="buy-form" method="post"> 
				        	<input type="hidden" value="<?= $row['ID'] ?>" name="pid[<?= $row['ID'] ?>]">
				     	    <div class="icons">
				      	    	<a class="btn" style="width:46px" href="?act=detail&id=<?= $row['ID']?>"><i class="fa fa-eye"></i></a>
	                            <button class="btn" type="submit"><a ><i class="bx bx-shopping-bag" ></i></a></button>
				        	</div>
				        </form>
				     	
				    </div>
				</div>
		    	<?php endforeach; ?>

			</div>
				
			<div class="btn_xemth">
	    		<a class="btn" href="?act=shop&cateID=1">Xem tất cả</a>
			</div>

			<h4 class="tit1">RAU Củ TƯƠI MỚI</h4>
			<div class="row">
				<?php foreach($data_top4_2 as $row): ?>
		    	<div class="col-md-3">
		    		<div class="sanpham">		
					    <img src="public/images/<?= $row['Image']?>" alt="" id="hinh2">
				    	<div id="cap2">
					    	<a href="?act=detail&id=<?= $row['ID']?>" ><?= $row['Name']?></a>
					        <p id="gia"><?= $row['Price']?><sup>đ</sup></p>
				     	</div>
				     	<form class="buy-form" method="post"> 
				        	<input type="hidden" value="<?= $row['ID'] ?>" name="pid[<?= $row['ID'] ?>]">
				     	    <div class="icons">
				      	    	<a class="btn" style="width:46px" href="?act=detail&id=<?= $row['ID']?>"><i class="fa fa-eye"></i></a>
	                            <button class="btn" type="submit"><a ><i class="bx bx-shopping-bag" ></i></a></button>
				        	</div>
				        </form>
				     	
				    </div>
				</div>
		    	<?php endforeach; ?>
				
			</div>
			<div class="btn_xemth">
	    		<a class="btn" href="?act=shop&cateID=2">Xem tất cả</a>
			</div>

			<div class="row">
		    	<div class="col-md-6">
			    	<img src="public/images/bg1.jpg" alt="" id="hinh1">
			    	<div class=" carousel-caption" id="cap1">
			    		<h3>Chính sách vận chuyển</h3>
			    		<h5>Miển phí vận chuyển trong khu vực nội thành</h5>
		    		</div>
			    </div>
		    	<div class="col-md-6">
			    	<img src="public/images/bg2.jpg" alt="" id="hinh1">
			    	<div class=" carousel-caption" id="cap1">
			    		<h3>Chính sách thanh toán</h3>
			    		<h5>Thanh toán online được giảm đến 5%</h5>
		    		</div>
	    		</div>	
	        </div>	
	        
	        <table>
	       	    <tr>
	                <td style="width:405px"><hr class="hr2"></td>
	                <td ><a  title="" class="btn" id="tit2"><h4 style="margin-top: 10px">PHẢN HỒI CỦA KHÁCH</h4></a></td>
	                <td style="width:408px"><hr class="hr2"></td>
	            </tr>
	        </table>
	         <div class="tit2_cap">
	        	<p>Phản hồi của những khách hàng đã và đang sử dụng sản phẩm trong suất những năm qua</p>
	        </div>
	        <div class="row">
	        	<div class="col-md-4">
	        		<div class="nd2">
	        			<img src="public/images/danhgia1.jpg" alt="" id="hinh4">
	        			<div id="cap2">
	        				<h5>Diễn viên - Quang Đôn</h5>
	        				<p>Là một người khá kỹ tính tôi luôn lựa chọn những sản phẩm sạch nhất.Và đây là nơi tôi đặt niềm tin</p>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="nd2">
	        			<img src="public/images/danhgia.jpg" alt="" id="hinh4">
	        			<div id="cap2">
	        				<h5>Ca sỉ - Trung Tô</h5>
	        				<p>Là một người khá kỹ tính tôi luôn lựa chọn những sản phẩm sạch nhất.Và đây là nơi tôi đặt niềm tin</p>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="nd2">
	        			<img src="public/images/danhgia3.jpg" alt="" id="hinh4">
	        			<div id="cap2">
	        				<h5>Danh hài - Hải Đăng</h5>
	        				<p>Là một người khá kỹ tính tôi luôn lựa chọn những sản phẩm sạch nhất.Và đây là nơi tôi đặt niềm tin</p>
	        			</div>
	        		</div>
	        	</div>
	        </div>