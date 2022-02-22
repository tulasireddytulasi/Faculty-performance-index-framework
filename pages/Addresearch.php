
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Research Projects</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Add Research Projects
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="20%">Research Project Title</th>
      <th width="18%">Funded By </th>
      <th width="12%">Total Grant Sanctioned</th>
      <th width="12%">From Date</th>
      <th width="12%">To Date</th>
      <th width="12%">Status</th>
      <th width="12%">Role</th>
      <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="title"></td>
      <td contenteditable="true" class="funded"></td>
      <td contenteditable="true" class="grant"></td>
      <td contenteditable="true" class="fromdate"></td>
      <td contenteditable="true" class="todate"></td>
      <td contenteditable="true" class="status"></td>
      <td contenteditable="true" class="role"></td>
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
   html_code += "<td contenteditable='true' class='title'></td>";
   html_code += "<td contenteditable='true' class='funded'></td>";
   html_code += "<td contenteditable='true' class='grant'></td>";
   html_code += "<td contenteditable='true' class='fromdate'></td>";
   html_code += "<td contenteditable='true' class='todate'></td>";
   html_code += "<td contenteditable='true' class='status'></td>"; 
   html_code += "<td contenteditable='true' class='role'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var title = [];
  var funded = [];
  var grant = [];
  var fromdate = [];
  var todate = [];
  var status = [];
  var role = [];
  
 
  $('.title').each(function(){
   title.push($(this).text());
  });
  $('.funded').each(function(){
   funded.push($(this).text());
  });
  $('.grant').each(function(){
   grant.push($(this).text());
  });
  $('.fromdate').each(function(){
   fromdate.push($(this).text());
  });
  $('.todate').each(function(){
   todate.push($(this).text());
  });
  $('.status').each(function(){
   status.push($(this).text());
  });
  $('.role').each(function(){
   role.push($(this).text());
  });

   
  
  
  $.ajax({
   url:"insertresearch.php",
   method:"POST",
   data:{title:title, funded:funded, grant:grant, fromdate:fromdate, todate:todate, status:status, role:role},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
  //  fetch_item_data();
   }
  });
 });
 
 
 
});
</script>


<!-- ===================================================================================== -->
        
           
  <?php
   include'footer.php';
  ?>