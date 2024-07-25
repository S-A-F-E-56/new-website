<!DOCTYPE html>
<html>
<head>
    <title>Capture Image</title>
</head>
<body>
    <h1>Capture Image from Camera</h1>
    <button id="captureBtn">Capture</button>
    <img id="capturedImage" src="" alt="Captured Image" style="display: none;"/>

    <script>
        document.getElementById('captureBtn').addEventListener('click', function() {
            fetch('/capture')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('capturedImage').src = data.image;
                    document.getElementById('capturedImage').style.display = 'block';
                });
        });
    </script>
</body>
</html>