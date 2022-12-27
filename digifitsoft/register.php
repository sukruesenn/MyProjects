<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/login_register.css">
</head>

<body>
    <section class="vh-100">
        <div class="content h-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-5 mx-auto">
                        <h3 class="text-white mb-3 top-text">Hesabınız var mı?</h3>
                        <a href="login.php" class="d-inline-flex align-items-center btn btn-primary shadow-none my-2 pe-4"><i class="fa-solid fa-user me-4"></i> Giriş yapın</a>

                        <div class="d-flex align-items-center my-4">
                            <hr class="col-1">
                            <span class="mx-3 text-2 text-muted">Kayıtlı Değilseniz</span>
                            <hr class="flex-grow-1">
                        </div>
                        
                        <form action="islem.php" class="form-dark" method="POST">
                            
                            <div class="mb-3">
                                <label for="fullName" class="form-label text-light">Ad Soyad</label>
                                <input type="text" name="ekle_adsoyad" class="form-control" id="fullName" placeholder="Adınız ve Soyadınız" required>
                            </div>
                        
                            <div class="mb-3">
                                <label for="fullName" class="form-label text-light">E-Posta</label>
                                <input type="text" name="ekle_eposta" class="form-control" id="fullName" placeholder="E-Posta Adresiniz" required>
                            </div>

                            <div class="mb-3">
                                <label for="fullName" class="form-label text-light">Telefon</label>
                                <input type="text" name="ekle_tel" class="form-control" id="fullName" placeholder="Telefon Numaranız" required>
                            </div>

                            <div class="mb-3">
                                <label for="pass" class="form-label text-light">Şifre</label>
                                <input type="password" name="ekle_password" class="form-control" id="pass" placeholder="Şifreniz" required>
                            </div>
                            
                            <input type="submit" name="kayitol" class="btn btn-primary shadow-none my-2 button" value="Kayıt Ol">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>