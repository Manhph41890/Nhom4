
<body>

	<div id="page">
		<main class="bg_gray">
		<form action="index.php?act=billcomfirm" method="post">
			<div class="container margin_30">
				<div class="page_header">
					<h1>Hóa đơn thanh toán</h1>
				</div>
				<!-- /page_header -->
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="step first">
							<h3>1. Thông tin người dùng và địa chỉ thanh toán</h3>
							<div class="tab-content checkout">
								<!-- Phần đăng ký -->
								<?php
									if (isset($_SESSION['user'])) {
										$user = $_SESSION['user']['user'];
										$address = $_SESSION['user']['address'];
										$email = $_SESSION['user']['email'];
										$tel = $_SESSION['user']['tel'];
									} else {
										$user = "";
										$address = "";
										$email = "";
										$tel = "";
									}
									?>
								<div class="tab-pane fade show active" id="tab_1" role="tabpanel"
									aria-labelledby="tab_1">
									<label for="">Họ tên</label>
									<div class="form-group">
										<input type="text" class="form-control" name="user" value="<?= $user ?>">
									</div>
									<label for="">Email</label>
									<div class="form-group">
										<input type="email" class="form-control" name="email" value="<?= $email ?>">
									</div>
									<label for="">Địa chỉ</label>
									<div class="form-group">
										<input type="text" class="form-control" name="address" value="<?= $address ?>">
									</div>
									<label for="">Số điện thoại</label>
									<div class="form-group">
										<input type="text" class="form-control" name="tel" value="<?= $tel ?>">
									</div>
									<hr>
								</div>
							</div>
						</div>
						<!-- /step -->
					</div>

					<div class="col-lg-4 col-md-6">
						<!-- Bước 2: Thanh toán và vận chuyển -->
						<div class="step middle payments">
							<h3>2. Thanh toán và Vận chuyển</h3>
							<!-- Phương thức thanh toán -->
							<ul name="idpttt">
								<?php 
								    foreach ($listpttt as $pttt) {
										extract($pttt);
									echo'
								<li>
									<label class="container_radio" value="'.$id.'">'.$name_pttt.'
                                    <input type="radio" name="idpttt" value="'. $pttt['id'].'" checked>
										<span class="checkmark"></span>
									</label>
								</li>'; 
								}?>
							</ul>
							<!-- Thông tin thanh toán -->

							<h6 class="pb-2">Phương thức vận chuyển</h6>

							<!-- Phương thức vận chuyển -->
							<ul name="idptvc">
                                <?php 
                                    foreach ($listptvc as $ptvc) {
                                        extract($ptvc);
                                    echo'
                                        <li>
                                            <label class="container_radio" value="'.$id.'">'.$nam_ptvc.'
                                            <input type="radio" name="idptvc" value="'.$ptvc['id'].'" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>'; 
                                }?>
							</ul>
						</div>
						<!-- /step -->
					</div>

					
						<!-- Bước 3: Tóm tắt đơn hàng -->
                        <div class="col-lg-4 col-md-6">
						<?php
                            bill();
                        ?>
                        </div>
                        <div class="box_general summary">
                        <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="btn_1 full-width">
						</div>
						<!-- /step -->
					
				</div>
				<!-- /row -->
			</div>  
</form>
			<!-- /container -->
		</main>
		<!--/main-->
	</div>

</body>

</html>
