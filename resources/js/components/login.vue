<template>
    <div id="bgImg"></div>
    <div id="loginForm">
        <div id="content">
            <img src="../../img/icon.png">
            <div id="text">Cherry Blossom Diner</div>
            <form action="#">
                <div id="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required>
                    <label>User Id</label>
                </div>
                <div id="field">
                    <span class="fa fa-lock"></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <button>Log in</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
