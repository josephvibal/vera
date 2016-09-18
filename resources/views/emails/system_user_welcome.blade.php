<img src="{{$message->embed(URL::asset('images/vera_logo.png'))}}" style="height:128;width:324px">
<h1>Hi, {{ $firstname }}!</h1>
 
<p style="text-indent: 50px;">	We'd like to personally welcome you to our new App . To complete your registration,  
kindly activate your account by clicking the link <a href="{{$link}}">here</a>.</p>
<br/>
<p>
username : {{$username}}<br/>
password : {{$password}}
</p>
<br/><br/>
<p>Thank you for!</p>
 
 <p> Site Admin</p>