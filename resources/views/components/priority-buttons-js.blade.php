<script>


  $("#high-pri-btn").click(function(){

      $(this).removeClass("opacity-50");
      $("#med-pri-btn").addClass("opacity-50");
      $("#low-pri-btn").addClass("opacity-50");

      $('#priority-input').val('High');
      $("#priority-display").text("High");

  });

  $("#med-pri-btn").click(function(){

      $(this).removeClass("opacity-50");
      $("#high-pri-btn").addClass("opacity-50");
      $("#low-pri-btn").addClass("opacity-50");

      $('#priority-input').val('Medium');
      $("#priority-display").text("Medium");

  });

  $("#low-pri-btn").click(function(){

      $(this).removeClass("opacity-50");
      $("#high-pri-btn").addClass("opacity-50");
      $("#med-pri-btn").addClass("opacity-50");

      $('#priority-input').val('Low');
      $("#priority-display").text("Low");

  });


</script>
