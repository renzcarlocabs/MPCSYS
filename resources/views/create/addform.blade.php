  @extends('main')

  @section('section')
        
         {{-- Add page content here --}}

          <script>
              $(document).ready(function(){

                function readURL(input) 
                {
                    if (input.files && input.files[0])
                    {
                        var reader = new FileReader();
                        reader.onload = function (e)
                          {
                            $('#imgpreview').attr('src', e.target.result);
                          }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgselect").change(function(){
                    if($(this).val() == ""){
                      $('#imgpreview').attr('src', ' ');
                    }
                    
                    else{
                    readURL(this);
                    }

                });
            });
          </script>

          <div id="page-wrapper">

              <div class="container-fluid">
                {!! Form::open(array('class' => 'form col-md-12', 'files' => true)) !!}
    
        <div class="col-md-4">
          <div class="col-md-12">  
            <div class="row">
              <div class="form-group">
                {!! Form::label('First Name',null, array('class' => 'col-md-4 control-label',)) !!}
              <div class="col-md-8">
                {!! Form::text('fname', null, array('class' => 'form-control','placeholder' => 'e.g. Juan' , 'required' => 'required')) !!}
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
              {!! Form::label('Middle Name',null, array('class' => 'col-md-4 control-label',)) !!}
              <div class="col-md-8">
                {!! Form::text('mname', null, array('class' => 'form-control' ,'placeholder' => 'e.g. Baltazar' , 'required' => 'required')) !!}
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">  
            <div class="row">
              <div class="form-group">
                  {!! Form::label('last name',null, array('class' => 'col-md-4 control-label',)) !!}
                    <div class="col-md-8">
                    {!! Form::text('lname', null, array('class' => 'form-control','placeholder' => 'e.g. Dela Cruz', 'required' => 'required')) !!}
                  </div>
                </div>
            </div>
        </div>
    
       <div class="col-md-12">  
           <div class="row">
             <div class="form-group">
                 {!! Form::label('address',null, array('class' => 'col-md-4 control-label',)) !!}
                   <div class="col-md-8">
                     {!! Form::text('address', null, array('class' => 'form-control','placeholder' => 'e.g. 111 Street Kalye Juan Cab City' , 'required' => 'required')) !!}
                   </div>
                 </div>
             </div>
         </div>
      
      <div class="col-md-12">  
          <div class="row">
            <div class="form-group">
                {!! Form::label('contact no.',null, array('class' => 'col-md-4 control-label',)) !!}
                  <div class="col-md-8">
                    {!! Form::text('contactno', null, array('class' => 'form-control','placeholder' => 'e.g. 09053881417' , 'required' => 'required')) !!}
                  </div>
                </div>
            </div>
        </div>
      
      <div class="col-md-12">  
          <div class="row">
            <div class="form-group">
                {!! Form::label('employee ID',null, array('class' => 'col-md-4 control-label',)) !!}
                  <div class="col-md-8">
                    {!! Form::text('empid', null, array('class' => 'form-control','placeholder' => 'e.g. 13410411' , 'required' => 'required')) !!}
                  </div>
                </div>
            </div>
        </div>
          
      
    </div>
      
    <div class="col-md-4">
    
      <div class="col-md-12">  
        <div class="row">
          <div class="form-group">
            {!! Form::label('Username',null, array('class' => 'col-md-3 control-label',)) !!}
            <div class="col-md-8">
              {!! Form::text('username', null, array('class' => 'form-control','placeholder' => 'e.g. Renz' , 'required' => 'required')) !!}
                
                {{-- Errors show here. --}}

                @if ($errors-> any())
                  <div class = "alert alert-danger">
                  @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                  @endforeach
                  </div>
                @endif
            
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="row">
          <div class="form-group">
            {!! Form::label('Password',null, array('class' => 'col-md-3 control-label',)) !!}
            <div class="col-md-8">
              {!! Form::password('password', array('class' => 'form-control', 'required' => 'required', 'pattern' => '.{8,}', 'title' => 'Please enter atleast 8 characters.')) !!}
            </div>
          </div>
        </div>
      </div>
    
    </div>  


      <div class="row">
        <div class="col-md-6">
          {!! Form::file('imgslct', array('id' => 'imgselect', 'required' => 'required', 'accept' => 'image/jpg,image/png,image/jpeg')) !!}  
        </div>
        <div class="col-md-6">
          <img id = "imgpreview" src="" class = "preview">
        </div>
      </div>  
      
  {!! Form::submit('Register', array('class' => 'btn btn-success')) !!}  
  {!! Form::close() !!}
              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->


  @stop

  @section('scripts')
  
  @stop