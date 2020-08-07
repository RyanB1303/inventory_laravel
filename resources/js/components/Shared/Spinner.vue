<template>
    <div class="overlay" v-if="show">
        <fulfilling-bouncing-circle-spinner
            :animation-duration="4000"
            :size="60"
            color="#ff1d5e"
        />
    </div>
</template>

<script>
import { FulfillingBouncingCircleSpinner } from "epic-spinners";

export default {
    props: ["show"],
    components: {
        FulfillingBouncingCircleSpinner
    },
    data() {
        return {};
    }
};
</script>

<style scoped>
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #16244759;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 200;
}
</style>
