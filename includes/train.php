<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Training</h2>
            <hr class="line"> <br>
            <h6>Available Places</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>

          <div class="container">
        
            <table class="train" style="width:100%">
                <tr>
                  <th>#</th>
                  <th>Name Place</th> 
                  <th>Address</th>
                  <th>Collage</th>
                </tr>

                      <?php
                      include 'fun/db_connection.php';
                      $select = "SELECT * FROM training_portal";
                      $train_q = $conn -> query($select);
                      $index = 1;
                      foreach ($train_q as $train) {
                        $id_col = $train ['collage'];
                        $select_col = "SELECT * FROM collage WHERE id = $id_col";
                        $col_q = $conn -> query($select_col);
                        $col =$col_q -> fetch_assoc();
                    
                      ?>
                <tr>
                  <td><?php echo $index++; ?></td>
                  <td><?php echo $train['name']; ?></td>
                  <td><?php echo $train['address']; ?></td>
                  <td><?php echo $col['name']; ?></td>
                </tr>
                <?php
              }
                ?>
              </table>
              <a style=" float: right;"  class="btn2 btn btn" href="?action=add_place_train.php" role="button">Add Place</a>
            </div>

          
      

          </section>