<div class="container" style="margin-top:30px">
		<p><a href="?act=home" title="" id="chidan"> Trang chủ</a> > <a href="?act=cart" title="" id="chidan"> Giỏ hàng</a> >  <span id="chidan1"> Thanh toán</span></p>
		<div class="row">
			
			<div class="col-md-6" id="form-checkout">
				<h5><b>Hóa đơn</b></h5>
				<hr class="hr1">				
			    <div class="hoadon1">
			        <b>Sản phẩm</b> 
			    </div>
			    <div class="hoadon2">
			        <b>Thành tiền</b>
			        
			    </div>
			   
			    
			    <br>
			    <hr class="hror">

			    <?php if(isset($_SESSION['sanpham'])) {
			             foreach($_SESSION['sanpham'] as $row) { ?>
			            <div class="hoadon1">
			                 <?= $row['Quantity'] ?><?= $row['cateID']!=3 ? "Kg" : "" ?> <?= $row['Name'] ?> 
			            </div>
			            <div class="hoadon2">
			                 <?= number_format($row['ThanhTien'])?> VNĐ
			            </div>
			             <br>
			     <?php }} ?>
			   
			   
			 
			    <div class="hoadon1">
			        Vận chuyển
			    </div>
			    <div class="hoadon2">
			        0vnd
			    </div>
			    <br>
			    <div class="hoadon1">
			        Vat
			    </div>
			    <div class="hoadon2">
			        0vnd
			    </div>
			    <br>
			    <hr class="hror">
			    <div class="hoadon1">
			    	<span id="gia">Tổng tiền</span>
			    </div>
			    <div class="hoadon2">
			        <span id="gia"><?= number_format($total) ?> VNĐ</span>
			    </div>
			</div>
			<div class="col-md-6" id="form-checkout">
				<h5><b>Thông tin khách hàng</b></h5>
				<hr class="hr1">
				<form action="?act=cart&xuly=save" method="post" >		
				    <div class="form-group">
						<input type="text" name="name" value="<?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?>" class="form-control"   readonly required>
					
				    </div>
				    <div class="form-group">
					
						<input type="email" name="email" value="<?= $_SESSION['login']['email'] ?>"  class="form-control" readonly required>
					
				    </div>
				    <div class="form-group">
					
						<input type="text" name="phone" value="<?= $_SESSION['login']['phone'] ?>" class="form-control"  pattern="[0-9]+" minlength="10" readonly required>
					
				    </div>
				    <div class="form-group">
					
						<input type="text" name="adress" class="form-control" placeholder="nhập địa chỉ " required>
					
				    </div>
				    <div class="form-group">
					    <button type="submit" class="btn">Đặt hàng</button>
				    </div>

				</form>
			

			</div>
			
		</div>