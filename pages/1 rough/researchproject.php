<?php
include 'rdheader.php';
?>


<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Research Directors</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
              <div class="col-lg-12"> 

                <?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
  function facultyinfo($connect)  
 {  
     
      $output = '';  
      $sql = "SELECT * FROM users"; 
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id"].'">'.$row["id"].'</option>';  
      }  
      return $output;  
 }  
   
 ?>  
    
       
        <div>
        <center> <select  name="ids" id="ids">
                          <option>Select</option>
                                    
                          <?php echo facultyinfo($connect);?>       
                                               
                          </select> </center>   
        </div><br>
        <div id="load-products"></div> <!-- products will be load here -->
    
   



<script>
    $(document).ready(function(){

           $('#ids').change(function(){  
           var id = $(this).val();  
           $.ajax({  
                url:"read.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#load-products').html(data);  
                }  
           });  
      });  


        
    //  readProducts(); /* it will load products when document loads */
        
        $(document).on('click', '#delete_product', function(e){
            
            var productId = $(this).data('id');
            SwalDelete(productId);
            e.preventDefault();
        });
        
    });
    
    function SwalDelete(productId){
        
        swal({
            title: 'Are you sure?',
            text: "It will be Approved",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!',
            showLoaderOnConfirm: true,
              
            preConfirm: function() {
              return new Promise(function(resolve) {
                   
                 $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: 'delete='+productId,
                    dataType: 'json'
                 })
                 .done(function(response){
                    swal('Approved!', response.message, response.status);
                    //readProducts();
                 })
                 .fail(function(){
                    swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false              
        }); 
        
    }
    
    function readProducts(){
        $('#load-products').load('read.php');   
    }
    
</script>

                












              </div>
               </div>

              
              </div>


        
           
        
<?php
include 'footer.php';
?>
