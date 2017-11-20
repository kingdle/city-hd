<div class="row">
    <div class="col-md-3">
        <h3 style="line-height: 10px">
            {{ $header or trans('admin.title') }}
            <small>{{ $description or trans('admin.description') }}</small>
        </h3>
    </div>
    <div class="col-md-8">
        <div id="HeaderDateline" style="min-height: 50px"></div>
    </div>
    <div class="col-md-1 hidden-xs">
        <button class="button button-box"><i class="fa fa-reply"></i></button>
    </div>
    <script>
        $(".col-md-1 button").click(function(){
            history.go(-1)
        })
    </script>
</div>

