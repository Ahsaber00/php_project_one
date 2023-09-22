<?php include "hfn/nav.php"?>
<?php include "hfn/header.php"?>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5 border p-2">
            <h2 class="border my-2 bg-danger p-2" >UUID: <?php echo $_SESSION['auth'][2]?></h2>
            <h2 class="border my-2 bg-success p-2" >Name: <?php echo $_SESSION['auth'][0]?></h2>
            <h2 class="border my-2 bg-primary p-2">Email: <?php echo $_SESSION['auth'][1]?></h2>
        </div>
    </div>
</div>

<?php include "hfn/footer.php"?>