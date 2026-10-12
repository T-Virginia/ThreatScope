<div>
 <p>IP: {{$ip}}</p>  
</div>

  @if ($errors->any())
       @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
@enderror
