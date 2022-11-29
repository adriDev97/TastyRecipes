@if ($message = Session::get('success'))
 <div class="alerts text-success">
   <p>{{ $message }}</p>
 </div>
@endif