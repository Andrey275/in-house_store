<?php include 'header_2.php' ?>



    <?php

        $db = "shop_01";
        $connect = mysqli_connect('localhost', 'root', '', $db);;
        mysqli_set_charset($connect, 'utf8');
        $get_info = "SELECT userID,full_name,org_pas, role, picture, user_information, tg_ID FROM user WHERE org_pas = '".$_SESSION['org_pas']."'";
        $profile_info = mysqli_query($connect, $get_info);
        if(mysqli_num_fields($profile_info) > 0){
            $user_info = mysqli_fetch_array($profile_info);
            #echo $user_info[0];
        }else{
            $user_info = 0;
        }


        
        $user_id = $user_info[0];
        $full_name = $user_info[1];
        $org_pas = $user_info[2];
        $user_information = $user_info[5];
        $tg_ID = $user_info[6];

        $_SESSION['info'] = $user_id;
        $_SESSION['fullname']=$full_name;
        $_SESSION['org_pas']=$org_pas;
        $_SESSION['user_information']=$user_information;
    ?>

    
        <div class="col">
            <div class="container_2">
                <form action="change_prof-ok.php" method="post">
                      <div class="row">
                            <div class="pick_prof">
                                <label for="fullname">(Аватар)</label>
                            </div>
                            
                              <div class="row">
                                    <div class="col-sm">
                                        <label for="avatar">Фото</label>
                                    </div>
                                    <div class="col-bi">
                                        <input type="text" name="avatar" class="add-frame" placeholder="Введите название картинки...">
                                    </div>
                              </div>

                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="name" class="add-frame" value="<?php echo $full_name; ?>" placeholder="  Новое ФИО..." required="required">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="org_pas">ФИО</label>
                                    </div>
                              </div>
                              
                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="org_pas" class="add-frame" value="<?php echo $org_pas; ?>" placeholder="Новый пароль..." required="required">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="points">Пароль</label>
                                    </div>
                              </div>
                              
                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="tg_ID" class="add-frame" value="<?php echo $tg_ID; ?>" placeholder="(@******)">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="user_inf">Телеграм ID</label>
                                    </div>
                              </div>

                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="inform" class="add-frame" value="<?php echo $user_information; ?>" placeholder="О себе...">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="user_inf">Биоргафия</label>
                                    </div>
                              </div>

                      </div>

                      
                      <div class="add-button">                          
                            <input type="submit" class="knopka" value="Сохранить" />
                      </div>
                  </form>
            </div>
        </div>
    </main>     
        

<?php include 'footer.php' ?>