<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete{{ $books->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="delete-book-modal">¿You want to delete the <span>{{ $books->title }}</span> book?</p>
      </div>
      <div class="modal-footer">
        <a onclick="event.preventDefault(); document.getElementById('form-delete{{ $books->id }}').submit();">
          <button type="button" class="btn btn-success">Yes, delete book</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>