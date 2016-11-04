<!-- Put all JQuery and other script here. -->
<script type="text/javascript">
  $(".modal_trigger").leanModal({top: 40, overlay:1, closeButton: ".modal_close" });

  $(function(){
          // Calling REGISTER Form
    $(".loginbutton").click(function(){
      $("#register-form").hide();
      $("#files_modal").hide();
      $("#login-modal").show();
      $(".title_span").text('Register');
      return false;
    });
      // Calling REGISTER Form
    $(".registerbutton").click(function(){
      $("#register-form").show();
      $("#files_modal").hide();
      $("#login-modal").hide();
      $(".title_span").text('Register');
      return false;
    });
    // Calling REGISTER Form
    $(".register").click(function(){
      $("#register-form").show();
      $("#files_modal").hide();
      $("#login-modal").hide();
      $(".title_span").text('Register');
      return false;
    });
  })
</script>

</body> <!-- DO NOT DELETE BODY TAG!!! No content below this line. Body start tag is in the header.php file. -->