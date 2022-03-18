 <?php include 'header.php' ;?>


 <section id="main-content">
          <section class="wrapper site-min-height">
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>My Referrals</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>My Shares</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>Available Shares</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>My Wallet</p>
                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <!--Pulstate start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Pulstate
                          </header>
                          <div class="panel-body">
                              <p>Click on below buttons to check it out.</p>
                              <a href="buy_shares.php" class="btn btn-default" id="pulsate-regular">Buy Shares</a>
                              <button onclick="myFunction()" class="btn btn-success">+ Copy Link</button>
              <div class="room-box">
           
 <input type="text" value="http://localhost/alphaactions/register.php?<?php echo $name;?>id=<?php echo $user_id;?>" id="myInput" /readonly>
                                        <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  //alert("Copied the text: " + copyText.value);
}
</script>
                          </div>







                           <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> My Shares</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> AMount</th>
                                  <th><i class="fa fa-bookmark"></i> Maturity</th>
                                  <th><i class="fa fa-bookmark"></i> Gross Profit</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                 <?php
        

            $query="SELECT * FROM share_transactions Where user_id='$user_id' order by ID desc ";
$result_set=mysqli_query($conn,$query);
            while($row=mysqli_fetch_object($result_set)){
             

             if($row->status=='1'){
               echo " <tr>
                                  <td>$row->shares</td>
                                  <td class='hidden-phone'>$row->amount</td>
                                  <td>$row->maturity </td>
                                   <td>$row->gross_amount</td>
                                    <td><span class='label label-warning label-mini'>Unpaid</span></td>
                                  <td>
                                      <button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
                                      <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
                                  </td>
                              </tr>
                              <tr>";
             }else{
               echo " <tr>
                                  <td>$row->shares</td>
                                  <td class='hidden-phone'>$row->amount</td>
                                  <td>$row->maturity </td>
                                   <td>$row->gross_amount</td>
                                    <td><span class='label label-success label-mini'>Paid</span></td>
                                  <td>
                                      <button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
                                      <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
                                  </td>
                              </tr>
                              <tr>";
             }
                            
                            }
                              ?>
                              </tbody>
                          </table>
                      </section>
                      <!--Pulstate  end-->
                    <?php include 'chat.php' ?>
                              <i class='open-button1 fas fa-comment-dots' style='font-size:75px;color:#BBE36F ' onclick="openForm()"></i>


                  </div>
              </div>
          </section>
      </section>
       <?php include 'footer.php' ;?>
