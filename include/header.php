
<section class="header-belt bg-dark text-light">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="">
                            
                            <?php if(isset($_SESSION['username'])){ 
                                $checkingUser = $_SESSION['username'];
                               echo "<h3 class='box-in-name mt-2 mb-3'>" . substr($checkingUser,0,1) ."</h3>";
                                } 
                                else{
                                    echo "<h1 class='heading mt-2 mb-3'>MY CRM</h1>";
                                }   
                            ?>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="head-inks">
                           <?php 
                           if(isset($_SESSION['login'])){?>
                           <a href="<?php echo ab_path ?>/server/logout.php?logout=true"><i class="fas fa-power-off"></i></a> 
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>