<div class="container" style="margin-top: 20px;">
		<p><a href="?act=home"  id="chidan"> Trang chủ</a> > <span id="chidan1">Sản phẩm</span></p>
		
		<div class="row row1">
			<div class="col-md-3">
				<div class="panel">
					<h5 class="titsp">DANH MUC</h5>
				<ul class="list-group list-group-flush">
					<?php foreach($data_danhmuc as $row): ?>
						
                    <li class="list-group-item <?php if($cateID==$row['cid']) echo 'active2'?>"><a href="?act=shop&cateID=<?= $row["cid"] ?>" ><?= $row['cname'] ?></a></li>
                    <?php endforeach; ?>

                    
                    
                </ul><br>
                <h5 class="titsp">GIÁ SẢN PHẨM</h5>
				<ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" title="">Giá dưới 100.000đ</a></li>
                    <li class="list-group-item"><a href="#" title="">100.000đ - 200.000đ</a></li>
                    <li class="list-group-item"><a href="#" title="">200.000đ - 300.000đ</a></li>
                    <li class="list-group-item"><a href="#" title="">300.000đ - 500.000đ</a></li>
                    <li class="list-group-item"><a href="#" title="">500.000đ - 1.000.000đ</a></li>
                    <li class="list-group-item"><a href="#" title="">Giá trên 1.000.000đ</a></li>
                </ul><br>
             
		        
                <h5 class="titsp">SẢM PHẨM NỔI BẠT</h5><br>
                <?php foreach($data_spnb as $row): ?>
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
			
			<div class="col-md-9">
				<div>
					<?php if(isset($xep)) { ?>
			        <div class="nav-item dropdown" id="navdrop">
		        	    <label>Sắp xếp :</label>
                        <a class="navbar-link dropdown-toggle" href="#" id="navdrop_nd" data-toggle="dropdown"><?= $xep ?></a>
                       
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?act=shop" id="drop">Măc định</a>
                            <a class="dropdown-item" href="?act=shop&xuly=sort&cach=1" id="drop">A -> Z</a>
                            <a class="dropdown-item" href="?act=shop&xuly=sort&cach=2" id="drop">Z -> A</a>
                            <a class="dropdown-item" href="?act=shop&xuly=sort&cach=3" id="drop">Giá tăng dần</a>
                            <a class="dropdown-item" href="?act=shop&xuly=sort&cach=4" id="drop">Giá giảm dần</a>
                        </div>
                       
                    </div>	
                    <?php } ?>
	        	</div>	
	        	<div class="row">
	        		<?php foreach($data as $row):?>
	        		<div class="col-md-4">
	    	        	<div class="sanpham1">		
			        	    <img src="public/images/<?= $row['Image'] ?>" alt="" id="hinh2">
			             	<div id="cap2">
			         	    	<a href="?act=detail&id=<?= $row['ID']?>" ><?= $row['Name'] ?></a>
				                <p id="gia"><?= $row['Price'] ?><sup>đ</sup></p>
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
	        	<div class="phantrangSP">
 	        		<ul class="pagination">
 	        		<?php if($total_page>=2){ 

 	        			if(isset($_GET['xuly'])){
 	        				if($page>1) { ?>
                            	<li class="page-item"><a class="page-link" href="?act=shop&xuly=sorT&cach=<?= $_GET['cach']?>&page=<?= $page-1?>"><<</a></li>
                            <?php } 
                                       
                            for($i=1 ; $i<= $total_page ;$i++) {?>
                                <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?act=shop&xuly=sorT&cach=<?= $_GET['cach']?>&page=<?= $i ?>"><?php echo $i ?></a></li>
                            <?php }
                            if($page<$total_page) { ?>
                            	<li class="page-item"><a class="page-link" href="?act=shop&xuly=sorT&cach=<?= $_GET['cach']?>&page=<?= $page+1?>">>></a></li>
                            <?php } 

                            }else {

                                if(isset($cateID)) { 
    
                                    if($page>1) { ?>
                            	    <li class="page-item"><a class="page-link" href="?act=shop&cateID=<?= $cateID ?>&page=<?= $page-1?>"><<</a></li>
                                <?php } 

                                    for($i=1 ; $i<= $total_page ;$i++) {?>
                                    <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?act=shop&cateID=<?= $cateID ?>&page=<?= $i ?>"><?php echo $i ?></a></li>

                                <?php } 

                                     if($page<$total_page-1) { ?>
                            	    <li class="page-item"><a class="page-link" href="?act=shop&cateID=<?= $cateID ?>&page=<?= $page+1?>">>></a></li>
                                <?php } 

                             }else { 
                        	    if($page>1) { ?>
                            	<li class="page-item"><a class="page-link" href="?act=shop&page=<?= $page-1?>"><<</a></li>
                                <?php } 

                                for($i=1 ; $i<= $total_page ;$i++) {?>
                                    <li class="page-item"><a class="page-link <?php if($page==$i) echo 'active1'?>" href="?act=shop&page=<?= $i ?>"><?php echo $i ?></a></li>
                                <?php } 
                                if($page<$total_page) { ?>
                            	    <li class="page-item"><a class="page-link" href="?act=shop&page=<?= $page+1?>">>></a></li>
                                <?php }
                            } 
                         } 
                    } ?>

                                    
                    </ul>
	        	</div>
	  		</div>
		</div>
