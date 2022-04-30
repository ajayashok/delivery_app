@if ($message = Session::get('success'))
    <div class="alert alert-success-easy alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> {{ $message }}</h5>

    </div>
@elseif($message = Session::get('error'))
    <div class="alert alert-error-easy alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> {{ $message }}</h5>
    </div>
@elseif($message = Session::get('warning'))
    <div class="alert alert-warning-easy alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> {{ $message }}</h5>
    </div>
@elseif($message = Session::get('info'))
    <div class="alert alert-info-easy alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> {{ $message }}</h5>
    </div>
@endif