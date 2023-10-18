<template>
    <main>
        <div class="header">
            <!-- <slot name="header"></slot> -->
            <Header></Header>
        </div>
        <div class="container">
            <slot name="container"></slot>
        </div>
        <div class="footer">
            <slot name="footer"></slot>
        </div>
    </main>
</template>

<script>
import Header from './Header.vue';

export default {
    name: "BaseLayout",
    components: {
        Header,
    },
    data(){
        return {}
    }
}
</script>

<style scoped>
.container {
    background-color: lightcoral;
    padding: 0 100px;
}
</style>