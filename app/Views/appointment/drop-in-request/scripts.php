<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.ui.scrolltabs.js"></script>
<script>
  var $tabs;
  var scrollEnabled = true;
  $(function() {



      $('.slots').scrollTabs({
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
    $('.slots').hide();
    $('.address_id').on('change', function() {
      if ($(this).val() !== '') {
        const ele = $(this).find(`option[value="${$(this).val()}"]`)
        if (ele) {
          $('.slots').hide();
          $(`#${ele.data('target')}`).show();
        }
      } else {
        $('.slots').hide();
      }
    });
  });
</script>