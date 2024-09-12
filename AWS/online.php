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

        .wrapper {
            display: flex;
            background-color: transparent;
            border-radius: 15px;
            box-shadow: transparent;
            width: 1000px;
            height: 550px;
            overflow: hidden;
            padding-right: 250px;
            padding-left: 250px;
            margin-left: -100px;
        }

        .section2 {
            width: 250px;
            background-color:transparent;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Ensure space between tab buttons and download buttons */
        }
        ion-icon {
            color: white; 
            font-size: 24px; 
        }

        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
            color: white; 
        }

        .section2 input[type="radio"] {
            display: none;
        }

        .section2 label {
            display: block;
            cursor: pointer;
            padding: 10px;
            font-weight: bold;
            color: #FFFFFF;
            position: relative;
        }

        .section2 label img {
            vertical-align: middle;
            margin-right: 10px;
        }

        .section2 label .lil_arrow {
            position: absolute;
            top: 50%;
            right: 10px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #FFFFFF;
            transform: translateY(-50%);
            transition: border-top 0.3s;
        }

        .section2 label:hover .lil_arrow {
            border-top: 5px solid #ffffff;
        }

        .section2 label .bar {
            position: absolute;
            left: 0;
            top: 50%;
            height: 100%;
            width: 5px;
            background-color: #29b6f6;
            transition: background-color 0.3s;
        }

        .section2 .swanky_wrapper__content {
            display: none;
            padding-left: 30px;
        }

        .section2 input[type="radio"]:checked + label + .swanky_wrapper__content {
            display: block;
        }

        .section2 .swanky_wrapper__content ul {
            list-style-type: none;
            padding: 0;
        }

        .section2 .swanky_wrapper__content ul li {
            margin: 10px 0;
        }

        .section2 .download-buttons {
            margin: 20px;
        }

        .section2 .download-buttons button {
            margin-bottom: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .section2 .download-buttons button:hover {
            background-color: #2980b9;
        }

        .main_content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            text-align: center;
            margin-top: 1px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #3498db;
        }

        .section1 {
            margin: 20px;
            display: flex;
            flex-direction: column;
        }

        .section1 input[type="submit"] {
            margin-left: 300px;
        }

        .content {
            flex: 1;
            padding: 30px;
            background-color: #fafafa;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            overflow-y: auto;
            margin-left: 20px;
        }

        .content div {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s, transform 0.3s;
        }

        .content div.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .content h2 {
            margin-top: 0;
            color: #ffffff;
            font-size: 22px;
        }

        .content p {
            color: #546e7a;
            line-height: 1.6;
        }

        #fileUpload {
            display: block;
            margin: 20px auto;
            padding: 15px 30px; /* Increase horizontal padding for pill shape */
            border: none;
            background: #98DED9; /* Tomato color */
            color: #fff;
            font-size: 1rem;
            border-radius: 50px; /* Pill shape */
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        /* #fileUpload:hover {
            background: #0B2F9F; /* Slightly darker tomato color on hover */
            transform: scale(1.05); /* Slight scale effect on hover */
        } */
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
        <div class="section2">
            <!-- Radio buttons and labels for sidebar -->
            <input type="radio" name="radio" id="Choosing the Dataset" checked>
            <label for="Choosing the Dataset">
                
                <span>Choosing the Dataset</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
            </label>

            <div class="swanky_wrapper__content">

                <ul>
                    <li>
                        <ion-icon name="laptop-outline"></ion-icon>
                        <a href="#uploading" style="color: #90EE90;">From System</a></li>
                    <li>
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                        <a href="https://drive.google.com" style="color: #90EE90;">Google Drive</a></li>
                </ul>
            </div>

            <input type="radio" name="radio" id="Details of Dataset">
            <label for="Details of Dataset">
                
                <span>Details of Dataset</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
            </label>
            <div class="swanky_wrapper__content">
                <form method="post">
                <?php
                echo '<label style="color: #90EE90; margin-bottom: 5px;">
                <input type="checkbox" name="check_list[]" value="Accuracy" /> Info of the dataset
                </label><br>';

                echo '<label style="color: #90EE90;">
                <input type="checkbox" name="check_list[]" value="Summary" /> Description of dataset
                </label>';
                ?>
                </form>
            </div>

            <input type="radio" name="radio" id="Preparing the Dataset">
            <label for="Preparing the Dataset">
                
                <span >Preparing the Dataset</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
            </label>
            <div class="swanky_wrapper__content">
                <ul>
                    <li style="color: #90EE90">Numeric values</li>
                    <select name="numeric">
                        <option value="none" selected="selected">None</option>
                        <option value="mean">SimpleImputer (Mean)</option>
                        <option value="median">SimpleImputer (Median)</option>
                        <option value="knnimputer">KNNImputer</option>
                    </select>
                    <br>
                    <li style="color: #90EE90">Categorical values</li>
                    <select name="category">
                        <option value="none" selected="selected">None</option>
                        <option value="mode">Fill by mode</option>
                        <option value="label">Label Encoding</option>
                        <option value="one_hot">One Hot Encoding</option>
                    </select>
                    <input type="submit" name="click" value="Submit">
                </ul>
            </div>

            <input type="radio" name="radio" id="Training the model">
            <label for="Training the model">
                
                <span>Training the model</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
            </label>
            <div class="swanky_wrapper__content">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <ul>
                        <li style="color: #90EE90">Regression</li>
                        <select name="regression">
                            <option value="" selected="selected">None</option>
                            <option value="all">All algorithms</option>
                            <option value="linear">Linear Regression</option>
                            <option value="knn">KNN</option>
                            <option value="random_forest">Random Forest</option>
                            <option value="decision">Decision Tree</option>
                            <option value="svm">Support Vector Regression</option>
                        </select>
                        <br>
                        <li style="color: #90EE90">Classification</li>
                        <select name="classification">
                            <option value="none" selected="selected">None</option>
                            <option value="binary_class">Binary Classification</option>
                            <option value="multi_class">Multi-Classification</option>
                            <option value="logistic">Logistic Regression</option>
                            <option value="knn_class">KNN</option>
                            <option value="svm_class">SVM</option>
                            <option value="naive">Naive Bayes</option>
                            <option value="decision_class">Decision Tree</option>
                        </select>
                        <input type="submit" name="submit" value="Submit">
                    </ul>
                </form>
                <?php
                    if (isset($_POST['submit'])) {
                        if (!empty($_POST['check_list'])) {
                            $arr = array();
                            foreach ($_POST['check_list'] as $selected) {
                                array_push($arr, $selected);
                            }
                            echo '<pre>' . print_r($arr, true) . '</pre>';
                        }
                    }
                ?>
            </div>

            <input type="radio" name="radio" id="Evaluating the model">
            <label for="Evaluating the model">
                
                <span style="color: #FFFFFF;">Evaluating the model</span>
                <div class="lil_arrow"></div>
            </label>
            <div class="swanky_wrapper__content">
                <form method="post">
                   
                <?php
echo '<label style="color: #90EE90; margin-bottom: 5px;">
        <input type="checkbox" name="check_list[]" value="Accuracy" /> Model Accuracy
      </label><br>';

echo '<label style="color: #90EE90;">
        <input type="checkbox" name="check_list[]" value="Summary" /> Model Summary
      </label>';
?>
                </form>
            </div>
            <style>
        .download-buttons {
            display: flex;
            gap: 10px; /* Adds space between buttons */
        }

        .download-buttons button {
            flex: 1; /* Makes buttons take equal space */
            padding: 10px; /* Adjust padding as needed */
            font-size: 16px; /* Adjust font size as needed */
            border: 1px solid #ccc; /* Adds border */
            border-radius: 5px; /* Rounds corners */
            cursor: pointer; /* Changes cursor on hover */
            background-color: #007bff; /* Background color */
            color: white; /* Text color */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .download-buttons button:hover {
            background-color: #0056b3; /* Darker background on hover */
        }
    </style>
            <div class="download-buttons">
                <button id="downloadSet">Download the set</button>
                <button id="downloadModel">Download the Model</button>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <h1 class="logo">Meta Data Extractor</h1>
            </div>
            <div class="section1">
            <div class="myDiv" id="uploading">
            <?php
            
            $thank_you_message = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['Upload']) && $_POST['Upload'] == 'Upload CSV') {
                    $upload_dir = getcwd() . DIRECTORY_SEPARATOR . 'experiment' . DIRECTORY_SEPARATOR . 'uploads';
                    if ($_FILES['csv']['error'] == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES['csv']['tmp_name'];
                        $name = basename($_FILES['csv']['name']);
                        $csvfile = $upload_dir . '/' . $name;
                        if (move_uploaded_file($tmp_name, $csvfile)) {
                            
                            $thank_you_message = 'Thank you! Your file has been successfully uploaded.';
                        } else {
                            $thank_you_message = 'Sorry, there was an error moving your file.';
                        }
                    } else {
                        $thank_you_message = 'Sorry, there was an error uploading your file.';
                    }
                }
            }
            ?>

                    <!-- Display the PHP Thank You Message -->
                    <?php if (!empty($thank_you_message)): ?>
    <p style="color: #f5f3c9; font-weight: 900; font-size: 24px; text-align: center;">
        <?php echo $thank_you_message; ?>
    </p>
<?php endif; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="csv" id="fileUpload">
    <input type="submit" name="Upload" value="Upload CSV">
</form>

                  
            </div>
            <!--div class="content">
                <div id="content1" class="active">
                    <ul>
                        <li><a href="#uploading">From System</a></li>
                        <li><a href="https://drive.google.com">Google Drive</a></li>
                    </ul>
                </div>
                <div id="content2">
                    <form method="post">
                        <input type="checkbox" name="check_list[]" value="information"/> Info of the dataset<br><br>
                        <input type="checkbox" name="check_list[]" value="description"/> Description of dataset
                    </form>
                </div>
                <div id="content3">
                    <ul>
                        <li>Numeric values</li>
                        <select name="numeric">
                            <option value="none" selected="selected">None</option>
                            <option value="mean">SimpleImputer (Mean)</option>
                            <option value="median">SimpleImputer (Median)</option>
                            <option value="knnimputer">KNNImputer</option>
                        </select>
                        <br>
                        <li>Categorical values</li>
                        <select name="category">
                            <option value="none" selected="selected">None</option>
                            <option value="mode">Fill by mode</option>
                            <option value="label">Label Encoding</option>
                            <option value="one_hot">One Hot Encoding</option>
                        </select>
                        <input type="submit" name="click" value="Submit">
                    </ul>
                </div>
                <div id="content4">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <ul>
                            <li>Regression</li>
                            <select name="regression">
                                <option value="" selected="selected">None</option>
                                <option value="all">All algorithms</option>
                                <option value="linear">Linear Regression</option>
                                <option value="knn">KNN</option>
                                <option value="random_forest">Random Forest</option>
                                <option value="decision">Decision Tree</option>
                                <option value="svm">Support Vector Regression</option>
                            </select>
                            <br>
                            <li>Classification</li>
                            <select name="classification">
                                <option value="none" selected="selected">None</option>
                                <option value="binary_class">Binary Classification</option>
                                <option value="multi_class">Multi-Classification</option>
                                <option value="logistic">Logistic Regression</option>
                                <option value="knn_class">KNN</option>
                                <option value="svm_class">SVM</option>
                                <option value="naive">Naive Bayes</option>
                                <option value="decision_class">Decision Tree</option>
                            </select>
                            <input type="submit" name="submit" value="Submit">
                        </ul>
                    </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            if (!empty($_POST['check_list'])) {
                                $arr = array();
                                foreach ($_POST['check_list'] as $selected) {
                                    array_push($arr, $selected);
                                }
                                echo '<pre>' . print_r($arr, true) . '</pre>';
                            }
                        }
                    ?>
                </div>
                <div id="content5">
                    <form method="post">
                        <input type="checkbox" name="check_list[]" value="Accuracy"/> Model Accuracy<br><br>
                        <input type="checkbox" name="check_list[]" value="Summary"/> Model Summary
                    </form>
                </div>
            </div>
        </div>
    </div-->

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.content div').forEach(content => content.classList.remove('active'));

                button.classList.add('active');

                const target = button.getAttribute('data-target');
                document.getElementById(target).classList.add('active');
            });
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>