<?php include './includes/session.php'; ?>
<?php include'./includes/change_language.php';?>  


<?php 

    $statement=$db->prepare("select * from tbl_contact where lang_id=? ");
    $statement->execute(array($lang_id));
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row)
    {
?>
    <h4>
        <?php echo $row['contact_title'];?>
    </h4>                   
<?php 
	echo $row['contact_text']; 
    }
?>