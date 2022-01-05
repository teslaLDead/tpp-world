<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="Text/Javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script>-->
<?php include('head.php')?>

<!--<script type="text/javascript">
    $(document).ready(function(){ 
        var sudoSlider = $("#slider").sudoSlider({
                effect: "fade",
                pause: 3000,
        auto:true,
        prevNext:false
       });
    });
  </script>-->
</head>

<body>
<?php include('include-topheader.php')?>
<div class="container"> 
<?php include('navigation.php')?>

        <div class="row">
          <div class="col-md-12">
            <h3 style="font-size: 25px;">TPP Photo Gallery</h3>
            <hr class="second-hr">
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
               data-image="images/photogallery/a1.jpg"
               data-target="#image-gallery">
                <img class="img-thumbnail" src="images/photogallery/a1.jpg" alt="TTP">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a2.jpg"
                 data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a2.jpg" alt="TTP">
              </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a3.jpg"
                 data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a3.jpg" alt="TTP">
              </a>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a4.jpg"
                 data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a4.jpg" alt="TTP">
              </a>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a5.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a5.jpg" alt="TTP">
              </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a6.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a6.jpg" alt="TTP">
              </a>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TTP"
                 data-image="images/photogallery/a7.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="images/photogallery/a7.jpg" alt="TTP">
              </a>
          </div>

        </div>
 
</div>
 <?php include('footer.php')?>

</body>
</html>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
 





<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="image-gallery-title"></h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span>
          </button>
      </div>
        <div class="modal-body">
            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
            </button>

            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
  </div>
</div>

<?php include('footer.php')?>



<style>
  .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}


.txth{
  text-align: center;
  font-size:14px;
  padding-top: 4%;
}

</style>





<script>
  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>