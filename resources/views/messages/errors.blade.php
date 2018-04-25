@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    {{ Session::get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ Session::get('fail') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(Session::has('exist'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach(Session::get('exist') as $item)
    <li>{{$item}}</li>
    @endForeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
