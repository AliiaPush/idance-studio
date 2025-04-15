<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Idance Studio | Class Register</title>
</head>

<body style="margin: 0;padding: 0;box-sizing: border-box;">
    <div style="width: 100%;max-width: 600px;min-height: 100vh;height: auto;background-color: #e7e1ea;margin-left: auto;margin-right: auto;box-sizing: border-box;">
        <table style="width: 100%;">
            <!-- logo -->
            <tr>
                <div style="width: 100%;height: auto;background-color: #6a5a72;">
                    <img src="https://drive.google.com/uc?id=1Et3spKiHzZP934iB5fjcuIiK_uWqzEU0" style="width: 250px; margin-left: auto;margin-right: auto;display: block;">
                </div>
            </tr>
            <!-- logo -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: center;">
                        Class Regitration
                    </p>
                </div>
            </tr>
            <!--  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: left;">
                        Name :
                    </p>
                </div>
            </tr>
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 20px;font-weight: 500;margin-top: 1rem;color: #504356;text-align: left;text-transform: capitalize;">
                        <?php echo $first_name . " " . $last_name; ?>
                    </p>
                </div>
            </tr>
            <!--  -->
            <!--  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: left;">
                        Class Category :
                    </p>
                </div>
            </tr>
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 20px;font-weight: 500;margin-top: 1rem;color: #504356;text-align: left;">
                        <?php echo $class_category; ?>
                    </p>
                </div>
            </tr>
            <!--  -->
            <!--  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: left;">
                        Mobile Number :
                    </p>
                </div>
            </tr>
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 20px;font-weight: 500;margin-top: 1rem;color: #504356;text-align: left;">
                        <?php echo $mobile_number; ?>
                    </p>
                </div>
            </tr>
            <!--  -->
            <!--  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: left;">
                        Email :
                    </p>
                </div>
            </tr>
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 20px;font-weight: 500;margin-top: 1rem;color: #504356;text-align: left;">
                        <?php echo $email; ?>
                    </p>
                </div>
            </tr>
            <!--  -->
            <!--  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 16px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: left;">
                        Message :
                    </p>
                </div>
            </tr>
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 20px;font-weight: 500;margin-top: 1rem;color: #504356;text-align: left;">
                        <?php echo $message; ?>
                    </p>
                </div>
            </tr>
            <!--  -->
            <!-- footer  -->
            <tr>
                <div style="width: 90%;margin-left: auto;margin-right: auto;margin-top: 5rem;">
                    <p style="font-family: 'Kaisei HarunoUmi', serif;font-size: 12px;font-weight: 400;margin-top: 3.5rem;color: #6a5a72;text-align: center;margin-bottom: 0;">
                        Copyright &copy; 2023 Luke Fernando. All rights reserved
                    </p>
                </div>
            </tr>
            <!-- footer  -->
        </table>
    </div>
</body>

</html>