<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="deleteModalLabel">Delete Todo</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" id="deleteTodoText">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <a id = "deleteTodoLink" class="btn btn-primary" href = "https://www.jherring.tk/2019/07/20/project-control/">Delete</a>
    </div>
  </div>
</div>
</div>

<script>

$('#deleteModal').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget);
      var name = button.data('name');
      var link = button.data('link');
      var modal = $(this)
      modal.find('#deleteTodoText').html(name);
      $("#deleteTodoLink").attr("href", link);

    });

</script>
