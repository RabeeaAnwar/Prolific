<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
    include '../classes/category.php';
?>
<?php 
    if (!isset($_GET['catId']) || $_GET['catId'] == NULL){
        echo "<script>window.location = 'catlist.php';</script>";
    } else {
        $id = $_GET['catId'];
    }
    
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $catName  = $_POST['catName'];
        $updateCat = $cat->catUpdate($catName, $id);
    } 
?>  
    <div class="grid_10">
        <div class="box round first grid">
            <h2> Update Category </h2>
           <div class="block copyblock"> 
              <?php 
                if (isset($updateCat)){
                    echo $updateCat; 
                }
              ?>
              <?php $getCat = $cat->getCatById($id);
                if ($getCat){
                    while($result = $getCat->fetch_assoc()){
              ?>
              <form action="" method="post">
                <table class="form">					
                    <tr>
                        <td>
                            <input type="text" name="catName" 
                              value="<?php echo $result['catName'];?>" />
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
