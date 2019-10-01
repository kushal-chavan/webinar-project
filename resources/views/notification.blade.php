@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('ticket'))
    <div class="alert alert-success" role="alert">
        {{ session('ticket') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
@if (session('courseadded'))
    <div class="alert alert-success" role="alert">
        {{ session('courseadded') }}
    </div>
@endif
@if (session('webinar'))
    <div class="alert alert-success" role="alert">
        {{ session('webinar') }}
    </div>
@endif
@if (session('webinardeleted'))
    <div class="alert alert-danger" role="alert">
        {{ session('webinardeleted') }}
    </div>
@endif
@if (session('coursedeleted'))
    <div class="alert alert-danger" role="alert">
        {{ session('coursedeleted') }}
    </div>
@endif
@if (session('enroll'))
    <div class="alert alert-success" role="alert">
        {{ session('enroll') }}
    </div>
@endif
@if (session('enrolled'))
    <div class="alert alert-warning" role="alert">
        {{ session('enrolled') }}
    </div>
@endif
@if (session('cpsuccess'))
    <div class="alert alert-success" role="alert">
        {{ session('cpsuccess') }}
    </div>
@endif
