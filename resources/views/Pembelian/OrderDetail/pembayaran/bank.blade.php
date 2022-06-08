@extends('layout.template')

@section('content')

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and get bellow Related City</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Pilih Pembayaran:</label>
                <select name="bank" class="form-control" style="width:350px">
                    <option value="">--- Metode Pembayaran ---</option>
                    @foreach ($bank as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Jenis Pembayaran:</label>
                <select name="ewallet" class="form-control" style="width:350px">
                </select>
            </div>
      </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="bank"]').on('change', function() {
            var bankID = $(this).val();
            if(bankID) {
                $.ajax({
                    url: '/bank/ajax/'+bankID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('select[name="ewallet"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="ewallet"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="ewallet"]').empty();
            }
        });
    });
</script>


</body>
</html>
