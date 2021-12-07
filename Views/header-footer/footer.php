<div class="row">
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo1.PNG" alt="" id="hinh5">
	        		</div>
	        	</div>
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo2.PNG" alt="" id="hinh5">
	        		</div>
	        	</div>
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo1.PNG" alt="" id="hinh5">
	        		</div> 
	        	</div>
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo2.PNG" alt="" id="hinh5">
	        		</div>
	        	</div>
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo1.PNG" alt="" id="hinh5">
	        		</div>
	        	</div>
	        	<div class="col-md-2">
	        		<div class="logo2">
	        			<img src="public/images/logo2.PNG" alt="" id="hinh5">
	        		</div>
	        	</div>
	        	
	        </div>
	        
		</div>
	
		<div class="container-fluid end">
	         <div class="container">
	         	<div class="row">
	         		
	         		<div class="col-md-4" id="end_cap1">
	         			<h4>LIêN HỆ</h4>
	         			<p>Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch an toàn cho sức khỏe con người</p>
	         			<p><i class="fa fa-map-marker"> <b>Địa chỉ:</b> Đà Nẵng , Việt Nam</i></p>
	         			<p><i class="fa fa-mobile"> <b>Hotline:</b>0329060915</i></p>
	         		</div>
	         		<div class="col-md-4" id="end_cap2">
	         			<h4 class="tit_end">HỖ TRỢ KHÁCH HÀNG</h4>
	         			<ul class="list_end">
	         				<li><a href="" title="">Phí vận chuyển</a></li>
	         				<li><a href="" title="">Trả lại</a></li>
	         				<li><a href="" title="">Hướng dẫn đặt hàng</a></li>
	         				<li><a href="" title="">Phương thức thanh toán</a></li>
	         				<li><a href="?act=contact" title="">Liên hệ chúng tôi</a></li>
	         			</ul>
	         		</div>
	         		<div class="col-md-4" id="end_cap1">
	         			<h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
	         			<img src="public/images/fb.PNG" alt="" id="iconDN">
	         			<img src="public/images/gmail.PNG" alt="" id="iconDN">
	         		</div>
	         	</div>
	         	
	         </div>
	    </div>
	        <div class="modal fade" id="dangnhap" role="dialog">
		        	<div class="modal-dialog modal-dialog-scrollable">
		        		<div class="modal-content">
		        			<div class="modal-header">
		                        <h1 class="modal-title"id="myAnchor" href="http://www.microsoft.com" >ĐĂNG NHẬP</h1>
	                        <button type="button" class="close" data-dismiss="modal" >×</button>
	                    </div>
	                    <?php if (isset($_COOKIE['mess'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['mess'] ?>
								</div>
						<?php } ?>
	                    <div class="modal-body">
	                        <form action="?act=account&xuly=dangnhap" method="post">
							    <div class="form-group">
								    <label >Tên tài khoản</label>
							        <input type="text" name="user" class="form-control" placeholder="Nhập tên đăng nhập" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'] ?>" required>
						        </div>
					           	<div class="form-group">
							        <label >Mật khẩu</label>
							        <input type="password" name="pass" class="form-control"  placeholder="Nhập mật khẩu" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'] ?>" required>
							        
						        </div>
						        <div class="form-check">
						          	<input type="checkbox" name="remember" class="form-check-input" id="memorize">
						        	<label for="memorize" class="form-check-label">Nhớ mật khẩu</label>
					        	</div>
				        		<div >
						        	<button type="submit" class="btn btn-success btn-block my-3" >Đăng Nhập</button>
						        </div>
						     	<div class="canchinh">
						     		<a href="#">Quên mật khẩu?</a>
						
						     	</div>
						     	<div class="canchinh">
						     		 <p class="canchinh1">Chưa có tài khoản đăng ký <a href="#" title="" id="htDK">tại đây</a></p>
						     	</div>

						    </form>
	                    </div>
	        		</div>
	        	</div>
	        </div>
	        <div class="modal fade" id="dangky" role="dialog">
	        	<div class="modal-dialog modal-dialog-scrollable">
	        		<div class="modal-content">
	        			<div class="modal-header">
	                        <h1 class="modal-title" id="">ĐĂNG KÝ</h1>
	                        <button type="button" class="close" data-dismiss="modal" >×</button>
	                    </div>
	                    <?php if (isset($_COOKIE['mess1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['mess1'] ?>
								</div>
						<?php } ?>
	                    <div class="modal-body">
	                        <form action="?act=account&xuly=dangky" method="post">
	                        	<div class="form-group">
								  
								    <input type="text" name="ho" class="form-control" placeholder="Nhập họ" required>
						     	</div>
						     	<div class="form-group">
								 
								    <input type="text" name="ten" class="form-control" placeholder="Nhập tên"  required>
						     	</div>
								<div class="form-group">
								    <input type="text" name="user" class="form-control" placeholder="Nhập tên tài khoản" minlength="6" required>
						     	</div>
								
						    	<div class="form-group">
						    		<input type="email" name="email" class="form-control" placeholder="Nhập gmail" required>
					    		</div>
					    		<div class="form-group">
						    
						    		<input type="text" name="phone" class="form-control"  placeholder="Nhập số điện thoại" required pattern="[0-9]+" minlength="10">
					    		</div>
						    	<div class="form-group">
						    	
						    		<input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu" minlength="6" required>
						    		<p id="check_pass1"></p>

						    	</div>
					     		<div class="form-group">
					    		
					    			<input type="password" name="repass" class="form-control" placeholder="Nhập lại mật khẩu" minlength="6" required>
					    		</div>
						    	<div class="form-check">
					  	    		<input type="checkbox" name="dieukhoan" class="form-check-input" id="memorize">
						    		<label for="memorize" class="form-check-label">Dồng ý với điều khoản</label>
					     		</div>
					     		<div >
							     	<button type="submit" class="btn btn-success btn-block my-3">Đăng Ký</button>
					    		</div>
					    		<div class="canchinh">
					    			<p>Đã có tài khoản đăng nhập  <a href="#"  id="htDN">tại đây</a></p>
					    		</div>
							
					    	</form>
	                    </div>
	        		</div>
	        	</div>
	        </div>
	        <div class="modal fade" id="<?= $DNlai ?>" role="dialog">
		        	<div class="modal-dialog modal-dialog-scrollable">
		        		<div class="modal-content">
		        			<div class="modal-header">
		                        <h1 class="modal-title"id="myAnchor" href="http://www.microsoft.com" >ĐĂNG NHẬP</h1>
	                        <button type="button" class="close" data-dismiss="modal" >×</button>
	                    </div>
	                    <?php if (isset($_COOKIE['mess'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['mess'] ?>
								</div>
						<?php } ?>
	                    <div class="modal-body">
	                        <form action="?act=account&xuly=dangnhap" method="post">
							    <div class="form-group">
								    <label >Tên tài khoản</label>
							        <input type="text" name="user" class="form-control" placeholder="Nhập tên đăng nhập" required>
						        </div>
					           	<div class="form-group">
							        <label >Mật khẩu</label>
							        <input type="password" name="pass" class="form-control"  placeholder="Nhập mật khẩu" required>
							        <p id="check_pass"></p>
						        </div>
						        <div class="form-check">
						          	<input type="checkbox" class="form-check-input" id="memorize">
						        	<label for="memorize" class="form-check-label">Nhớ mật khẩu</label>
					        	</div>
				        		<div >
						        	<button type="submit" class="btn btn-success btn-block my-3" >Đăng Nhập</button>
						        </div>
						     	<div class="canchinh">
						     		<a href="#">Quên mật khẩu?</a>
						     		
						     	</div>
						     	<div class="canchinh">
						     		 <p class="canchinh1">Chưa có tài khoản đăng ký <a href="#" title="" id="htDK2">tại đây</a></p>
						     	</div>

						    </form>
	                    </div>
	        		</div>
	        	</div>
	        </div>
	        <div class="modal fade" id="<?= $DKlai ?>" role="dialog">
	        	<div class="modal-dialog modal-dialog-scrollable">
	        		<div class="modal-content">
	        			<div class="modal-header">
	                        <h1 class="modal-title" id="">ĐĂNG KÝ</h1>
	                        <button type="button" class="close" data-dismiss="modal" >×</button>
	                    </div>
	                    <?php if (isset($_COOKIE['mess1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['mess1'] ?>
								</div>
						<?php } ?>
	                    <div class="modal-body">
	                        <form action="?act=account&xuly=dangky" method="post">
	                        	<div class="form-group">
								  
								    <input type="text" name="ho" class="form-control" placeholder="Nhập họ"  required>
						     	</div>
						     	<div class="form-group">
								 
								    <input type="text" name="ten" class="form-control" placeholder="Nhập tên"  required>
						     	</div>
								<div class="form-group">
								    <input type="text" name="user" class="form-control" placeholder="Nhập tên tài khoản" minlength="6" required>
						     	</div>
								
						    	<div class="form-group">
						    		<input type="email" name="email" class="form-control" placeholder="Nhập gmail" required>
					    		</div>
					    		<div class="form-group">
						    		<input type="text" name="phone" class="form-control"  placeholder="Nhập số điện thoại" required pattern="[0-9]+" minlength="10">
					    		</div>
						    	<div class="form-group">
						    		<input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu" minlength="6" required>
						    		<p id="check_pass1"></p>

						    	</div>
					     		<div class="form-group">
					    			<input type="password" name="repass" class="form-control" placeholder="Nhập lại mật khẩu" minlength="6" required>
					    		</div>
						    	<div class="form-check">
					  	    		<input type="checkbox" name="dieukhoan" class="form-check-input" id="memorize">
						    		<label for="memorize" class="form-check-label">Dồng ý với điều khoản</label>
					     		</div>
					     		<div >
							     	<button type="submit" class="btn btn-success btn-block my-3">Đăng Ký</button>
					    		</div>
					    		<div class="canchinh">
					    			<p>Đã có tài khoản đăng nhập  <a href="#"  id="htDN2">tại đây</a></p>
					    		</div>
							
					    	</form>
	                    </div>
	        		</div>
	        	</div>
	        </div>
            <div class="modal fade" id="order" style="margin-top:150PX" >
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body" style="text-align:center ">
                            <form class="add-cart-form" method="post">
                                <div class="form-group">
                                    <h4> Bạn có chắc muốn thêm sản phẩm này vào giỏ hàng</h4>
                                </div>
                                <div class="order-form">
                    	
                               </div>
                    


                                <div >
                                    <input type="button" class="btn btn-default" style="margin-right: 10px;width: 80px" data-dismiss="modal" value="Không">
                                    <input type="submit" class="btn " style="margin-left: 10px; width: 80px" value="CÓ">
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="doimatkhau" role="dialog" style="padding:50px">
		        <div class="modal-dialog modal-dialog-scrollable">
		        	<div class="modal-content">
		        		<div class="modal-header">
		                    <h1 class="modal-title"id="myAnchor" href="http://www.microsoft.com" >Đổi mật khẩu</h1>
	                        <button type="button" class="close" data-dismiss="modal" >×</button>
	                    </div>
	                    <?php if (isset($_COOKIE['mess'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['mess'] ?>
								</div>
						<?php } ?>
	                    <div class="modal-body">
	                        <form action="?act=account&xuly=update" method="post">
							    
					           	<div class="form-group">
							        <label >Mật khẩu củ</label>
							        <input type="password" name="pass" class="form-control"  placeholder="Nhập mật khẩu củ"  required>
							        
						        </div>
						        <div class="form-group">
							        <label >Mật khẩu mới</label>
							        <input type="password" name="passNew" class="form-control"  placeholder="Nhập mật khẩu mới"  minlength="6" required>
							        
						        </div>
						        <div class="form-group">
							        <label >Nhập lại mật khẩu mới</label>
							        <input type="password" name="XNpassNew" class="form-control"  placeholder="Nhập lại mật khẩu mới"  minlength="6" required>
							        
						        </div>
						        
				        		<div >
						        	<button type="submit" class="btn btn-success btn-block my-3" >Đổi mật khẩu</button>
						        </div>

						    </form>
	                    </div>
	        		</div>
	        	</div>
	        </div>
	        
	    <script>
           
       
    function alertTC(){
        Swal({
        
            text: 'Sản phẩm đã được thêm vào giỏ hàng',
            type: 'success',
            confirmButtonColor :"#80bb35",
            
        })
    }
    function alertTC2(){
        Swal({
        	<?php if(isset($_COOKIE['messTC'])) { ?>
        
            text: '<?= $_COOKIE['messTC']?>',
            <?php } ?>
            type: 'success',
            confirmButtonColor :"#80bb35",
            
        })
    }
    function alertTB(){
        Swal({
            <?php if(isset($_COOKIE['messTB'])) { ?>
        
            text: '<?= $_COOKIE['messTB']?>',
            <?php } ?>
            type: 'error',
            confirmButtonColor :"#ff0000",            
        })
    }
    function alertBinhluanTC(){
        Swal({
        
            text: 'Binh luận thành công',
            type: 'success',
            confirmButtonColor :"#80bb35",
            
        })
    }
    function alertBinhluanTB(){
        Swal({
        
            text: 'Bạn vui lòng mua sản phẩm này trước khi bình luận',
            type: 'error',
            confirmButtonColor :"#ff0000", 
            
        })
    }

function moForm() {
  document.getElementById("myForm").style.display = "block";
}

function dongForm() {
  document.getElementById("myForm").style.display = "none";
}
    $("#htDK").click(function () {
        $("#dangnhap").modal("hide");
        $("#dangky").modal("show");
    });
    $("#htDN").click(function () {
        $("#dangnhap").modal("show");
        $("#dangky").modal("hide");
    });
    $(document).ready(function () {
    // Show the Modal on load
        $("#DNlai").modal("show");
        $("#htDK2").click(function () {
            $("#DNlai").modal("hide");
            $("#dangky").modal("show");
         });

        $("#DKlai").modal("show");
        $("#htDN2").click(function () {
            $("#DKlai").modal("hide");
            $("#dangnhap").modal("show");
        });
        <?php if(isset($_COOKIE['messTC'])) { ?>
             alertTC2("show");
        <?php } ?>
         <?php if(isset($_COOKIE['messTB'])) { ?>
             alertTB("show");
        <?php } ?>
        
       
        

  
            $(".buy-form").submit(function(event){
            	event.preventDefault();

            	$.ajax({
		            url: "?act=cart&xuly=detail",
		            method: "POST",
		            data: $(this).serializeArray(),
		            success : function(data){

                        $(".order-form").html(data);
		            	$("#order").modal("show");
		            }
	        	});
            });
            $(".add-cart-form").submit(function(event){
            	event.preventDefault();
            	$.ajax({
		            url: "?act=cart&xuly=add",
		            method: "POST",
		            data: {id:$("#cartID").val(),quantity:$("#quantity").val()},
		            success : function(data){
		            	$("#order").modal("hide");
                         alertTC("show");     
		            }
		          
	        	});
            });
		    $(".form-add-binhluan").submit(function(event){
            	event.preventDefault();
            	$.ajax({
		            url: "?act=detail&xuly=binhluan",
		            method: "POST",
		            data: {noidung: $("#comment").val()},
		            success : function(data){
		            	if (data != false) {
		            	    $('#load-binhluan').html(data);
                            alertBinhluanTC("show");
                        }else {
                         	alertBinhluanTB("show");
                        }     
		            }
	        	});
            });
            


        });
        function load_more(){
            	var count = document.getElementsByClassName("count-bl").length;
            
            	$.ajax({
		            url: "?act=detail&xuly=loadbl",
		            method: "GET",
		            data: {start : count},
		            success : function(data){ 	
		            	 var row = document.getElementById("load-binhluan");
		            	 row.innerHTML += data;
                            
		            }
	        	});
            }
        </script>


<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>