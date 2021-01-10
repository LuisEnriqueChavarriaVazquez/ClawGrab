<?php
include './componentesInterfaz/A_headerData.php';
include 'L_session.php';
?>
<nav class="colorNavLight nav-extended">
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger iconNav show-on-large"><img class="iconsSize iconColorLight" src="icons/menu-black-18dp.svg" alt="menu icon"></a>
        <span class="titleNav flow-text">Panel de control.</span>
        <a class="btn-floating btn-large halfway-fab waves-effect waves-light botonCodeDesign">
            <i class="material-icons">code</i>
        </a>
    </div>
</nav>

<ul id="mobile-demo" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="img/fondo.jpg" width="300px">
            </div>
            <a href="#name"><span class="white-text name"><?php echo $login_session_name;?></span></a>
            <a href="#email"><span class="white-text email"><?php echo $login_session; ?></span></a>
        </div>
    </li>
    <li><a href="comunidadHome.php" class="waves-effect"><i class="material-icons">groups</i>Community</a></li>
    <li><a href="formEditData.php" class="waves-effect"><i class="material-icons">edit</i>Update data</a></li>
    <li><a href="#!" class="waves-effect" id="pythonista"><i class="material-icons blue-grey-text">palette</i>Pythonista</a></li>
    <li><a href="#!" class="waves-effect" id="hacker"><i class="material-icons green-text">palette</i>Hacker</a></li>
    <li><a href="#!" class="waves-effect" id="dark"><i class="material-icons black-text">palette</i>Dark</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="menuAyuda.php" class="waves-effect"><i class="material-icons">help</i>Help</a></li>
    <li><a href="L_logOut.php" class="waves-effect"><i class="material-icons">directions_run</i>Log out</a></li>
</ul>

<section class="bodyStyle">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias enim perspiciatis doloremque illo modi pariatur. Dicta commodi reprehenderit delectus, cum velit ratione repellendus magni dolore at molestiae! Ducimus, eaque assumenda? lorem
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nisi ab, quidem, molestias cumque assumenda quis adipisci animi neque iure necessitatibus vero excepturi enim voluptatibus voluptatem numquam voluptatum? Excepturi, ducimus.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus libero suscipit non nihil alias, cupiditate velit dolor blanditiis doloribus at ullam repudiandae tempora perspiciatis vero odio. Dolorum maxime doloremque consequatur.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto obcaecati saepe eos optio nostrum explicabo quo. Delectus voluptate temporibus molestias rerum voluptatem itaque placeat consequuntur maiores corrupti dicta. Quis, deleniti.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, sint voluptates mollitia doloremque nobis voluptatum accusantium deleniti velit! Cupiditate quod alias voluptates enim ipsum, unde iste quo dicta illo excepturi.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempore quae soluta fugit aliquam minima autem quibusdam cumque, maxime vero labore optio. Magni, natus corrupti. Suscipit quis sint odit perferendis!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis odit tenetur fugit debitis iste vitae ad ducimus similique repudiandae libero eius praesentium quaerat facilis ut dicta veritatis minima, pariatur totam.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id officiis magnam fugiat modi, a nulla perferendis temporibus veniam. Nulla non minima dolorum, et nisi dolorem vel commodi consequatur corporis veniam.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi tenetur nisi molestiae atque facere quo alias sequi nobis laboriosam deserunt voluptatibus quia voluptate dicta, at officia! Quam ipsam laudantium aspernatur!
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. A perferendis doloremque unde expedita commodi officia, explicabo nihil iusto reiciendis vero! Omnis doloremque similique velit repellendus sequi tenetur, est ab laudantium.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, rem sit, esse beatae velit aut ipsa et provident quae quas fugit quisquam, asperiores facere labore ipsum laborum tempora consequatur porro.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cumque corporis hic eveniet officiis magni tempore facere obcaecati doloribus voluptatem suscipit, rerum dignissimos. Numquam eaque dolores quidem sed tempore accusamus?
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum obcaecati, ratione laboriosam ea ipsam at, nisi asperiores animi voluptate atque incidunt tempore, quia corrupti voluptas recusandae blanditiis. Qui, laboriosam fugit!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed soluta vitae. Atque et voluptate obcaecati officia iste, nostrum animi adipisci explicabo, nobis labore molestiae similique, dolorum vel aliquid nihil.
</section>

<section>
    <section class="boxInferiorDesign row" style="margin: 0px !important;">
        <div class="codigoGenerado col s9">Vero, ea obcaecati voluptatem sit esse modi! Non repellat consequuntur placeat iusto qui commodi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis totam accusantium reiciendis sit nam perspiciatis maxime tempora porro, quo odit excepturi eveniet nostrum nemo esse ab nesciunt cum tenetur!</div>
        <div class="botonesCodigo col s3">
            <div class="buttonActionCode primeroAction"><div><i class="material-icons">save</i></div></div>
            <div class="containerButtonsActionCode">
                <div class="buttonActionCode waves-effect modal-trigger" href="#modal1"><i class="material-icons">play_arrow</i></div>
                <div class="buttonActionCode waves-effect"><i class="material-icons">content_copy</i></div>
            </div>
        </div>
    </section>
    <section class="tabsConCards">
        <div class="card" style="margin: 0px !important;">
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test4">Variables</a></li>
                    <li class="tab"><a href="#test5">Operadores</a></li>
                    <li class="tab"><a href="#test6">Control</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test4">
                    <?php
                        include 'componentesDragAndDrop/darValor.php';
                    ?>
                </div>
                <div id="test5">Elementos 2</div>
                <div id="test6">Elementos 3</div>
            </div>
        </div>
    </section>
</section>
          

<?php
include './componentesInterfaz/home_compilador.php';
include './componentesInterfaz/A_footerData.php';
?>