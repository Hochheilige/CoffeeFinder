<h1><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h1>

<style>
    body
    {
        background-color: rgb(30,32,38);
        color: rgb(255, 255, 255);    
        font-family: Сomic Sans MS;
        text-align: center;
        font-size: 22px;
    }
</style>

<body class="text-center">
        <div class ="row">
            <div class ="col-12 ">
                <div class="h2">
                  Ой... Что-то пошло не так... 
                </div>
                <img class="mb-4 " src="/CoffeeFinder/application/vendor/images/error_pic.jpg" alt="" width="512" height="340">
            </div>
        </div>
</body>