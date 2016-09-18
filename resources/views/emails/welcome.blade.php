<img src="{{$message->embed(URL::asset('images/vera_logo.png'))}}" style="height:128;width:324px">
<h1>Hi, {{ $companyname }}!</h1>
 
<p style="text-indent: 50px;">	We'd like to personally welcome you to our new website . To complete your registration,  
kindly activate your account by clicking the link <a href="{{$link}}">here</a>.</p>
<br/>
<p style="text-indent: 50px;"> After completing your registration you may now login and view your requested files online.
<br/>
<p>
username : {{$email}}<br/>
password : {{$password}}
</p>
<br/><br/>
<p>Thank you for registering!</p>
 
 <p> Site Admin</p>