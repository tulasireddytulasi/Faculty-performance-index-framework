
<?php
include'fheader.php';
?>

<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Research Papers</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Add Research Papers
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
 <div class="table-responsive">

  
    <table class="table table-bordered" id="crud_table">
     <tr>
      
      <th width="23%">Title of Research Papers</th>
      <th width="18%">Conference/Journal</th>
      <th width="12%">Impact Factor</th>
      <th width="12%">Volume</th>
      <th width="12%">Issue</th>
      <th width="12%">National/International</th>
      <th width="12%">Year</th>
      <th width="3%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="title"></td>
      <td contenteditable="true" class="conference"></td>
      <td contenteditable="true" class="impact"></td>
      <td contenteditable="true" class="volume"></td>
      <td contenteditable="true" class="issue"></td>
      <td contenteditable="true" class="national"></td>
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
   
   </div>
    <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true'  class='title'></td>";
   html_code += "<td contenteditable='true' class='conference'></td>";
   html_code += "<td contenteditable='true' class='impact'></td>";
   html_code += "<td contenteditable='true' class='volume'></td>";
   html_code += "<td contenteditable='true' class='issue'></td>";
   html_code += "<td contenteditable='true' class='national'></td>";
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
  var title = [];
  var conference = [];
  var impact = [];
  var volume = [];
  var issue = [];
  var national = [];
  var year = [];
  
 
  $('.title').each(function(){
   title.push($(this).text());
  });
  $('.conference').each(function(){
   conference.push($(this).text());
  });
  $('.impact').each(function(){
   impact.push($(this).text());
  });
  $('.volume').each(function(){
   volume.push($(this).text());
  });
  $('.issue').each(function(){
   issue.push($(this).text());
  });
  $('.national').each(function(){
   national.push($(this).text());
  });
  $('.year').each(function(){
   year.push($(this).text());
  });
   
  
  
  $.ajax({
   url:"insertpapers.php",
   method:"POST",
   data:{title:title, conference:conference, impact:impact, volume:volume,issue:issue,national:national, year:year},
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