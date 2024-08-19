<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    {{-- {{$title}}htmlspecialchars()  لا يمكن طباعه متغيرات يأسماء message , subject  --}}
    <h1>you have a new message</h1>
    <h1> {{ $data['email'] }} : {{ $data['name'] }}</h1>
    <p>title: {{ $data['subject'] }}</p>
    <p>Message: {{ $data['message'] }}</p>
</body>
</html>
