<form action="?action=update" class="edit_form form-horizontal center-block" method='POST'>
    <input type="hidden" name="sid" value="<?= $id; ?>">


    <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM training WHERE applay = 0";
                      $train_q = $conn -> query($select);
                      
                      $train = $train_q -> fetch_assoc();
                      
                      
                      
              ?>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-2">
    <label for="" class="control-label" autocomplete="off">status</label>
        </div>
        <div class="col-md-4">
            <input type="radio" name="<?= form_status[' . $id . ']?> " 
            id="status-refused"
            value="0" <?php if($train['applay'] ==
            0) {echo "checked";} ?> >
            <br />
	      <input type="radio" name="<?= form_status[' . $id . ']?> " 
            id="status-accepted"
            value="1" <?php if($train['applay'] ==
            1) {echo "checked";} ?> >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-1">
            <input type="submit" class="btn btn-primary" value="Confirm">
        </div>
    </div>
    <?php
if ($action == 'update') {
    foreach ($_POST['uid'] as $userID) {
        $stmt = $pdo->prepare("UPDATE training SET applay = '$applay' WHERE student = $student");
        $stmt->execute([$_POST['form_status'][$userID]);
    }
    }  
?>
</form>



/*
<input type="radio" name="<?= form_status[' . $user_id . ']?> " 
                          id="status-refused" value="0" <?php if($train['applay'] ==
                           0) {echo "checked";} ?> > Refuse
                         <br />
                      <input type="radio" name="<?= form_status[' . $user_id . ']?> " 
                          id="status-accepted" value="1" <?php if($train['applay'] ==
                            1) {echo "checked";} ?> > Accept

                        <br/>*/


















                        <form action="fun/applay_train.php" class="edit_form form-horizontal center-block" method='POST'>
                      
                     <input type="hidden" name="id" value="<?php echo $id ?>">



                     <select style="color: #2EB97F; margin-top: 50px;" name="applay" class="form-control border0" id="exampleFormControlSelect1">
                        <option></option>
                        <option value="<?php echo $train['applay'] = 0 ; ?>">Refuse</option>
                        <option value="<?php echo $train['applay'] = 1 ; ?>">Accept</option>
          
                      </select>

