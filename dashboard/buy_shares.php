 <?php include 'header.php' ;?>


 <section id="main-content">
          <section class="wrapper site-min-height">
<script src="js/js-jquery.min.js"></script>
<div class="row">
<?php 
require_once("includes/connection.php");
$sqi="select * from shares order by date_created desc";
                  $record=mysqli_query($conn,$sqi);
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["share_price"];
                    $cat1=$row["available_shares"];
                  }

?>           

  
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h2>Available Shares:<?php echo $cat1 ;?></h2>
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                       
<form action="Controller/basicController.php" method="POST">       

<div class=" op-form-group op-row">
<div class="col-sm-12">
<label>No. of Shares</label>
<input type="number" name="shares" id="order_pages" class="form-control input-lg m-bot15" oninput="calc()" max="<?php echo $cat1 ;?>" min="10" /required>
<div class="col-sm-12">
<input id="words" type="hidden" value="275"></div>
<input id="remaining_Shares" type="hidden" name="remaining_shares" value="<?php echo $cat1 ; ?>">
</div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-3">Price per Shares </label>

<p>Price Per ticket : Ksh<span id="ticket_price"><?php echo $cat ;?></span></p>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-3">Amount to pay</label>
<div class="col-lg-9">
<p>Subtotal : <b>$<span id="total2">0</span></b></p>
</div>
</div>
 <div class="op-form-group op-row">
      <div class="col-sm-12">
        <label class="text-muted">Maturity</label>
        <select name="maturity" class="form-control input-lg m-bot15" id="exampleSelect1" onchange="copyValue()" onClick="task(this)" /required>
           <option > select maturity</option>
           <option name="order_deadline" value="28"> 2 Hours  </option>
          <option name="order_deadline" value="22"> 3 Hours  </option>
          <option name="order_deadline" value="21"> 6 Hours  </option>
          <option name="order_deadline" value="20"> 12 Hours  </option>
          <option name="order_deadline" value="18"> 24 Hours  </option>
          <option name="order_deadline" value="17.5"> 48 Hours  </option>
          <option name="order_deadline" value="17"> 3 Days  </option>
          <option name="order_deadline" value="16.5"> 5 Days  </option>
          <option name="order_deadline" value="16"> 10 Days  </option>
          <option name="order_deadline" value="15"> 20 Days  </option>
          <option name="order_deadline" value="13"> 30 Days  </option>
          <option name="order_deadline" value="12"> 60 Days  </option>
        </select>
      </div>
    </div>
    <input type="hidden" id='show' name="maturity_time" />
  <script type="text/javascript">
    function task(thisObj)
{

  document.getElementById('show').value = thisObj.options[thisObj.selectedIndex].text;

}
  </script>
<div class="form-group ">
<label for="cname" class="control-label col-lg-3">Intreast</label>
<script>
function copyValue() {
    var dropboxvalue = document.getElementById('exampleSelect1').value;
    document.getElementById('qnt_1').value = dropboxvalue;
}
</script>
<div class="col-lg-12">
<input class="form-control input-lg m-bot15"   minlength="2" type="text"  id="qnt_1" name="intreast" /readonly>
</div>
</div>
<div class="form-group">
  <div class="col-md-12">
        <select name="ops_aclevel1" class="form-control input-lg m-bot15" id="ops_aclevel" style='visibility:hidden;'>
        <option value="1" name="ops_aclevel">   </option>
      </select>
    </div>
</div>
  <div class="op-form-group op-row" id="salutation1" style='visibility:hidden;'>

    <div class="col-sm-12" >
             <label>Paper Type</label>
    <select name="order_tpaper1" class="form-control input-lg m-bot15" id="exampleSelect1" />
      <option value="1"> Essay (Any Type)  </option>
      <option value="1"> Article (Any Type)  </option>
      <option value="1"> Assignment  </option>
      <option value="1"> Content (Any Type)  </option>
      <option value="1"> Admission Essay  </option>
      <option value="1"> Annotated Bibliography  </option>
      <option value="1"> Argumentative Essay  </option>
      <option value="1"> Article Review  </option>
      <option value="1"> Book/Movie Review  </option>
      <option value="1"> Business Plan  </option>
    </select></div>
  </div>
  <div class="form-group ">
<div class="col-lg-9">
<input id="total" class="form-control fontbig form-control-plaintext" type="hidden" name="amount" value="" /readonly>
</div>
</div>
<input id="order_amount" class="form-control fontbig form-control-plaintext" type="hidden" name="gross_amount" value="" /readonly><hr style="margin-top: 0.5rem; margin-bottom: 0.2rem;"><div class="col-sm-12 text-center">
 <h4 class="orderamountc">Price (KSH): sh10.99 </h4> 
</div>
<div class="col-sm-12 text-center">
<hr style="margin-top: 0.5rem; margin-bottom: 0.2rem;">
<input type="submit" name="share_trans" value="Continue" class="text-center btn btn-success col-sm-12">
<input type="hidden"  name="user_id" value="<?php echo $user_id ;?>" />
 </form>
</div>
</div>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>              
              <button class="open-button2" onclick="openForm()" id="seedoc" disabled>CHAT</button>

                          </div>
                      </section>
                  </div>
              </div>
          </section>
      </section>
<script type="text/javascript">
  function calc() 
{
  var price = document.getElementById("ticket_price").innerHTML;
  var noTickets = document.getElementById("order_pages").value;
  var total = parseFloat(price) * noTickets
  if (!isNaN(total))
    document.getElementById("total2").innerHTML = total
  document.getElementById('total').value = parseFloat(total);
}
</script>
 <script type="text/javascript">     
var addon = document.getElementsByClassName('addon'),
total  = document.getElementById('payment-total');
 for (var i=0; i < addon.length; i++) {
        addon[i].onchange = function() {
            var add = this.value * (this.checked ? 1 : -1);
            total.innerHTML = parseFloat(total.innerHTML) + add
            document.getElementById('addontotal').value = total.innerHTML;
        }
    }
</script>
<script type="text/javascript">

  $(document).on("change",function(){

    var pages = $('[id="order_pages"]').val();
    var ac=$('[name="order_deadline"]:checked').val();
    var cap=$('[name="ops_aclevel"]:checked').val();
    var num  = (parseFloat(cap)*parseFloat(ac)*parseFloat(pages));
    var n = num.toFixed(2);

    document.getElementById('order_amount').value = parseFloat(n);
    document.getElementById('words').value = parseFloat(pages)*275;


$(".wordcount").html(parseFloat(pages)*250 + " words");
$(".orderamountc").html("Price (USD): $" + n);
});

function myFunction() {
  var y = document.getElementById("a4").value;
  var z = document.getElementById("a3").value;
  var x = y + z;
  document.getElementById('a5').value = parseFloat(NameValue);
}


</script><script type="text/javascript">
  
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script>
<script type="text/javascript">
window.setInterval(function() {
    $.ajax({      
      url: "testing.php",
      success: function(data) {

      }
    }); 
}, 5000); // 5 seconds 
</script>
<?php //include 'testing.php' ;?>
 <?php include 'chat.php' ?>
<?php include 'footer.php' ;?>
