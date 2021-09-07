<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <main id="main" class="py-5">
      <div class="container">
          <h4>All User_Info Data</h4><br><br>
            <table class="table table-striped">
             <thead>
               <tr>
                 <th scope="col">Id</th>
                 <th scope="col">First Name</th>
                 <th scope="col">Last Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">D.o.B</th>
                 <th scope="col">Mobile</th>
                 <th scope="col">designation</th>
                 <th scope="col">Gender</th>
                 <th scope="col">Hobbies</th>
              </tr>
             </thead>
             <tbody>
                 @foreach($infos as $info)
                 <tr>
                     <th scope="row">{{$info->id}}</th>
                     <td>{{$info->first_name}}</td>
                     <td>{{$info->last_name}}</td>
                     <td>{{$info->email}}</td>
                     <td>{{$info->dob}}</td>
                     <td>{{$info->mobile}}</td>                 
                     <td>{{$info->designation}}</td>                 
                     <td>{{$info->gender}}</td>                 
                     <td>{{$info->hobbies}}</td>                 
                 </tr>
                 @endforeach
             </tbody>
         </table>
        </div>
   </main>
</body>
</html>