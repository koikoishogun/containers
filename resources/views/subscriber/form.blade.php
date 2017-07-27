<script src="/js/subscribers/form.js"></script>

<div id="form_div">

	<form  id="sub_form" >
	           {{csrf_field()}}
		<input type="text" name="name">
		<input type="email" name="email">
		<input  type="number" name="no">
		<button type="submit"  >Subscribe</button>
	
	
	
	</form>
</div>