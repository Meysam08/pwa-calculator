<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#0d6efd">

    <style>
        body {
            font-family: system-ui;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f5f5f5;
        }
        .calc {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
        }
        input, button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="calc">
    <input type="number" id="a" placeholder="Number A">
    <input type="number" id="b" placeholder="Number B">
    <button onclick="calc('+')">Add</button>
    <button onclick="calc('-')">Subtract</button>
    <button onclick="calc('*')">Multiply</button>
    <button onclick="calc('/')">Divide</button>
    <input type="text" id="result" placeholder="Result" readonly>
</div>

<script>
    function calc(op) {
        const a = parseFloat(document.getElementById('a').value);
        const b = parseFloat(document.getElementById('b').value);

        if (isNaN(a) || isNaN(b)) {
            alert('Enter both numbers');
            return;
        }

        let r;
        switch(op) {
            case '+': r = a + b; break;
            case '-': r = a - b; break;
            case '*': r = a * b; break;
            case '/': r = b !== 0 ? a / b : 'Error'; break;
        }
        document.getElementById('result').value = r;
    }
</script>

<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js');
    }
</script>

</body>
</html>
