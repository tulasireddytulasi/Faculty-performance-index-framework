<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SweetAlert2 – Ajax Delete Rows Example with PHP MySQL</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />
</head>
<body>
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
    <div class="container">
    	
    	
        <div class="page-header">
        <h1>SweetAlert2 – Ajax Delete Rows Example with PHP MySQL</h1>
        </div>
        <div>
    	<center> <select  name="ids" id="ids">
                          <option>Select</option>
                                    
                          <?php echo facultyinfo($connect);?>       
                                               
                          </select> </center>	
    	</div><br>
        <div id="load-products"></div> <!-- products will be load here -->
    
    </div>

<script src="assets/swal2/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>


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


		
	//	readProducts(); /* it will load products when document loads */
		
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
</body>
</html>