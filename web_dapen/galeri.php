


<section id="news" class="news">
			<div class="container">
				<div class="row text-center">
					<h3 class="section-sub-title">Galeri</h3>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<?php
					$queryp = "SELECT * FROM tb_gambar";
					$sqlp = mysqli_query($connect, $queryp);
					while ($datap = mysqli_fetch_array($sqlp)) { ?>
					<div class="col-md-3 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
								<a class="gallery-popup" href="admindapen/upload/<?php echo $datap['gambar']; ?>" class="latest-post-img">
									
									<img  class="img-responsive" src="admindapen/upload/<?php echo $datap['gambar']; ?>" width="365" height="205">
								</a>
							
							<div class="modal fade" id="modal-gambar<?php echo $datap['id_gambar']; ?>">
														<div class="modal-dialog" style="width:80%;">
														  <div class="modal-content" id="lihat">
															<embed src="admindapen/upload/<?php echo $datap['gambar']; ?>" width="100%" height="700"> </embed>
														  </div>
														</div>
													</div>
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a href=""><?php echo $datap['nama_gambar']; ?></a>
								</h4>
								<div class="latest-post-meta">
									<span class="post-item-date">
									<i class="fa fa-clock-o"></i> <?php echo $datap['tgl_upload']; ?>
									</span>
								</div>
							</div>
						</div><!-- Latest post end -->
					</div><!-- 1st post col end -->
					<?php } ?>
				</div>
				<!--/ Content row end -->

			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->