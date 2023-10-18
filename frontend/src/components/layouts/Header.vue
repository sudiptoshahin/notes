<template>
    <div class="header">
        <font-awesome-icon :icon="['fab', 'twitter']" class="icon alt" />
        <i class="fab-solid fab-pen-nib"></i>
        <i class="fab-solid fab-pen-nib"></i>
        </font-awesome-icon>
        <div class="title">Notes</div>
        <div class="search">search-box</div>
    </div>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
export default {
    name: "Header",
    components: {
        'font-awesome-icon': FontAwesomeIcon,
    },
    data() {
        return {}
    }
}

</script>

<style scoped>
.header {
    height: 80px;
    background-color: lightblue;
}
</style>