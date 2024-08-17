<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    {{-- {{$title}}htmlspecialchars()  لا يمكن طباعه متغيرات يأسماء message , subject  --}}
    <h1>Message was sent</h1>
    <p>title: {{ $title }}</p>
    <p>Message: {{ $contactMessage }}</p>
</body>
</html>
