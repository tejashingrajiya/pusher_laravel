<!DOCTYPE html>
<html>
<head>
  <title>sender Test</title>
  
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  <form method="POST" action="/chat_pusher1/public/sender">
 <input type="text" name="text">
 <input type="submit">
 {{ csrf_field()}}
 </form>
</body>
</html>