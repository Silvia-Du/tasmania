<template>
  <div>
    <HeaderComp />
    <h1>Home</h1>
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
