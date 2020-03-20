<?php

$queryp = "SELECT * FROM berita ORDER BY id desc ";
$sqlp = mysqli_query($connect, $queryp);
$datap = mysqli_fetch_assoc($sqlp);

?>

   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/pal12.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">Berita Terbaru</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li>Berita</li>
                        <!-- <li><a href="#">News Single</a></li> -->
                     </ol>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

               <div class="post-content post-single">
                  <div class="post-media post-image image-angle">
                     <img src="admindapen/upload/<?php echo $datap['gambar']; ?>" width="100%" class="img-responsive" alt="">
                  </div>

                  <div class="post-body">
                     <div class="entry-header">
                        <div class="post-meta">
                           <span class="post-author">
                              <i class="fa fa-user"></i><a href="#"> Admin</a>
                           </span>
                           <span class="post-cat">
                              <i class="fa fa-folder-open"></i><a href="#"> Berita</a>
                           </span>
                           <span class="post-meta-date"><i class="fa fa-calendar"></i><font color="black"> Januari, 2020</font></span>
                           <!-- <span class="post-comment"><i class="fa fa-comment-o"></i> 03<a href="#" class="comments-link">Comments</a></span> -->
                        </div>
                        <h2 class="entry-title">
                           <a href="#"><?php echo $datap['judul']; ?></a>
                        </h2>
                     </div><!-- header end -->

                     <div class="entry-content">
                        <blockquote>
                        <?php echo $datap['konten']; ?>
                    </blockquote>
                    </div>


                     
                  </div><!-- post-body end -->
               </div><!-- post content end -->

            </div><!-- Content Col end -->

                


               </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

         </div><!-- Main row end -->

      </div><!-- Conatiner end -->
   </section><!-- Main container end -->

	

  