  <div id="user" class="modal-example-content">

      {!! Form::open(['route'=>'divisi.store','class'=>'form-horizontal']) !!} 

   
         <div class="modal-example-header">
          <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
              <h4 class="modal-title">Tambah Divisi</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">
     
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('nama','',['class'=>'form-control', 'placeholder'=>'Nama Divisi', 'required'=>'required'])!!}    
                          </div>
                      </div>    

                  <!-- /modal-body --><br>
                    <div class="row 50% pull-right">
                      <div class="12u">
                          <ul class="actions">
                            <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                            
                            
                          </ul>
                      </div>
                    </div>
                </section>
            </div>
      </div>
      <!-- /modal-end -->
  {!! Form::close() !!} 
</div>
