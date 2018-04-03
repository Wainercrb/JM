@extends('layouts.private') @section('title') NUEVA REFERENCIA @endsection @section('datails') REFERENCIA @endsection @section('action')
NUEVA REFERENCIA @endsection @section('styles') @endsection @section('javascript')

<script>
    $('#sign-up').on('click', function (e) {

        if (validate()) {

        }
        var data = $("#formData").serializeArray();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault(e);

        $.ajax({
            type: "POST",
            url: '/referencia/guardar',
            data: data,
            dataType: 'json',
            success: function (data) {
                console.log(data.error);
                if (data.error !== undefined) {
                    alert(data.error);
                } else {
                    alert("Agregado correctamente");
                }
            }
        })
    });

    function validate() {

    }
</script>
@endsection @section('content')
<div class="container-fluid">
    <form id="formData" method="POST">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="form-group">
                                <img src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/17021348_1619393871494874_4702724474062094415_n.jpg?oh=56965fabe237a4b75a1dd4dbca6cb19f&oe=5B2B480E"
                                    class="img-fluid" alt="Responsive-image">
                            </div>
                        </div>
                        <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="form-group text-center">
                                <h6>DR José Rafael Mora Solera</h6>
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="form-group">
                                <input class="form-control inputNoBorders" name="date" type="text" value="{{ \Carbon\Carbon::now()->toDateString()}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <label for="form-control">Paciente</label>
                    <input type="text" class="form-control" name="patient">
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-group">
                    <label for="form-control">Fecha nacimiento</label>
                    <input type="date" name="birthDate" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-group">
                    <label for="form-control">Cédula</label>
                    <input type="text" hidden name="referrer" class="form-control" value=" {{ auth()->user()->id}}">
                    <input type="text" name="identificationCard" class="form-control" required>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <label for="form-control">Teléfono</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            @foreach($dentalstate as $item)
                            <div class="form-group">
                                <label for="">{{$item->state}}</label>
                                <input name="dentalStatus[]" value="{{$item->id}}" type="checkbox">
                            </div>
                            @endforeach
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            @foreach($teeths as $item)
                            <div class="form-group">
                                <label for="">{{$item->teeth}}</label>
                                <input name="teeth[]" value="{{$item->id}}" type="checkbox">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-group">
                    <label for="form-control">Analgésico</label>
                    <input type="text" name="analgesic" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="form-control">Antibiotico</label>
                    <input type="text" name="antibiotic" class="form-control" required>
                </div>
            </div>
            <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div class="form-group">
                    <label for="form-control">Observaciones</label>
                    <textarea name="observations" class="form-control" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
                <div class="form-group">
                    <button id="sign-up" type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<style>
    .inputNoBorders{
        border: none;
    }
</style>

@endsection