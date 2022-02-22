
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Event Attended Details</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Attended Details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="18%">Title</th>
      <th width="10%">Type</th>
      <th width="18%">Associate</th>
      <th width="5%">From Date</th>
      <th width="5%">To Date</th>
      <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="title"></td>
      <td contenteditable="true" class="type"></td>
      <td contenteditable="true" class="asso"></td>
      <td contenteditable="true" class="from1"></td>
      <td contenteditable="true" class="to1"></td>
     
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
   html_code += "<td contenteditable='true' class='type'></td>";
   html_code += "<td contenteditable='true' class='asso'></td>";
   html_code += "<td contenteditable='true' class='from1'></td>";
    html_code += "<td contenteditable='true' class='to1'></td>";
   
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
  var type = [];
  var asso = [];
  var from1 = [];
  var to1 = [];
 
  $('.title').each(function(){
   title.push($(this).text());
  });
  $('.type').each(function(){
   type.push($(this).text());
  });
  $('.asso').each(function(){
   asso.push($(this).text());
  });
  $('.from1').each(function(){
   from1.push($(this).text());
  });
   $('.to1').each(function(){
   to1.push($(this).text());
  });
  
  $.ajax({
   url:"insertevent1.php",
   method:"POST",
   data:{title:title, type:type, asso:asso, from1:from1, to1:to1},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 //fetch_item_data();
 
});
</script>


<!-- ===================================================================================== -->
        
           
  <?php
   include'footer.php';
  ?>