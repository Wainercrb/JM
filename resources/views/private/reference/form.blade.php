{!!Form::token()!!}
<div class="row">
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      @Include('messages.errors')
   </div>
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
      {!!Form::text('date',\Carbon\Carbon::now(), ['class' => 'inputNoBorder'])!!}
   </div>
   <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
      {!!Form::label('patient', 'Paciente:')!!}
      {!!Form::text('patient',  old('patient'), ['class' => 'form-control',
      'placeholder' => 'Ingrese el paciente' , 'required' => true])!!}
   </div>
   <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      {!!Form::label('birthDate', 'Fecha de nacimiento:')!!}
      {!!Form::date('birthDate', old('birthDate'), ['class' => 'form-control',
      'required' => true])!!}
   </div>
   <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      {!!Form::label('identificationCard', 'Cédula:')!!}
      {!!Form::text('identificationCard',  old('identificationCard'), ['class' => 'form-control',
      'placeholder' => 'Ingrese la cédula' , 'required' => true])!!}
   </div>
   <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 form-group">
      {!!Form::label('phone', 'Teléfono:')!!}
      {!!Form::text('phone',  old('phone'), ['class' => 'form-control',
      'placeholder' => 'Ingrese el teléfono' , 'required' => true])!!}
   </div>
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="container-fluid">
         <div class="row row-teeths">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center contianer-teeths">
               {!!Form::label('dentalStatus', 'Estado dental', ['class' => 'labelDentalStatus'])!!}
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               @foreach($dentalstate as $item)
               <div class="form-check disabled">
                  <label class="form-check-label">
                  {!!Form::checkbox('dentalStatus[]',$item->id , isset($dentalstateClick)
										&& in_array($item->id, $dentalstateClick)? 'cheked': '')!!}
                  {{ $item->state }}
                  </label>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
      <div class="container-fluid">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
               <div class="container-fluid">
                  <div class="row row-teeths">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center contianer-teeths">
                        {!!Form::label('teeths', 'Derecho',['class' => 'labelTeeths'])!!}
                     </div>
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                        @foreach($rightUp as $item)
                        <div class="form-check disabled">
                           <label class="form-check-label">
                           {!!Form::checkbox('teeths[]',$item->id, isset($teethsClick)
														 && in_array($item->id, $teethsClick)? 'cheked': '')!!}
                           {{ $item->teeth }}
                           </label>
                        </div>
                        @endforeach
                     </div>
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                        @foreach($rightDown as $item)
                        <div class="form-check disabled">
                           <label class="form-check-label">
                           {!!Form::checkbox('teeths[]',$item->id, isset($teethsClick)
														 &&  in_array($item->id, $teethsClick)? 'cheked': '')!!}
                           {{ $item->teeth }}
                           </label>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
               <div class="container-fluid">
                  <div class="row row-teeths">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center contianer-teeths">
                        {!!Form::label('teeths', 'Izquierdo',['class' => 'labelTeeths'])!!}
                     </div>
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                        @foreach($leftUp as $item)
                        <div class="form-check disabled">
                           <label class="form-check-label">
                           {!!Form::checkbox('teeths[]',$item->id, isset($teethsClick)
														 &&  in_array($item->id, $teethsClick)? 'cheked': '')!!}
                           {{ $item->teeth }}
                           </label>
                        </div>
                        @endforeach
                     </div>
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                        @foreach($leftDown as $item)
                        <div class="form-check disabled">
                           <label class="form-check-label">
                           {!!Form::checkbox('teeths[]',$item->id, isset($teethsClick)
														 &&  in_array($item->id, $teethsClick)? 'cheked': '')!!}
                           {{ $item->teeth }}
                           </label>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="container-fluid">
                  <div class="row  row-teeths">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center contianer-teeths">
                        {!!Form::label('teeths', 'otros',['class' => 'labelTeeths'])!!}
                     </div>
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        @if(!empty($others))
                        @foreach($others as $item)
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                           {!!Form::checkbox('teeths[]',$item->id, isset($teethsClick)
														 &&  in_array($item->id, $teethsClick)? 'cheked': '')!!}
                           {{ $item->teeth }}
                           </label>
                        </div>
                        @endforeach
                        @else
                        <h1>No hay datos en otros</h1>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group">
               {!!Form::label('referredAnalgesic', 'Analgesico:')!!}
               {!!Form::text('referredAnalgesic',  old('referredAnalgesic'),
               ['class' => 'form-control', 'placeholder' => 'Ingrese el analgesico' , 'required' => true])!!}
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group">
               {!!Form::label('referredAntibioticesic', 'Antibiótico:')!!}
               {!!Form::text('referredAntibioticesic',  old('referredAntibioticesic'),
               ['class' => 'form-control', 'placeholder' => 'Ingrese el antibiotico' , 'required' => true])!!}
            </div>
         </div>
      </div>
   </div>
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      {!!Form::label('observations', 'Observations:')!!}
      {!!Form::textarea('observations',  old('observations'), ['class' => 'form-control',
      'placeholder' => 'Ingrese las observaciones' , 'required' => true,  "rows" => 5, "cols" => 5])!!}
   </div>
</div>
