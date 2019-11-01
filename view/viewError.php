<div class="container">
    <h1 class="alert-warning"><?=$code . " : " . $error[$code][0];?></h1>
    <img  src=<?="../public/images/error/" . $error[$code][1];?> alt="Image error"/>
    <p><?=$error[$code][2];?></p>
</div>