
<?php
include'adminheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Faculty Details</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Faculty Details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="10%">Full Name</th>
      <th width="10%">User Name</th>
      <th width="10%">Password</th>
      <th width="5%">Course</th>
      <th width="10%">Branch</th>
       
      <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="fullname"></td>
      <td contenteditable="true" class="username"></td>
      <td contenteditable="true" class="password"></td>
      <td contenteditable="true" class="course"></td>
      <td contenteditable="true" class="branch"></td>
    
    
     
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='fullname'></td>";
   html_code += "<td contenteditable='true' class='username'></td>";
   html_code += "<td contenteditable='true' class='password'></td>";
   html_code += "<td contenteditable='true' class='course'></td>";
   html_code += "<td contenteditable='true' class='branch'></td>";
  
  
   
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var fullname = []; 	
  var username = [];
  var password = [];
  var course = [];
  var branch = [];
  
  
 
  $('.fullname').each(function(){
   fullname.push($(this).text());
  });
  $('.username').each(function(){
   username.push($(this).text());
  });
  $('.password').each(function(){
   password.push($(this).text());
  });
  $('.branch').each(function(){
   branch.push($(this).text());
  });
  $('.course').each(function(){
   course.push($(this).text());
  });
 
  
  
  $.ajax({
   url:"insertfaculty.php",
   method:"POST",
   data:{fullname:fullname, username:username, password:password, course:course, branch:branch},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   // fetch_item_data();
   }
  });
 });
 
 
 
});
</script>


<!-- ===================================================================================== -->
        
           
  <?php
   include'footer.php';
  ?>