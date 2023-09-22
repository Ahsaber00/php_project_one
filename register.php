<?php include "hfn/nav.php"?>
<?php include "hfn/header.php"?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
        <h2 class="border b-2 my-2 text-center">Register</h2> 
        
            <?php 
                if(isset($_SESSION['errors'])):
                    foreach($_SESSION['errors'] as $error):
            ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error ?>
                        </div>
                    <?php 
                    endforeach;
                    unset($_SESSION['errors']);
                    endif;
                    ?>
            
           
            <form class="border p-3" action="handelers/handleregister.php" method="post">
                <div class="from group p-2 my-1">
                    <label for="name">Name</label>
                    <br>
                    <input type="text " name="name" class="from-control" id="name" >
                </div>
                <div class="from group p-2 my-1">
                    <label for="email">Email</label>
                    <br>
                    <input type="text " name="email" class="from-control" id="email" > 
                </div> 
                <div class="from group p-2 my-1"> 
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" class="from-control" id="password" >
                </div>
                <div class="from group p-2 my-1">
                    <input type="submit" name="register" value="Register" class="from-control" id="register" >
                </div>
            </form>   
        </div>
    </div>
</div>

<?php include "hfn/footer.php"?>



