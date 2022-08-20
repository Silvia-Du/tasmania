<template>
  <header>

    <div class="container-fluid">
        <div class="row top py-3 px-md-5">
            <div class="col-4 d-md-none">hamburger</div>
            <div class="col-4 col-md-6 pl-lg-4">
                <router-link :to="{name: 'home'}">
                    <img src="../../../../public/img/logo-header.png" alt="logo" class="ml-md-5">
                </router-link>
            </div>

            <div class="col-4 col-md-6 pr-md-5 justify-content-end d-flex">
                <ul class="d-flex align-items-center mb-0">

                        <li class="d-none d-lg-block"><a href="#">Stores</a></li>
                        <li class="d-none d-lg-block"><a href="#">Events</a></li>
                        <li class="d-none d-lg-block"><a href="#">About</a></li>
                        <li class="d-none d-lg-block mr-4"><a href="#">Blog</a></li>

                </ul>
                <div class="icon-box d-flex align-items-center pr-md-5">

                    <a class="d-none d-md-block" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a class="d-none d-md-block" href="#"><i class="fa-solid fa-heart"></i></a>
                    <a href="#"><i class="fa-solid fa-user"></i></a>

                </div>
            </div>


        </div>
        <div class="row bottom justify-content-center py-3 d-none d-xl-flex">
            <ul class="d-flex mb-0 pt-1 ">
                <li><router-link :to="{name: 'shop'}">Shop all</router-link></li>
                <li><a href="#">food</a></li>
                <li><a href="#">alcohol</a></li>
                <li><a href="#">art</a></li>
                <li><a href="#">jewellery</a></li>
                <li><a href="#">personal care</a></li>
                <li><a href="#">clothing</a></li>
                <li><a href="#">children</a></li>
                <li><a href="#">home</a></li>
                <li><a href="#">service</a></li>
            </ul>
        </div>

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
    ul{
        list-style: none;
    }
    li a,
    .icon-box a,
    .row.bottom a{
        color: #2d282c;
        text-transform: uppercase;
        font-weight: 500;
        &:hover{
            text-decoration: none;
        }
    }

    //row top
    .row.top{
        border-bottom: 1px solid #e5ccae;
        img{
            width: 185px;

        }
        li{
            a{
                margin-right: 35px;
                font-size: 0.8rem;
                &:hover{
                    color: #1D5175;
                }
            }
        }


        .icon-box{
            a{
                margin-left: 15px;
                font-size: 0.85rem;
                &:hover{
                    color: #1D5175;
                }

            }

        }
    }

    //row bottom
    .row.bottom{
        li{
            a{
                margin: 0 1px;
                padding: 12px 50px;
                font-size: 0.85rem;
                &:hover{
                    background-color: #e5ccae;
                }
                &.active{
                background-color: #e5ccae;
                }
            }
        }
    }
}


</style>
