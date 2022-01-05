@section('content')
@extends('admin.constantdash.dash')

<style>
    form{
        margin-left: 50px;
    }
</style>

<h1>Students</h1>
<table>
<tr>
    <td>id</td>
    <td>name</td>
    <td>class</td>
    <td>section</td>
    <td>Operation</td>
</tr>
    @foreach($data as $abc)
    <tr>
    <td>{{$abc['id']}}</td>
    <td>{{$abc['Name']}}</td>
    <td>{{$abc['Class']}}</td>
    <td>{{$abc['Section']}}</td>
    <td><a href={{"delete/".$abc['id']}}>Delete</a></td>

</tr>
    @endforeach


</table>


<form action="student_link" method="post">
            {{ csrf_field()  }}
        <label for="Name">REG-DATE:</label>
         <input type="date" placeholder="Enter date" name="date"> <br> <br>

         <label>Select Gender</label> <br>
         <input type="radio" name="Gender">Male <br>
         <input type="radio" name="Gender">Female <br>
         <input type="radio" name="Gender">Other <br> <br>

 
        <label for="Name">Full Name:</label>
         <input type="text" placeholder="Enter full name" name="fullname"> <br> <br>
 
         <label for="Name">Class:</label>
         <input type="text" placeholder="enter class" name="class"> <br><br>
 
         <label for="section">Section: </label>
         <input type="text" placeholder="Enter section" name="section"> <br> <br>

         <label for="section">Roll no: </label>
         <input type="int" placeholder="Enter roll number" name="rollno"> <br> <br>

         <label for="DOB">DOB: </label>
         <input type="dob" placeholder="Date of birth" name="dob"> <br> <br>

         <label for="address">Address: </label>
         <input type="text" placeholder="Enter Address" name="address"> <br> <br>

         <label for="email">Email Address: </label>
         <input type="email" placeholder="Enter email address" name="email"> <br> <br>
         
         <label for="phone number">Phone number:</label>
         <input type="number" placeholder="phone number"name="phone"> <br><br>

         <label for="name">Parent's Name:  </label>
         <input type="text" placeholder="Enter parent's name" name="parent"> <br> <br>

         <label for="name">Guardian's Name: </label>
         <input type="text" placeholder="Enter guardian's name" name="guardian"> <br> <br>

         
         <input type="submit"> 
 
         



</form>

@endsection