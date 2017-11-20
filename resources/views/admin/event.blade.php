@include('admin/head')

<hr width="92%">
 <h5>Event Post</h5>
<hr width="92%">
<section>
   <div class="row" style="margin-top: 20px;margin-bottom: 100px">
 	<div class="col-md-11">
	 <form action="">
	 	<label for="text"><b>Title Event</b></label>
	 	<input type="text" class="form-control" placeholder="ຫົວຂໍ້ບງານ" required=""><br>
	 	<label for="text"><b>ເລືອກຮູບ</b></label>
	 	<input type="file" class="form-control" placeholder="ເລືອກຮູບ"><br>
         <textarea id="editor_tiny" class="editor form-control" name="body">{{ old('body') != null ? old('body') : ''}}</textarea><br>
	 	<a href="#" class="btn btn-outline-primary" style="float: right;">Submit</a>
	 </form>
 	</div>
 </div>

  <script type="text/javascript" src="{{ url('/')}}/tiny/jquery.tinymce.min.js "></script>
  <script type="text/javascript" src="{{ url('/') }}/tiny/tinymce.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/tiny/tinymce.setting.js"></script>
  <script type="text/javascript" src="{{url('/')}}/tiny/AjaxImage.js"></script>


</section>
@include('admin/footer')