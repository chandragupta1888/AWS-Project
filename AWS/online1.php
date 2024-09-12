<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Editor</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        

        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main_content {
            flex: 1;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .header {
            text-align: center;
           
        }

        .header h1 {
            font-size: 2.5rem;
            color: #3498db;
            text-align: center;
            top: 100px;
            
        }
    </style>
    
</head>
<body bgcolor="black">    
    <div class="wrapper">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
	<script type="text/javascript">
		VANTA.NET({
		    el: "html",
				mouseControls: true,
				touchControls: true,
			    gyroControls: false,
				minHeight: 200.00,
				minWidth: 200.00,
				scale: 1.00,
				scaleMobile: 1.00,
				color: 0x0006b5,
				color2: 0x0385d3,
				backgroundColor: 0x000000
		})
	</script>
    <div class="header">
        <h1 class="logo">Meta Data Extractor</h1>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>