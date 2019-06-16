  
  <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customer where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];

    $customer_name = $row_customer['customer_name'];

    $customer_email = $row_customer['customer_email'];

    $customer_address = $row_customer['customer_address'];

    $customer_contact = $row_customer['customer_contact'];
    
    ?>





  <br><br>
<style>
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}






</style>






<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Billing Address</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Shipping Address</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Confirmation Payment</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Billing Address</h3>
          <div class="form-group">
            <label class="control-label"> Name</label>
            <input  maxlength="100" type="text" class="form-control" placeholder="Enter First Name"  value="<?php echo $customer_name  ?>" />
          </div>
          
          <div class="form-group">
            <label class="control-label">Email</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email"  value="<?php echo $customer_email  ?>"/>
          </div>
          <div class="form-group">
            <label class="control-label">Contact</label>
            <input required="required" class="form-control" placeholder="Enter your Contact" value="<?php echo $customer_contact  ?>"></input>
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea maxlength="300" type="text" required="required" class="form-control" placeholder="Enter Valid Address"  value=""/></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Shipping Address</h3>
          <div class="form-group">
            <label class="control-label"> Name</label>
            <input  maxlength="100" type="text" class="form-control" placeholder="Enter First Name"  value="" />
          </div>
          
          <div class="form-group">
            <label class="control-label">Email</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email"  value=""/>
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea maxlength="300" type="text" required="required" class="form-control" placeholder="Enter Valid Address"  value=""/></textarea>
          </div>
          <div class="form-group">
            <label class="control-label">Contact</label>
            <input required="required" class="form-control" placeholder="Enter your Contact"></input>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>


  <script>



    $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>
  