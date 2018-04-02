<?php 
require_once('db.php');



 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title>assignment 11</title>
  </head>
  <!-- <style type="text/css">
  	.shop {
  		margin:5rem;
  		height:5rem;
  	}
  	h1 {
  		height:5rem;
  		color:#4a71e0;
  		text-align: center;
  		font-family: 'Indie Flower', cursive;
  		font-size:70px;
  	}
  	.card {
  		width:18rem;
  	}
  </style> -->
  <body>
  	<div class="container">
      <h1 class="text-center text-primary my-5">Welcome to Jacob's Shop</h1>
      <div class="row">

  	<?php
  		$db= new DBConnection();
  		$result = $db->getAllItemsReturnObj();
        foreach($result as $thing) {
  	?>
  	 <div class="col-4">

            <div class="card" style="width: 18rem; max-width:100%">
              <img class="card-img-top" src="<?php echo $thing->getImg(); ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="min-height: 5rem">
                  <?php
                  echo $thing->getName();
                  ?>
                </h5>

                <p class="text-right text-primary">
                  <b>
                  	<span class="card-price">
                  <?php
                  echo $thing->getPrice();
                  ?>
                  </span>
                  </b>
                </p>
                <div class="text-right">
                  <button class="btn btn-success purchase" data-price="<?php
                  echo $thing->getPrice();
                  ?>">
                    Purchase
                  </button>
                </div>
              </div>
            </div>   
          </div>


        <?php
          }

        ?>
        <div style="background-color: #ddd; color: #222; position:fixed; right: 2rem; bottom: 2rem; padding: 1rem 2.5rem; border-radius: 1rem">
          Total: <span class="TotalPrice">0</span>
        </div>
      </div>
    </div>
  	<!-- <div class="shop">
    <h1>Welcome to Jacob's Shop</h1>
    </div>
	<div class="row">
	
		<div class="col-4">
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_32_405941?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">MEN U BLOCKTECH COAT</h5>
	    	<p class="card-text">69.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_69_404364?$prod$" alt="Card image cap">
	  		<div class="card-body">
		    <h5 class="card-title">MEN COTTON FULL-ZIP PARKA</h5>
		    <p class="card-text">19.90</p>
		    <a href="#" class="btn btn-primary">Purchase</a>
		  	</div>
			</div>
		</div>
		<div class="col-4">
		
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_03_182577?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">MEN BLOCKTECH PARKA</h5>
	    	<p class="card-text">49.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_63_164168?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">MEN BLOCKTECH PARKA</h5>
	    	<p class="card-text">14.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_16_404151?$prod$" alt="Card image cap">
	  		<div class="card-body">
		    <h5 class="card-title">MEN BLOCKTECH PARKA</h5>
		    <p class="card-text">14.90</p>
		    <a href="#" class="btn btn-primary">Purchase</a>
		  	</div>
			</div>
		</div>
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_03_403858?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">MEN BLOCKTECH PARKA</h5>
	    	<p class="card-text">9.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_62_405404?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">MEN BLOCKTECH PARKA</h5>
	    	<p class="card-text">49.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
		<div class="col-4">
		
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_54_405019?$prod$" alt="Card image cap">
	  		<div class="card-body">
		    <h5 class="card-title">MEN BLOCKTECH PARKA</h5>
		    <p class="card-text">19.90</p>
		    <a href="#" class="btn btn-primary">Purchase</a>
		  	</div>
			</div>
		</div>
		<div class="col-4">
		
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_03_407408?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">WOMEN U BOAT NECK SHORT-SLEEVE T-SHIRT</h5>
	    	<p class="card-text">9.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_01_408479?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">WOMEN MILANO RIBBED 3/4 SLEEVE PULLOVER</h5>
	    	<p class="card-text">9.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
		<div class="col-4">
		
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_00_404545?$prod$" alt="Card image cap">
	  		<div class="card-body">
		    <h5 class="card-title">WOMEN RAYON LONG-SLEEVE T-SHIRT BLOUSE</h5>
		    <p class="card-text">9.90</p>
		    <a href="#" class="btn btn-primary">Purchase</a>
		  	</div>
			</div>
		</div>
		<div class="col-4">
	
			<div class="card">
	  		<img class="card-img-top" src="https://uniqlo.scene7.com/is/image/UNIQLO/goods_24_404546?$prod$" alt="Card image cap">
	  		<div class="card-body">
	    	<h5 class="card-title">WOMEN SOFT COTTON LONG SLEEVE SHIRT (ONLINE E</h5>
	    	<p class="card-text">14.90</p>
	    	<a href="#" class="btn btn-primary">Purchase</a>
	  		</div>
			</div>
		</div>
	</div> --> 
   
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- 方法一 -->
    <!-- <script type="text/javascript">
    	function AddPrice(price){
    		//console.log(price);
    		var current_price = $('.TotalPrice').text();
    		$('.TotalPrice').text((parseFloat(current_price) + parseFloat(price)).toFixed(2));
    	}
    </script> -->
    <!-- 方法二 -->
    <script type="text/javascript">
    	// $('.purchase').click(function(){
    	// 		var price = $(this).data('price');//this->button element->data-price
    	// 		var current_price = $('.TotalPrice').text();
    	// 	$('.TotalPrice').text((parseFloat(current_price) + parseFloat(price)).toFixed(2));
    	// 	})

    	// $('.purchase').each(function(){
    	// 	$(this).click(function(){
    	// 		console.log('123');
    	// 	})
    	// })
// 方法三
		$('.purchase').click(function(){
			var price = $(this).parents('.card-body').find('.card-price').text();
			var current_price = $('.TotalPrice').text();
    		$('.TotalPrice').text((parseFloat(current_price) + parseFloat(price)).toFixed(2));
    		}
    		);
    </script>
  </body>
</html>