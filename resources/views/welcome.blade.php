<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel_project</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
       

        <!-- Styles -->
        <link href={{asset('css/style.css')}} rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" style="color: rgb(0, 0, 0)" href="#">mee<span style="font-weight: 700; color:tomato">Asim </span></a>
                  </li>
                  
                </ul>
              </nav>
              
            <div class="container-fluid">
                <div class="container mt-3">
                    <h2 id="title_">Laravel project</h2>
                    <button class="bt btn-success addBtn" id="addrow" name="addnew">Add New</button>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif            
                    <div class="card-content">
                        <div class="card-body">
                            <table id="myTable" class="table" data-toggle="table"  data-pagination="true">
                           
                                <tbody>
                                    
                                    
                                    
                                <div id="datafield">
                                    @foreach($users as $user)
                                <tr>
                                    
                                   
                                    <td>
                                      <br> <a href="{{url('delete/'.$user->id)}}"><span class="badge bg-danger" id="btnDelete"><i class="bi bi-trash"></i></span></a>
                                        
                                    </td>
                                    <td class="form-group">
                                        <span class="star">*</span><input class="form-control" value="{{$user->first_name}}" name="first_name" readonly > 
                                    </td>
                                    <td class="form-group">
                                        <span class="star">*</span><input class="form-control" value="{{$user->middle_name}}" name="middle_name" readonly>
                                    </td>
                                    <td class="form-group">
                                        <span class="star">*</span> <input class="form-control" value="{{$user->last_name}}" name="last_name" readonly>
                                    </td>
                                    <td class="form-group">
                                        <span class="star">*</span><input class="form-control" value="{{$user->age}}" name="age" readonly>
                                    </td>
                                   
                                    <td class="form-group">
                                        <span class="star">*</span><select class="form-control"  name="gender" readonly>
                                            <span class="star">*</span><option value="{{$user->gender}}">{{$user->gender}}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                      </select>
                                    </td>
                                    <td class="form-group">
                                    <div class="form-check">
                                        <br> <input class="form-check-input" type="checkbox" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Different Address?
                                        </label>
                                    </div>
                                    </td>
                                    <td class="form-group">
                                        <br> <input class="form-control" value="{{$user->address}}" name="address" readonly>
                                    </td>
                                    <td class="form-group">
                                        <br> <input class="form-control" value="{{$user->city}}" name="city" readonly>
                                    </td>
                                    <td class="form-group">
                                        <br>  <input class="form-control" value="{{$user->state}}" name="state" readonly>
                                    </td>
                                    <td class="form-group">
                                        <br> <select class="form-control" value="{{$user->country}}" name="country" readonly>
                                            <option value="{{$user->country}}">{{$user->country}}</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="India">India</option>
                                            <option value="United States">United States</option>
                                          </select>
                                    </td>
                                    <td class="form-group">
                                        <br> <input class="form-control" value="{{$user->zip}}" name="zip" readonly>
                                    </td> 
                                
                                  </tr>
                                  @endforeach
                                </div>
                                  
                                    </form>
                        
                                </tbody>
                            </table>
            
            
                        
                        </div>
                    </div>

                
                </div>
                
                
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  

<script>
    $(document).ready(function(){
    $(".addBtn").click(function(e){
        e.preventDefault();
        $("#datafield").prepend(`<form class="form" action="{{route('save')}}" method="POST" name="dataForm" id="data" style="display:flex; height:35px;margin-bottom: 10px">
                                @csrf
                                <tr>
                                
                                
                                <td class="form-group"><span class="star">*</span><input class="form-control" placeholder="Child First Name" name="first_name" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter alphabets only. ')" required></td>
                                <td class="form-group"><span class="star">*</span><input class="form-control" placeholder="Child Middle Name" name="middle_name" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter alphabets only. ')" required></td>
                                <td class="form-group"><span class="star">*</span> <input class="form-control" placeholder="Child Last Name" name="last_name" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter alphabets only. ')" required></td>
                                <td class="form-group"><span class="star">*</span><input type="number" class="form-control" placeholder="Child Age" name="age" required></td>
                                <td class="form-group"><span class="star">*</span><select class="form-control" placeholder="Gender" name="gender" required><span class="star">*</span><option value="">Select Gender</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></td>
                                <td class="form-group"> <div class="form-check"> <br> <input class="form-check-input" type="checkbox"  id="flexCheckDefault" style="margin-top:-30px; margin-left:10px;"> <label class="form-check-label" for="flexCheckDefault" style="font-size:12px"> Different Address? </label></div> </td>
                                <td class="form-group"> <br> <input class="form-control" placeholder="Child Address" name="address" id="address" style="margin-right:10px"  disabled> </td>
                                <td class="form-group"><br> <input class="form-control" placeholder="Child City" name="city" id="city" style="margin-right:10px"  disabled></td>
                                <td class="form-group"><br>  <input class="form-control" placeholder="Child State" name="state"  id="state" style="margin-right:10px"  disabled></td>
                                <td class="form-group"><br> <select class="form-control" placeholder="Country" name="country" id="country" style="margin-right:10px" disabled><option value="">Select Country</option> <option value="Nepal">Nepal</option><option value="India">India</option> <option value="United States">United States</option> </select></td>
                                <td class="form-group"><br> <input tyep="number" class="form-control" placeholder="Child Zip Code" name="zip" id="zip" style="margin-right:10px" disabled></td>
                                <td><br> <button class="btn bg-success addBtn"  type="submit" value="submit"><i class="bi bi-save"></i></button></td>
                                  
                                  
                                   
                                </tr>
                                
                           
                           
                              
                                `);
    });
  
});
</script>
<script>
    $(document).on('click','#flexCheckDefault',function(){
        var checkBox = document.getElementById('flexCheckDefault');
        if(checkBox.checked == true){
            document.getElementById("address").disabled = false;
            document.getElementById("city").disabled = false;
            document.getElementById("state").disabled = false;
            document.getElementById("country").disabled = false;
            document.getElementById("zip").disabled = false;
        }else{
            document.getElementById("address").disabled = true;
            document.getElementById("city").disabled = true;
            document.getElementById("state").disabled = true;
            document.getElementById("country").disabled = true;
            document.getElementById("zip").disabled = true;
        }
    })
</script>
    </body>
</html>
