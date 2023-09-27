<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせメール</title>
</head>
<body>
    <p>以下はお問い合わせフォームからのメッセージです:</p>

    <p><strong>姓:</strong> {{ $formData['lastname'] }}</p>
    <p><strong>名:</strong> {{ $formData['firstname'] }}</p>
    <p><strong>会社名:</strong> {{ $formData['company'] }}</p>
    <p><strong>部署名:</strong> {{ $formData['department'] }}</p>
    <p><strong>E-mail:</strong> {{ $formData['email'] }}</p>
    <p><strong>電話番号:</strong> {{ $formData['phone'] }}</p>
    <p><strong>備考欄:</strong> {{ $formData['message'] }}</p>

</body>
</html>