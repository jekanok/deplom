<!doctype html>
<html lang="ua">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>-->
<!--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>Аналіз даних, соціальної мережі instagram</title>
    <meta name="description" content="Сервіс де можливо підрахувати вашу кількість лайків і коментарів на вашій сторінці instagram | likser.ru" />
    <meta name="keywords" content="підрахунок, лайки, коментарі, інстаграм, сторінка">
  </head>
  <body>
    <div class="container">
       <section class="header">
            <div class="row">
                <div class="col-12">
                       <div class="logo d-flex justify-content-center flex-column">
                            <img src="./images/logo.png" alt="likser.ru" class="d-block mx-auto rounded-circle">
                            <h1>Сервіс на якому можливо підрахувати кількість лайків і коментарів, на вашому профелі в соціальній мережі instagram.com.</h1>
                       </div>
                </div>
            </div>
        </section>
         <section class="content">
             <div class="row">
                 <div class="col-12">
                    <div class="sig_in d-flex justify-content-center">
                         <button onClick='location.href="https://api.instagram.com/oauth/authorize/?client_id=01e9a9797a45457db450eac2e2989036&redirect_uri=http://likser.ru/index.php&response_type=token"'>Авторизуватися</button>
                    </div>
                 </div>
             </div>
         </section>
         <section class="top-user">
             <div class="row">
                 <div class="col-12">
                     <div class="top-users">
                         <h2 class="text-center">ТОП-3 по найбільшій кількості лайків на сторінці instagram.</h2>
                         <div class="row users">
                         <?php
                         include 'load_users.php';
                         ?>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <div class="hr"></div>
    </div>
    
    
    <div class="with-modal mfp-hide">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="profile d-flex justify-content-center flex-column text-center align-items-center">
                        <img src="./images/top.jpg" alt="Евгений Москаленко" class="avatar rounded-circle w-25">
                        <span class="full_name">Test test</span>
                        <div class="col-12">
                           <div class="all_info_prifile">
                            <div class="row">
                                <div class="col-6">Кількість лайків:</div>
                                <div class="col-6">Кількість коментарів:</div>
                            </div>
                            <div class="row">
                                <div class="col-6"><span class="like_it"></span></div>
                                <div class="col-6"><span class="comment_it"></span></div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="application/javascript" src="./js/jquery.magnific-popup.js"></script>
        <script type="application/javascript" src="./js/common.js"></script>
        

  </body>
</html>