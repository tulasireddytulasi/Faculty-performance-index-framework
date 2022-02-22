
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Professional Body Details</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Professional Body Details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="23%">Professional Body Membership Name</th>
      <th width="20%">Chapter</th>
      <th width="12%">Membership No</th>
       <th width="12%">Year</th>
     <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="name"></td>
      <td contenteditable="true" class="chapter"></td>
      <td contenteditable="true" class="membership"></td>
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
   html_code += "<td contenteditable='true' class='chapter'></td>";
   html_code += "<td contenteditable='true' class='membership'></td>";
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
  var chapter = [];
  var membership = [];
  var year = [];
  
 
  $('.name').each(function(){
   name.push($(this).text());
  });
  $('.chapter').each(function(){
   chapter.push($(this).text());
  });
  $('.membership').each(function(){
   membership.push($(this).text());
  });
   $('.year').each(function(){
   year.push($(this).text());
  });
  
  
  $.ajax({
   url:"insertpbms.php",
   method:"POST",
   data:{name:name, chapter:chapter, membership:membership, year:year},
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