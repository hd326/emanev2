<template>
<div></div>
    <div>
        <div class="icon">
            <div class="hamburger"></div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                seen: true
            }
        }
    }

</script>

<style>
    #icon {
        width: 50px;
        height: 50px;
        cursor: pointer;
        background: #ff0000;
        display: none;
        margin-bottom: -50px;
        position: relative;
        z-index: 15;
    }

    .hamburger {
        width: 30px;
        height: 5px;
        background: #fff;
        position: absolute;
        top: 15%;
        right: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
        display: none;
        z-index: 15;
    }

    .hamburger:before,
    .hamburger:after {
        content: '';
        position: absolute;
        width: 30px;
        height: 5px;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
        transition: .5s;
        z-index: 15;
    }

    .hamburger:before {
        top: -10px;
    }

    .hamburger:after {
        top: 10px;
    }

</style>
