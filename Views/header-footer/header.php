<nav class="navbar navbar-expand-sm ">
	        <div class="container">	
	        	<ul class="navbar-nav header-Lienhe">
	                 <li class="nav-item">
	        			<i class="fa fa-mobile"> <b>Hotline:</b>0329060915</i>
	        		</li>
	        		<li class="nav-item" id="dcll">
	        			<i class="fa fa-map-marker"> <b>Địa chỉ:</b> Đà Nẵng , Việt Nam</i>
	        		</li>
	        	</ul>
	        	<ul class="navbar-nav ml-auto">
	        		<?php if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                     <li class="nav-item">

	        			 <a class="nav-link" href="Admin/?mod=dashboard"  > <i class="fa fa-users"> Quản lý </i></a>
	        		</li>
                                  
	        		<?php }
	        		   if(isset($_SESSION['login'])){ ?>
	        		<li class="nav-item dropdown">
	                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-user"> <?= $_SESSION['login']['Ho']?> <?= $_SESSION['login']['Ten'] ?></i> </a>
	                    <div class="dropdown-menu">
	                         <a class="dropdown-item" href="?act=account&xuly=tk" id="drop" >Tài khoản</a>
	                         <a href="?act=account&xuly=dangxuat" class="dropdown-item" id="drop"><i class="fa fa-arrow-right"></i> Đăng xuất</a>
	                    </div>
	                </li>

	                <?php }
	                 else{ ?>
	                <li class="nav-item dropdown">
	                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-user"> Tài khoản</i> </a>
	                    <div class="dropdown-menu">
	                         <a class="dropdown-item" href="#" id="drop" data-toggle="modal" data-target="#dangnhap">Đăng nhập</a>
	                         <a class="dropdown-item" href="#" id="drop" data-toggle="modal" data-target="#dangky">Đăng ký</a>
	                    </div>
	                </li>
	                <?php } ?>
	                 
	                

	        	
	        	</ul>
		     
		   </div>
		</nav>
		<div class="container" >
			<div class="row header">
				<div class="col-md-3 header_nd">
					<img src="public/images/logo4.PNG" alt="logo" id="logo">
				</div>	

				<div class="col-md-3 header_nd">
					<img src="public/images/hotro1.png" alt="" id="icon">
					<h5>Hỗ trợ 24/7</h5>
					<p>Hotline:19001111</p>
				</div>
				<div class="col-md-3 header_nd">
					<img src="public/images/dongho.jpg" alt="" id="icon">
					<h5>Giờ làm việc</h5>
					<p>T2 - T7 Giờ hành chính</p>
				</div>
				<div class="col-md-3 header_nd">
					<img src="public/images/xe.jpg" alt="" id="icon">
					<h5>Miễn phí vận chuyển</h5>
					<p>bán kính 100km</p>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg" id="menuTop" >
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fa fa-bars"></i>
				</button>
	        <div class="container hidden-sm">
			    <div class="collapse navbar-collapse" id="collapsibleNavbar">
			      	<ul class="navbar-nav">
					    <li class="nav-item <?php if(strcmp($active,"home")== 0) echo 'active' ?>">
						    <a href="?act=home" class="nav-link" ><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a>
			     		</li>
			    		<li class="nav-item <?php if(strcmp($active,"shop")== 0) echo 'active' ?>">
			    			<a href="?act=shop" class="nav-link" >Sản phẩm</a>
				    	</li>
			    		<li class="nav-item <?php if(strcmp($active,"introduce")== 0) echo 'active' ?>">
			    			<a href="?act=introduce" class="nav-link" >Giới thiệu</a>
				    	</li>
			    				    		
	                    <li class="nav-item <?php if(strcmp($active,"contact")== 0) echo 'active' ?>">
			    			<a href="?act=contact" class="nav-link" >Liên hệ</a>
			    		</li>
			    		<li class="nav-item <?php if(strcmp($active,"cart")== 0) echo 'active' ?>">
	                	<a href="?act=cart&xuly=show" class="nav-link" ><i class="fa fa-cart-plus" aria-hidden="true"> </i> Giỏ hàng </a>
	                     </li>
		     		</ul>	
		     		<ul class="navbar-nav ml-auto">
		     			<li class="nav-item">
			    			<form class="form-inline" action="?act=shop" method="post">
	                            <input class="form-control mr-sm-1" name="timkiem" type="text" placeholder="tìm kiếm sản phẩm" style="width:300px" value="<?= isset($tk) ? $tk : '' ?>">
	                            <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"> Tim kiếm</i></button>
	                        </form>
			    		</li>
		     		</ul>
		    	</div>
		   </div>
		</nav>