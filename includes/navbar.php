<?php

echo<<<'EOT'
                <div class="d-flex justify-content-between mt-3">
                    <div class="">
                        <button type="button" id="sidebarCollapse" class="btn  btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                        <div>
                            <a href="#"><i class="far fa-bell text-muted"></i></a>
                        </div>
                    </div> 
                </div>
                    
                    

EOT;

?>