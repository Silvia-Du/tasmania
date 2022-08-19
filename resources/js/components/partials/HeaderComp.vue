<template>
  <header>

    <div class="container-fluid px-md-5">
        <div class="row top debug py-3">
            <div class="col-4 d-md-none debug">hamburger</div>
            <div class="col-4 col-md-6 debug pl-md-5">
                <img src="../../../../public/img/logo-header.png" alt="logo" class="ml-md-5">
            </div>
            <div class="col-4 col-md-6 debug pr-md-5 justify-content-end d-flex">
                <ul class="d-flex debug">
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                </ul>
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

.col-md-6{
    img{
        width: 190px;
        // margin-left: 50px;

    }
}

li{
    list-style: none;
    margin-right: 10px;
    a{
        color: black;
        text-transform: uppercase;
    }
}


</style>
