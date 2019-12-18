<?php
include("connection.php");
$query = "SELECT * FROM category";
$result = mysqli_query($connection, $query);
$output = '';
while($row = mysqli_fetch_array($result))
{
 $output .= '<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
}
?>
<html>
 <head>
  <title>Bootgrid Tutorial - Server Side Processing using Ajax PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>  
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">Jquery Bootgrid Tutorial - Server Side Processing using Ajax PHP</h1>
   <br />
   <div align="right">
    <button type="button" id="add_button" data-toggle="modal" data-target="#productModal" class="btn btn-info btn-lg">Add</button>
   </div>
   <div class="table-responsive">
    <table id="product_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th data-column-id="product_id" data-type="numeric">ID</th>
       <th data-column-id="product_name">Product Name</th>
       <th data-column-id="category_name">Caegory</th>
       <th data-column-id="product_price">Price</th>
       <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
      </tr>
     </thead>
    </table>
   </div>
 </body>
</html>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#product_form')[0].reset();
  $('.modal-title').text("Add Product");
  $('#action').val("Add");
  $('#operation').val("Add");
 });
 
 var productTable = $('#product_data').bootgrid({
  ajax: true,
  rowSelect: true,
  post: function()
  {
   return{
    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
   };
  },
  url: "fetch.php",
  formatters: {
   "commands": function(column, row)
   {
    return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.product_id+"'>Edit</button>" + 
    "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.product_id+"'>Delete</button>";
   }
  }
 });
 
 $(document).on('submit', '#product_form', function(event){
  event.preventDefault();
  var car_number = $('#category_id').val();
  var product_name = $('#product_name').val();
  var product_price = $('#product_price').val();
  var form_data = $(this).serialize();
  if(category_id != '' && product_name != '' && product_price != '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     alert(data);
     $('#product_form')[0].reset();
     $('#productModal').modal('hide');
     $('#product_data').bootgrid('reload');
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on("loaded.rs.jquery.bootgrid", function()
 {
  productTable.find(".update").on("click", function(event)
  {
   var product_id = $(this).data("row-id");
    $.ajax({
    url:"fetch_single.php",
    method:"POST",
    data:{product_id:product_id},
    dataType:"json",
    success:function(data)
    {
     $('#productModal').modal('show');
     $('#category_id').val(data.category_id);
     $('#product_name').val(data.product_name);
     $('#product_price').val(data.product_price);
     $('.modal-title').text("Edit Product");
     $('#product_id').val(product_id);
     $('#action').val("Edit");
     $('#operation').val("Edit");
    }
   });
  });
 });
 
 $(document).on("loaded.rs.jquery.bootgrid", function()
 {
  productTable.find(".delete").on("click", function(event)
  {
   if(confirm("Are you sure you want to delete this?"))
   {
    var product_id = $(this).data("row-id");
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{product_id:product_id},
     success:function(data)
     {
      alert(data);
      $('#product_data').bootgrid('reload');
     }
    })
   }
   else{
    return false;
   }
  });
 }); 
});
</script>
<div id="productModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="product_form">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Product</h4>
    </div>
    <div class="modal-body">
     <label>Select Category</label>
     <select name="category_id" id="category_id" class="form-control">
      <option value="">Select Category</option>
      <?php echo $output; ?>
     </select>
     <br />
     <label>Enter Product Name</label>
     <input type="text" name="product_name" id="product_name" class="form-control" />
     <br />
     <label>Enter Product Price</label>
     <input type="text" name="product_price" id="product_price" class="form-control" />
    </div>
    <div class="modal-footer">
     <input type="hidden" name="product_id" id="product_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
    </div>
   </div>
  </form>
 </div>
</div>
