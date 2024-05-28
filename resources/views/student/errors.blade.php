<div>
    @if (Session::has('success'))
        <div class="alert alert-primary">
            {!! Session::get('success') !!}
            {!! Session::flash('alert-primary', 'success')!!}
            {!!Session::flash('message', 'This is a message!')!!}
            {!!Session::flash('alert-primary', 'alert-danger')!!}
        </div>
    @endif
</div>