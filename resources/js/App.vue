<template>
  <div>
    <HeaderComp />
    <main>
        <!-- qui si innestano tutte le pagine -->
        <router-view></router-view>

    </main>
    <FooterComp />
  </div>
</template>

<script>

import HeaderComp from './components/partials/HeaderComp';
import FooterComp from './components/partials/FooterComp';


export default {
    name: 'App',

    components:{
        HeaderComp,
        FooterComp
    }
}
</script>

<style>

</style>
