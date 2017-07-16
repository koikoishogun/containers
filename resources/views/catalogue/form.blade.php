<script  src="/js/cat/form.js"></script>
<div>

	<form  method="POST" class="cat_form" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="email"  placeholder="please enter email" name="email" >
	<input type="submit" value="Send Catalogue">
	
	</form>

</div>