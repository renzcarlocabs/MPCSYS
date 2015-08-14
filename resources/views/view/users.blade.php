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
              {{--  @foreach ($users as $user) 
               
                  <p>{!!$user->id!!}</p>
                  <p>{!!$user->name!!}</p>
                  <p>{!!$user->email!!}</p>
               
               @endforeach --}}

               <table id="table_id" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact No</th>
                            <th>Basic Salary</th>
                            <th>Service Years</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @foreach ($users as $user) 
                      
                      <tr>
                            <td>{!!$user->employee_id!!}</td>
                            <td>{!!$user->lname!!}, {!!$user->fname!!} {!!$user->mname!!} </td>
                            <td>{!!$user->address!!}</td>
                            <td>{!!$user->contact_no!!}</td>
                            <td>{!!$user->basic_salary!!}</td>
                            <td>{!!$user->service_years!!}</td>
                      </tr>
               
                    @endforeach

                    </tbody>
                </table>
              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->

          <script type="text/javascript">
            $(document).ready( function () {
              $('#table_id').DataTable({responsive: true});
          });


          </script>
  @stop