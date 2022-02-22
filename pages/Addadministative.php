
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Administative Activities Details</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Administative Activities Details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="23%">Work Title</th>
      <th width="20%">Duty Assigned</th>
      <th width="12%">From Date</th>
       <th width="12%">To Date</th>
     <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="title"></td>
      <td contenteditable="true" class="duty"></td>
      <td contenteditable="true" class="fromdate"></td>
       <td contenteditable="true" class="todate"></td>
    
     
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
   html_code += "<td contenteditable='true' class='duty'></td>";
   html_code += "<td contenteditable='true' class='fromdate'></td>";
    html_code += "<td contenteditable='true' class='todate'></td>";
  
   
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
  var duty = [];
  var fromdate = [];
  var todate = [];
  
 
  $('.title').each(function(){
   title.push($(this).text());
  });
  $('.duty').each(function(){
   duty.push($(this).text());
  });
  $('.fromdate').each(function(){
   fromdate.push($(this).text());
  });
   $('.todate').each(function(){
   todate.push($(this).text());
  });
  
  
  $.ajax({
   url:"insertadministative.php",
   method:"POST",
   data:{title:title, duty:duty, fromdate:fromdate, todate:todate},
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