<div class="container" style="margin-top:30px">
		<p><a href="?act=home" title="" id="chidan"> Trang chủ</a> >  <span id="chidan1"> Tài khoản</span></p>
		<div class="row">
			<div class="col-md-12" id="form-checkout">
				<h5><b>Thông tin khách hàng</b></h5>
				<hr class="hr1">
				<form action="?act=account&xuly=update" method="post" >		
				    <div class="form-group">
				    	<div class="row">
				    		<div class="col-md-6">
				    			<input type="text" name="ho" value="<?= $_SESSION['login']['Ho'] ?>" class="form-control"  placeholder="Nhập họ" required>
				    		</div>
				
				    		<div class="col-md-6">
				    			<input type="text" name="ten" value="<?= $_SESSION['login']['Ten'] ?>" class="form-control" placeholder="Nhập tên"  required>
				    		</div>
				    	</div>
					
				    </div>
				     <div class="form-group">
					
						<input type="text" name="user" value="<?= $_SESSION['login']['user'] ?>"  class="form-control"  readonly required>
					
				    </div>
				    <div class="form-group">
					
						<input type="email" name="email" value="<?= $_SESSION['login']['email'] ?>"  class="form-control" placeholder="Nhập email" required>
					
				    </div>
				    <div class="form-group">
					
						<input type="text" name="phone" value="<?= $_SESSION['login']['phone'] ?>" class="form-control" placeholder="Nhập số điện thoại" pattern="[0-9]+" minlength="10"  required>
					
				    </div>
				    
				    <div class="form-group">
					    <button type="submit" class="btn">Lưu thông tin</button>
				    </div>
				    <a href="#" data-toggle="modal" data-target="#doimatkhau"><i class="fa fa-key"> Đổi mật khẩu</i></a>

				</form>
			

			</div>
			
			
		</div>