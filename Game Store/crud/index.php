<?php 

require_once("../crud/php/component.php");

require_once("../crud/php/date.php");

require ("../crud/php/operation.php");

Createdb();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <style type="text/css">
  	body{
    background: url(bg.jpg);
  
    background-size: cover;
    background-repeat: no-repeat;
}
  </style>
    <title>Game Store</title>
</head>
<body>
    
    <main>
    	<div class="container text-center">
    		<h1 class="py-4 bg-dark text-light rounded"><i class="fa fa-gamepad"></i> Game Store</h1>
    	</div>
    	<div class="d-flex justify-content-center">
    		<form action="" method="post" class="w-50">
    			<div class="py-2">
    				<div class="input-group mb-2">
    		      		 <?php inputElement("<i class='fa fa-id-badge'></i>","ID", "game_id",setID()); ?>   	
				    </div>
    			</div>
    			<div class="pt-2">
    				<?php inputElement("<i class='fa fa-id-badge'></i>","Game name","game_name","")?>
    			</div>
    			<div class="row pt-2">
    				<div class="col">
    					<?php dateee("<i class='fa fa-calendar'></i>","Release date","release_date","")?>
    				</div>
    				<div class="col">
    					<?php dateee("<i class='fa fa-usd'></i>","Price","price","")?>
    				</div>
    			</div>    
    			<div class="d-flex justify-content-center">
    				<?php buttonElement("btn-create","btn btn-success","<i class='fa fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
    				<?php buttonElement("btn-create","btn btn-primary","<i class='fa fa-refresh'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
    				<?php buttonElement("btn-create","btn btn-light border","<i class='fa fa-pencil'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
    				<?php buttonElement("btn-delete","btn btn-danger","<i class='fa fa-trash'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn();?>
    				
    			</div>				
    		</form>
    	</div>
    		<!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Game name</th>
                        <th>Release Date</th>
                        <th>Price</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['game_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['release_date']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['price']; ?></td>
                                   <td><i class="fa fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>
    </main>

<script type="text/javascript" src="jscript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>