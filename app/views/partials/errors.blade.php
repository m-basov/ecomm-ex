@if($errors->has())
  <div id="form-errors">
    <p>Сталися помилки:</p>

    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div><!-- end form-errors -->
@endif