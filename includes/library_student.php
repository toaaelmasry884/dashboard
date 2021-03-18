<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;">Library</h2>
            <hr class="line"> <br>
            <h6>Show a borrowed book</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br> <br>

        
                    
            <table class="train" style="width:100%">
                <tr>
                  <th>#</th>
                  <th>The Student Name</th>
                  <th>Book</th> 
                  <th>Date </th>
                  <!-- <th>Stutas</th> -->
                  <th>Action</th>
                </tr>



                <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM librarybook";
                      $library_q = $conn -> query($select);

                      $index = 1;
                      foreach ($library_q as $library) {

                        $ssn_st = $library['student'];
                        $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                        $st_q = $conn -> query($select_st);
                        $student = $st_q -> fetch_assoc();

                        $id_book = $library['book'];
                        $select_book = "SELECT * FROM books WHERE id = $id_book";
                        $book_q = $conn -> query($select_book);
                        $book = $book_q -> fetch_assoc();
                      ?>



                <tr>
                  <td><?php echo $index++; ?></td>
                  <td> <?php echo $student['user_name']; ?></td>
                  <td><?php echo $book['name']; ?></td>
                  <td><?php echo $library['dateBooked']; ?></td>
                  <!-- <td>Paid</td> -->
                  <td>
                    <a href="?action=library_edit.php&id=<?php echo $book['id'] ?>"> <i class='far fa-edit'></i> </a> <br>  
                    <a href="fun/library_delete.php?id=<?php echo $library['id'] ?>"><i class='fas fa-trash'></i> </a> 
                  </td>
                
                
                </tr>

                <?php
                  }
                ?>

                
              </table> <br> <br>
    
  
     
   
     </section>