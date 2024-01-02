<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Row-->


        <!--Content area here-->

        <?php
                    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                        $url = "https://";
                    else
                        $url = "http://";
                    // Append the host(domain name, ip) to the URL.   
                    $url .= $_SERVER['HTTP_HOST'];

                    // Append the requested resource location to the URL   
                    $url .= $_SERVER['REQUEST_URI'];
                  
                    ?>

        <?php
                 
                 $h_url = URLROOT .  "/"; //home_url
                 $e_url = URLROOT . "/pages/edit_profile"; //edit_user_url
   
 
                 if ($url == $e_url) {
                     //page edit user
 
                     if ($_SESSION['user_role'] == "Student") {

                         require 'edit_profile.php';

                     }else{

             
                     }
 
                 } else {
                 }

                    ?>

                    
        <!--End of Content area here-->
        

        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->


