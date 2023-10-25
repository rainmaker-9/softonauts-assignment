<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.ui.scrolltabs.js"></script>
<script>
  var $tabs;
  var scrollEnabled;
  $(function() {



      $('#example_3').scrollTabs({
        scrollOptions: {
          easing: 'swing',
          enableDebug: false,
          // closable: true,
          showFirstLastArrows: false,
          selectTabAfterScroll: true
        }
      });
    }


  );
</script>
<script>
  $("#btn-appointment").click(function() {
    $("#select_dr").toggle();
  });

  $(function() {
    $('#example_3').hide();
    $('#address_id').change(function() {
      if ($('#address_id').val() == 'dr1' || $('#address_id').val() == 'dr2') {
        $('#example_3').show();
      } else {
        $('#example_3').hide();
      }
    });
  });
</script>