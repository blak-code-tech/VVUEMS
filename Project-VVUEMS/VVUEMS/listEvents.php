<?php session_start();  require_once 'require/core.php'?>
<?php require_once 'require/header.php'; ?>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/nav.php'; ?>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center pt-12">
              
            
            <div class="col-auto">
                <div class="table-responsive text-center">
      
                    <table  class="table table-hover table-sm" data-toggle="table"
                                                                     data-search="true"
                                                                     data-filter-control="true" 
                                                                     data-click-to-select="true"
                                                                     data-pagination="true"
                                                                     data-search-align="left"
                                                                     data-show-columns="true"
                                                                     data-show-toggle="true"
                                                                     data-show-refresh="true"
                                                                     data-show-fullscreen="true"
                                                                     data-show-pagination-switch="true"
                                                                     data-pagination-pre-text="previous"
                                                                     data-pagination-next-text="Next"
                                                                     data-pagination-h-align="left"
                                                                     data-pagination-detail-h-align="right"
                                                                     data-page-list="[10,20,30,40,50,All]"
                                                                     data-toolbar="#toolbar">
                        <?php 
                           
                                require_once 'require/listEvent_processing.php';
                            
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'require/main_footer.php'; ?>