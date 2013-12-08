
<style type="text/css">
	#item-list .well img {
		width: 100px;
		height: 100px;
		margin: 5px;
		float: left;
	}
	#shopping-cart-list {
		position: fixed;
		right: 	0px;
		top: 	20%;
		bottom: 20%;
		height: 60%;
		width: 	200px;
		overflow-y: scroll;
		background: #FFFFFF;
		border-radius: 5px 0px 0px 5px;
		border: 1px solid #000;
		padding: 5px;
	}
	#shopping-cart-list img {
		float: left;
		width: 30px;
		height: 30px;
	}
</style>
<div class="container">
	<div id="category-list">
		<ul class="nav nav-pills" data-bind="foreach: categoryList">
		  <li data-bind="css: { active: $data == $root.currentCategory() }" >
		  	<a href="#" data-bind="text: Name, click: $root.selectCategory"></a>
		  </li>
		</ul>	
	</div>
	<br /><br />
	
	<div class="row" id="item-list" data-bind="foreach: itemList">
		<div class="col-md-3" data-bind="">
			<div class="well clearfix">
				<img alt="item image" data-bind="attr: {src: Picture_Url}" />
				<h4 data-bind="text: Name"></h4>
				<p data-bind="text: Description"></p>
				$<span data-bind="text: Price"></span>
				<button class="btn btn-success pull-right" data-bind="click: $root.addToCart">
					<span class="glyphicon glyphicon-shopping-cart"></span>
					Add To Cart
				</button>
			</div>
		</div>
	</div>
	
	<div id="shopping-cart-list" data-bind="display: cart().length > 0">
		<div  data-bind="foreach: cart" >
			<div class="well well-sm clearfix">
				<img alt="item image" data-bind="attr: {src: Picture_Url}" />
				<h6 data-bind="text: Name"></h6>
				<p data-bind="text: Description"></p>
				$<span data-bind="text: Price"></span>
				<button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.addToCart">
					<span class="glyphicon glyphicon-shopping-del"></span>
					Remove
				</button>
			</div>
		</div>
		<div>
			Total: $ <span data-bind="text: cartTotal"></span>
		</div>
	</div>
	
</div>

<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
	<a href="#" class="navbar-link">Cart</a>
	<span class="badge" data-bind="text: cart().length"></span>
</script>
<? function Scripts(){ ?>
	
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	
	<script type="text/javascript">
	$(function(){
		var vm = {
			categoryList: ko.observableArray(),
			currentCategory: ko.observable(),
			itemList: ko.observableArray(),
			cart: ko.observableArray(),
						
			selectCategory: function(){
				vm.currentCategory(this);
				$.get("?action=list&format=json",{CategoryId:this.id},null,'json')
					.always(function (results) {
						vm.itemList(results.model);
					});		    	
			},
			addToCart: function(){
				vm.cart.push(this);
			}
		}
		vm.cartTotal = ko.computed(function(){
				var tot = 0;
				$.each(vm.cart(), function(i,x){
					tot += +x.Price;
				})
				return tot;
		});
		ko.applyBindings(vm);
		$("#shopping-cart").html($("#shopping-cart-template").html())
		ko.applyBindings(vm, $("#shopping-cart")[0]);
		
		$.get("?action=categories&format=json",null,null,'json')
			.always(function (results) {
				vm.categoryList(results.model);
			})
	});
	</script>
<? } ?>