<?php include('includes/head_section.php') ?>

<?php include('includes/navbar.php') ?>
<br>
<br>
<br>
<center>
<form action="regConnection.php" method="post" onsubmit="return validation();">
    <h2>Register</h2>
    <input type="text" style="text-align:center; width:400px;" name="name" id="name" placeholder="Enter your name!" class="form-control" required><br>
    <input type="email" style="text-align:center; width:400px;" name="email" id="email" placeholder="Enter your email!" class="form-control" required><br>
    <input type="password" style="text-align:center; width:400px;" name="password" id="password" placeholder="Enter your password!" class="form-control" required><br>
    <button type="submit" value="Submit" name="submit" class="btn btn-primray form-control">Register</button>
    <div id="myerror" style="color: red; text-align:center; background-color: #ddd; text-decoration:underline; font-size:18px; width:300px;"></div>
    <br>
    <span>Your Gender: &nbsp;</span>
    <br>
    <label for="male">Male</label>
    <input type="radio" name="gender" value="male" id="male" required>
    <label for="female">Female</label>
    <input type="radio" name="gender" value="female" id="female"required>
</form>
</center>

<script type="text/javascript">

    function validation(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if (name=="" || password=="" || email==""){
        
        document.getElementById('myerror').innerHTML = "All fields are required";
            return false;

        }else if(name.length<5){
            document.getElementById('myerror').innerHTML = "name must be atlest 5 characters";
            
            return false;
        }else if(password.length<8){
            document.getElementById('myerror').innerHTML = "passoword must be atlest 8 characters";

            return false;
        }else {
            return true
        }
    
    
    
    
    
    }



</script>



<?php include('includes/footer.php') ?>