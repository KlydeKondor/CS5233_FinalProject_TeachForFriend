<!-- Categories Widget 
<div class='card my-4'>
  <h5 class='card-header'>Categories</h5>
  <div class='card-body'>
    <div class='row'>
      <div class='col-lg-12 ' width='inherit'>

        <ul class='list-unstyled mb-0 list-group ' width='inherit' ><details><summary>Subjects</summary><p>
           <?php

                  $query1 = "select * from subject where userid='$userid'";
                  $result1 = mysqli_query($conn,$query1);
                  if(mysqli_num_rows($result1)>0){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $res = mysqli_query($conn,"select  count(chapterid) from topics where chapterid='{$row1['subjectid']}'");
                    echo " <li class='list-group-item'> <details><summary>"."<a href='viewsubject.php?subjectid={$row1['subjectid']}'>
                       ".$row1['subjectname']."</a>&nbsp;&nbsp;<span align='right' class='badge badge-danger badge-pill col-md-2'>".mysqli_num_rows($res)."</span></summary><p>
                          <ul>
                              ";
                              $query2 = "select * from chapters where subjectid='{$row1['subjectid']}'";
                              $result2 = mysqli_query($conn,$query2);

                              if(mysqli_num_rows($result2)>0){
                                while($row2 = mysqli_fetch_assoc($result2)){
                                    $res = mysqli_query($conn,"select  count(topicid) from topics where chapterid='{$row2['chapterid']}'");
                                echo " <p> <li class='list-group-item col-md-10'>
                              <a href='viewchapter.php?chapterid={$row2['chapterid']}'>".$row2['chaptername']."</a>&nbsp;&nbsp;<span align='right' class='badge badge-danger col-md-2'>".mysqli_num_rows($res)."</span>
                                  </li></p>";
                                }
                              }else{
echo "<li class='list-group-item col-md-10'><div class='alert alert-danger'>you have no chapters added in this  subject".$row1['subjectname']."</div></li>";

                              }
                              echo "

                          </ul>
                          </p>

                       </li>";
                    }
                  }else{
                    echo "<li class='list-group-item col-md-10'><div class='alert alert-danger'>you have no subjects added in your profile</div></li>";
                  }
           ?></p>
         </details>
         </details>
        </ul>
      </div>

    </div>
  </div>
</div>

-->