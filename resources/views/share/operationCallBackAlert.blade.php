@if($showAlert == 1)
<div class="">
      <div class="col-md-12 mt-2 mb-2 h6">

          @if (count($errors) > 0)
          <div class="text-left alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <!-- <strong>Error! </strong> <br /> -->
            @foreach ($errors->all() as $error)
              {{ $error }}<br />
            @endforeach
          </div>
          @endif

          @if(session('message'))
          <div class="alert alert-success alert-dismissible" role="alert" style="background:#98FB98;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('message') !!}
          </div>
          @endif

          @if(session('success'))
          <div class="alert alert-success alert-dismissible" role="alert" style="background:#98FB98;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('success') !!}
          </div>
          @endif

          @if(session('info'))
          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('info') !!}
          </div>
          @endif

          @if(session('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('error') !!}
          </div>
          @endif

          @if(session('warning'))
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('warning') !!}
          </div>
          @endif

          @if(session('danger'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
             {!! session('danger') !!}
          </div>
          @endif
      </div>
</div>
@endif
