<script src="/js/subscribers/form.js"></script>

<div id="form_div">

	<form  id="sub_form" enctype="multipart/form-data" method="POST" >
	           {{csrf_field()}}
		<input type="text" name="name">
		<input type="email" name="email">
		<input  type="number" name="no">
		<button type="submit"  >Subscribe</button>
	
	
	
	</form>
</div>