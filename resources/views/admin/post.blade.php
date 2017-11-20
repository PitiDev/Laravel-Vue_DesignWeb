@include('admin/head')
<hr width="93%">
 <div class="row" style="margin-top: 20px;margin-bottom: 100px">
 	<div class="col-md-11">
	 <form action="">
	 	<label for="text"><b>Title Post</b></label>
	 	<input type="text" class="form-control" placeholder="ຫົວຂໍ້ບົດຄວາມ" required=""><br>
	 	<label for="text"><b>ເລືອກຮູບ</b></label>
	 	<input type="file" class="form-control" placeholder="ເລືອກຮູບ"><br>
	 	<label for="editor_tiny"><b>ເລືອກໝວດໝູ່</b></label><br>
		 <select class="form-control" id="exampleFormControlSelect1">
	      <option>Web Design</option>
	      <option>Android App</option>
	      <option>IOS App</option>
	      <option>Graphic Design</option>
	      <option>Digital Marketing</option>
	    </select><br>
         <textarea id="editor_tiny" class="editor form-control" name="body">{{ old('body') != null ? old('body') : ''}}</textarea><br>
         <label for="text"><b>Videos</b></label>
	 	<textarea name="" id="" class="form-control"></textarea><br>
	 	<a href="#" class="btn btn-outline-primary" style="float: right;">Submit</a>
	 </form>
 	</div>
 </div>

  <script type="text/javascript" src="{{ url('/')}}/tiny/jquery.tinymce.min.js "></script>
  <script type="text/javascript" src="{{ url('/') }}/tiny/tinymce.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/tiny/tinymce.setting.js"></script>
  <script type="text/javascript" src="{{url('/')}}/tiny/AjaxImage.js"></script>


@include('admin/footer')