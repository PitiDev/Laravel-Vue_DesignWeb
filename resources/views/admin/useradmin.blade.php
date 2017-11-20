@include('admin/head')

<hr width="92%">
 <h5><b>User Admin</b></h5>
<hr width="92%">
<section>
  <div class="">
  	<div class="w3-row-padding">
  	  <table class="table table-hover">
  		<tr style="background-color: #ffffff;">
  		  <th>#ID</th>
  		  <th>Name</th>
  		  <th>Email</th>
  		  <th>PassWord</th>
  		  <th>Action</th>
  		</tr>
  		<tr>
  		  <td>1</td>
  		  <td>{{ Auth::user()->name }}</td>
  		  <td>{{ Auth::user()->email }}</td>
  		  <th>XXXXXXXX</th>
  		  <td>
  		  	<i class="fa fa-eye" aria-hidden="true"></i>|
  		  	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>|
  		  	<i class="fa fa-trash" aria-hidden="true"></i>
  		  </td>
  		</tr>
  	</table>
  	</div>
  </div>
</section>
@include('admin/footer')