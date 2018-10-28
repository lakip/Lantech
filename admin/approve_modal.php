<!-- approve -->
<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script type="text/javascript">
        $(document).ready(function()){
          $('.action').click(function()){
          var action = $(this).attr('name');
          $(action).val(action);
          $(this).closest('form').submit();
        })

      })
</script>
<?php
include 'includes/conn.php';

?>
<div class="modal fade" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
          <form method="POST" action="approve.php">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Approve?</b></h4>
            </div>
            
            <div class="modal-footer" >
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="approve"><i class="action"></i> Approve</button>
              </form>
            </div>
        </div>
    </div>
</div>
