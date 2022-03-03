@extends('layouts.guest')
@section("pageTitle", "Welcome To Data Encryption and Decryption App.")
@section('pageContent')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1 "> {{-- color-red  --}}

            <div class="user-dashboard-info-box bg-light p-3">
                <div class="form-row offset-md-2 row">
                    <div class="col-md-10 text-uppercase h5">
                        Data encryption and decryption using Hashing algorithms
                    </div>
                    <div class="col-md-2">
                       <a href="{{ route('logout')}}" title="Logout" class="btn btn-outline-warning">Logout</a>
                    </div>
                </div>
            </div>

            <br />

            <div class="widget-area proclinic-box-shadow p-3 bg-white">

                @includeIf('share.operationCallBackAlert', ['showAlert' => 1])

                <div class="pr-2 pl-2">
                 <form method="post" action="{{ (Route::has('processData') ? Route('processData') : '#') }}" enctype="multipart/form-data">
                    @csrf
                       <div class="user-dashboard-info-box">
                           <div class="form-row offset-md-2">

                                <div class="col-md-12 text-left">
                                    <label for="encryptData"> Enter Data To Encrypt <sup class="text-danger">*</sup></label>
                                    <textarea name="encryptData" class="summernoteLong form-control @error('encryptData') is-invalid @enderror" required>{{old('encryptData')}}</textarea>
                                    @error('encryptData')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                               <div class="form-group col-md-12">
                                <br /><br />
                                    <div class="form-row mb-4">
                                        <div align="center" class="col-md-12">
                                            <button type="submit" class="btn btn-primary d-block">
                                                Encrypt Data
                                            </button>
                                        </div>
                                    </div>
                               </div>
                           </div>

                           <div class="m-4">
                            <table class="table table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th>SN</th>
                                        {{-- <th>Original Data</th> --}}
                                        <th>Encrypted Data</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @if(isset($getData) && $getData)
                                @foreach ($getData as $key => $item)
                                    <tr>
                                        <td>{{ ($key + 1) }}</td>
                                        {{-- <td>{{ Strip_tags(Strip_tags($item->original)) }}</td> --}}
                                        <td>
                                            <div title="{{ Strip_tags(Strip_tags($item->original)) }}" style="word-break: break-all; word-break: break-word; overflow-wrap: break-word;">
                                                {{ $item->encrypted }}
                                            </div>
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($item->date )) }}</td>
                                        <td>
                                            <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-backdrop="false" data-target="#confirmAction{{$key}}">Decrypt</button>
                                        </td>
                                    </tr>

                                    <!-- Modal - confirm to take action -->
                                    <div style="z-index: 9999999999;" class="modal fade text-left d-print-none" id="confirmAction{{$key}}" tabindex="-1" role="dialog" aria-labelledby="confirmAction{{$key}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h6 class="modal-title text-light">Decrypt Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">
                                                    <span class="p-3 text-success">Decrypt the information below:</span>
                                                    <div class="text-dark" style="word-break: break-all; word-break: break-word; overflow-wrap: break-word;">
                                                        {{ $item->encrypted }}
                                                    </div>
                                                    <hr />
                                                    <div>
                                                        <label>Enter Original Data (The system tells you if you are right)</label>
                                                        <input type="text" id="originalData{{$key}}" name="original" class="form-control">
                                                        <input type="hidden" id="recordID{{$key}}" value="{{ $item->id }}">
                                                    </div>
                                                    <div>
                                                        <span id="result{{$key}}" class="h6"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline btn-primary btn-sm" data-dismiss="modal"> Cancel </button>
                                                <button type="button" id="{{$key}}" class="btn btn-outline btn-success btn-sm checkBtn"> Decrypt Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                            <!--end Modal-->


                                @endforeach
                                @endif

                            </table>
                        </div>


                       </div>
                   </form>
                  </div>
            </div>
        </div>
    </div>

    <hr />

</div>
<div class="row bg-light mb-5">
    <div class="col-md-12 m-5">
        <div class="p-2 h5">What is a hash function?</div>
        <div class="p-2">
            Hashing algorithms are functions that generate a fixed-length result (the hash, or hash value) from a given input. The hash value is a summary of the original data.
        </div>
        <div class="p-2">
            For instance, think of a paper document that you keep crumpling to a point where you aren’t even able to read its content anymore. It’s almost (in theory) impossible to restore the original input without knowing what the starting data was.
        </div>
    </div>
</div>

@endsection
@section('styles')
    <style>

    </style>
@endsection


@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
<script>
    //Get Product Measurements
    $(document).ready(function () {
        $('.checkBtn').click(function() {
            var getID = this.id
            var getData = $('#originalData' + getID).val();
            var recordID = $('#recordID' + getID).val();
            if(getData == '')
            {
                alert('Please enter data you want to decrypt!');
                $('#originalData').val('');
                false;
            }
            if(getData)
            {
                $.ajax({
                    url: '{{url("/")}}' +  '/check-data/' + getData + '/' + recordID,
                    type: 'get',
                    //data: {'classID': classID, '_token': $('input[name=_token]').val()},
                    data: { format: 'json' },
                    dataType: 'json',
                    success: function(data) {
                        if(data.status == 1){
                            $('#result' + getID).html(data.message).css('color', 'green');
                        }else{
                            $('#originalData' + getID).val('');
                            $('#result' + getID).html(data.message).css('color', 'red');
                        }
                    },
                    error: function(error) {
                        alert("Please we are having issue processing your information!. Check your network or refresh this page !!!");
                    }
                });
            }
        });
    });

</script>
@endsection
