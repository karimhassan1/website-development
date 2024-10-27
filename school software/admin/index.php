<?php
    include("./samedir/config.php");
     function scrf_generator($bytes){
        $scrf_binary_token = random_bytes($bytes);
        return bin2hex($scrf_binary_token);        
    }    
    session_start();       
    if(!isset($_SESSION["csrf_token"])){
            $csrf_hex_token = scrf_generator(32);
            $_SESSION["csrf_token"] =$csrf_hex_token;
        }
        

    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // cross site request frogery attact depence code
        echo "<br>";
        $csrf_check_token =$_POST["csrf-token"];
        $nom = $_POST["nom"];
        $patachabi = $_POST["patachabi"];
        
        $filter_email = filter_var($nom,FILTER_VALIDATE_EMAIL);
            if(!$filter_email){
                $credential_error = "Invalid Email format";
                exit;
            }
        
        $filter_password = filter_var($patachabi,FILTER_SANITIZE_STRING);


        // echo "<br> <br> this is hash password" . $hash_password . "<br>";




        if(isset($_SESSION["csrf_token"]) && $csrf_check_token === $_SESSION["csrf_token"]){
            $check_credential = mysqli_prepare($conn_karwala,"select * from karwala where nom=?");
            mysqli_stmt_bind_param($check_credential,'s',$filter_email);
            mysqli_stmt_execute($check_credential);
            $credential_result = mysqli_stmt_get_result($check_credential);
            
            $row = mysqli_fetch_assoc($credential_result);

                if(mysqli_num_rows($credential_result) > 0 ){
                    if(password_verify($filter_password,$row["patakey"])){
                        $_SESSION["roll"] = $row["Roll"];
                        $_SESSION["ijazat"] = "ijazat";
                        header("Location: http://localhost/school software/admin/home");

                    }else{
                        $credential_error = "Invalid Username or Password";
                    }
                    
                }else{
                    $credential_error = "Invalid Username or Password";
                }
        
        }else{
            $token_error = "Invalid token";
        }
        

        
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>School software according to school</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Karim Hassan">
        <meta name="description" content="School managment software">
        <meta name="keyword" content="school managment,school software,fee software">
        <meta name="robot" content="index">
        <link rel="stylesheet" href="./assests/style/same.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="bg-color min-h-100">
    <header class="custome-border d-flex align-items-center pxl-80 w-100 position-fixed top-0">
                <div class="px-5">
                        Place Of Logo here will be the logo of the site with name
                </div> 
    </header>
        <main class="container-fluide position-relative pxl-top-100 d-flex flex-column align-items-center justify-content-start text-color ">
            <div class="pxl-350 rounded d-flex flex-column justify-content-between  custome-border">
                <div class="pxl-h-50 bg-success w-100 d-flex align-items-center justify-content-center">
                    <p class="h4 text-white">Login to Admin Panel</p>
                </div>
                <form action="./" method="post" class="pxl-h-310 d-flex flex-column align-items-center shadow-sm border-success border rounded-bottom  justify-content-evenly">

                <?php 
                        if(isset($token_error)){
                        ?>
                            <div class="custome-w-90 border custome-h-10 bg-light-red d-flex justify-content-center align-items-center text-capitalize fs-5">
                                <p><?php echo $token_error; ?></p>
                            </div>
                            
                        <?php
                            }
                    ?>
                    <?php
                            if(isset($credential_error)){
                        ?>
                            <div class="custome-w-90 border custome-h-10 bg-light-red d-flex justify-content-center align-items-center text-capitalize fs-5">
                                <p><?php echo $credential_error; ?></p>
                            </div>
                            
                        <?php
                            }
                    ?>    
                    <fieldset class="custome-w-90 h-25">
                        <legend class="fs-5">User-Name<sup class=" text-danger">*</sup></legend>
                        <input type="email" class="w-100 h-50 p-1 fs-5" name="nom" required>
                    </fieldset>
                    <fieldset class="custome-w-90 h-25">
                        <legend class="fs-5">Password<sup class=" text-danger">*</sup></legend>
                        <input type="password" class="w-100 h-50 p-1 fs-5" name="patachabi" required>
                    </fieldset>
                    

                    <fieldset class="custome-h-15 custome-w-90 d-flex flex-row align-items-center ">
                        <p class="h5 d-inline">Verify you are human</p>
                        <input type="checkbox" id="checkbox" class="w-25 h-25 d-inline" value="1" required>
                    </fieldset>

                    <fieldset class="d-flex justify-content-center w-100 custome-w-90">
                        <input class="d-none" type="hidden" name="csrf-token" value="<?php echo $_SESSION["csrf_token"];?>" id="">
                        <input type="submit" id="submit" class="w-25 h-50 p-1 fs-5" name="nateja">
                        </fieldset>

                </form>

            </div>
            


        </main>
        <script>
                let submit = document.getElementById("submit");
                submit.addEventListener("click",()=>{
                   let checkbox =  document.getElementById("checkbox").value;
                   console.log(checkbox);
                })
                

        </script>


    </body>

</html>
<?php
                      
                