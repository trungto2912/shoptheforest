<div class="container" style="margin-top:30px">
		<p><a href="?act=home" title="" id="chidan"> Trang chủ</a> > <a href="?act=shop" id="chidan">Sản phẩm</a> > <span id="chidan1"><?= $data_ct['Name']?></span></p>
		<div class="row row1">
			<div class="col-md-9">
				<img src="public/images/<?= $data_ct['Image'] ?>" id="anh_chitiet" style="margin-right: 50px">
				<div class="chitietSP">
					<h3><?= $data_ct['Name'] ?></h3>
					<p>Trạng thái: <i class="fa fa-check"></i> <?= $data_ct['Note'] ?></p>
					<h4 id="gia"><?= $data_ct['Price'] ?><sup>đ</sup></h4>
				    <form action="?act=cart&xuly=add" method="post">
					   <label>Số lượng:</label>
					   <input type="hidden" name="id" value="<?= $data_ct['ID'] ?>">
					   <input type="number" name="quantity" value="1" min="1" max="50">
					   <label><?= $data_ct['cateID']==3 ? "Cây" : "Kg" ?></label>
                       <button class="btn" type="submit" id="cach_sp">MUA HÀNG</button>
                    </form>
				</div>
				<br>

			    <button class="btn1" onclick="mota()" id="mota"><h5>MÔ TẢ</h5></button>

			    <button class="btn1" type="submit" onclick="danhgia()" id="danhgia"><h5>ĐÁNH GIÁ</h5></button>
				<div  id="ndMota">
					<p><?= $data_ct['Des'] ?></p>
				</div>

				<div id="ndDanhgia">
					<div id="load-binhluan">
					<?php foreach($data_binhluan as $row) { ?>
                        <div class="count-bl media border p-3">
  
                            <img src="public/images/user.PNG"  class="mr-3 mt-3 rounded-circle" style="width:50px;">
                            <div class="media-body" style="margin-top:20px">
                                <b><?= $row['NguoiDD'] ?> </b><small><i> <?= $row['NgayDang'] ?></i></small>
                                <p><?= $row['DanhGia'] ?> </p>                                           
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <?php  if(count($binhluan)>3 ){ ?>	
                        <button onclick="load_more()" class="btn">Xem thêm </button>
                    <?php } ?>
                    <?php if(isset($_SESSION['login'])){ ?>
                    <form class="form-add-binhluan" method="post">
                        <h5 style="margin-top:20px"><b>Bình luận</b></h5>
                        <textarea class="form-control" rows="3" id="comment" placeholder="Nhập nội dung*" required></textarea>
                        <br>	
			    	    <button class="btn" type="submit">Gửi</button>
			    	 </form>
			    	<?php } ?>
                </div>

		
			</div>
			
			<div class="col-md-3">
				<div class="panel">
					<h5 class="titsp">DANH MUC</h5>
			    	<ul class="list-group list-group-flush">
                       <?php foreach($data_danhmuc as $row): ?>
						
                                <li class="list-group-item "><a href="?act=shop&cateID=<?= $row["cid"] ?>" ><?= $row['cname'] ?> </a></li>
                            <?php endforeach; ?>
                    </ul><br>             
                    <h5 class="titsp">SẢN PHẨM NỔI BẬT</h5><br>
                    <?php foreach($data_spnb as $row) :?> 
		    	 	<div class="sanpham_nb">
			    		<img src="public/images/<?= $row['Image'] ?>" alt="" id="anh_nb">
			    		<div class="cap_spnb">
			    			<a href="?act=detail&id=<?= $row['ID']?>" ><?= $row['Name'] ?></a>
			    	        <p id="gia"><?= $row['Price'] ?><sup>đ</sup></p>
			    		</div>
		    		</div>
		    	<?php endforeach; ?>
	    			
				</div>
			</div>
		</div>
		<table>
       	    <tr>
                <td style="width:405px"><hr class="hr2"></td>
                <td ><a  title="" class="btn" id="tit2"><h4 style="margin-top: 10px">SẢN PHẨM LIÊN QUAN</h4></a></td>
                <td style="width:408px"><hr class="hr2"></td>
            </tr>
        </table>
        <div class="tit2_cap">
        	<p>Có phải bạn đang tìm những sản phẩm dưới dây</p>
        </div>
        <div class="row">
        
        	<?php foreach($data_splq as $row) : ?>
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