<!DOCTYPE html>
<html lang="en">
  <head>
    <title>URL Shortener</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css" />
  </head>
  <body>
    <div id="container">
      <div class="row">
        <h2>URL Shortener</h2>

        @if(Session::has('errors'))
        <h3 class="error">{{$errors->first('link')}}</h3>
        @endif

        @if(Session::has('link'))
        <h3 class="success">
          {{ "Your shortened URL: "}}{{ HTML::link(Session::get('link')) }}</h3>
        @endif

        @if(Session::has('message'))
        <h3 class="error">{{Session::get('message')}}</h3>
        @endif

        {{Form::open(array('url'=>'/','method'=>'post'))}}

        {{Form::text('link',Input::old('link'),array('placeholder'=>'Insert your URL here and press enter!'))}}
        {{Form::close()}}
      </div>
    </div>
  </body>
</html>