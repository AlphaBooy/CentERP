<div class="dark-block">
    <br/>
    <div class="container">
        <div class="row">
            <img class="rounded-circle mx-auto mt-n5 mb-5" width="20%" src="../public/images/profile.jpg"/>
        </div>
        <div class="row">
            <h1 class="text-primary mx-auto"><?=$userInfos["first name"] . " " . $userInfos["last name"];?></h1>
        </div><br/>
        <div class="row mx-auto">
            <p class="ml-5 h5"><i class="ni ni-mobile-button"></i>
                <span class="text-info"><?=$userInfos["phone region"];?></span>
                <?=$userInfos["phone"];?>
            </p>
            <p class="ml-5 h5"><i class="ni ni-building"></i>
                <?=$userInfos["street"];?>
            </p>
            <p class="ml-5 h5"><i class="ni ni-square-pin"></i>
                <?=$userInfos["region code"] . " " . $userInfos["city"];?>
            </p>
            <p class="ml-5 h5"><i class="ni ni-world"></i>
                <?=$userInfos["country"];?>
            </p>
        </div><hr/>
        <div class="row">
            <h2 class="ml-5 h4 text-primary">Bio :</h2>
        </div><hr/>
        <div class="row">
            <h2 class="ml-5 h4 text-primary">Projects :</h2>
        </div><hr/>
        <div class="row">
            <table class="table table-borderless mx-auto">
                <tr>
                    <td class="text-center w-50" rowspan=<?=$NBuserRoles["COUNT(*)"] + 1;?>>
                        <p class="h1 text-center"><i class="ni ni-hat-3"></i></p>Roles </td>
                </tr>
                <?php
                    foreach ($userRoles as $roles) {?>
                        <tr>
                            <td class="text-secondary w-50" style=<?="\"background-color: #".$roles["color"].";\"";?>>
                                <?=$roles["name"];?>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>