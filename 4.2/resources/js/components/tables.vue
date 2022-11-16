<template>
    <nav id="nav">
        <a href="/html/"><img src="../../img/user.png"></a> 
        <a href="/css/">Tables</a> 
        <a href="/js/">Menu</a> 
        <a href="/python/">Log out</a>
    </nav>
    <div id="myImage">
        <a href="#" id="nm1"><span>1</span></a>
        <a href="#" id="nm2"><span>2</span></a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
    
</script>