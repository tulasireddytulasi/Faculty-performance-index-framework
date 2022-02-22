
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

   <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       <div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Student Enrishment Activities</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                Add Student Enrishment Activities
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="20%">Event Name</th>
      <th width="23%">No Of Students Participated</th>
      <th width="22%">Outcome</th>
      <th width="12%">Month</th>
      <th width="12%">Year</th>
      <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="name"></td>
      <td contenteditable="true" class="nosp"></td>
      <td contenteditable="true" class="outcome"></td>
      <td contenteditable="true" class="month"></td>
      <td contenteditable="true" class="year"></td>
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
   html_code += "<td contenteditable='true' class='name'></td>";
   html_code += "<td contenteditable='true' class='nosp'></td>";
    html_code += "<td contenteditable='true' class='outcome'></td>";
   html_code += "<td contenteditable='true' class='month'></td>";
   html_code += "<td contenteditable='true' class='year'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var name = [];
  var nosp = [];
  var outcome = [];
  var month = [];
  var year = [];
  
 
  $('.name').each(function(){
   name.push($(this).text());
  });
  $('.nosp').each(function(){
   nosp.push($(this).text());
  });
  $('.outcome').each(function(){
   outcome.push($(this).text());
  });
   $('.month').each(function(){
   month.push($(this).text());
  });
  $('.year').each(function(){
   year.push($(this).text());
  });
   
  
  
  $.ajax({
   url:"insertsea.php",
   method:"POST",
   data:{name:name, nosp:nosp, outcome:outcome, month:month, year:year},
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