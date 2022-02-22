<div class="table-responsive">
	
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>#ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
            $id = 0 ;
              if ($_POST['id']) {
              	$id = $_POST['id'];
              }else{
              	$id = 0;
              }




			//$id = $_POST['id'];
			require_once 'dbconfig1.php';
			$query = "SELECT * FROM users where id = '$id' ";
			$stmt = $DBcon->prepare( $query );
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $id; ?></td>
                <td><?php echo $username; ?></td>
                 <td><?php echo $course; ?></td>
		        <td> 
		        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No Products Found</td>
		        </tr>
		        <?php
				
			}
			?>
             
        </tbody>
    </table>
    
</div>