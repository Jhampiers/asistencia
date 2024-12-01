<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Asistencia</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .lockscreen-wrapper {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 90%;
            margin: 20px;
        }

        .lockscreen-logo a {
            color: #2c3e50;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            display: block;
            margin-bottom: 30px;
        }

        .lockscreen-item {
            border-radius: 15px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin: 20px 0;
        }

        .input-group {
            width: 100%;
        }

        .form-control {
            height: 45px;
            border-radius: 25px 0 0 25px;
            border: 2px solid #e0e0e0;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            
        }

        .form-control:focus {
            border-color: #2980b9;
            box-shadow: none;
        }

        .btn-primary {
            border-radius: 0 25px 25px 0;
            height: 45px;
            background: #2980b9;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #3498db;
            transform: translateX(2px);
        }

        .help-block {
            color: #7f8c8d;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
        }

        .lockscreen-footer {
            margin-top: 30px;
        }

        .lockscreen-footer a {
            color: #2980b9;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .lockscreen-footer a:hover {
            color: #3498db;
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .lockscreen-wrapper {
            animation: fadeInUp 0.6s ease-out;
        }

        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap;
        }

        #movimientos {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            background: rgba(255,255,255,0.9);
        }
    </style>
</head>
<body>
    <div class="lockscreen-wrapper">
        <div id="movimientos"></div>

        <div class="lockscreen-logo">
            <a href="#">REGISTRAR ASISTENCIA</a>
        </div>

        <div class="lockscreen-name"></div>

        <div class="lockscreen-item">
            <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
                <div class="input-group">
                    <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="Ingrese clave ">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="help-block text-center">
          Ingrese su clave de asistencia
        </div>

        <div class="lockscreen-footer text-center">
            <a href="../admin/"><i class="fa fa-user"></i> Acceso Administrativo</a>
        </div>
    </div>

    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <script src="../admin/public/js/bootstrap.min.js"></script>
    <script src="../admin/public/js/bootbox.min.js"></script>
    <script type="text/javascript" src="scripts/asistencia.js"></script>
</body>
</html>