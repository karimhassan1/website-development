
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../samedir/header.php") ?>
    <div class="my-100-px w-100 d-flex flex-column justify-content-center align-items-center" >
            <div class="bg-success w-500-px rounded-top py-2 text-center ">
                <p class="h5 text-white"> Add Fees Monthly</p>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class=" border border-success shadow-sm d-flex flex-wrap justify-content-between w-500-px p-2 rounded-bottom">

                <fieldset class="d-inline my-2 w-50">
                        <legend>Student-Name <i class="text-danger">*</i></legend>
                        <input type="text" name="studentName" class="custome-w-90" required>
                </fieldset>

                <fieldset class="d-inline my-2 w-50">
                        <legend>Father-Name <i class="text-danger">*</i></legend>
                        <input type="text" name="fatherName" required class="custome-w-90">
                </fieldset>
                
                <fieldset class="d-inline w-25 my-2">
                        <legend>Section <i class="text-danger">*</i></legend>
                                <select name="section" class="w-100">
                                    <option value="boys">Boys</option>
                                    <option value="girls">Girls</option>
                                </select>
                </fieldset>
                <fieldset class="d-inline custome-w-70 my-2">

                        <legend>Phone-number <i class="text-danger">*</i></legend>
                        <input type="tel" name="phoneNumber" class="custome-w-90"  min="11" max="11" placeholder="03xxxxxxxxx" required>
                        
                </fieldset>
                <fieldset class="d-inline w-25 my-2">
                        <legend>Date-Of-Birth <i class="text-danger">*</i></legend>
                        <input type="date" name="dateOfBirth" class="w-100" required>
                        
                </fieldset>

                <fieldset class="d-inline custome-w-70 my-2">
                        <legend>Email</legend>
                        <input type="text" name="email" class="custome-w-90">
                </fieldset>

                <fieldset class="d-inline w-25 my-2">
                        <legend>Class <i class="text-danger">*</i></legend>
                        <select name="class" id="" class="w-100">
                            <option value="playGroup">Play Group</option>
                            <option value="nursery">Nursery</option>
                            <option value="kg">K.G</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>
                        
                        
                </fieldset>

                <fieldset class="d-inline custome-w-70 my-2">
                        <legend>Adress <i class="text-danger">*</i></legend>
                         <input type="text" name="adress" class="custome-w-90" required>
                </fieldset>

                <fieldset class="d-inline my-2 custome-w-70">
                        <legend>Gender <i class="text-danger">*</i></legend>
                        <span class="mx-3">
                            <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male">
                        </span>
                        <span class="mx-3">                        
                            <label for="female">Female</label>
                            <input type="radio" id="female" name="gender" value="female">
                        </span>
                        <span class="mx-3">
                            <label for="other">Other</label>
                            <input type="radio" id="other" name="gender" value="other"> 
                        </span>
                </fieldset>


                <fieldset class="w-100 d-flex justify-content-center my-3">
                    <input type="submit" name="" id="" class="w-25 py-2">
                </fieldset>
            </form>
    </div>
</body>
</html>