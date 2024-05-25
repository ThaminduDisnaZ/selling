  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Pages</div>
      <div class="ps-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="index.php">
                          <ion-icon name="home-outline"></ion-icon>
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <?php   
                                    
                                    if (isset($titlewindow)) {
                                   
                                        echo " $titlewindow";
                                    } else {
                                        echo "Title not found";
                                    }
                                    
                                    ?>
                  </li>
              </ol>
          </nav>
      </div>
      <div class="ms-auto">


          <?php  
                            if (isset($titlewindow)) {
                                   
                                   if($titlewindow == "User Profile"){
                                       ?> <div class="btn-group">
              <button type="button" class="btn btn-outline-primary"> Setting </button>
              <button type="button"
                  class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">

                  <?php  
                                                     if (isset($titlewindow)) {
                                                            
                                                            if($titlewindow == "User Profile"){
                                                                ?> <a class="dropdown-item" href="editprofile.php">Edit
                      You Details</a><?php
                                                            }}
                         ?>




                  <!-- <a class="dropdown-item" href="javascript:;">Another action</a>
                                           <a class="dropdown-item" href="javascript:;">Something else here</a>
                                           <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a> -->
              </div><?php
                                   }}
?>





          </div>
      </div>
  </div>
  <!--end breadcrumb-->