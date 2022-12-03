@csrf
<div class="form-group">
  <label class="form-label">Title</label>
  <input type="text" required class="form-control @error('title') is-invalid @else  border-1 @enderror" maxlength="500" placeholder="Example: Harry Potter and the Philosopher's Stone" name="title" id="title" value="{{ isset($checkBook) ? $checkBook[0]->title : '' }}">
  @error('title')
    <span class="invalid-feeback" rolle="alert">
      <strong>{{ $message }} </strong>
    </span>
  @enderror
</div>
<div class="form-group">
  <label class="form-label">ISBN</label>
  <input type="text" required readonly class="form-control @error('isbn') is-invalid @else  border-1 @enderror" name="isbn" id="isbn" value="{{ isset($checkBook) ? $checkBook[0]->isbn : $isbn }}">
  @error('isbn')
    <span class="invalid-feeback" rolle="alert">
      <strong>{{ $message }} </strong>
    </span>
  @enderror
</div>
<div class="form-group">
  <label class="form-label">Year Publication</label>
  <input type="number" required class="form-control @error('year_publication') is-invalid @else  border-1 @enderror" min="1000" max="9999" placeholder="Example: 2007" name="year_publication" id="year_publication" value="{{ isset($checkBook) ? $checkBook[0]->year_publication : '' }}">
  @error('year_publication')
    <span class="invalid-feeback" rolle="alert">
      <strong>{{ $message }} </strong>
    </span>
  @enderror
</div>
<div class="form-group">
  <label class="form-label">User Created</label>
  <select required class="form-control bg-light shadow-sm col-md-12 col-sm-6 @error('user_create') is-invalid @else  border-1 @enderror" name="user_create" id="user_create">
    <option value="">SELECCIONE</option>
    @foreach ($users as $id => $name)
        <option value="{{ $id }}" @if($id == ( isset($checkBook) ? $checkBook[0]->user_id : old('user_create')) ) selected @endif>{{ $name }}</option>
    @endforeach
  </select>
  @error('user_create')
    <span class="invalid-feeback" rolle="alert">
      <strong>{{ $message }} </strong>
    </span>
  @enderror
</div>
<input type="hidden" required class="form-control" name="book_id" id="book_id" value="{{ isset($checkBook) ? $checkBook[0]->id : '' }}">