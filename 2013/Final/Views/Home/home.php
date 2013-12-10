
<div class="container">
	<div class="well">
		<ul class="nav nav-pills" data-bind="foreach: categories">
		  <li><a href="#" data-bind="text: Name, click: $root.categoryClicked" >Cat 1</a> </li>
		</ul>	
	</div>

	
	<div data-bind="foreach: products">
            <div class="col-sm-3">
                    <div class="well">
                            <h4 data-bind="text: Name"></h4>
							<p data-bind="text: Description"></p>
                            <img width="128px" height="128px" data-bind="attr:{src: Picture_Url}"/>  
                            <p data-bind="text: Price"></p>
                            <a class="glyphicon glyphicon-shopping-cart" data-bind="attr: { href: '?action=addToCart&id=' +id}" ></a>
                    </div>
            </div>
     </div>
</div>

<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
		<a href="?action=showCart&format=json">Cart</a>
	<span class="badge"> <? @$cart = $_SESSION['cart']; echo count($cart); ?></span>
</script>

<script type="text/html" id="login-template">
	
	<p class="glyphicon glyphicon-log-in"> 
			<a href="?action=logout&format=" id="login" class="navbar-link"><? $user=Auth::GetUser(); echo ($name);?></a>
	</p>
	

</script>

<? function Scripts(){ ?>
	
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	<script type="text/javascript">
	$(function(){
	
		$("#shopping-cart").html($("#shopping-cart-template").html());
		$("#login").html($("#login-template").html());

		var vm = {
			
			categories: ko.observableArray(),
			categoryClicked: function(){
				          
				//Get all products or the category selected
				 $.getJSON("?action=products&format=json", { ProductsCategory_id: this.id } ,function(results){
                    //Each product is in this model array
                    var model = results.model;
                    vm.products(model);
                 })
			},
			

			//This is the products
			products: ko.observableArray(),

			//cart: ko.observableArray(),
			cartClicked: function(){
				          
				 $.getJSON("?action=goToCart&format=json", { ProductsCategory_id: this.id } ,function(results){
                  	vm.products(results.model);
                 })
			}
		}
	
		ko.applyBindings(vm);
		
		//Default is to get all categories and display them
		$.getJSON("?action=categories&format=json", function(results){
			
			var model = results.model;
			vm.categories(model);
		});
	});
	</script>
<? } ?>