
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Project Guided Details</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Project Guided Details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="10%">Course</th>
      <th width="30%">Team Members </th>
      <th width="25%">Project Ttile</th>
      <th width="20%">Accademic year</th>
     
      <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="course"></td>
      <td contenteditable="true" class="team"></td>
      <td contenteditable="true" class="title"></td>
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
   html_code += "<td contenteditable='true' class='course'></td>";
   html_code += "<td contenteditable='true' class='team'></td>";
   html_code += "<td contenteditable='true' class='title'></td>";
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
  var course = [];
  var team = [];
  var title = [];
  var year = [];
 
  $('.course').each(function(){
   course.push($(this).text());
  });
  $('.team').each(function(){
   team.push($(this).text());
  });
  $('.title').each(function(){
   title.push($(this).text());
  });
  $('.year').each(function(){
   year.push($(this).text());
  });
  
  $.ajax({
   url:"insertproject.php",
   method:"POST",
   data:{course:course, team:team, title:title, year:year},
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