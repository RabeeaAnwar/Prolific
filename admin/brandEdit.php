<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
    include '../classes/Brand.php';
?>
<?php 
    if (!isset($_GET['brandId']) || $_GET['brandId'] == NULL){
        echo "<script>window.location = 'brandList.php';</script>";
    } else {
        $id = $_GET['brandId'];
    }
    
    $brand = new Brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $brandName  = $_POST['brandName'];
        $updateBrand = $brand->brandUpdate($brandName, $id);
    } 
?>  
    <div class="grid_10">
        <div class="box round first grid">
            <h2> Update Brand Name </h2>
           <div class="block copyblock"> 
              <?php 
                if (isset($updateBrand)){
                    echo $updateBrand; 
                }
              ?>
              <?php $getBrand = $brand->getBrandById($id);
                if ($getBrand){
                    while($result = $getBrand->fetch_assoc()){
              ?>
              <form action="" method="post">
                <table class="form">					
                    <tr>
                        <td>
                            <input type="text" name="brandName" 
                              value="<?php echo $result['brandName'];?>" />
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
               </form>
                <?php }}?>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?> 
