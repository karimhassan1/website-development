<?php
session_start();
if(!isset($_SESSION["ijazat"])){
    header("Location: http://localhost/school software/admin");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School software acc to school</title>
    <link rel="stylesheet" href="../assests/style/same.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="custome-border d-flex justify-content-evenly align-items-center pxl-80 w-100 container-fluide position-fixed top-0 bg-color">
                <div class="px-5 w-35">
                        Place Of Logo here will be the logo of the site with name
                </div> 

                <nav class="custome-w-60 h-100">
                    <div class="w-100 d-flex justify-content-evenly align-items-center list-unstyled fs-5 h-100">
                    <a class="rounded px-3 py-1 text-decoration-none" href="../home">Home</a>
                    <li class="fs-4"> | </li>
                        <div class="hover-d-block-1">
                            <a class="rounded px-3 py-1 position-relative d-flex justify-content-center">
                                                                                                                        <p>Fee's</p>
                            </a>    
                            <div class="position-absolute dropdown1 d_none" id="dropdown1">
                                <div class="h-pxl-30 d-block">
                            
                                </div>                                
                                 <div class="d-flex flex-column shadow nth-even-child nth-odd-child">
                                    <a href="../fees" class="fs-5 px-4  py-1">Add Fee's</a>
                                    <a href="" class="fs-5 px-4  border-top py-1">Fee's check List</a>
                                    <a href="" class="fs-5 px-4  border-top py-1">Fee's Detail</a>
                                </div>
                            </div>    
                                                                                                                        
                                                                                                                              
                        </div>

                        <li class="fs-4"> | </li>

                        <div class="hover-d-block-2">
                            <a class="rounded px-3 py-1 position-relative d-flex justify-content-center">
                                                                                                                        <p>Students</p>
                            </a>    
                            <div class="position-absolute dropdown2 d_none">
                                <div class="h-pxl-30 d-block">
                                            
                                </div>                                
                                 <div class="d-flex flex-column shadow nth-even-child nth-odd-child">
                                    <a href="../student" class="fs-5 px-4 py-1">Add Student</a>
                                    <a href="../student/studentUpdate.php" class="fs-5 px-4 border-top py-1">Update Student</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">All Students Detail</a>
                                </div>
                            </div>    
                                                                                                                        
                                                                                                                              
                        </div>                        
                            <li class="fs-4"> | </li>
                        <div class="hover-d-block-3">
                            <a class="rounded px-3 py-1 position-relative d-flex justify-content-center">
                                                                                                                        <p>Events</p>
                            </a>    
                            <div class="position-absolute dropdown3 d_none">
                                <div class="h-pxl-30">

                                </div>                                
                                 <div class="d-flex flex-column shadow nth-even-child nth-odd-child">
                                    <a href="" class="fs-5 px-4 py-1">Coming Events</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">Previous Events</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">All Events</a>
                                </div>
                            </div>   
                        </div>  

                        <li class="fs-4"> | </li>
                        <div class="hover-d-block-4">
                            <a class="rounded px-3 py-1 position-relative d-flex justify-content-center">
                                                                                                                        <p>Staff 's</p>
                            </a>    
                            <div class="position-absolute dropdown4 d_none">
                                <div class="h-pxl-30">

                                </div>                                
                                 <div class="d-flex flex-column shadow nth-even-child nth-odd-child">
                                    <a href="" class="fs-5 px-4 py-1">Present Staff</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">Previous Staff</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">Total Staff</a>
                                </div>
                            </div>    
                                                                                                                        
                                                                                                                              
                        </div>                        
                            <li class="fs-4"> | </li>
                        <div class="hover-d-block-5">
                            <a class="rounded px-3 py-1 position-relative d-flex justify-content-center">
                                                                                                                        <p>User's</p>
                            </a>    
                            <div class="position-absolute dropdown5 d_none">
                                <div class="h-pxl-30">

                                </div>                                
                                 <div class="d-flex flex-column shadow nth-even-child nth-odd-child">
                                    <a href="" class="fs-5 px-4 py-1">Add User</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">Update User</a>
                                    <a href="" class="fs-5 px-4 border-top py-1">All User</a>
                                </div>
                            </div>   
                        </div>
                        <li class="fs-4"> | </li>
                        <a class="rounded px-3 py-1 text-decoration-none" href="../samedir/logout.php">Logout</a>
                    </div>
                </nav>
            </header>
        
            

        <script>
               document.querySelector(".hover-d-block-1").addEventListner("click",dflex1);

                function dflex1(){
                    document.querySelector(".dropdown1").classList.toggle("d_block");
                }
                document.querySelector(".hover-d-block-2").addEventListener("click",dflex2)
                function dflex2(){
                    document.querySelector(".dropdown2").classList.toggle("d_block");
                }
                document.querySelector(".hover-d-block-3").addEventListener("click",dflex3)
                function dflex3(){
                    document.querySelector(".dropdown3").classList.toggle("d_block");
                }
                document.querySelector(".hover-d-block-4").addEventListener("click",dflex4)
                function dflex4(){
                    document.querySelector(".dropdown4").classList.toggle("d_block");
                }
                document.querySelector(".hover-d-block-5").addEventListener("click",dflex5)
                function dflex5(){
                    document.querySelector(".dropdown5").classList.toggle("d_block");
                }
                
        </script>
</body>
</html>