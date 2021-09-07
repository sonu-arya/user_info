<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:powderblue;">
<main id="main" class="py-5">
  
   <div class="row">
   <div class="col-sm-3" > </div>
    <div class="col-sm-5" >
      <div class="container">
         <div class="card bg-gray">
              <!-- Success message -->
                @if(Session::has('success'))
                     <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            <div class="card-header">User Information</div>
              <div class="card-body">
                 <form method="POST" action="{{route('info.store')}}" >
                   @csrf
                    <div class="form-group row">    
                      <label for="fName" class="col-sm-4 col-form-label">First Name</label>
                      <div class="col-sm-8">
                        <input type="text" id="fName" class="form-control" name="fName" required/>
                      </div>
                    </div>
                    <div class="form-group row">    
                     <label for="lName" class="col-sm-4 col-form-label">Last Name</label>
                       <div class="col-sm-8">
                          <input type="text" id="lName" class="form-control" name="lName" required/>
                       </div>
                    </div>
                    <div class="form-group row">    
                     <label for="email" class="col-sm-4 col-form-label">Email</label>
                       <div class="col-sm-8">
                         <input type="email" id="email" class="form-control" name="email" required />
                       </div>
                    </div>
                    <div class="form-group row">    
                     <label for="dob" class="col-sm-4 col-form-label">Date of Birth</label>
                     <div class="col-sm-8">
                     <input type="date" id="dob" class="form-control" name="dob" required />
                    </div>
                    </div>
                    <div class="form-group row">    
                     <label for="mobile" class="col-sm-4 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                         <input type="string" id="mobile" class="form-control" name="mobile" required />
                       </div>
                       @if ($errors->has('mobile'))
                            <div class="error">
                              {{ $errors->first('mobile') }}
                           </div>
                         @endif
                    </div>
                    <div class="form-group row">    
                     <label for="designation" class="col-sm-4 col-form-label">Designation</label>
                       <div class="col-sm-8">
                         <input type="string" id="designation" class="form-control" name="designation" required />
                       </div>
                    </div>
                    <div class="form-group row"> 
                         <label for="gender" class="col-sm-4 col-form-label">Gender:</label>
                          <div class="col-sm-8">
                           <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="male"> Female<br>              
                          </div>
                          @if ($errors->has('gender'))
                            <div class="error">
                              {{ $errors->first('gender') }}
                           </div>
                         @endif
                     </div>
                     <div class="form-group row">    
                     <label for="hobbies" class="col-sm-4 col-form-label">Hobbies</label>
                       <div class="col-sm-8">
                         <input type="checkbox" name="hobbies[]" value="racing"/>Racing
                         <input type="checkbox" name="hobbies[]" value="yoga"/>Yoga
                         <input type="checkbox" name="hobbies[]" value="music"/>Music
                         <input type="checkbox" name="hobbies[]" value="travelling"/>Travelling<br>
                       </div>
                       @if ($errors->has('hobbies'))
                         <div class="error">
                           {{ $errors->first('hobbies') }}
                         </div>
                       @endif
                    </div>
                    <input type="submit" name="send" style="float: right;" value="Submit" class="btn btn-primary">
                 </form>
              </div> 
           </div>
        </div>
      </div>  
 </main>
    
</body>
</html>