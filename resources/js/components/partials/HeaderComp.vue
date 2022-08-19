<template>
  <header>

    <div class="container-fluid px-md-5">
        <div class="row top debug py-3">
            <div class="col-4 d-md-none debug">hamburger</div>
            <div class="col-4 col-md-6 debug pl-md-5">
                <img src="../../../../public/img/logo-header.png" alt="logo" class="ml-md-5">
            </div>
            <div class="col-4 col-md-6 debug pr-md-5 justify-content-end d-flex">
                <ul class="d-flex align-items-center debug mb-0">

                        <li class="d-none d-md-block"><a href="#">Stores</a></li>
                        <li class="d-none d-md-block"><a href="#">Events</a></li>
                        <li class="d-none d-md-block"><a href="#">About</a></li>
                        <li class="d-none d-md-block mr-4"><a href="#">Blog</a></li>
                </ul>
                <div class="icon-box d-flex align-items-center">

                    <a class="d-none d-md-block" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a class="d-none d-md-block" href="#"><i class="fa-solid fa-heart"></i></a>
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>


        </div>
        <div class="row bottom debug"></div>

    </div>

  </header>
</template>

<script>


export default {
    name: 'HeaderComp'
}
</script>

<style lang="scss" scoped>

header{
    border-bottom: 1px solid gold;
    .col-md-6{
        img{
            width: 190px;
            // margin-left: 50px;

        }
    }

    li{
        list-style: none;
         a{
            color: black;
            text-transform: uppercase;
            margin-right: 35px;
            font-size: 0.9rem;
        }
    }

    .icon-box{
        a{
            color: black;
            text-transform: uppercase;
            margin-left: 15px;
            font-size: 0.85rem;
        }

    }
}


</style>
